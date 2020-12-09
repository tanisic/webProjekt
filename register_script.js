$(document).ready(function () {
    $("form[name='registration'").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3
            },
            last_name: {
                required: true,
                minlength: 3
            },
            telephone: {
                required: true,
                number: true,
                min: 9
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8

            },
            confirm: {
                equalTo: "#password",
                minlength:8
            }
        },
        messages: {
            first_name: {
                minlength: "Name should be at least 3 characters"
            },
            last_name: {
                minlength: "Name should be at least 3 characters"
            },
            telephone: {
                required: "Please enter your age",
                number: "Please enter your age as a numerical value",
                min: "You must be at least 18 years old"
            },
            email: {
                email: "The email should be in the format: abc@domain.tld"
            },
            password: {
                required: "People with age over 50 have to enter their weight",
                number: "Please enter your weight as a numerical value"
            },
            confirm:{
                equalTo: "Password does not match"
            },
            submitHandler: function(form){
                form.submit();
            }
        }
    });
});