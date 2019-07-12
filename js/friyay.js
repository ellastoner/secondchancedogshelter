
$( document ).ready(function() {
    $(".contact-form-adopt").hide();
    $(".contact-form-foster").hide();
});

$('.contact-button').click(function() {
    $(".contact-form-adopt").toggle();
});

$('.close-me').click(function() {
    $(".contact-form-adopt").hide();
});

$('.contact02-button').click(function() {
    $(".contact-form-foster").toggle();
});

$('.close-me').click(function() {
    $(".contact-form-foster").hide();
});
