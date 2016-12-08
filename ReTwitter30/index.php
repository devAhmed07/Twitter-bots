<?php
require_once'loq.php';
$template = "template";
require_once("config/dbconfig.php");
//
$admin_user = mysql_query("SELECT * FROM `AdminCp` LIMIT 1");
$admin = mysql_fetch_assoc($admin_user);
///
 $login = $admin['Username'];
$pass = $admin['Password'];

if(@$_SESSION['ok'] != 5){

if((@$_POST['ps']!= $pass || @$_POST['us'] != $login)|| !$_POST['us'])
{
require_once($template."/header.html");
require_once($template."/ok.html");
require_once($template."/footer.html");
    exit;

}else{
  ////////////

$_SESSION['ok'] = 5 ;
require_once($template."/header.html");
if(isset($_SESSION['id'])){
require_once($template."/registered.html");


}else{

require_once($template."/noregistered.html");

}

require_once($template."/footer.html");
//////////
}

}else{

require_once($template."/header.html");
if(isset($_SESSION['id'])){
require_once($template."/registered.html");


}else{

require_once($template."/noregistered.html");

}

require_once($template."/footer.html");

}






?>