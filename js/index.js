$(document).ready(function(){

    $(".navbar").headroom({
        "offset": 205,
        "tolerance": 5,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });

});

var desktop_menu = [
  {"scroll_to": "#home-nav", "elem": $("#hero")},
  {"scroll_to": "#faq-nav", "elem": $("#faq")},
  {"scroll_to": "#mobile-nav", "elem": $("#mobile")},
  {"scroll_to": "#contact-nav", "elem": $("#contact")},
];

$(window).scroll(function() {
    var halfHeight = $(this).scrollTop() ;
    var topOffset = $("#projects").offset().top;
    var height = $("#projects").height();

    if(halfHeight >= topOffset && halfHeight < (topOffset + height)) {
      $(".navbar").css("border-color", "#BDD4DE");
    } else {
      $(".navbar").css("border-color", "transparent");
    }
});