<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="No-Store">
    <!-- seo -->
    <meta name="description" content="Tekst over team arcade" />
    <meta name="keywords" content="teamarcade, team, arcade, teamarcadenl, game, gaming, community, " />
    <meta name="author" content="velfox ta-velfox & ta-thiemo">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 days" />
    <title>TeamArcade - Nederlandse Game Community</title>
    <!-- teamarcade, gaming, community,  -->
    <link rel="stylesheet" href="attributes/css_reset.css">
    <link rel="stylesheet" href="attributes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<?php session_start();
    
    //zet sessions om in variables
    if(isset($_SESSION['oauth2state'])){
        $loggedIn = $_SESSION['oauth2state'];
        $userImg = "https://cdn.discordapp.com/avatars/".$_SESSION['id']."/".$_SESSION['avatar'].".jpg";
        $name = $_SESSION['name']; 
    }

    //loguit option
    if(isset($_POST['loguit'])){
    session_destroy();
    header('Location: index.php');
    }
    
    


?>
<body>
    <header>
        <section id="menu" class="menu">
            <section id="logo" class="logo">
                    <a href=""> <img id="logosvg" class="logosvg" src="attributes/img/Teamarcade_logo.svg" alt="Teamarcade_logo">  </a>
            </section>
            <section id="menulinks" class="menulinks">
                <ul>
                    <li><a href="default.asp">Home</a></li>
                    <li><a href="news.asp">Nieuws</a></li>
                    <li><a href="contact.asp">Events</a></li>
                    <li><a href="about.asp">teams</a></li>
                    <li><a href="about.asp">shop</a></li>
                    <li><a href="about.asp">contact</a></li>
                </ul>
            </section>
            <section class="scoial-icons" id="scoial-icons">
                    <div class="icon-discord icon-img"></div>
                    <div class="icon-twitch icon-img"></div>
                    <div class="icon-youtube icon-img"></div>
                    <div class="icon-twitter icon-img"></div>
                    <div class="icon-customwebsite icon-img"></div>
            </section>
            <section class="user-box" id="user-box">
            <?php if(!isset($loggedIn)){ ?>
                <section class="user-options">
                    <form action="/attributes/loginsysteem/login.php" method="post">
                    <input type="submit" class="news-button discord-button" value="Inloggen met discord" name="Submit" id="frm1_submit" />
                </form>
                </section> 
            <?php } else { ?>
                <img class="user-img" src="<?= $userImg?>" alt="">
                <section class="user-options">
                <div class="user-name"> <h2>hallo <?= $name ?> </h2> </div>
                    <form action="" method="post">
                        <input class="news-button discord-button" type="submit" value="uitloggen" name="loguit" id="loguit"/>
                    </form>
                </section> 
            <?php } ?>
            </section>
        </section>
    </header>
    <section id="website-options"> 
        <section class="background-editor">
            <p class="title-option"> selecteer een achtergrond :) </p>
            <section class="background-options">
                <section id="b1" class="background">
                    <img src="/attributes/img/backgrounds/monstersbackground.png" alt="">
                </section>
                <section id="b2" class="background">
                    <img src="/attributes/img/backgrounds/pixelbackground.gif" alt="">
                </section>
                <section id="b3" class="background background-active">
                    <img src="/attributes/img/backgrounds/Ax74.gif" alt="">
                </section>
                <section id="b4" class="background">
                    <img src="/attributes/img/backgrounds/pixel.png" alt="">
                </section>
                <section id="b5" class="background">
                    <img src="/attributes/img/backgrounds/tuintje.jpg" alt="">
                </section>
            </section>
        </section>
    </section>
    <section class="banner"> 
        <section class="video-banner">
            <img src="attributes/img/1x/banner-video-zk-l.png" alt="banner-zk">
            <video id="banner-video" height="500px" loop>
                <source src="attributes/video/video.mp4" type="video/mp4">
                Hoi, update je brouwser om onze introductie video te kunnen bekijken!.
            </video>
            
            <img src="attributes/img/1x/banner-video-zk.png" alt="banner-zk">
            <section  class="video-buttons">
                <button class="playbutton play" onclick="playPause()">Play/Pause</button>
                <button class="soundbutton mute">toggle</button>
            </section>
        </section>
        <section class="discord-banner">
            <img class="nesController" src="attributes/img/controller4x.png" alt="contoller">
            <a href="https://discord.gg/EQefvUM"> <section class="discordControllerButton">  </section> </a>
        </section>
    </section>
    <section class="main-content">
        <section class="main-content-container">
            <!-- start event section -->
            <section class="row-2-1">
                <section class="introduction">
                    <section class="title">
                        <img class="introduction-porro"src="/attributes/img/muntje.gif" alt="">
                        <section class="tilte-text">
                            <h1> Events </h1>
                            <h2> Samen gaan we voor goud!</h2>
                        </section>
                    </section>
                    <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten. </p>
                </section>
                <section class="events-items">
                    <!-- event item -->
                    <article class="event-item">
                            <section class="tittle-box">
                                <section class="event-img">
                                    <section class="event-date">
                                        <p>17</p> <br> <p>mar</p>
                                    </section>
                                    <img class="event-img-placeholder" src="/attributes/img/testimg3.png" alt="">
                                </section>
                                <section class="event-box-flow">
                                    <section class="event-title-box">
                                        <section class="event-title">
                                            <h1> lol event </h1>
                                            <h2> mensjes gezocht </h2>
                                        </section>
                                    </section>
                                    <section class="event-button-box">
                                        <button class="event-button margin-fix"> I NEED MORE!!! </button>
                                        <button class="event-button"> I NEED MORE!!! </button>
                                        
                                    </section>
                                </section>
                            </section>
                    </article>
                    <!-- end event item -->
                    <!-- event item -->
                    <article class="event-item">
                            <section class="tittle-box">
                                <section class="event-img">
                                    <section class="event-date">
                                        <p>17</p> <br> <p>mar</p>
                                    </section>
                                    <img class="event-img-placeholder" src="/attributes/img/testimg3.png" alt="">
                                </section>
                                <section class="event-box-flow">
                                    <section class="event-title-box">
                                        <section class="event-title">
                                            <h1> lol event </h1>
                                            <h2> mensjes gezocht </h2>
                                        </section>
                                    </section>
                                    <section class="event-button-box">
                                        <button class="event-button margin-fix"> I NEED MORE!!! </button>
                                        <button class="event-button"> I NEED MORE!!! </button>
                                        
                                    </section>
                                </section>
                            </section>
                    </article>
                    <!-- end event item -->
                </section>
            </section>
            <!-- end event section -->
            <section class="row-1-1">
                    <!-- start teamarcade introduction -->
                    <section class="introduction">
                        <section class="title">
                            <img class="introduction-porro"src="/attributes/img/porro.gif" alt="">
                            <section class="tilte-text">
                                <h1> TeamArcade!? </h1>
                                <h2>alleen maar liefde</h2>
                            </section>
                        </section>
                        <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten. </p>
                    </section>
                    <!-- end teamarcade introductie -->
                    <!-- start news items -->
                    <section class="news">
                        <article class="nieuw-item">
                            <section class="tittle-box">
                                <section class="date">
                                    <h3>  16 </h3> <br>
                                    <h3>  mar </h3>
                                </section>
                                <section class="title-news">
                                    <img class="introduction-porro"src="/attributes/img/fire.gif" alt="">
                                    <section class="tilte-text">
                                        <h1> nieuws </h1>
                                        <h2> upcomming stoys.... </h2>
                                    </section>
                                </section>
                            </section>
                            <section class="newsimg-box">
                                <img  class="newsimg" src="/attributes/img/testimg3.png" alt="">
                            </section>
                            <section class="newstext">
                                <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten. </p>
                            </section>
                            <button class="news-button"> I NEED MORE!!! </button>
                        </article>
                        <article class="nieuw-item">
                                <section class="tittle-box">
                                    <section class="date">
                                        <h3>  16 </h3> <br>
                                        <h3>  mar </h3>
                                    </section>
                                    <section class="title-news">
                                        <img class="introduction-porro"src="/attributes/img/fire.gif" alt="">
                                        <section class="tilte-text">
                                            <h1> nieuws </h1>
                                            <h2> upcomming stoys.... </h2>
                                        </section>
                                    </section>
                                </section>
                                <section class="newsimg-box">
                                    <img  class="newsimg" src="/attributes/img/testimg3.png" alt="">
                                </section>
                                <section class="newstext">
                                    <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten. </p>
                                </section>
                                <button class="news-button"> I NEED MORE!!! </button>
                            </article>
                    </section>
                    <!-- end news items -->
                </section>
        </section>
    </section>

    <footer>
            <img class="logo-footer" src="attributes/img/Teamarcade_logo.svg" alt="logo-teamarcade">
            <section class="scoial-icons-footer">

                    <div class="icon-discord icon-img"></div>
                    <div class="icon-twitch icon-img"></div>
                    <div class="icon-youtube icon-img"></div>
                    <div class="icon-twitter icon-img"></div>
            </section>
            <section class="gezijk">
                <p class="footer-title"> Kleine lettertjes..</p>
                <section class="footer-text">
                    <p> <a href=""> algemene voorwaarden   </a> </p>
                    <p> <a href=""> cookie verklaring   </a> </p> 
                </section>
            </section>
            <section class="gezijk">
                    <p class="footer-title"> Teamarcade - Alle rechten voorbehouden © 2015-2019 </p>
                <section class="footer-text">
                <p> Site ontwikkeld door: TA-Velfox & TA-Thiemo </p>
                <p> voor vragen of opmerkingen join <a href=""> discord!  </a></p>
            </section>
            </section>
    </footer>    
    
    
</body>
</html>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!-- video controls -->
<script>
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
    logo.style.height = 80 + "px";
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



</script>


