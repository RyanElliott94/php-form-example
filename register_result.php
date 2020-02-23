<?php
    include "connect.php";
    include "user-details.php";

    $new_sql_table = "CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(100) NOT NULL UNIQUE,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255))";
        
$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
$email = $_POST["email"];
$username = $_POST["username"];

$new_user = "INSERT INTO users(email, username, password) 
VALUES ('$email', '$username', '$pass')";

if($mysqli->query($new_user)){
    setUserDetails($mysqli);
    echo json_encode(Array("hasRegistered" => true));
} else{
    echo json_encode(Array("error" => "Oops something went wrong! Maybe you already have an account?"));
}

?>
