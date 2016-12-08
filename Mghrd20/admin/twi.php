<?php
 session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
  if($_SESSION['admin'] == 1) {
  
  require_once('./../config/twitter.class.php');
require_once('./../config/dbconfig.php');
require('./../config/twconfig.php');

 $users = mysql_query("SELECT * FROM users ") or die(mysql_error());
 $nums = mysql_num_rows($users);
 $txtwi = $_POST['txtwi'];
 $consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
 
 $sql= mysql_query("INSERT INTO `tweetsT` (`id`, `timestamp`, `tweet`, `group`) VALUES (NULL, '".time()."', '".$txtwi."', '0')") ;
/* while($rows = mysql_fetch_assoc($users)) {
$accessToken = $rows['accessToken'];
$accessTokenSecret =$rows['accessTokenSecret'];
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$twitter->send($txtwi);
//echo $status ? 'OK' : 'ERROR';
}
*/
echo '<head><meta charset="UTF-8"></head>';

echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم الإنتهاء من التغريد</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php\' />';
  
	
	
}else{echo '<head><meta charset="UTF-8"> <meta http-equiv=\'refresh\' content=\'0; url=index.php\' /></head>'; echo ' انت في المكان الخطأ' ;	}





?>