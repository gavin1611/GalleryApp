<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '1701615670140589', // Replace {app-id} with your app id
    'app_secret' => '24e6fcf77d516722c376b7967ff8b36d',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    $fb->setDefaultAccessToken($accessToken);
    $_SESSION['fb_token'] = $accessToken;

    try {
        $response = $fb->get('/me?fields=email,name');
        $user = $response->getGraphUser();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    echo 'Logged in as ' . $user->getName().'<br>';
    echo 'User ID: ' . $user->getId().'<br>';
    echo 'Email: ' . $user->getProperty('email').'<br><br>';

    $image = 'https://graph.facebook.com/'.$user->getId().'/picture?width=200';
    echo "Picture<br>";
    echo "<img src='$image' /><br><br>";
    header('Location: gallery_api_grid/index.php');
    exit();
}