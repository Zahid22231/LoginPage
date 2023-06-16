<?php
if (isset($_GET["id"] ) ) {
    $id = $_GET["id"];
    
    $servername = "localhost" ;
    $username = "root" ;
    $password = "";
    $database = "pelajar" ;

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM info_pelajar WHERE id=$id";
    $connection->query($sql);
    
}

header("location:/LoginPage/list_pelajar.php");
exit;
?>