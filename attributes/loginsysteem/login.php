<?php

require __DIR__ . '/vendor/autoload.php';

session_start();

$options = ['scope' => ['identify', 'email', 'guilds']];

$provider = new \Wohali\OAuth2\Client\Provider\Discord([
    'clientId' => '540866512932831232',
    'clientSecret' => 'OZFZEH4YIR-i7pbYK8TiLbxnW7mVNAAE',
    'redirectUri' => 'http://teamarcade.fox/attributes/loginsysteem/login.php'
]);
$option = [
        'scope' => ['identify','email','guilds']
];
if (!isset($_GET['code'])) {

    // Step 1. Get authorization code
    $authUrl = $provider->getAuthorizationUrl($options);
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

    // Step 3. (Optional) Look up the user's profile with the provided token
    try {

        $user = $provider->getResourceOwner($token);



    } catch (Exception $e) {

        // Failed to get user details
        exit('Oh dear...');

    }
}
$existingAccessToken = $token->getToken();


$_SESSION['name'] = $user->getUsername();
// # die achter de naam staat
$_SESSION['hashtag'] = $user->getDiscriminator();
// id van gebruiker
$_SESSION['id'] = $user->getId();
// avatar hash
$_SESSION['avatar'] = $user->toArray()['avatar'];
// email
$_SESSION['email'] = $user->getEmail();
// Token
$_SESSION['token'] = $token->getToken();


header('Refresh: 0, url = /index.php');

?>

