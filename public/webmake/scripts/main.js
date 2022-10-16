$(document).ready(function () {
    // var team_middle_width = $("#team-section .middle").width();
    // var team_middle_height = $("#team-section .middle").height();
    // console.log(team_middle_width,team_middle_height);
    // $("#team-section").css({
    //     "height":team_middle_height
    // });
    $("#portafolio .buttons button").on("click",function(){
        $("#portafolio .items .item").hide()
        klass_Name=$(this).attr("class")
        if(klass_Name=="all"){
            $("#portafolio .items .item").fadeIn("slow")
        }else{
            $("#portafolio .items .item").map(function(){
                if($(this).attr("data-group")==klass_Name){
                    console.log($(this));
                    $(this).fadeIn("slow")
                }
             })
        }
        // $(`#portafolio .items .${klass_Name}`).fadeOut();
        
    })
    $("#services-section .box-div").mouseenter(function () {
        $(this).find(".center-box").addClass("hover");
    })
    $("#services-section .box-div").mouseleave(function () {
        $(this).find(".center-box").removeClass("hover");
       
    })
    var top_btn = $("#top-btn");
    $(window).scroll(
        function () {
            var top = $(window).scrollTop()
            if (top > 300) {
                $("#top-btn").slideDown()
                $("#top-btn").addClass("add-animation")
            } else {
                $("#top-btn").slideUp()
                $("#top-btn").removeClass("add-animation")
            }
        }
    )
    $("#top-btn").on("click", function () {
        $('html,body').animate({
            scrollTop: 0
        }, 'slow')
    })
    $('#search').click(function () {
        $(this).parent().toggleClass('open');
    });
    $("#team-section .member-shape").mouseenter(function () {
        $(this).find(".about").slideDown("slow");
    })
    $("#team-section .member-shape").mouseleave(function () {
        $(this).find(".about").slideUp("slow");
    })

    $("#menu-list").on("click", function () {
        $("nav .menuList").fadeToggle("slow");
    })
    ScrollOut({
        targets: "header,footer,#first-section,#contact,.from-left-animation,.from-bottom-animation",
        // offset: 400
    });
});

var app = document.getElementById('typed');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Web Dizayn')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Blog saytları')
    .pauseFor(2500)
    .deleteAll()
    .pauseFor(2500)
    .typeString('Bura Baxilmalidi')
    .start();










    