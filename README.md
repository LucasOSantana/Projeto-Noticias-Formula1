# 🏎️ Formula 1 News Project

A web application built to display the latest Formula 1 news in real time with a clean and responsive interface. Perfect for F1 fans who want quick access to curated updates from reliable sources.

## 📌 Project Goal

This project aims to centralize and present current Formula 1 news using modern web development practices. It also serves as a study in API integration, PHP development, and performance optimization.

## 🚀 Technologies Used

- **Laravel** – Main application framework
- **Bootstrap 5** – Responsive layout and styling
- **cURL** – HTTP requests to external APIs
- **JavaScript / jQuery** – Front-end interactivity

## 🧠 Key Features

- Fetches and displays the latest F1 news via a third-party API (e.g. [NewsAPI.org](https://newsapi.org))
- Shows article cards with images, headlines, descriptions, and links
- Shows standings data up to a specific race when a filter is applied.
- Shows team most famous circuit and driver info 
- Simple cache mechanism to reduce redundant API requests
- Clean and mobile-friendly UI

## 🔧 Getting Started

1. Clone the repository;
2. Navigate to the project directory:
       <b>cd Projeto-Noticias-Formula1</b>
3. Install dependencies via Composer:
       <b>composer install</b>
4. Copy the environment file and generate the app key:
       <b>cp env .env</b>
       <b>php spark key:generate</b>
5. Add your News API key in the .env file:
       <b>NEWSAPI_KEY=your_api_key_here</b>
6. Start the local development server:
       <b>php spark serve</b>
7. Open your browser and go to:
       <b>http://localhost:8080</b>
       
## 💡 Potential Improvements

- Pagination and lazy loading of news
- Filters by team, driver, or category
- Favorites/bookmarks system
- Light/dark mode toggle
