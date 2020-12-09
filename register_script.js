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
                minlength: 9
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
                required: "Unesite ime",
                minlength: "Ime mora sadržavati barem 3 slova."
            },
            last_name: {
                required: "Unesite prezime",
                minlength: "Prezime mora sadržavati barem 3 slova."
            },
            telephone: {
                required: "Unesite valjani broj telefona",
                number: "Unesite numeričku vrijednost",
                minlength: "Broj mora sadržavati barem 9 znamenaka"
            },
            email: {
                required: "Unesite email adresu",
                email: "Email mora biti formata: primjer@primjer.hr"
            },
            password: {
                required: "Ovo polje je obavezno za unos",
                minlength: "Lozinka mora sadržavati barem 8 znakova"
            },
            confirm:{
                required: "Ponovno unesite lozinku",
                equalTo: "Lozinke se ne podudaraju",
                minlength: "Lozinka mora sadržavati barem 8 znakova"
            },
            submitHandler: function(form){
                form.submit();
            }
        }
    });
});