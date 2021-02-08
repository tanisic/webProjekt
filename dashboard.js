$(document).ready(function () {
    $("#dash-form").validate({
        rules: {
            telephone: {
                required: true,
                number: true,
                min: 6
            },
            email: {
                required: true,
                email: true
            },
            confirm: {
                required: true,
                minlength:8
            }
        },
        messages: {
            
            telephone: {
                required: "Potrebno je unesti broj telefona",
                number: "Broj mora biti numerička vrijednost",
                min: "Broj mora imati minimalno 9 znamenki"
            },
            email: {
                required: "Obavezan unos e-maila",
                email: "E-mail mora biti formata abc@abc.hr"
            },
            confirm:{
                required: "Lozinka je obavezna",
                minlength: "Lozinka mora sadržavati barem 8 znakova"
            },
            submitHandler: function(form){
                form.submit();
            }
        }
    });
});