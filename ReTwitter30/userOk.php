<?php 
 //session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
require_once'loq.php';
require_once('config/dbconfig.php');

@$user = $_POST['user'] ;

@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];

//


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){
$sqli = "INSERT INTO `reply_user` (`id`, `user`, `reply_id`, `accessToken`, `accessTokenSecret`) VALUES (NULL, '".trim(trim(trim($user)))."', '0','".$access_token_oauth_token."', '".$access_token_oauth_token_secret."');";
$sql= mysql_query($sqli) ;
echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم إضافة مستخدم</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=user.php\' />';

}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>