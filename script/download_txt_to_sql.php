<?php

include_once("db.php");




$result = mysql_query("LOAD DATA LOCAL INFILE 'http://designwork.com.ua/twitter/ferma/ferma/script/post_perfect_body.txt' INTO TABLE post_h"); 

    
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo mysql_error();
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}





    
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); 


