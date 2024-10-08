FROM php:8.2-apache

# Config php.ini
ENV PHP_MEMORY_LIMIT 2048M
RUN echo "memory_limit=${PHP_MEMORY_LIMIT}" > /usr/local/etc/php/conf.d/memory-limit.ini

# Copy application files to the container
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Install dependencies
RUN apt-get update \
    && apt-get install -y \
    python3 \
    python3-venv \ 
    python3-pip \
    curl \
    git \
    unzip \
    libpq-dev \
    libicu-dev \
    libzip-dev \
    gnupg \
    zlib1g-dev \
    g++ \
    libpng-dev \
    libonig-dev \
    unixodbc-dev \
    libxml2-dev \
    libldap2-dev \
    openssl \
    && curl -s https://getcomposer.org/installer > composer_installer.php \
    && php composer_installer.php \
    && mv composer.phar /usr/local/bin/composer \
    && rm composer_installer.php

# Copy SSL certificates
COPY .apache/all.outserv.com.br.crt /etc/ssl/certs/
COPY .apache/all.outserv.com.br.key /etc/ssl/private/

# Install SQL Server Drivers & Tools
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN apt-get update \
    && ACCEPT_EULA=Y apt-get install -y msodbcsql18 \
    && ACCEPT_EULA=Y apt-get install -y mssql-tools18 \
    && echo 'export PATH="$PATH:/opt/mssql-tools18/bin"' >> ~/.bashrc \
    source ~/.bashrc

# Enable extensions
RUN docker-php-ext-install pdo intl gd mbstring zip soap ldap bcmath \
    && pecl install sqlsrv pdo_sqlsrv redis \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv redis

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install depedences laravel
WORKDIR /var/www/html
RUN composer update
RUN composer install

# Command laravel
RUN php artisan key:generate

# Enable Apache modules and set document root
RUN a2enmod rewrite ssl
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy subdomain configuration
COPY .apache/produto.outserv.com.br.conf /etc/apache2/sites-available/
RUN a2ensite produto.outserv.com.br

# Optimize PHP configuration
RUN echo "opcache.enable_cli=1" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini
RUN echo "realpath_cache_size=4096K" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

# Expose port 80 and 443 in the container for web traffic
EXPOSE 80
EXPOSE 443

# Restart Apache to apply changes
RUN service apache2 restart