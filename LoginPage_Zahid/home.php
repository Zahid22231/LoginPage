<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama']))

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">

     
</head>
<style>
     body {
        background-image: url(webback.jpg);
    }
</style>
<body>
     <h1>Selamat Datang, Sila Klik Pilihan anda, <?php echo $_SESSION['nama']; ?></h1>
     <a href="list_pelajar.php">List Pelajar</a> <br>
     <a href="logout.php">Logout</a>
</body>
</html>

