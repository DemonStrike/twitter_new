<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
include_once("../script/db.php");
$result = mysqli_query ( $connection, "SELECT * FROM consumer_key_and_other");
$myrow = mysqli_fetch_assoc($result);

$settings = array(
    'oauth_access_token' => "$myrow[oauth_access_token]",
    'oauth_access_token_secret' => "$myrow[oauth_access_token_secret]",
    'consumer_key' => "$myrow[consumer_key]",
    'consumer_secret' => "$myrow[consumer_secret]"
);



/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'http://upload.twitter.com/1.1/media/upload.json';
$img = file_get_contents ('http://designwork.com.ua/twitter/ferma/ferma/script/iceberg.png');
$requestMethod = 'POST';
$postfields = array ('media_data' => base64_encode($img));


/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setPostfields($postfields)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$response = json_decode($response);
$img_cod = $response->media_id;







/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';
$postfields = array ('status' => 'test1', 'media_ids' => $img_cod);


/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setPostfields($postfields)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump ($response);




