<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################	
require_once("loq.php");
$template = "template";
require_once("config/waseethost.php");
//waseethos();


// فحص تسجيل الدخول
if(@$_POST['us'] || @$_POST['ps'] || @$_POST['su']){ //26
$user = waseethos($_POST['us']);
$password = waseethos($_POST['ps']) ;
//
@$sql=mysql_query("SELECT * FROM `users` WHERE `name` LIKE '$user' AND `password` LIKE '$password' LIMIT 0 , 1") ;
@$row1=mysql_fetch_assoc($sql);


if(md5($row1['password']) === md5($password) && md5($row1['name']) === md5($user) && $row1['password'] != '0' && $row1['password'] != '' && $row1['name'] != '0'&& $row1['name'] != ''){//24 -17
$_SESSION['idok'] = $row1['id'];
$_SESSION['ok'] = $row1['id'];
$_SESSION['id'] = $row1['id'];
$_SESSION['accessToken'] = $row1['accessToken'];
$_SESSION['accessTokenSecret'] = $row1['accessTokenSecret'];
$_SESSION['limitreply'] = $row1['limitreply'];
$_SESSION['limitreply_user'] = $row1['limitreply_user'];
}//17 -24

} //10




/// نقل الزائر

if(@$_SESSION['idok'] && @$_SESSION['ok'] ){
//print_r($_SESSION);
//print 33 ;

if($_SESSION['accessToken'] || $_SESSION['accessTokenSecret']){
if(@$_GET['p']==='Settings'){
require_once($template."/header.html");
cc($template."/noregistered.html");
require_once($template."/footer.html");

}else{

require_once($template."/header.html");
cc($template."/registered.html");
require_once($template."/footer.html");

}


}else{
require_once($template."/header.html");
cc($template."/noregistered.html");
require_once($template."/footer.html");


}




}else{
require_once($template."/header.html");
cc($template."/ok.html");
require_once($template."/footer.html");

}






?>