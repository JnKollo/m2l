$(document).ready(function() {
    $("#loginForm").submit(function( event ) {
        $.post("index.php?controller=security&action=loginCheck",
        {
            login: $('input[name=login]').val(),
            password: $('input[name=password]').val(),
            submit: $('input[name=submit]').val()
        },
        function(data, status){
            $.each( data, function( key, value ) {
                alert('cle :' + key + '\nval :' + value);
            });
            alert("Data: " + typeof data + "\nStatus: " + status);
        });
        event.preventDefault();
    });
});