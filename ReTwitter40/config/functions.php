<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

require 'dbconfig.php';

class User {

    function checkUser($id,$username,$access_token_oauth_token,$access_token_oauth_token_secret,$screen_name)
	{
        $query = mysql_query("SELECT * FROM `users` WHERE id = '$id'") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
            # User is already present
$query = mysql_query("UPDATE `users` SET `screen_name` = '$screen_name',username = '$username',`accessToken` = '$access_token_oauth_token',`accessTokenSecret` = '$access_token_oauth_token_secret' WHERE id = '$id'") or die(mysql_error());

if($query){

            $_SESSION['accessToken'] = $access_token_oauth_token;
            $_SESSION['accessTokenSecret'] =  $access_token_oauth_token_secret;
}

 } else {
            #user not present. Insert a new Record
          //  $query = mysql_query("INSERT INTO `users` (oauth_provider, oauth_uid, username,email,twitter_oauth_token,twitter_oauth_token_secret,accessToken,accessTokenSecret,screen_name) VALUES ('$oauth_provider', $uid, '$username','$email','$twitter_otoken','$twitter_otoken_secret','$access_token_oauth_token','$access_token_oauth_token_secret','$screen_name')") or die(mysql_error());
   //    $query = mysql_query("UPDATE `users` SET ,`accessToken` = '$access_token_oauth_token',`accessTokenSecret` = '$access_token_oauth_token_secret' WHERE  id = '$id'") or die(mysql_error());
        }
        return $result;
    }

    
    


}


?>

