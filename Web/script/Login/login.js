$(document).ready(function() {
    $("#loginForm").submit(function( event ) {
        $.post("index.php?controller=security&action=loginCheck",
        {
            email: $('input[name=email]').val(),
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
                        if ($('.alert').length === 0) {
                            var alert = $('<div class="alert alert-danger"></div>').text(value);
                            $("#loginForm").prepend(alert);

                            $('.alert').on('click', function () {
                                $('.alert').remove();
                            });

                            $("#loginForm").on('submit', function(e) {
                                e.preventDefault();
                                $('.alert').remove();
                            });
                        }
                        $('input[name=password]').val(function() {
                            return this.defaultValue;
                        });
                    }
                });
            }
        });
        event.preventDefault();
    });
});