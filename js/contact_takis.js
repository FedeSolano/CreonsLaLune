/**
 * Created by Stagiaire on 6/06/2016.
 */
/*
 Jquery Validation using jqBootstrapValidation
 example is taken from jqBootstrapValidation docs 
 */
$(function() {

    $("#contactForm1 input,#contactForm1 textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name1").val();
            var phone = $("input#phone1").val();
            var email = $("input#email1").val();
            var message = $("textarea#message1").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./bin/contact_takis.php",
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
                    $('#success1').html("<div class='alert alert-success'>");
                    $('#success1 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success1 > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success1 > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm1').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success1').html("<div class='alert alert-danger'>");
                    $('#success1 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success1 > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success1 > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm1').trigger("reset");
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
$('#name1').focus(function() {
    $('#success1').html('');
});
