$('#benefits').click(function(){
    $('.popup').css("display","flex").hide().fadeIn(1500);
});

$('.popup-content-cansel').click(function(){
    $('.popup').css("display","none").fadeOut(1000);
});

$('#call').click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.map-contact').offset().top
    },1000)
});

$(".burger").click(function(event){
    $(this).toggleClass("active");
    $("nav").toggleClass("active")
});