
//SMOOTH SCROLL FUNKCIJE
$(document).ready(function () {
    $(".galerija-button").click(function () {
        $("body,html").animate({
                scrollTop: $("#galerija").offset().top
            },
            0 //speed
        );
    });
});

$(document).ready(function () {
    $(".onama-button").click(function () {
        $("body,html").animate({
                scrollTop: $("#o-nama").offset().top
            },
            0 //speed
        );
    });
});


$(document).ready(function () {
    $(".pocetna-button").click(function () {
        $("body,html").animate({
                scrollTop: $("header").offset().top
            },
            0 //speed
        );
    });
});
//galerija
$(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });

