<?php 
include "connect.php";
include "user-details.php";

$username = $_POST["username"];
$pass = $_POST["pass"];
$securePass = password_hash($pass, PASSWORD_DEFAULT);

$getUser = $mysqli->prepare("SELECT username, password FROM users WHERE username=?");
$getUser -> bind_param("s", $username);
$getUser -> execute();
$getUser -> store_result();

if($getUser -> num_rows() > 0){
    $getUser -> bind_result($username, $securePass);
    $getUser -> fetch();
    if(password_verify($pass, $securePass)){
        setUserDetails($mysqli);
        echo json_encode(Array("hasLoggedIn" => true));
    }else{
        echo json_encode(Array("error" => "Wrong username/password!"));
    }
} else{
    echo json_encode(Array("error" => "Oops something went wrong! Maybe you should try to register?"));
}
$getUser->close();
?>
