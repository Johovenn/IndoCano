<?php 
    session_start();

    echo "<script> console.log('session province id sekarang $provinceid') </script>";

    $param = $_GET["param"];
    $_SESSION["provinceid"] = $param;
    $provinceid = $_SESSION["provinceid"];
?>