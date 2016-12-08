<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

// معلومات التطبيق من تويتر    https://dev.twitter.com/apps

define('YOUR_CONSUMER_KEY', 'hZuoPbpnHgBwUjcy13kxeQ'); // Consumer key
define('YOUR_CONSUMER_SECRET', '7MSAtJXb7NgjX5tpaBptbRn0Bpd8dB8bZbaLvfyT60');  //CONSUMER_SECRET
define('REDIRECTED', 'http://n3n6.com/hashtag/getTwitterData.php'); //مسار getTwitterData كامل
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
function getHashtags($string) {
    $hashtags= FALSE;
    preg_match_all("/(#\w+)/u", $string, $matches);
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    }
    return $hashtags;
}
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
?>
