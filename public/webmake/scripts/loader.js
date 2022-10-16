
document.addEventListener("DOMContentLoaded", function (event) {
    $('html,body').animate({
        scrollTop: 1
    }, 'slow')
    $('html,body').animate({
        scrollTop: 0
    }, 'slow')
   $("#loader").fadeOut();

})