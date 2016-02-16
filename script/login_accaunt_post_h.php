<?php

include_once("db.php");
    
$picture = $_POST['picture'];
$text_twit = $_POST['text_twit'];
$post_time = $_POST['post_time'];

$result = mysqli_query($connection, "INSERT INTO post_h (picture, text_twit, post_time) 
VALUES ('$picture', '$text_twit', '$post_time')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysqli_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}

?>