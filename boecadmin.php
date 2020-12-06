<?php
include 'includes/header.php';
include 'admin/includes/db.php';

$query =mysqli_query($connection, "SELECT * FROM users");
if(mysqli_num_rows($query) === 1){
include 'login.php';
}
?>
