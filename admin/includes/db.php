<?php

$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="blogsys";

$connection= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$connection){
    die("couldn't connect to the database".mysqli_error(connection));
}
?>