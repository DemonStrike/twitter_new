<?php

var_dump($_REQUEST);

include_once("db.php");

$row = 1;
$handle = fopen("post_perfect_body.txt", "r");
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



  






