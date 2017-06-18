$(document).ready(function(){
    $('#back').on('click', function(){
        window.history.back();
        return false;
    });

    $('#subscribe').on('click', function(event) {
        $.get('index.php?' +
            'controller=employee&' +
            'action=validateEmployeeFormationChoice&' +
            'formation_id=' + $('#formation_id span').html()
            , function(data, status) {
            if (status === 'success') {
                $.each( data, function( key, value ) {
                    console.log(data);
                    if (value === true) {
                        window.location.href = 'index.php?controller=employee&action=addFormation&id=' + getUrlVars()['id'];
                    } else {
                        alert("\nPas assez de jours et/ou de credits pour la formation demandée.");
                    }
                });
            }
        });
        event.preventDefault();
    })
});