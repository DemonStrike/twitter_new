<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
include_once("db.php");
 $result = mysql_query ("SELECT * FROM consumer_key_and_other", $connection);
          $myrow = mysql_fetch_assoc($result);

$settings = array(
    'oauth_access_token' => "$myrow[oauth_access_token]",
    'oauth_access_token_secret' => "$myrow[oauth_access_token_secret]",
    'consumer_key' => "$myrow[consumer_key]",
    'consumer_secret' => "$myrow[consumer_secret]"
);




/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/ 
$url = 'https://upload.twitter.com/1.1/media/upload.json';
$requestMethod = 'POST';
$postfields = array ('media' => 'http://designwork.com.ua/twitter/ferma/ferma/script/iceberg.png');


/** Perform a POST request and echo the response **/ 
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setPostfields($postfields)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump ($response);





    
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ 
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';
$postfields = array ('status' => 'test1'); **/ 


/** Perform a POST request and echo the response 
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setPostfields($postfields)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump ($response);
**/ 










    
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); 

