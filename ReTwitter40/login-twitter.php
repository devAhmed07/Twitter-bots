<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

require("loq.php");
require("config/twitter/twitteroauth.php");
//session_start();
if(@$_SESSION['ok']){


$twitteroauth = new TwitterOAuth($row['APIkey'], $row['APIsecret']);
// Requesting authentication tokens, the parameter is the URL we will be redirected to
$request_token = $twitteroauth->getRequestToken($row['Link']);

// Saving them into the session

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

// If everything goes well..
if ($twitteroauth->http_code == 200) {
    // Let's generate the URL and redirect
    $url = $twitteroauth->getAuthorizeURL($request_token['oauth_token']);
    header('Location: ' . $url);
} else {
    // It's a bad idea to kill the script, but we've got to know when there's an error.
    die('Something wrong happened.');
}
}else{
  $template = "template";
require_once($template."/header.html");
cc($template."/ok.html");
require_once($template."/footer.html");

}

?>
