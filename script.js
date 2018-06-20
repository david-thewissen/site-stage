$(document).ready(function() {
  //click sur le premier bouton avec la double fleche
  $("#button").click(function() {
    //ouverture de la première page
    $("#triangle-down, #triangle-up").addClass("usenand");
    $('content').addClass('animFade');
    $("#triangle-up, #triangle-down").delay(1000).fadeOut();
    $("#title").fadeOut(500);
    $("#title2").fadeOut(500);
    $("#button").addClass("toMenu");
    $("#button").html('<i class="fas fa-bars"></i>');
    setTimeout(function() {
      $("#button").attr("id", "menu");
    }, 1);

    //apparition Hello Spada
    setTimeout(function() {
      $("#small").addClass("roll-in-right");
      $(".roll-in-right").removeClass("hidden");
      $(".invisible").addClass("rotate-in-center");
      $(".rotate-in-center").removeClass("invisible");
    },1500);
    //apparition I'm David
    setTimeout(function() {
      $("#small2").addClass("slide-in-left");
      $(".slide-in-left").removeClass("hidden");
      $(".invisible1").addClass("rotate-in-center1");
      $(".rotate-in-center1").removeClass("invisible1");
    },2500);
    // disparition des deux messages précédents
    setTimeout(function() {
      $(".rotate-in-center").addClass("slide-out-bottom");
      $(".slide-out-bottom").removeClass("rotate-in-center");
      $(".roll-in-right").addClass("scale-out-center");
      $(".scale-out-center").removeClass("roll-in-right");
      $('.scale-out-center').removeAttr('id')
    },4000);
    setTimeout(function() {
      $(".rotate-in-center1").addClass("slide-out-top");
      $(".slide-out-top").removeClass("rotate-in-center1");
      $(".slide-in-left").addClass("scale-out-center");
      $(".scale-out-center").removeClass("slide-in-left");
      $('.scale-out-center').removeAttr('id');
    },4000);

    // apparition Spadavid
    setTimeout(function() {
      $(".hidden").addClass("focus-in-expand");
      $(".focus-in-expand").removeClass("hidden");
    },5500);

    //appartition bouton en bas (nav page suivante)
    setTimeout(function() {
      $('.button1').css("visibility", "visible");
      $(".button1").delay(3000).fadeIn(1);
    },6500);

  });



  // appartition chocolat
  $(".visible2").click(function() {
    $(".visible2").addClass("hidden3");
    $(".hidden2").addClass("focus-in-contract-bck");
    $(".focus-in-contract-bck").removeClass("hidden2");
  });


  $("#menuClose, #menuContent a").click(function() {
    $("#menu").removeClass("menuTransition");
    $("#menuContent").fadeOut(300);
    $("#menu").html('<i class="fas fa-bars"></i>');
    $("#menu.toMenu").css('transition', '.5s ease-in-out');
  });

  $('a').click(function() {
    $('html, body').delay(500).animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 1000);
    return false;
  });

});

$(document).on("click", "#menu", function() {
  $("#menu").addClass("menuTransition");
  $("#menuContent").delay(500).fadeIn(1);
  $("#menu").text(' ');
});


// $(document).ready(function(){
//    $("#add").on('click', function(){
//        alert("Formulaire envoyé");
//     });
// });




function showTooltip(e) {
  let tooltip = e.target.classList.contains("tooltip")
      ? e.target
      : e.target.querySelector(":scope .tooltip");
  tooltip.style.left =
      (e.pageX + tooltip.clientWidth + 10 < document.body.clientWidth)
          ? (e.pageX + 10 + "px")
          : (document.body.clientWidth + 5 - tooltip.clientWidth + "px");
  tooltip.style.top =
      (e.pageY + tooltip.clientHeight + 10 < document.body.clientHeight)
          ? (e.pageY + 10 + "px")
          : (document.body.clientHeight + 5 - tooltip.clientHeight + "px");
}

let tooltips = document.querySelectorAll('.couponcode');
for(let i = 0; i < tooltips.length; i++) {
  tooltips[i].addEventListener('mousemove', showTooltip);
}
