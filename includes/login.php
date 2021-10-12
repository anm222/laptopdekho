<?php include("dbcon.php"); ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 

if(isset($_POST['login'])) {

    $u_name = $_POST['username'];
    $u_password = $_POST['password'];

$query = "SELECT * FROM registered_user";
$login_result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($login_result)) {

    $u_id = $row['user_id'];
    $u_full_name = $row['user_full_name'];
    $u_email = $row['user_email'];
    $user_name = $row['username'];
    $user_password = $row['user_password'];

    if($u_name === $user_name && $u_password === $user_password){

        $_SESSION['user_full_name'] = $u_full_name;
        $_SESSION['user_email'] = $u_email;
        $_SESSION['username'] = $user_name;

        header("Location: ../index.php?id={$u_id}");
    }else {
        echo "Wrong credentials 😶";
    }

}



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopDekho - Login</title>
    <link rel="stylesheet" href="login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center align-content-center middle">
            <div class="logo d-flex p-3">
            <img class="center" src="../images/logo-eye.png" alt="">                
            </div>
            <div class="col-lg-4 col-12 card shadow p-3">
                <form action="" method="POST" class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">

                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control"> <br>

                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                </form>
                <br>
                <p>Don't have an account? <a class="text-decoration-none c-eye" href="register.php">SignUp</a> Now!</p>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>