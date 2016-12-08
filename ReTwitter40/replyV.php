<?php 
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################		
require_once'loq.php';
$template = "template";
require_once($template."/header.html");
if(isset($_SESSION['id'])){
	
require_once($template."/replyV.html");


}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");

?>