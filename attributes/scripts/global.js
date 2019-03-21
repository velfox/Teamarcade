<!-- video controls -->
$("#banner-video").prop('muted', true);
var bannervideo = document.getElementById("banner-video"); 
if (bannervideo.paused) 
    bannervideo.play(); 

//open and close site options
$(document).ready(function(){
  $(".icon-customwebsite").click(function(){
    $("#website-options").toggle();
  });
});

// site options change background
$('.background').click(function(){
    var selectbg = $(this).attr('id');
    var gdclass =  "#" + selectbg + " img";
    var actclass =  "#" + selectbg; 
    var images = $(gdclass).attr('src');
    $(".background").removeClass('background-active');
    $(actclass).addClass('background-active');
    $('#website-options').css("background-image", "url(" + images + ")");
    $('.main-content').css("background-image", "url(" + images + ")");
});



// mute video
$(".soundbutton").click(function () {
    if ($("#banner-video").prop('muted')) {
        $("#banner-video").prop('muted', false);
        $(".soundbutton").removeClass('mute');
         $(".soundbutton").addClass('unmute');

    } else {
        $("#banner-video").prop('muted', true);
        $(".soundbutton").removeClass('unmute');
        $(".soundbutton").addClass('mute');
    }
    console.log($("#banner-video").prop('muted'))
});

// play video
function playPause() { 
    if (bannervideo.paused) {
    bannervideo.play();
    $(".playbutton").removeClass('pause');
    $(".playbutton").addClass('play');
    }
    else{
    bannervideo.pause();
    $(".playbutton").removeClass('play');
    $(".playbutton").addClass('pause');
    }
  } 

// on scrol minimize menu
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    var menu = document.getElementById("menu");
    menu.style.position='fixed';
    document.getElementsByClassName("logosvg").className = "test";
    var logo = document.getElementById("logosvg");
    logo.style.height = 60 + "px";
    var menu = document.getElementById("menu");
    menu.style.height = 80 + "px";
    var menu = document.getElementById("menulinks");
    menu.style.marginTop = 10 + "px";
    var menu = document.getElementById("scoial-icons");
    menu.style.paddingTop = 20 + "px";
    var menu = document.getElementById("logo");
    menu.style.transform = "rotate(-1deg)";
    var menu = document.getElementById("website-options");
    menu.style.top = 83 + "px";
  } else {
    var menu = document.getElementById("menu");
    menu.style.position='unset';
    document.getElementsByClassName("logosvg").className = "";
    var logo = document.getElementById("logosvg");
    logo.style.height = 120 + "px";
    var menu = document.getElementById("menu");
    menu.style.height = 100 + "px";
    var menu = document.getElementById("menulinks");
    menu.style.marginTop = 20 + "px";
    var menu = document.getElementById("scoial-icons");
    menu.style.paddingTop = 30 + "px";
    var menu = document.getElementById("logo");
    menu.style.transform = "rotate(2deg)";
    var menu = document.getElementById("website-options");
    menu.style.top = 103 + "px";
  }
}