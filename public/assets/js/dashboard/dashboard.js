$(document).ready(function() {
    console.log('a');
    const images = [
        'assets/img/Dashboard-wpp.jpg',
        'assets/img/Dashboard-ferrari.jpg', // Adicione o caminho da nova imagem
        'assets/img/Dashboard-mercedes.jpg' // Adicione mais imagens conforme necessário
    ];
    
    let currentIndex = 0;

    function changeBackground() {
        // Fade para preto
        $('.fade-overlay').css('opacity', 1); // Torna a sobreposição preta visível

        setTimeout(function() {
            currentIndex = (currentIndex + 1) % images.length; // Cicla entre as imagens
            // Atualiza a imagem de fundo
            $('.bg-dashboard').css('background-image', `radial-gradient(circle closest-corner at 50% 45%, transparent 35%, rgb(27, 29, 35) 75%), url('${images[currentIndex]}')`);
            
            // Fade de volta
            $('.fade-overlay').css('opacity', 0); // Torna a sobreposição invisível
        }, 500); // Aguarda o fade para preto antes de trocar a imagem
    }

    setInterval(changeBackground, 5000); // Troca a imagem a cada 5 segundos (5000 ms)
});