$(document).ready(function() {
    $('.select2').select2();
});


function loadRaces(year){
    $.ajax({
        url: '/seasons/filter',
        method: 'POST',
        data: {
            year: year,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {

            $('#race').empty();

            $('#race').append('<option value="">Selecione uma corrida</option>');

            response[0].forEach(function (circuit) {
                $('#race').append(
                    `<option value="${circuit.round}">${circuit.raceName} </option>`
                );
            });
            
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar as corridas:', error);
            alert('Não foi possível carregar as corridas. Tente novamente.');
        }
    });
}


function loadData(){

    var year = $('#year').val();
    var race = $('#race').val();

    $.ajax({
        url: '/seasons/getdata',
        method: 'POST',
        data: {
            year: year,
            race: race,
            _token: $('meta[name="csrf-token"]').attr('content')
        }, 
        beforeSend: function () {
            // Exibe o popup "Carregando dados"
            Swal.fire({
                title: 'Carregando dados',
                text: 'Por favor, aguarde...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function (response) {
            
            response = response[0];
            var container = $('.data-container');
            container.empty();

            console.log(response);
    
            
            if (!response || response.length === 0) {
                container.append('<p>Nenhum dado encontrado.</p>');
                return;
            }
            let html = '<div class="row data-card">';

            function generateHtml(item, additionalClass = '', ClassDriver = 'season-driver', ClassTeam = 'season-team', ClassPoints = 'season-points', ClassWins = 'season-wins') {
                return `
                    <div class="col-1 text-center align-center ${additionalClass}">
                        ${item.position}º
                    </div>
                    <div class="col-8 ">
                        <p class="${ClassDriver}">${item.Driver.givenName} ${item.Driver.familyName}</p>
                        <p class="${ClassTeam}">${item.Constructors[0].name}</p>
                    </div>
                    <div class="col-3">
                        <p class="${ClassPoints}">${item.points} pontos </p>
                        <p class="${ClassWins}">${item.wins} vitórias</p>
                    </div>
                    <hr>
                `;
            }

            response.forEach(function(item) {
                
                if(item.position == 1) {
                    html += generateHtml(item, 'season-first', 'season-driver-name-first', 'season-team-name-first', 'season-points-first', 'season-wins-first');
                } else if(item.position == 2) {
                    html += generateHtml(item, 'season-second', 'season-driver-name-second', 'season-team-name-second', 'season-points-second', 'season-wins-second');
                } else if(item.position == 3) {
                    html += generateHtml(item, 'season-third', 'season-driver-name-third', 'season-team-name-third', 'season-points-third', 'season-wins-third');
                } else {
                    html += generateHtml(item);
                }

            });
            html += '</div>';

            // Adiciona todo o HTML de uma vez ao container
            container.append(html);
            
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar as corridas:', error);
            alert('Não foi possível carregar as corridas. Tente novamente.');
        },
        complete: function () {
            // Fecha o popup "Carregando dados"
            Swal.close();
        }
    });
}