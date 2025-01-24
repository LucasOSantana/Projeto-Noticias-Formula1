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
                    `<option value="${circuit.circuitId}">${circuit.circuitName} - ${circuit.Location.locality} </option>`
                );
            });
            
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar as corridas:', error);
            alert('Não foi possível carregar as corridas. Tente novamente.');
        }
    });
}