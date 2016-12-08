 <?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
header('Location: index.php?go=users');
$txt1 = $_POST['text1'];
$txt2 = $_POST['text2'];
$txt3 = $_POST['text3'];
$txt4 = $_POST['text4'];
require './../config/dbconfig.php';
if($_SESSION['admin'] == 1) {
mysql_query("INSERT INTO `users` (`id`, `name`, `password`, `username`,`accessToken`, `accessTokenSecret`, `screen_name`, `limitreply`, `limitreply_user`) VALUES (NULL, '$txt1', '$txt2', NULL, NULL, NULL, NULL, '$txt4','$txt3');") ;
echo '<meta http-equiv=\'refresh\' content=\'0; url=index.php?go=users\' />';

}else{echo ' ÇäÊ Ýí ÇáãßÇä ÇáÎØÃ' ;	}

 ?>