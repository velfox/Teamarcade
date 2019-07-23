<!DOCTYPE html>
<html lang="en">


<?php 
session_start();
include_once 'attributes/includes/dbc.inc.php';
include_once 'attributes/includes/user.inc.php';

$user = new User;
// $user->getUserData()
?>


<?php include_once 'attributes/templates/head.php'; ?>

<!-- <?php include_once 'attributes/templates/session.php'; ?>  -->
<body>
<?php include_once 'attributes/templates/menu.php'; ?> 
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
                            <h1> Events <?= $name ?> </h1>
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

<?php include_once 'attributes/templates/footer.php'; ?> 
<script src="attributes/scripts/global.js"></script>
    
</body>
</html>

