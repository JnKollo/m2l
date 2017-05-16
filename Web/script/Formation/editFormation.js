$(document).ready(function(){
    $('#back').on('click', function(){
        window.history.back();
        return false;
    });

    $('#subscribe').on('click', function(event) {
        $.get('index.php?controller=employee&action=hasEnoughDays&days=' + $('#formation_days span').html(), function(data, status) {
            if (status === 'success') {
                $.each( data, function( key, value ) {
                    if (value === true) {
                        window.location.href = 'index.php?controller=employee&action=addFormation&id=' + getUrlVars()['id'];
                    } else {
                        console.log(value);
                        alert("\nVous avez plus de 15 jours de formations pour l'année en cours.");
                    }
                });
            }
        });
        event.preventDefault();
    })
});