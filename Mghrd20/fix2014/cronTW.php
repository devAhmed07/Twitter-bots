<?php

require_once("config/dbconfig.php");
require_once("config/twconfig.php");
require_once('config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 20 ; // Úֿֿ ַבÊÛׁםֹֿ Ýם ßב דֹׁ
////


///
$tweetsT = mysql_fetch_assoc(mysql_query("SELECT * FROM `tweetsT` WHERE `timestamp` <='".$date."' LIMIT 1"));
$cron = mysql_fetch_assoc(mysql_query("SELECT * FROM `cron` LIMIT 1"));
$users = mysql_query("SELECT * FROM users WHERE `Muslim` != 'n'");
$count = mysql_num_rows($users);
///





if($cron['cron']){ // Úהֿ זּזֿ דוַד

			$st = $cron['users'] ;
			$en = ($cron['users']+$tws);
			$txtwi = $cron['tweet'];

if($cron['cron'] <= $cron['users'] ){ // ַבÊֳßֿ דה Úֿד ַהÊוֱַ ַבדודַÊ


$rm_cron= mysql_query("DELETE FROM `cron`");

}else{ // דַ Êַׂב ַבדוַד בד ÊהÊום
$users1 = mysql_query('SELECT * FROM users LIMIT '.$st.' ,'.$en.'');
						 while($rows = mysql_fetch_assoc($users1)) { // בזבָ ֲבֵׁ׃ַב

						$accessToken = $rows['accessToken'];
						$accessTokenSecret =$rows['accessTokenSecret'];
			 	  	   $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
					   $oksend = $twitter->send($txtwi);

if($oksend == 0) { // Úֿד הַּֽ Úדבםֹ ֲבֵׁ׃ַב
				 	  $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
					  $oksend = $twitter->send($txtwi);
                 mysql_query("UPDATE `cron` SET `users` = `users`+1");
                 }else { // הַּֽ ַבÚדבםֹ
                 mysql_query("UPDATE `cron` SET `users` = `users`+1");

                 }
}// הוַםֹ ַבבזבָ




}

}else{ // Úהֿ Úֿד זּזֿ דודַד

if($tweetsT['timestamp']){ // ַבÊֳßֿ דה זּזֿ ÊÛׁםַֿÊ בבַָֿ ַבÚדב

	$add_cron = mysql_query("INSERT INTO `cron` (`id`, `cron`, `tweet`, `users`) VALUES (NULL, '".$count."', '".$tweetsT['tweet']."', '0')");
   $rm_tweets = mysql_query("DELETE FROM `tweetsT` WHERE id= '".$tweetsT['id']."'");
}else{



}


}






?>