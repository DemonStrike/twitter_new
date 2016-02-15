<?php

include_once("db.php");
    
$oauth_access_token = $_POST['oauth_access_token'];
$oauth_access_token_secret = $_POST['oauth_access_token_secret'];
$consumer_key = $_POST['consumer_key'];
$consumer_secret = $_POST['consumer_secret'];

$result = mysql_query("INSERT INTO consumer_key_and_other (oauth_access_token, oauth_access_token_secret, consumer_key, consumer_secret) 
VALUES ('$oauth_access_token', '$oauth_access_token_secret', '$consumer_key', '$consumer_secret')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




?>