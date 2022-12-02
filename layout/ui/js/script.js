$(document).ready(function() {
/* ======================================================================= */
/* ------------------------ ANIMATE -- BAR ------------------------------- */
/* ======================================================================= */

function bar() {
    $('.skillbar').each(function(){
    $(this).find('.skillbar-bar').animate({
    width:$(this).attr('data-percent')
    },1000);
    });
    }

    // ***************** AUTO ANIMATE FUNCTION WHEN SCROLL *************//

    $(window).on('scroll.animate-bar resize.animate-bar', function() {
    $('.animate-bar').each( function(){
    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();
    if( bottom_of_window > bottom_of_object ){
    bar();
    $(window).off(".animate-bar");
    }
    });
    });

/* ======================================================================= */
/* --------------- ADD CLASS ACTIVE TO FIRST SLIDE ----------------------- */
/* ======================================================================= */

    $(".item:first").addClass("active");
    $("li[data-target='#main-slider']:first ").addClass("active");

/* ======================================================================= */
/* ----------------- ANIMATE COUNTER WHEN SCROLL ------------------------- */
/* ======================================================================= */

$(window).on('scroll.number', function() {
$('.number').each( function(){
var bottom_of_object = $(this).offset().top + $(this).outerHeight();
var bottom_of_window = $(window).scrollTop() + $(window).height();
if( bottom_of_window > bottom_of_object ){
$('.number').countTo();
$(window).off(".number");
}
});
});

/* ======================================================================= */
/* --------------------------- Filter Gallery ---------------------------- */
/* ======================================================================= */

$(function () {
    var filterList = {
        init: function () {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                target: '.portfolio',
                filter: '.filter'
            },
            load: {
              filter: all_classes // show app tab on first load
            }
            });
        }
    };
    // Run the show!
    filterList.init();
});

/* ======================================================================= */
/* ---------------------------- owl-carousel ----------------------------- */
/* ======================================================================= */

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:6,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

// =======================================================================//
// ------------------------------ SLIDESHOW ---------------------------
// =======================================================================//
// ************************** FIRST SLIDESHOW VIEW ***********************//
$(".slider").hide();
$(".slider:last").show();
$(".slide-show").addClass("thumbnails");
function thumbnails(){
$(".circle").each(function () {
var data = $(this).data("show");
var src = $(data).find("img").attr("src");
$(this).css("background-image", "url(" + src + ")");
});
$(".circle:last").addClass("circle-thumb-animate");
$(".circles").addClass("circles-thumb");
$(".circle").addClass("circle-thumb").removeClass("circle-default");
}
function discs(){
$(".circle:last").removeClass("circle-thumb-animate").addClass("circle-default-animate");
var slider_id = '#'+$(".slider:last").attr("id");
$(".circle").addClass("circle-default").removeClass("circle-thumb").removeClass("circle-default-animate").removeClass("circle-thumb-animate");
$(".circle[data-show='"+slider_id+"']").addClass("circle-default-animate").removeClass("circle-thumb-animate");
$(".circles").addClass("circles-default").removeClass("circles-thumb");
}
if ($(".slide-show").hasClass("thumbnails")) {
  thumbnails();
}
else
if ($(".slide-show").hasClass("discs")) {
discs();
}
// ***************** AUTO ANIMATE FUNCTION OR WHEN CLICK NEXT *************//
function nextgallary(){
$(".slider:last").fadeOut(2000).prev().fadeIn(2000).end().prependTo(".slide-show");
if ($(".slide-show").hasClass("thumbnails")) {
  thumbnails();
var slider_id = "#" + $(".slider:last").attr("id");
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(".circle[data-show='" + slider_id + "']").addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
// var slider_id = '#'+$(".slider:last").attr("id");
// $(".circle").addClass("circle-default").removeClass("circle-default-animate");
// $(".circle[data-show='"+slider_id+"']").addClass("circle-default-animate");
// $(".circles").addClass("circles-default");
discs();
}
}
// ************************ FUNCTION RUNNING WHEN CLICK PREV ********************//
function prevgallary(){
$(".slider:last").fadeOut(1000).appendTo(".slide-show");
$(".slider:first").fadeIn(1000).appendTo(".slide-show");
if ($(".slide-show").hasClass("thumbnails")) {
var slider_id = '#'+$(".slider:last").attr("id");
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(".circle[data-show='" + slider_id + "']").addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
var slider_id = '#' + $(".slider:last").attr("id");
$(".circle").addClass("circle-default").removeClass("circle-default-animate");
$(".circle[data-show='"+slider_id+"']").addClass("circle-default-animate");
}
}
// ******************** CALLING AUTO FUNCTION *****************//
slide = setInterval(nextgallary,4000);
// *********************** WHEN CLICK NEXT *******************//
$("#next").click(function () {
clearInterval(slide);
nextgallary();
$("#run").text("Start");
});
// *********************** WHEN CLICK PREV *******************//
$("#prev").click(function () {
clearInterval(slide);
prevgallary();
$("#run").text("Start");
});
// *********************** WHEN CLICK CIRCLE *******************//
$(".circle").click(function(){
clearInterval(slide);
$(".slider").fadeOut();
var data = $(this).attr("data-show");
$(data).fadeIn(1000).appendTo(".slide-show");
$("#run").text("Start");
if ($(".slide-show").hasClass("thumbnails")) {
$(".circle").addClass("circle-thumb").removeClass("circle-thumb-animate");
$(this).addClass("circle-thumb-animate");
}
else
if ($(".slide-show").hasClass("discs")) {
$(".circle").removeClass("circle-default-animate");
$(this).addClass("circle-default-animate");
}
});
// *********************** RUNNING AND STOP SLIDESHOW *******************//
$("#run").text("Stop");
$("#run").click(function(){
if ($(this).text() == "Stop") {
clearInterval(slide);
$(this).text("Start");
}
else {
slide = setInterval(nextgallary,4000);
$(this).text("Stop");
}
});
// *********************** RUNNING AND STOP SLIDESHOW *******************//
$(".button").each(function() {
  var style = $(this).data("view");
  if ($(".slide-show").hasClass(style)) {
    $(".button[data-view='"+style+"']").css("background","#e74c3c");
    }
$(".button").click(function(){
  $(".button").css("background","#ddd");
  $(this).css("background","#e74c3c");
  var current_style = $(this).data("view");
$(".slide-show").removeClass(style).addClass(current_style);
console.log(style)
});
});

// =======================================================================//
// ------------------------------ ROTATE CARDS ---------------------------
// =======================================================================//

(function() {
  var rotate, timeline;
  rotate = function() {
    return $('.card:first-child').fadeOut(400, 'swing', function() {
      return $('.card:first-child').appendTo('.cards').hide();
    }).fadeIn(400, 'swing');
  };
  timeline = setInterval(rotate, 4000);
  $('.card').click(function() {
    return rotate();
  });
}).call(this);

// =======================================================================//
// -------------------- Accordion Add Classes To First Child --------------
// =======================================================================//

$(".panel:first").find(".panel-heading").addClass("active");
$(".panel:first").find(".panel-collapse").addClass("in");

// =======================================================================//
// ---------------------------- Carousel Auto Animate ----------------------
// =======================================================================//

$('.carousel').css('direction', 'ltr');
$('.carousel').carousel({
    interval: 4000
});
});
