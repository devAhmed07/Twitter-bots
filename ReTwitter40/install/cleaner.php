<!DOCTYPE html>
<html>
<head>
<title>تنصيب سكربت الرد التلقائي - الوسيط هوست</title>
<meta name="generator" content="Bluefish 2.2.4" >
<meta name="author" content="ahmed" >
<meta name="date" content="2013-08-02T14:25:57+0300" >
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<style type="text/css">
body {
	background: #B1D4E5;

}
h1{
	color: #4D4D4D;
	font-size: 40px;
	margin-top: 50px;
	padding-top: 20px;
	margin-left: 300px;
   padding-left: 150px;
	width: 450px;
	height: 120px;
   border: 5px solid white;
   -webkit-border-radius: 60px;
-webkit-border-top-left-radius: 20px;
-moz-border-radius: 60px;
-moz-border-radius-topleft: 20px;
border-radius: 60px;
border-top-left-radius: 20px;
}
</style>
</head>
<body>


<h1>
<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
#####################################################################
//S بيانات الادمن

$admin = "admin" ; // الاسم
$Password = "123456" ;  // الرقم السري
$adminmail = "protop96@gmail.com"; // بريد الادمن
#####################################################################
require_once('./../config/dbconfig.php');


if (!mysql_ping($connection)) {
    echo ' dbconfig.php ما في شبكة! أقصد تأكد من معلومات قاعدة البيانات المجودة في الملف ';
    echo 'يمكن طلب المساعدة  بفتح تذكرة في الوسيط هوست إدا عجزت عن  التنصيب<br />';
    echo '<br /><a href="http://waseethost.com/" >الوسيط هوست</a>';
    exit;
}else {


mysql_query("DROP TABLE `crons` ,`cronr`;");
mysql_query("DROP TABLE `cronR` ,`cronS`;");
mysql_query("DROP TABLE `admincp` ;");
mysql_query("DROP TABLE `reply`;");
mysql_query("DROP TABLE `reply_user`");
mysql_query("DROP TABLE `settings`;");
mysql_query("DROP TABLE `users` ;");
mysql_query("DROP TABLE `all`;");
echo "تم مسح السكربت من القاعدة";
echo "<br /> Ok Cleaner";

}
?>
</h1>
<h1><a href="http://waseethost.com/" >الوسيط هوست</a></h1>
</body>
</html>