<?php

var_dump($_FILES['twit']['tmp_name']);

include_once("db.php");

$row = 1;
$handle = fopen($_FILES['twit']['tmp_name'], "r");
while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {     
   $text_twit = $data[0];
$picture = $data[1];

$result = mysqli_query($connection, "INSERT INTO post_h (picture, text_twit) 
VALUES ('$picture', '$text_twit')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysqli_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
    
    $row++;
      } 
    fclose($handle);    



  






