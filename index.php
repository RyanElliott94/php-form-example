<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Raleway:400,500,600,700,800,900|Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

<?php 
session_start();
if(isset($_SESSION["getDisplayName"]) || isset($_SESSION["getEmail"])){
  echo "<div class='main-content'>
  <div class='home-user-info'>
  <p>Hello $_SESSION[getDisplayName]</p>
  <p class='user-info'>
  These are your profile details: <br/> <br/>User ID: $_SESSION[getUserID] <br/> Email: $_SESSION[getEmail] <br/> Username: $_SESSION[getDisplayName] <br/> Password: $_SESSION[getPassword]
  </p>
  </div>
  <div class='options'>
  <button type='button' id='logout-home' class='btn btn-sm'>Log Out</button>
  </div>
  </div>";
}else{
echo "<div class='main-content'>
<div class='info-text'>
<p>Hello There,</p>
<p>What you are seeing here is a little example of a simple login/registration authentication.</p>
<p>You have 2 choice's, you can either register your own account or you can login using this test account:</p>
<p>Username: Test</p>
<p>Password: Password1</p>
</div>
<div class='options'>
<button type='button' id='login-home' class='btn btn-sm btn-login-home'>Login</button>

<button type='button' id='register-home' class='btn btn-sm btn-register-home'>Register</button>
</div>
</div>";
};
?>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript"  src="assets/js/my_script.js"></script>
</body>
</html>