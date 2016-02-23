<?php

include_once("db.php");


$nick_accaunt_retwit = $_POST['nick_accaunt_retwit'];
$hashtag_retwit = $_POST['hashtag_retwit'];



$result = mysqli_query($connection, "UPDATE consumer_key_and_other SET nick_accaunt_retwit='$nick_accaunt_retwit', hashtag_retwit='$hashtag_retwit' 
WHERE user_name_twitter  = 'perfect_body_89'");

 


//echo "update consumer_key_and_other (nick_accaunt_retwit, hashtag_retwit) VALUES ('$nick_accaunt_retwit', '$hashtag_retwit') WHERE user_name_twitter  = 'perfect_body_89'";

if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysqli_error($connection);
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}




?>


