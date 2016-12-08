
  <?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
header('Location: index.php?go=logoff ');
require './../config/dbconfig.php';
if($_SESSION['admin'] == 1) {
$txt1 = $_POST['Password1'];
$txt2 = $_POST['Password2'];


mysql_query("UPDATE `admincp` SET `Password` = '".$txt2."' WHERE `id` =1  AND  `Password`= '".$txt1."' ") ;

echo '<meta http-equiv=\'refresh\' content=\'0; url=index.php?go=logoff\' />';

}else{echo ' انت في المكان الخطأ' ;	}

 ?>