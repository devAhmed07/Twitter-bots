<?php

require_once("config/dbconfig.php"); 
require_once("config/twconfig.php"); 
require_once('config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 20 ; // عدد التغريدة في كل مرة
////


///
$tweetsT = mysql_fetch_assoc(mysql_query("SELECT * FROM `tweetsT` WHERE `timestamp` <='".$date."' LIMIT 1"));
$cron = mysql_fetch_assoc(mysql_query("SELECT * FROM `cron` LIMIT 1"));
$users = mysql_query("SELECT * FROM users WHERE `Muslim` != 'n'");
$count = mysql_num_rows($users);
///


	


if($cron['cron']){ // عند وجود مهام
			
			$st = $cron['users'] ;
			$en = ($cron['users']+$tws);
			$txtwi = $cron['tweet'];

if($cron['cron'] <= $cron['users'] ){ // التأكد من عدم انتهاء المهمات
	

$rm_cron= mysql_query("DELETE FROM `cron`");

}else{ // ما تزال المهام لم تنتهي
$users1 = mysql_query('SELECT * FROM users LIMIT '.$st.' ,'.$en.'');
						 while($rows = mysql_fetch_assoc($users1)) { // لولب آلإرسال
						 	
						$accessToken = $rows['accessToken'];
						$accessTokenSecret =$rows['accessTokenSecret'];
			 	  	   $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
					   $oksend = $twitter->send($txtwi);
					   
if($oksend == 0) { // عدم نجاح عملية آلإرسال
				 	  $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
					  $oksend = $twitter->send($txtwi);
                 mysql_query("UPDATE `cron` SET `users` = `users`+1");
                 }else { // نجاح العملية
                 mysql_query("UPDATE `cron` SET `users` = `users`+1");
            
                 }
}// نهاية اللولب




}

}else{ // عند عدم وجود مهمام 
	
if($tweetsT['timestamp']){ // التأكد من وجود تغريدات للبدا العمل

	$add_cron = mysql_query("INSERT INTO `cron` (`id`, `cron`, `tweet`, `users`) VALUES (NULL, '".$count."', '".$tweetsT['tweet']."', '0')");
   $rm_tweets = mysql_query("DELETE FROM `tweetsT` WHERE id= '".$tweetsT['id']."'");
}else{
	
	

}	


}






?>