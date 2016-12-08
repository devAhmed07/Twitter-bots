<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

function waseethos ($safe) {
$safe = strip_tags($safe);// ÍÐÝ ÇßæÇÏ html
$safe = trim($safe); // ÍÐÝ ÇáãÓÇÝÇÊ
$safe = mysql_real_escape_string($safe); // ÇÖÇÝÉ ÈÇß ÓáÇÔ æåí ÎÇÕå ÈÞæÇÚÏ ÇáÈíÇäÇÊ ÝÞØ /'
return $safe;
}


?>

