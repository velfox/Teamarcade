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
                <div class="user-name"> <h2>Ey, <?= $name ?> </h2> </div>
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