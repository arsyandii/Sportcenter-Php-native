<?php 

session_start();

include 'config/konek.php';
 

$username = $_POST['username'];
$password = md5($_POST['password']);
 

$konek = mysqli_query($konek,"SELECT * FROM tb_user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($konek);

 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dash-admin/index.php");
}else{
	header("location:daftar.php");	
}

?>
