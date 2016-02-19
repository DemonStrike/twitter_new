<?php

include_once("db.php");


$user_name_twitter = $_POST['user_name_twitter'];
$oauth_access_token = $_POST['oauth_access_token'];
$oauth_access_token_secret = $_POST['oauth_access_token_secret'];
$consumer_key = $_POST['consumer_key'];
$consumer_secret = $_POST['consumer_secret'];

$result = mysqli_query($connection, "INSERT INTO consumer_key_and_other (user_name_twitter, oauth_access_token, oauth_access_token_secret, consumer_key, consumer_secret) 
VALUES ('$user_name_twitter', '$oauth_access_token', '$oauth_access_token_secret', '$consumer_key', '$consumer_secret')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysqli_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




?>


