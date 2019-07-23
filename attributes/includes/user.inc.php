<?php

class User extends Dbc
{   
    //setupservariables Discord
    public $userImg;
    public $name;
    public $email;
    public $discordid;
    //setupservariables Database
    public $background;
    public $userid;
    public $mony;
    public $points;


    public function __construct()
    {
        //zet sessions om in variables
        $this->loguit();
        $this->loginChek();
    }

    public function loginChek(){
        if (isset($_SESSION['oauth2state'])) {
            $loggedIn = $_SESSION['oauth2state'];
             $this->userImg = "https://cdn.discordapp.com/avatars/" . $_SESSION['id'] . "/" . $_SESSION['avatar'] . ".jpg";
             $this->name = $_SESSION['name'];
             $this->email = $_SESSION['email'];
             $this->discordid = $_SESSION['id'];
            //chek if acount in teamarcade database

            if (!isset($_SESSION['dbconnected'])) {
                $dbuserchek = $this->ChekOfUserExists($this->discordid);
                if ($dbuserchek == false) {
                    $this->AddNewUser();
                } else {
                    echo "user is dr wel";
                    $_SESSION['dbconnected'] = true;
                }
            } else {
                echo "user is al ingelocht";

            }
        }
    }

    public function loguit()
    {
        //loguit option
        if (isset($_POST['loguit'])) {
            session_destroy();
            header('Location: index.php');
        }
    }

    public function GetAllUsersNames()
    {
        $stmt = $this->connect()->query("SELECT * FROM users");
        while ($row = $stmt->fetch()) {
            $uid = $row['name'];
            return $uid;
        }
    }

    public function GetUserPoints($id)
    {
        $stmt = $this->connect()->prepare("SELECT points FROM users WHERE userid=?");
        $stmt->execute([$id]);

        if ($stmt->rowCount()) {
            while ($row = $stmt->fetch()) {
                return $row['points'];
            }
        } else {
            return "User Not Found";
        }
    }

    public function ChekOfUserExists($discordid)
    {
        $stmt = $this->connect()->prepare("SELECT userid FROM users WHERE discordid=?");
        $stmt->execute([$discordid]);

        if ($stmt->rowCount()) {
            while ($row = $stmt->fetch()) {
                return $row['userid'];
            }
        } else {
            return false;
        }
    }

    private function AddNewUser(){
        $name = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $this->name);
        $email = $this->email;
        $discordid = $this->discordid;
        $stmt = $this->connect()->prepare("INSERT INTO users(discordname, email, discordid) VALUES (?, ?, ?)");
        if($stmt->execute([$name, $email, $discordid])){
         } else {
            echo $stmt->error;
            echo"importfaild";
         }
    }
}
