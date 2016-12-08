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
//////////


@$txtwi = strip_tags($_POST['txtwi']) ;
@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){
$sqli = "INSERT INTO `reply` (`id`, `reply`,  `accessToken`, `accessTokenSecret`) VALUES (NULL,  '".$txtwi."','".$access_token_oauth_token."', '".$access_token_oauth_token_secret."');";
$sql= mysql_query($sqli) ;
echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم إضافة رد جديد</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=reply.php\' />';



}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>