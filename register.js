$(document).ready(function () {
    $("#reg-form").validate({
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
                required: true,
                equalTo: "#password",
                minlength:8
            }
        },
        messages: {
            first_name: {
                required: "Obavezan unos imena",
                minlength: "Ime mora biti barem 3 znaka"
            },
            last_name: {
                required: "Obavezan unos prezimena",
                minlength: "Prezime mora biti barem 3 znaka"
            },
            telephone: {
                required: "Potrebno je unesti broj telefona",
                number: "Broj mora biti numerička vrijednost",
                min: "Broj mora imati minimalno 9 znamenki"
            },
            email: {
                required: "Obavezan unos e-maila",
                email: "E-mail mora biti formata abc@abc.hr"
            },
            password: {
                required: "Lozinka je obavezna",
                minlength: "Lozinka mora sadržavati barem 8 znakova"
            },
            confirm:{
                required: "Lozinka je obavezna",
                equalTo: "Lozinka se ne podudara!",
                minlength: "Lozinka mora sadržavati barem 8 znakova"
            },
            submitHandler: function(form){
                form.submit();
            }
        }
    });
});