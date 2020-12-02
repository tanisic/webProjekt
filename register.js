$(document).ready(function () {
    $("#btn").click(function () {

        // using serialize function of jQuery to get all values of form
        var serializedData = $("#reg-form").serialize();

        // Variable to hold request
        var request;
        // Fire off the request to process_registration_form.php
        request = $.ajax({
            url: "signup.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (jqXHR, textStatus, response) {
            // you will get response from your php page (what you echo or print)
            // show successfully for submit message
            //$("#result").html(response);
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            // show error

            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        return false;

    });
});

function EnterPassword() {
            $("#NewPassword").keyup(function () {
            var regex1 = new Array();
            var regex2 = new Array();
            var regex3 = new Array();
            var regex4 = new Array();
                regex1.push("[A-Z]"); //Uppercase Alphabet.
                regex2.push("[a-z]"); //Lowercase Alphabet.
                regex3.push("[0-9]"); //Digit.
                regex4.push("[!@@#$%^&*]"); //Special Character.
     if ($(this).val().length>6) {
      $("#Length").removeClass("glyphicon glyphicon-remove").addClass("glyphicon glyphicon-ok");
    }

    for (var i = 0; i < regex1.length; i++) {
    if (new RegExp(regex1[i]).test($(this).val())) {
     $("#UpperCase").removeClass("glyphicon glyphicon-remove").addClass("glyphicon glyphicon-ok");
     }
     }
     for (var i = 0; i < regex2.length; i++) {
     if (new RegExp(regex2[i]).test($(this).val())) {
      $("#LowerCase").removeClass("glyphicon glyphicon-remove").addClass("glyphicon glyphicon-ok");
     }
     }
    for (var i = 0; i < regex3.length; i++) {
    if (new RegExp(regex3[i]).test($(this).val())) {
     $("#Numbers").removeClass("glyphicon glyphicon-remove").addClass("glyphicon glyphicon-ok");
     }
     }
     for (var i = 0; i < regex4.length; i++) {
     if (new RegExp(regex4[i]).test($(this).val())) {
     $("#Symbols").removeClass("glyphicon glyphicon-remove").addClass("glyphicon glyphicon-ok");
     }
      }
     });
     }

function DeletePassword() {
 $("#NewPassword").keyup(function () {
var regex1 = new Array();
var regex2 = new Array();
 var regex3 = new Array();
 var regex4 = new Array();
                regex1.push("[A-Z]"); //Uppercase Alphabet.
                regex2.push("[a-z]"); //Lowercase Alphabet.
                regex3.push("[0-9]"); //Digit.
                regex4.push("[!@@#$%^&*]"); //Special Character.
     var thisVal =$(this).val();

  if ($(this).val().length<6) {
 $("#Length").removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");
   }

for (var i = 0; i < regex1.length; i++) {
 if (new RegExp(regex1[i]).test(!thisVal)) {
  $("#UpperCase").removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");
   }
    }
 for (var i = 0; i < regex2.length; i++) {
  if (new RegExp(regex2[i]).test(!thisVal)) {
  $("#LowerCase").removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");
   }
  }
for (var i = 0; i < regex3.length; i++) {
  if (new RegExp(regex3[i]).test(!thisVal)) {
 $("#Numbers").removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");
    }
 }
  for (var i = 0; i < regex4.length; i++) {
 if (new RegExp(regex4[i]).test(!thisVal)) {
   $("#Symbols").removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");
    }
 }
  });
  }
