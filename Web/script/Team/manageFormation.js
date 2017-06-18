$(document).ready(function(){

    $('#accept').on('click', function(event) {
        $.get('index.php?' +
            'controller=employee&' +
            'action=validateEmployeeFormationChoice&' +
            'formation_id=' + $('#formation_id span').html() +
            '&id=' + getUrlVars()['id']
            , function(data, status) {
            if (status === 'success') {
                $.each( data, function( key, value ) {
                    if (value === true) {
                        window.location.href = 'index.php?controller=team&action=accept&id=' + getUrlVars()['id'] + '&formation=' + $('#formation_id span').html();
                    } else {
                        alert("\nPas assez de jours et/ou de credits.");
                    }
                });
            }
        });
        event.preventDefault();
    })
});