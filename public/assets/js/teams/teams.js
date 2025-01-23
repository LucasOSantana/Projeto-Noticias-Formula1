
$(document).ready(function() {
    $('#leftSideNav').addClass('bg-red');
});

const barsContainers = document.querySelectorAll('.bars-container');

const barConfig = [
    { color: 'black', top: '0%', left: '-32%', width: '80%', height: '1%' },
    { color: 'teal', top: '0%', left: '-28%', width: '80%', height: '4%' },
    { color: 'black', top: '0%', left: '-20%', width: '80%', height: '1%' },
    { color: 'teal', top: '10%', left: '14%', width: '80%', height: '1%' },
    { color: 'black', top: '0%', left: '-12%', width: '80%', height: '1%' },
    { color: 'teal', top: '7%', left: '-15%', width: '80%', height: '3%' },
    { color: 'black', top: '5%', left: '-5%', width: '80%', height: '1%' },
    { color: 'teal', top: '10%', left: '0%', width: '80%', height: '5%' },
    { color: 'black', top: '15%', left: '3%', width: '80%', height: '1%' },
    { color: 'black', top: '10%', left: '14%', width: '80%', height: '1%' },
    { color: 'teal', top: '10%', left: '14%', width: '80%', height: '1%' },
    { color: 'black', top: '5%', left: '40%', width: '80%', height: '1%' },
    { color: 'black', top: '5%', left: '41%', width: '60%', height: '1%' },
    { color: 'black', top: '15%', left: '44%', width: '70%', height: '.5%' },
    { color: 'black', top: '10%', left: '45%', width: '60%', height: '1%' },
    { color: 'black', top: '15%', left: '50%', width: '70%', height: '.75%' },
    { color: 'black', top: '15%', left: '62%', width: '60%', height: '0.9%' },
    { color: 'black', top: '20%', left: '70%', width: '60%', height: '1%' },
    { color: 'black', top: '23%', left: '71%', width: '50%', height: '.8%' },
];

// Cores específicas para cada card
const colorConfigs = [
    ['black', '#2173B8', '#fd4bc7'],
    ['black', '#037A68', 'black'],
    ['#FFF200', '#EF1A2D', 'black'],
    ['#dbdbdb', '#E6002B', 'black'],
    ['black', '#FF8000', 'black'],
    ['black', '#00A19B', 'black'],
    ['black', '#223971', '#CC1E4A'],
    ['#CC1E4A', '#223971', 'black'],
    ['black', '#52E252', 'black'],
    ['#00A0DE', '#00A0DE', 'black'],
    
];

// Gera as barras para todos os cards
barsContainers.forEach((barsContainer, index) => {
    const currentColorConfig = colorConfigs[index % colorConfigs.length]; // Divide cor do card pelo index, para pegar a cor dentro do array

    barConfig.forEach((config, barIndex) => {
        const bar = document.createElement('div');
        
        const color = currentColorConfig[barIndex % currentColorConfig.length];
        bar.classList.add('bar');
        bar.style.backgroundColor = color;
        bar.style.top = config.top;
        bar.style.left = config.left;
        bar.style.width = config.width;
        bar.style.height = config.height;
        
        barsContainer.appendChild(bar);
    });
});

function alterarPagina(){
    window.location.href = '/equipes/1';
}