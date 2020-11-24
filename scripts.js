
//SMOOTH SCROLL FUNKCIJE
$(document).ready(function () {
    $(".galerija-button").click(function () {
        $("body,html").animate({
                scrollTop: $("#galerija").offset().top
            },
            1000 //speed
        );
    });
});

$(document).ready(function () {
    $(".onama-button").click(function () {
        $("body,html").animate({
                scrollTop: $("#o-nama").offset().top
            },
            1000 //speed
        );
    });
});


$(document).ready(function () {
    $(".pocetna-button").click(function () {
        $("body,html").animate({
                scrollTop: $("body").offset().top
            },
            1000 //speed
        );
    });
});