<?php

$connection = mysqli_connect("financec.mysql.ukraine.com.ua", "financec_ferma", "6cv6zbx9");
$db = mysqli_select_db($connection, "financec_ferma");;
mysqli_query($connection, " SET NAMES 'utf8' ");

if (!$connection || !$db) 
{
    exit(mysqli_error());
}

?>