<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

<div class="main-content">
    <form class="register-info">
    <div class="form-group">
    <label for="name-first-id">Username</label>
    <input type="text" name="username" class="form-control" id="username-id" placeholder="Enter First Name">
    </div>
    <div class="form-group">
    <label for="email-id">Email address</label>
    <input type="email" name="email" class="form-control" id="email-id" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="pass-id">Password</label>
    <input type="password" name="pass" class="form-control" id="pass-id" placeholder="Password">
    </div>
    <div class="alert no-user-alert" role="alert" style="display:none"></div>
    </form>
    <div class="register-option">
    <button type="button" id="btn-register" class="btn btn-sm">Register</button>
    </div>
    </div>

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