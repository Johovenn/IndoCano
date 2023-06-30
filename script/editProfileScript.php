<?php 
    $userid = $_SESSION["userid"];
    $errorMessage = "initial state";

    $defaultValueSql = "SELECT * FROM userdata WHERE userid = $userid";
    $defaultValueResult = mysqli_query($conn, $defaultValueSql);
    $row = mysqli_fetch_assoc($defaultValueResult);

    $defaultFirstName = $row["firstName"];
    $defaultLastName = $row["lastName"];
    $defaultUsername = $row["username"];
    $defaultEmail = $row["email"];
    $defaulDob = $row["dob"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = $_POST["first-name"];
        $lastName = $_POST["last-name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];

        $sql = "SELECT * FROM userdata WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(!empty($firstName) && !empty($lastName) && !empty($username) && !empty($email) && !empty($dob)){
            if(strpos($email, "@gmail.com") !== false){
                $updateQuery = "UPDATE userdata SET firstName = '$firstName', lastName = '$lastName', username = '$username', email = '$email', dob = '$dob' WHERE userid = $userid";
                $updateResult = mysqli_query($conn, $updateQuery);

                $errorMessage = "query berhasil";
            }
            else{
                $errorMessage = "error di email";
            }
            
        }
        else{
            $errorMessage = "error di empty";
        }
    }
?>