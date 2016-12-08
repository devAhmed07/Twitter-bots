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

@$access_token_oauth_token_secret = $_SESSION['accessTokenSecret'];
$access_token_oauth_token = $_SESSION['accessToken'] ;
$idok = $_SESSION['idok'] ;
$limitreply = $_SESSION['limitreply'];
$limitreply_user = $_SESSION['limitreply_user'] ;
//


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){
$user =str_replace("@","",$user);
$limit =mysql_num_rows(mysql_query("SELECT * FROM `reply_user` WHERE `iduser` =".$idok." LIMIT 0 , 10"));

if($limit >= $limitreply_user){
echo"<br/><center><h3>لا يمكن اضافة الحساب بسبب تجاوز الحد المسموح به</h3></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=user.php\' />';
exit();
}else{
$sqli = "INSERT INTO `reply_user` (`id`, `user`, `reply_id`, `accessToken`, `accessTokenSecret`, `iduser`) VALUES (NULL, '".trim(trim(trim($user)))."', '0','".$access_token_oauth_token."', '".$access_token_oauth_token_secret."','".$idok."');";
$sql= mysql_query($sqli) ;
echo"<br/><center><h3>تم اضافة ".trim(trim(trim($user)))." بنجاح</h3></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=user.php\' />';
}



}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>