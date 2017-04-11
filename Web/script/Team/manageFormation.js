$(document).ready(function(){

    $('#accept').on('click', function(event) {
        if ($('#formation'))
        $.get('index.php?controller=employee&action=hasEnoughDays&days=' + $('#formation_days span').html() + '&id=' + getUrlVars()['id'], function(data, status) {
            if (status === 'success') {
                $.each( data, function( key, value ) {
                    if (value === true) {
                        window.location.href = 'index.php?controller=team&action=accept&id=' + getUrlVars()['id'] + '&formation=' + $('#formation_id span').html();
                    } else {
                        alert("\nVous avez plus de 15 jours de formations pour l'année en cours.");
                    }
                });
            }
        });
        event.preventDefault();
    })
});