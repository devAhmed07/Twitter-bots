<?php
 session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
  if($_SESSION['admin'] == 1) {

require_once('./../config/dbconfig.php');
// [جلب البيانات]
$id = $_GET['id'];
$accessToken = $_GET['accessToken'];
$accessTokenSecret = $_GET['accessTokenSecret'];

$users = mysql_query("DELETE FROM users WHERE id = $id") or die(mysql_error());

$dC = mysql_query("DELETE FROM crons ") or die(mysql_error());

$dR = mysql_query("DELETE FROM reply WHERE accessToken LIKE '$accessToken'") or die(mysql_error());

$dRU = mysql_query("DELETE FROM reply_user WHERE accessToken LIKE '$accessToken'") or die(mysql_error());

header("Location: index.php?go=users");

echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم حذف الحساب</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=users\' />';
}else{echo ' انت في المكان الخطأ' ;	}



?>