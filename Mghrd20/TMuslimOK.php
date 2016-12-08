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

@$date = $_POST['date'] ;
@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];

//


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){
	

$sqli = "UPDATE `users` SET `Muslim` = '$date' WHERE `users`.`accessToken` = '$access_token_oauth_token' ;";
$sql= mysql_query($sqli) ;
//echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
//echo"<br/><center><h2>تم جدولة التغريدات</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=TMuslim.php\' />';
$_SESSION['Muslim']= $date ;

}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>