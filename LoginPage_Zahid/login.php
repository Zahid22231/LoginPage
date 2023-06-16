<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['nama']) && isset($_POST['password'])) {

	

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$nama = validate($_POST['nama']);
	$pass = validate($_POST['password']);

	if (empty($nama)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user_pelajar WHERE nama='$nama' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['nama'] === $nama && $row['password'] === $pass) {
            	$_SESSION['nama'] = $row['nama'];
            	$_SESSION['nama'] = $row['nama'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect nama or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect nama or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}