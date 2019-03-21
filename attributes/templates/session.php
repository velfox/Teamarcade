
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
