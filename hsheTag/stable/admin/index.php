<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>لوحة التحكم</title>
<meta name="generator" content="Bluefish 2.2.4" >
<meta name="author" content="ahmed" >
<meta name="date" content="2013-08-21T02:37:54+0300" >
<meta name="copyright" content="DevBrq">
<meta name="keywords" content="لوحة,التحكم">
<meta name="description" content="لوحة التحكم">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.rtl.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.rtl.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
</head>
<body>
<?php

require './../config/dbconfig.php';
//Username
//Password
if(@$_SESSION['admin']== 1) {
if(@$_GET['go'] == 'logoff') {$_SESSION['admin'] = 0;header('Location: index.php '); }			
if(@$_GET['go'] == 'twitw') {$ltr = 'style/twitw.html';}	
if(@$_GET['go'] == '') {$ltr = 'style/TimeTwitterV.html';}	
if(@$_GET['go'] == 'Statistics') {$ltr = 'style/Statistics.html';}	
if(@$_GET['go'] == 'website') {$ltr = 'style/website.html';}	
if(@$_GET['go'] == 'Manager') {$ltr = 'style/Manager.html';}	
if(@$_GET['go'] == 'TimeTwitter') {$ltr = 'style/TimeTwitter.html';}	
if(@$_GET['go'] == 'TimeTwitterV') {$ltr = 'style/TimeTwitterV.html';}	
if(@$_GET['go'] == 'Upgrade') {$ltr = 'style/Upgrade.html';}
if(@$_GET['go'] == 'users') {$ltr = 'style/users.html';}
if(@$_GET['go'] == 'Section') {$ltr = 'style/addSection.html';}

require_once('style/index.html');
}else {
require_once('style/logged.html');	

}

?>
<div id="cc">برمجة : <a href="http://waseethost.com/" >الوسيط هوست</a> جميع الحقوق محفوظه للوسيط هوست</div>
</body>
</html>