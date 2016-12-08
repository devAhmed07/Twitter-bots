<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
require("loq.php");
$template = "template";
require_once($template."/header.html");
echo '<meta http-equiv=\'refresh\' content=\'1; url=index.php\' />';
echo '<div id="center">  <a  class="btn btn-large btn-info" href="index.php">عودة للرئيسية</a><br /><br /><br /><br /><br /><br /><br /><br />' ;
if(isset($_POST["captcha_code"])&& isset($_POST["inputSubject"])&& isset($_POST["inputMessage"])&& isset($_POST["inputEmail"])&& $_POST["captcha_code"]!="" && $_SESSION["code"]==$_POST["captcha_code"]) {

echo ' <h1> شكرا للتواصل معنا سوف يتم الرد عليك في اقرب فرصة  </h1>';
$inputName=$_POST['inputName'];
$inputEmail=$_POST['inputEmail'];
$inputSubject=$_POST['inputSubject'];
$inputMessage=$_POST['inputMessage'];
$headers = 'From:'.$inputEmail;
mail($row['Mail'], $inputSubject, $inputMessage, $headers);
$_SESSION["code"] = 'gfgfgfgfgt';

}else{

 echo ' <h1> فشل الارسال الرجاء حول مجددا  </h1>';

 	}


echo ' </div>' ;
require_once($template."/footer.html");













?>