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

////
//$id = intval($_GET['id']) ;
$id = $_POST['delet'] ;
$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;

//


if(isset($_SESSION['id'])){

foreach($id as $idS)
{
$idS = intval($idS) ;
$sqli= "DELETE FROM reply_user WHERE id = '".$idS."' AND accessToken = '".$access_token_oauth_token."'";
$sql= mysql_query($sqli) ;
echo mysql_error();
}	

//echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم حذف الجميع</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=user.php\' />';


}else{
	


}




?>