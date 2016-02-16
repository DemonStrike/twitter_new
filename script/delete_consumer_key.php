<?php

include_once("db.php");

$names = array_keys($_POST);
foreach($names as $name) {
$result = mysqli_query ($connection, "DELETE FROM consumer_key_and_other WHERE id='$name'");
    }
if ($result) {
    echo "Данные успешно сохранены!";
    var_dump($str);

}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
