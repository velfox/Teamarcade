<?php

require __DIR__ . '/vendor/autoload.php';

session_start();

echo ('Main screen turn on!<br/><br/>');

$provider = new \Wohali\OAuth2\Client\Provider\Discord([
    'clientId' => '540866512932831232',
    'clientSecret' => 'OZFZEH4YIR-i7pbYK8TiLbxnW7mVNAAE',
    'redirectUri' => 'http://teamarcade.fox/login.php'
]);
$option = [
        'scope' => ['identify','email','guilds']
];
if (!isset($_GET['code'])) {

    // Step 1. Get authorization code
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);

    $options = [
        'state' => 'OPTIONAL_CUSTOM_CONFIGURED_STATE',
        'scope' => ['identify', 'email', 'guilds'] // array or string
    ];

    $authorizationUrl = $provider->getAuthorizationUrl($options);

// Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {

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

    // Step 3. (Optional) Look up the user's profile with the provided token
    try {

        $user = $provider->getResourceOwner($token);

        echo '<h2>Resource owner details:</h2>';
        printf('Hallo %s#%s!<br/><br/>', $user->getUsername(), $user->getDiscriminator());
        var_export($user->toArray());


    } catch (Exception $e) {

        // Failed to get user details
        exit('Oh dear...');

    }
}
$existingAccessToken = $token->getToken();

if (($token->hasExpired() ? 'expired' : 'not expired')== 'expired') {
   echo 'oprotten uit mijn land vriend';
}
else{
    echo 'grapje abbie blijf maar';
}

// naam van de gebruiker
$_SESSION['name'] = $user->getUsername();
// # die achter de naam staat
$_SESSION['hashtag'] = $user->getDiscriminator();
// id van gebruiker
$_SESSION['id'] = $user->getId();
// avatar hash
$_SESSION['avatar'] = $user->toArray()['avatar'];
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
<img src="https://cdn.discordapp.com/avatars/<?= $_SESSION['id']?>/<?= $_SESSION['avatar']?>.jpg" alt="">
<form action="secure.php" method="post">
    <input type="submit" value="naar beveiligde pagina"
           name="Submit" id="frm1_submit" />
</body>
</html>
