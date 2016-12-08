<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://u-alhilal.net/tweet/cronTW.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);

?>