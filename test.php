<?php 
include_once 'attributes/includes/dbc.inc.php';
include_once 'attributes/includes/user.inc.php';
$db = new Dbc;
$db->connect();

$user = new User;
echo $user->GetAllUsersNames();

echo $user->GetUserPoints(1);
