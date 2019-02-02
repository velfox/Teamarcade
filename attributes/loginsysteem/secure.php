<?php
session_start();
//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['oauth2state'])) {
    header('Location: index.php');
    exit;
}
if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {
}
// Step 2. Get an access token using the provided authorization code
$token = $provider->getAccessToken('authorization_code', [
    'code' => $_GET['code']
]);

// Show some token details
echo '<h2>Token details:</h2>';
echo 'Token: ' . $token->getToken() . "<br/>";
echo 'Refresh token: ' . $token->getRefreshToken() . "<br/>";
echo 'Expires: ' . $token->getExpires() . " - ";
echo ($token->hasExpired() ? 'expired' : 'not expired') . "<br/>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="logout.php" method="post">
    <input type="submit" value="Inloggen met discord"
           name="Submit" id="frm1_submit" />
</body>
</html>
