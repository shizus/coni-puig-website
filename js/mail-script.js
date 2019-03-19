    // -------   Mail Send ajax

     $(document).ready(function() {
        var form = $('#contactForm'); // contact form
        var submit = $('.submit-btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message
         alert.removeClass('alert-danger');
         alert.removeClass('alert-success');

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'mail.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Enviando...'); // change submit button text
                },
                success: function(data) {
                    alert.addClass('alert-success');
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    alert.addClass('alert-danger');
                    alert.html('Hubo un error en el servidor, por favor comunicate por otra vía.').fadeIn(); // fade in response data
                    console.log(e)
                }
            });
        });
    });