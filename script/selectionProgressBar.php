<?php 
    session_start();
    include("dbconnection.php");
    $userid = $_SESSION["userid"];
    $value1 = 0;

    $sql = "SELECT * FROM msprogress WHERE userid = $userid AND provinceid = 1";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) == 1){
        $baliRow = mysqli_fetch_assoc($result);
        if($baliRow["quiz1"] == 1){
            $value1 = $value1 + 1;
        }
        if($baliRow["quiz2"] == 1){
            $value1 = $value1 + 1;
        }
        if($baliRow["quiz3"] == 1){
            $value1 = $value1 + 1;
        }
        echo "<script> setBaliProgress($value1) </script>";
    }

    $value2 = 0;

    $sql = "SELECT * FROM msprogress WHERE userid = $userid AND provinceid = 2";
    $result2 = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result2) == 1){
        $jatengRow = mysqli_fetch_assoc($result2);
        if($jatengRow["quiz1"] == 1){
            $value2 = $value2 + 1;
        }
        if($jatengRow["quiz2"] == 1){
            $value2 = $value2 + 1;
        }
        if($jatengRow["quiz3"] == 1){
            $value2 = $value2 + 1;
        }
        echo "<script> setJatengProgress($value2) </script>";
    }
?>