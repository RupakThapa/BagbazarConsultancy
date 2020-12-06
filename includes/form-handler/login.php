<?php
session_start();
$mysqli = new mysqli("localhost","root","root","blogsys") or die("could not connect to db");

if(isset($_POST['login_submit'])){
$email = $_POST['email'];
$password= $_POST['password'];

$sql = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_assoc($sql);
$db_email= $row['email'];
$db_pwd= $row['password'];

$rehash = md5($password);

if($email === $db_email && $db_pwd === $rehash){
$_SESSION['userLogged'] = $email;
header("Location: ../../admin");
}
else{
    echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('Wrong Login details');
    window.location.replace(\"../../boecadmin.php\");
</SCRIPT>";

    //echo "<script>confirm('Wrong Login details')</script>";
//     $_SESSION['log_email'] =$email;
// header("Location: ../../login-admin.php?wrong_entries");
//sleep(10);
//header("Location: ../../cms-admin.php");
}

}
?>