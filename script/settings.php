<?php

include_once("db.php");


$nick_accaunt_retwit = $_POST['nick_accaunt_retwit'];
$hashtag_retwit = $_POST['hashtag_retwit'];

$result = mysqli_query($connection, "INSERT INTO consumer_key_and_other WHERE user_name_twitter  = 'perfect_body_89' (nick_accaunt_retwit, hashtag_retwit) 
VALUES ('$nick_accaunt_retwit', '$hashtag_retwit')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysqli_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




?>


