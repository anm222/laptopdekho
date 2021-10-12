<?php include("dbcon.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopDekho - SignUp</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="register_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center align-content-center middle-reg">
            <div class="logo d-flex p-3">
            <img class="center" src="../images/logo-eye.png" alt="">                
            </div>
            <div class="col-lg-4 col-12 card shadow p-3">
                <form action="" method="POST" class="form-group">


<?php 

if(isset($_POST['signup'])) {

    $user_full_name = $_POST['user_full_name'];
    $user_email = $_POST['user_email'];
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];

    $query = "INSERT INTO registered_user(user_full_name, user_email, username, user_password) VALUES('{$user_full_name}', '{$user_email}', '{$username}', '{$user_password}')";
    $reg_result = mysqli_query($con, $query);

    if(!$reg_result) {
        die("Query Failed".mysqli_error($con));
    }else {
        header("Location: login.php");
    }


}

?>


                    <label for="fullname">Full Name</label>
                    <input type="text" name="user_full_name" class="form-control">

                    <label for="email">Email Id</label>
                    <input type="email" name="user_email" class="form-control">

                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">

                    <label for="password">Password</label>
                    <input type="password" name="user_password" class="form-control"> <br>

                    <input class="btn btn-warning" type="submit" name="signup" value="SignUp">
                </form>
                <br>
                <p>Already have an account. <a class="text-decoration-none c-eye" href="login.php">Login</a> Now!</p>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>