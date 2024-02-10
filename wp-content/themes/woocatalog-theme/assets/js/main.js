(function ($) {
    "use strict";

    /*--
        Commons Variables
    -----------------------------------*/
    var $window = $(window),
        $body = $('body');

    jQuery(document).ready(function () {
        var baseurl = jQuery('#baseURL').val();

        /*--
            Contact form
        -----------------------------------*/
        jQuery( "#main-contact-form" ).validate( {
          rules: {
            email: {
              required: true,
              email: true
            },
            name: {
              required: true
            },
            phone: {
              required: true
            },
            message: {
              required: true
            }         
          },
          messages: {
            email: {
              required: "Campo obligatorio",
              email: "Correo electrónico inválido"
            },
            name: {
              required: "Campo obligatorio"
            },
            phone: {
              required: "Campo obligatorio"
            },
            message: {
              required: "Campo obligatorio"
            }
          },
          errorElement: "div",
          errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "text-center" );
            // Add the `alert alert-danger mb-0` class to the error element
            error.css( "color", "red" );

            error.insertAfter( element.parent( "div" ) );
            
          },
          highlight: function ( element, errorClass, validClass ) {
            jQuery( element ).addClass( "alert-danger" ).removeClass( "alert-success" );
          },
          unhighlight: function (element, errorClass, validClass) {
            jQuery( element ).addClass( "alert-success" ).removeClass( "has-error alert alert-danger" );
          },
          submitHandler: function(form) {
            var formData = jQuery('#main-contact-form').serialize();
            console.log(formData);
            // Submit the form using AJAX.
            console.log("comienza a mandar email");
            jQuery.ajax({
                type: 'POST',
                url: baseurl + 'inc/main-contact-form.php',
                data: formData,
                dataType: "html",
                beforeSend:function() {
                  jQuery('#main-contact-form button').html('<div class="sending"><i class="fas fa-circle-notch fa-spin"></i>&nbsp;Envíando...</div>');
                  jQuery('#main-contact-form button').attr('disabled', 'disabled').addClass('disabled');
                }
            })
            .done(function(response) {
                jQuery('#main-contact-form button').html('<div class="sending"><i class="fas fa-check"></i>&nbsp;Mensaje envíado</div>');
                alert("Su mensaje ha sido enviado con éxito. En breve estaremos en contacto con usted.");
            })
            .fail(function(data) {
              alert("Ocurrió un error, contacta al administrador");
            });
          }
      } );
    });

})(jQuery);