<?php 
    $sql = "SELECT * FROM msprogress WHERE userid = '$userid'";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) > 0){
        $counter = 1;
        while($row = mysqli_fetch_assoc($result)){
            $count = 0;
            if($row["quiz1"] == 1){
                $count += 1;
            }
            if($row["quiz2"] == 1){
                $count += 1;
            }
            if($row["quiz3"] == 1){
                $count += 1;
            }

            $provinceid = $row["provinceid"];
            $sql = "SELECT * FROM msprovince WHERE provinceid = $provinceid";
            $provinceResult = mysqli_query($conn, $sql);

            $provinceRow = mysqli_fetch_assoc($provinceResult);
            $provinceName = $provinceRow["provincename"];
            $progressBarId = "progress-bar-".$counter;
            $percentageId = "percentage-".$counter;
            $buttonId = "button-".$provinceRow["provinceid"];

            
            echo "
                <div class='name1'>
                    <div class='alprog1'>
                        <label class='label'><b>$provinceName</b></label>
                        <progress id='$progressBarId' value='2' max='3'></progress>
                        <label id='$percentageId'>0%</label>
                    </div>
                    <button id='$buttonId'>Go to Province</button>
                </div>

                <script> setProvinceProgress('$progressBarId', '$percentageId', '$count') </script>
            ";

            $counter++;
        }
    }
?>