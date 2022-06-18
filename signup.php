<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <div class="flex">
        <div class="w-25 mx-auto pt-5">
            <div class="h1">
                Register
            </div>
        <form method="POST" action=""> 

<!-- Email input -->
<div class="form-outline mb-4">
<input type="text" name="uname" class="form-control" />
<label class="form-label" for="uname">Username</label>
</div>


<!-- Email input -->
<div class="form-outline mb-4">
<input type="email" name="email" class="form-control" />
<label class="form-label" for="email">Email address</label>
</div>

<!-- Password input -->
<div class="form-outline mb-4">
<input type="password" name="password" class="form-control" />
<label class="form-label" for="password">Password</label>
</div>


<!-- Submit button -->
<button type="submit" name="submit-signin" value="submit-signin" class="btn btn-primary btn-block mb-4">Sign in</button>

</form>
        </div>
    </div>
</body>
</html>

<?php
 
if(isset($_POST['submit-signin'])){
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    var_dump($uname);

    $sql = "INSERT INTO `login` (`username`, `email`, `password`, `status`) VALUES ('$uname', '$email', '$pass', 1)";

    include_once('connection.php'); 

    mysqli_query($conn, $sql);

    header('location: ./signin.php');
}
?>