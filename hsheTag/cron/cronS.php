<?php

require_once("./../config/dbconfig.php");
require_once("./../config/twconfig.php");
require_once('./../config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 50 ;    // عدد الحسابات في كل دورة
$t_s = 120;  // الارسال للتغريدة التي مر عليها اقل من
////

$cronS = mysql_query("SELECT * FROM `cronS`"); // فحص وجود طابور
$count_cronS = mysql_num_rows($cronS);
if($count_cronS){  //عند وجود طابور
$cronS_rows = mysql_fetch_assoc($cronS);
$user_all = $cronS_rows['user_all'] ;
$user_her = $cronS_rows['user_her'] ;
$user_end = ($cronS_rows['user_her']+$tws) ;
$source = mysql_fetch_assoc(mysql_query("SELECT * FROM `source` ORDER BY RAND() LIMIT 0, 1"));
if($user_all <=  $user_her || $user_all ==  $user_her) {$rm_cron= mysql_query("DELETE FROM `cronS`");}else {
$users = mysql_query("SELECT * FROM `users` LIMIT ".$user_her.",".$user_end."");
$count_user = mysql_num_rows($users);
// m مرحلة التحقق من التغريدات الجديدة

while($rows = mysql_fetch_assoc($users)) {
$accessToken = $rows['accessToken'];
$accessTokenSecret =$rows['accessTokenSecret'];
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$status = $twitter->user_timeline($source['name']);
@$id_str = $status['id_str'];
$statusTime = (strtotime($status['created_at']));
@$id_str_re = $rows['last_updated'];
@$getHashtags = getHashtags($status['text']);
foreach($getHashtags as $arr){
@$arrx .=' '.@$arr;
}
if(@$id_str != null) {
if($id_str == $id_str_re || $id_str == 0 || $id_str == $id_str_re ) {
}else {
###################### 1.4

$tweet = mysql_fetch_assoc(mysql_query("SELECT * FROM `tweetst` ORDER BY RAND() LIMIT 0 , 1  "));
//$codeR = time();
//$codeR = MD5($codeR);
//$codeR = substr($codeR, 0, 3);
//$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
if(@$arrx){
$oksend = $twitter->send($tweet['tweet'].' '.@$arrx.'');
}

 mysql_query("UPDATE `source` SET last_updated = '".$statusTime."' WHERE `id` ='".$source['id']."'");

}
}else {
}
 mysql_query("UPDATE `cronS` SET `user_her` = `user_her`+1");
}
}
}else { //عند  عدم وجود طابور
$users = mysql_query("SELECT * FROM `users`");
$count_user = mysql_num_rows($users);
$add_cronS = mysql_query("INSERT INTO `cronS` (`id`, `user_all`, `user_her`, `user_end`) VALUES (NULL, '".$count_user."', '0', '0');");
}

// m مرحلة جلب المستخدمين





exit;
?>