<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
include_once("../script/db.php");
 $result = mysqli_query ($connection, "SELECT * FROM consumer_key_and_other");
          $myrow = mysqli_fetch_assoc($result);

$settings = array(
    'oauth_access_token' => "$myrow[oauth_access_token]",
    'oauth_access_token_secret' => "$myrow[oauth_access_token_secret]",
    'consumer_key' => "$myrow[consumer_key]",
    'consumer_secret' => "$myrow[consumer_secret]"
);


var_dump($settings);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/ 
$url = 'https://api.twitter.com/1.1/friends/ids.json?cursor=-1&screen_name=perfect_body_89&count=5000';
$requestMethod = 'GET';



/** Perform a POST request and echo the response **/ 
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$count_followers = json_decode($response);

var_dump ($count_followers);


/**

$nik = array ("BurningPounds", "HeaIthTips", "FlT_MOTIVATION", "FlTNESS", "BeFitMotivation", "FitnessIife", "Fit_Motivator", "FitspirationaI");
$random_nik = $nik[array_rand($nik)];
echo ($random_nik);

    

    
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/ /**
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=' . $random_nik . '&count=1';
$requestMethod = 'GET';

/** POST fields required by the URL above. See relevant docs as above **/


/** Perform a POST request and echo the response **/ /**
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();



$response = json_decode($response);
if (isset($response[0]) && isset($response[0]->id)) {
    
    $url = 'https://api.twitter.com/1.1/statuses/retweet/' . $response[0]->id . '.json';
    $postfields = array('id' => $response[0]->id); 
$requestMethod = 'POST';
    $twitter = new TwitterAPIExchange($settings);

    $response = $twitter->setPostfields($postfields)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
    echo '<pre>', print_r(json_decode($response)),'</pre>';
}
    
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/


