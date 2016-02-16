<?php

include_once("db.php");
    
$result = mysqli_query($connection, "UPDATE login_accaunts  SET number_folowers = '14'");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}






    
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); 


