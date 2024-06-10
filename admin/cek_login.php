<?php
	session_start();

	include '../koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");

	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$coba = mysqli_fetch_assoc($data);
		
		if($coba['role']=="admin"){
			$_SESSION['username'] = $username;
			$_SESSION['id_admin'] = $coba["id_admin"];
			$_SESSION['role'] = "admin";
			$_SESSION['status'] = "login";
			header("location:dashboard.php");
		}else{
			header("location:index.php");
		}
	}else{
		header("location:index.php");
	}
?>
