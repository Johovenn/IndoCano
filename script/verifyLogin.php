<?php
    session_start();

    $_SESSION["registerStatus"] = "";

    $errorMessage = "";
    $_SESSION["username"] = "";
    $_SESSION["userid"] = "";
    $_SESSION["loginStatus"] = false;


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM userdata WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(!empty($username) && !empty($password)){
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                
                if(strcmp($password, $row["password"]) == 0){
                    $_SESSION["loginStatus"] = true;
                    $_SESSION["username"] = $username;
                    $_SESSION["userid"] = $row["userid"];
                    header("Location: app/homePage.php");
                }
                else{
                    $errorMessage = "Invalid username or password!";
                }
            }
            else{
                $errorMessage = "Invalid username or password!";
            }
        }
        else{
            $errorMessage = "Please fill in all the forms!";
        }
    }
?>