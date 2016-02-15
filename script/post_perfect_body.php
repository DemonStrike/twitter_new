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
$url = 'https://api.twitter.com/1.1/users/lookup.json';
$getfield = 'screen_name=perfect_body_89';
$requestMethod = 'GET';



/** Perform a POST request and echo the response **/ 
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$count_followers = json_decode($response);




$count_followers_save = $count_followers[0]->followers_count;
echo $count_followers_save;


    
$statuses_count_save = $count_followers[0]->statuses_count;
echo $statuses_count_save;



include_once("db.php");


$result = mysql_query("UPDATE login_accaunts  SET number_folowers = '$count_followers_save' WHERE `login_accaunt` = 'https://twitter.com/perfect_body_89'");


if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}

$result = mysql_query("UPDATE login_accaunts  SET number_twit = '$statuses_count_save' WHERE `login_accaunt` = 'https://twitter.com/perfect_body_89'");


if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




    
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); 


