/**
 * Created by Stagiaire on 6/06/2016.
 */
/*
 Jquery Validation using jqBootstrapValidation
 example is taken from jqBootstrapValidation docs 
 */
$(function() {

    $("#contactForm2 input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name2").val();
            var phone = $("input#phone2").val();
            var email = $("input#email2").val();
            var message = $("textarea#message2").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./bin/contact_anne.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success2').html("<div class='alert alert-success'>");
                    $('#success2 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success2 > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success2 > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm2').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success2').html("<div class='alert alert-danger'>");
                    $('#success2 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success2 > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success2 > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm2').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name2').focus(function() {
    $('#success2').html('');
});
