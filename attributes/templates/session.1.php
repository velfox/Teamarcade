
<?php session_start();
    
    //zet sessions om in variables
    if(isset($_SESSION['oauth2state'])){
        $loggedIn = $_SESSION['oauth2state'];
        $userImg = "https://cdn.discordapp.com/avatars/".$_SESSION['id']."/".$_SESSION['avatar'].".jpg";
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $discordid = $_SESSION['id'];
        //chek if acount in teamarcade database

        if(!isset($_SESSION['dbconnected'])){
            $user = new User;
            $dbuserchek = $user->ChekOfUserExists($discordid);
            if($dbuserchek == false){
                echo"user is dr niet";
            } else {
                echo"user is dr wel";
            }
        } else {
            echo"user is al ingelocht";
        }
    }

    //loguit option
    if(isset($_POST['loguit'])){
    session_destroy();
    header('Location: index.php');
    }
    
?>



