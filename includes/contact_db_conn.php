<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "contact_db";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(!$conn)
{
    die("connection failed:" .mysqli_connect_error());
}

?>





























