<?php

$connection = mysql_connect("financec.mysql.ukraine.com.ua", "financec_ferma", "6cv6zbx9");
$db = mysql_select_db("financec_ferma");
mysql_query(" SET NAMES 'utf8' ");

if (!$connection || !$db) 
{
    exit(mysql_error());
}

?>