<?php
 session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

function timet ($t,$h=0) {
$xh = date("h",$t) * 60 *60;
$xm = date("i",$t) *60;
$xt = $xh+$xm;
$o =(($t-$xt)+$h);
return $o;
}

if($_SESSION['admin'] == 1) {
require_once('./../config/dbconfig.php');
////
@$date =strtotime($_POST['date']);
@$timeh = $_POST['timeh'] ;
@$timem = $_POST['timem'] ;
@$times = $_POST['times'] ;
@$txtwi = $_POST['txtwi'] ;
//


@$timedate = ($date)+(($timeh*60)*60)+($timem*60)+($times);


$sql= mysql_query("INSERT INTO `tweetsT` (`id`, `timestamp`, `tweet`, `group`) VALUES (NULL, '".$timedate."', '".$txtwi."', '0')") ;

echo '<head><meta charset="UTF-8"></head>';
echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم جدولة التغريدات</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=TimeTwitterV\' />';
  	
}else{
  echo '<head><meta charset="UTF-8"> <meta http-equiv=\'refresh\' content=\'0; url=index.php\' /></head>';	
	echo ' انت في المكان الخطأ' ;
}





?>