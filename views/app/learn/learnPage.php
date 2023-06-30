<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style/learn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/17cb31a600.js" crossorigin="anonymous"></script>
    <title>IndoCano</title>
    <link rel="icon" href="../../../images/logo indocano 2.png">
</head>
    <?php 
        session_start();
        $provinceid = $_SESSION["provinceid"];

        if($provinceid == 1){
            include("../../../includes/learnBali.php");
        }
        else{
            include("../../../includes/learnJateng.php");
        }
    ?>
</html>
</body>
</html>