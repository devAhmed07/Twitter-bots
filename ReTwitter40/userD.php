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
$template = "template";
require_once($template."/header.html");
////
$id = intval($_GET['id']) ;
@$access_token_oauth_token_secret = $_SESSION['accessTokenSecret'];
$access_token_oauth_token = $_SESSION['accessToken'] ;
$idok = $_SESSION['idok'] ;
$limitreply = $_SESSION['limitreply'];
$limitreply_user = $_SESSION['limitreply_user'] ;
//


if(isset($_SESSION['id'])){
$sqli= "DELETE FROM reply_user WHERE id = '".$id."' AND accessToken = '".$access_token_oauth_token."'";
$sql= mysql_query($sqli) ;
echo mysql_error();
//echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم حذفها</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=user.php\' />';



}else{
	
require_once($template."/noregistered.html");

}


require_once($template."/footer.html");

?>