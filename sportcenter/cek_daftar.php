<?php
session_start();

include 'config/konek.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
 
$query = "INSERT INTO tb_user VALUES (null, '$username', '$password')";
$sql = mysqli_query($konek,$query);
if($sql){
	header("location:index.php");
}
?>