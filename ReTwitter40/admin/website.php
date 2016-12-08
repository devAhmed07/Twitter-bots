<?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
header('Location: index.php?go=website');
$txt1 = $_POST['text1'];
$txt2 = $_POST['text2'];
$txt3 = $_POST['text3'];
$txt4 = $_POST['text4'];
$txt5 = $_POST['text5'];
$txt6 = $_POST['text6'];
$txt7 = $_POST['text7'];
$txt8 = $_POST['text8'];
require './../config/dbconfig.php';
if($_SESSION['admin'] == 1) {
mysql_query("UPDATE `website` SET `website` = '".$txt1."',
`Description` = '".$txt2."',
`Tags` = '".$txt3."',
`Twitter` = '".$txt4."' ,
`Mail` = '".$txt5."',
`APIkey` = '".$txt6."',
`APIsecret` = '".$txt7."',
`Link` = '".$txt8."' WHERE `id` =1") ;
echo '<meta http-equiv=\'refresh\' content=\'0; url=index.php?go=website\' />';

}else{echo ' انت في المكان الخطأ' ;	}

 ?>
 
 

