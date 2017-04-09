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
                        alert("\nNombre de jours de formation insuffisant.");
                    }
                });
            }
        });
        event.preventDefault();
    })
});