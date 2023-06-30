<?php 
    $userid = $_SESSION["userid"];

    $sql = "SELECT * FROM msprogress WHERE userid = '$userid'";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) > 0){
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            if($row["quiz1"] == 1){
                $count += 1;
            }
            if($row["quiz2"] == 1){
                $count += 1;
            }
            if($row["quiz3"] == 1){
                $count += 1;
            }
        }

        echo 
        "<script> 
            setOverallProgress($count)
            console.log('test console log')
        </script>";
    }
?>