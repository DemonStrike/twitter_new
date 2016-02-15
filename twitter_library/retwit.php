<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "3234923661-Jf3vNhBrSlCuusVD0fZJjAbE0ID7kjKZLrCG0As",
    'oauth_access_token_secret' => "GjLzmh3pfK3w5PmtplxkvXl1rfPice75HSobzsztnYg9w",
    'consumer_key' => "Hr8gXMq6dTOMWquht8a7pW1E5",
    'consumer_secret' => "eMFzfAQ5EEuWWHAD31btD7yBusuiX6bQhqu9VKopJ1zL9vK3Ho"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/retweet/685783739805396993.json';
$requestMethod = 'GET';

/** POST fields required by the URL above. See relevant docs as above **/


/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
echo '<pre>', print_r(json_decode($response)),'</pre>';
