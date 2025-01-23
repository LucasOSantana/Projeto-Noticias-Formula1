$(document).ready(function () {
    const currentPath = window.location.pathname; // Obtém o caminho da URL atual

    $(".navbar-nav .nav-link").each(function () {
      const $this = $(this);
      if ($this.attr("href") === currentPath) {
        $this.addClass("active").attr("aria-current", "page"); // Adiciona a classe 'active' e o atributo
      } else {
        $this.removeClass("active").removeAttr("aria-current"); // Remove se não for a aba atual
      }
    });
  });