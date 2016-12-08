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





$dR = mysql_query("DELETE FROM reply WHERE accessToken LIKE ''");
$dRU = mysql_query("DELETE FROM reply_user WHERE accessToken LIKE ''");

$sql= mysql_query("TRUNCATE `cronR`;") ;
$sql= mysql_query("TRUNCATE `cronS`;") ;




echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم حذف الكرون</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=update\' />';
  	
}else{
	
	echo ' انت في المكان الخطأ' ;
}





?>