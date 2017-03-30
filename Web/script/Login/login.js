$(document).ready(function() {
    $("#loginForm").submit(function( event ) {
        $.post("index.php?controller=security&action=loginCheck",
        {
            login: $('input[name=login]').val(),
            password: $('input[name=password]').val(),
            submit: $('input[name=submit]').val()
        },
        function(data, status){
            if (status === 'success') {
                $.each( data, function( key, value ) {
                    if (key === 'redirect') {
                        // data.redirect contains the string URL to redirect to
                        window.location.href = value;
                    } else {
                        // data.form contains the HTML for the replacement form
                        var message = $('<div class="alert alert-danger"></div>').text("Login ou mot de passe incorrect.");
                        $("#loginForm").prepend(message);
                        $('#loginForm').trigger("reset");

                        $('.alert').on('click', function(e) {
                            e.preventDefault();
                            $(this).remove();
                        });
                    }
                });
            }
        });
        event.preventDefault();
    });
});