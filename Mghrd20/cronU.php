<?php

require_once("config/dbconfig.php"); 
require_once("config/twconfig.php"); 
require_once('config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 20; // عدد التغريدة في كل مرة
////


///
$tweetsU = mysql_query("SELECT * FROM `tweetsU` WHERE `timestamp`<'".$date."' LIMIT ".$tws." ");

 while($rows = mysql_fetch_assoc($tweetsU)) {

$accessToken = $rows['accessToken'];
$accessTokenSecret =$rows['accessTokenSecret'];
$txtwi = $rows['tweet'];
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$oksend = $twitter->send($txtwi);
if($oksend == 0) {
$rm_tweets = mysql_query("DELETE FROM `tweetsU` WHERE id='".$rows['id']."'");
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$oksend = $twitter->send($txtwi);
              }else {
$rm_tweets = mysql_query("DELETE FROM `tweetsU` WHERE id='".$rows['id']."'");
         
              }

$rm_tweets = mysql_query("DELETE FROM `tweetsU` WHERE id='".$rows['id']."'");

}



exit;
?>