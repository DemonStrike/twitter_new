<?php

include_once("db.php");

$names = array_keys($_POST);
foreach($names as $name) {
$result = mysql_query ("DELETE FROM login_accaunts WHERE id='$name'");
    }
if ($result) {
    echo "Данные успешно сохранены!";
    var_dump($str);

}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
