<?php include("includes/dbcon.php"); ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 

// if(isset($_GET['id']) && $_SESSION["username"]) {

//   $u_id = $_GET['id'];

//     //Do not show protected data, redirect to login...
//     header('Location: index.php?id={$u_id}');


// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopDekho</title>
    <link rel="stylesheet" href="style.css">
    <!-- The slick slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!-- ---------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="body-bg">
    

    <!----------------------------------------- NavBar -------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-c-flipkart">
  <div class="container-fluid">
      <img width="52" src="images/logo-eye.png" alt="">
    <a class="navbar-brand c-fff snb-font pt-fs" href="#">&nbsp; Laptop<span class="c-272727"><b class="snb-font">Dekho</b></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active c-fff" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-fff" href="#">Macbook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-fff" href="#">Windows</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle c-fff" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brands
          </a>
          <ul class="dropdown-menu bg-c-flipkart" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item c-fff" href="#">Action</a></li>
            <li><a class="dropdown-item c-fff" href="#">Another action</a></li>
            <li><hr class="dropdown-divider c-fff"></li>
            <li><a class="dropdown-item c-fff" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link c-fff" href="#">Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link c-fff" href="admin">Admin</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><img src="images/shopping-cart.png" alt=""> &nbsp;</a>

      <?php 
      
      if(!$_SESSION) {
        
        echo "
        <a href='includes/login.php' class='btn btn-warning'>Login</a>
        
        ";
        
      }else {
        echo "
        <a href='includes/logout.php' class='btn btn-warning'>Logout</a>
        ";
      }
      
      ?>

        

        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>

<!--------------------------------------------- Off Canvas ------------------------------------------>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>

    <?php 

  if(isset($_GET['id'])) {

  $userid = $_GET['id'];

  $query = "SELECT * FROM registered_user WHERE user_id = '{$userid}'";
  $result = mysqli_query($con, $query);

  while($row = mysqli_fetch_assoc($result)) {

    $u_f_name = $row['user_full_name'];
    $u_email = $row['user_email'];
    $username = $row['username'];

  }

  echo "Welcome {$u_f_name}";

}else {
  echo"Login to checkout";
}
?>


      
    </div>

    <?php 
    
    // if(isset('addtocart')) {
    //   echo"Yesss";
    // }
    
    ?>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- --------------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------ NavBar End --------------------------------------- -->

<!-- ------------------------------------------ Categories --------------------------------------- -->
<div class="container-fluid">
    <div class="row mt-2 mob">
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/gaming-laptop.png" alt="">
            <h5 class="text-center">Gaming</h5>
        </div>
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/windows.png" alt="">
            <h5 class="text-center">Windows</h5>
        </div>
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/macbook.png" alt="">
            <h5 class="text-center">Macbook</h5>
        </div>
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/accessories.png" alt="">
            <h5 class="text-center">Accessories</h5>
        </div>
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/tv.png" alt="">
            <h5 class="text-center">Smart TV</h5>
        </div>
        <div class="col-lg-2 col-sm-2 col-2">
            <img class="center d-flex" width="70" src="images/monitors.png" alt="">
            <h5 class="text-center">Monitors</h5>
        </div>
    </div>
</div>



<!-- ------------------------------------------ Categories End --------------------------------------- -->

<!-- ------------------------------------------ Carousel --------------------------------------- -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg-first.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bg-second.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bg-third.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- ------------------------------------------ Carousel End --------------------------------------- -->

<!-- ------------------------------------------ Section 1 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Trending Now</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">


<?php 

$query = "SELECT * FROM trending";
$t_result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($t_result)) {

    $t_image = $row['t_image'];
    $t_name = $row['t_name'];
    $t_price = $row['t_price'];
    $t_specification = $row['t_specification'];

?>


        <div class="card m-2 shadow border-none">
            <img width="538" class="w-100 p-2 d-flex center m-2" src="images/<?php echo $t_image; ?>" alt="" />

            <h5 class="p-2"><?php echo $t_name; ?><span><h5 class="p-2">Price: <?php echo $t_price; ?></h5></span></h5>
            <h5 class="p-2">Specification: <span><h6><?php echo $t_specification; ?><a href="">Show More</a></h6></span></h5>
            <input name="addtocart" class="m-2 btn btn-primary" value="Add to Cart"/>
        </div>


<?php

}

?>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 1 End --------------------------------------- -->




<!-- ------------------------------------------ Section 2 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Bestseller</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 2 End --------------------------------------- -->



<!-- ------------------------------------------ Section 3 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Value For Money</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 3 End --------------------------------------- -->



<!-- ------------------------------------------ Section 4 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">SSD</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 4 End --------------------------------------- -->



<!-- ------------------------------------------ Section 5 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Macbook</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 5 End --------------------------------------- -->



<!-- ------------------------------------------ Section 6 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Laptop Accessories</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 6 End --------------------------------------- -->



<!-- ------------------------------------------ Section 7 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Monitors</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 7 End --------------------------------------- -->



<!-- ------------------------------------------ Section 8 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Television</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 8 End --------------------------------------- -->




<!-- ------------------------------------------ Section 9 --------------------------------------- -->
<div class="container">
    <img class="d-flex center mt-2" src="images/vertical_line.png" alt="">
</div>

<div class="container">
    <div class="row mt-2rem mb-2rem">
        <h2 class="bg-text pl-4rem">Cameras</h2>
    </div>
    <div class="row mb-2rem">
    <div class="responsive">
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
            <h5 class="p-2">Price: 58,000/-</h5>
            <h5 class="p-2">Specification: <span><h6>NVIDIA GeForce GTX 1650
                15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)
                Light Laptop without Optical Disk Drive
                Pre-installed Genuine Windows 10 OS <a href="">Show More</a></h6></span></h5>
            <a href="" class="m-2 btn btn-primary">Buy Now!</a>
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          <div class="">
            <img class="w-100 p-2 d-flex center m-2" src="images/gaming-laptop2.jpeg" alt="" />
          </div>
          
        </div>
    </div>
</div>


<!-- ------------------------------------------ Section 9 End --------------------------------------- -->




    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>