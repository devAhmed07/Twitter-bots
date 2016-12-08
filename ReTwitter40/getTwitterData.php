<?php
ob_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

require("config/twitter/twitteroauth.php");
require("loq.php");
require 'config/functions.php';
session_start();
if (!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])) {
    // We've got everything we need
    $twitteroauth = new TwitterOAuth($row['APIkey'], $row['APIsecret'], $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
// Let's request the access token
    $access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']);
// Save it in a session var
    $_SESSION['access_token'] = $access_token;
// Let's get the user's info
    $user_info = $twitteroauth->get('account/verify_credentials');
  // Print user's info
//header("Location: index.php");
   // echo '<pre>';
   // print_r($user_info); // فشل في جلب البيانات
   // echo '</pre><br/>';
    if (isset($user_info->error)&& !empty($_SESSION['access_token']['oauth_token_secret'])&& !empty($_SESSION['access_token']['oauth_token'])) {
        // Something's wrong, go back to square 1
          unset($_SESSION);
         session_destroy();
        header('Location: login-twitter.php');

    } else {
      $access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
      $access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];
	   $twitter_otoken= $_SESSION['oauth_token'];
	   $twitter_otoken_secret= $_SESSION['oauth_token_secret'];
	   $screen_name = $_SESSION['access_token']['screen_name'];
	   $email='';
        $uid = $user_info->id;
        $username = $user_info->name;
        $idok = $_SESSION['idok'];
        $user = new User();
        // هنا مشكلة ؟
        $userdata = $user->checkUser($idok,$username,$access_token_oauth_token,$access_token_oauth_token_secret,$screen_name);
print_r($_SESSION);
        if(!empty($userdata)){

            $_SESSION['id'] = $userdata['id'];
            $_SESSION['oauth_id'] = $uid;
            $_SESSION['username'] = $userdata['username'];
            $_SESSION['oauth_provider'] = $userdata['oauth_provider'];
            header("Location: index.php");

        }
    }
} else {
    // Something's missing, go back to square 1
    header('Location: login-twitter.php');
}

?>
