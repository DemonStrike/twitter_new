<?php

include_once("db.php");

$names = array_keys($_POST);
foreach($names as $name) {
$result = mysqli_query ($connection, "DELETE FROM post_h WHERE id='$name'");
    }
if ($result) {
    echo "Данные успешно сохранены!";

}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
