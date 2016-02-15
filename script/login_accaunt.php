<?php

include_once("db.php");
    
$login_accaunt = $_POST['login_accaunt'];
$number_twit = $_POST['number_twit'];
$number_folowers = $_POST['number_folowers'];

$result = mysql_query("INSERT INTO login_accaunts (login_accaunt, number_twit, number_folowers) 
VALUES ('$login_accaunt', '$number_twit', '$number_folowers')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}

?>