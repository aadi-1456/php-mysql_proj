<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- custom css -->
  <link rel="stylesheet" href="admindash.css" />
  

</head>

<body>
  <!-- Side-Nav -->
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg"
         alt="">
    <div class="ms-3">
      <h5 class="fs-5 mb-0">
        <a class="text-decoration-none text-light" href="#">Admin</a>
      </h5>
     
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2">

    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="">
    <li class="">
    <a href="#" class="text-light fw-bold">DashBoard</a>
    <hr class="border border-danger border-2 opacity-50">
    </li>
    <li class="">
    <a href="usertable.php" class="text-light fw-bold"> User Management</a>
    <hr class="border border-primary border-2 opacity-50">
    </li>
    <li class="">
      <a href="Studentdash.php" class="text-light fw-bold"> Student Management</a>
      <hr class="border border-warning border-2 opacity-50">
    </li>
    
    <li class="">
      <a href="adminabout.php" class="text-light fw-bold"> About</a>
      <hr class="border border-success border-2 opacity-50">
    </li>
    <li class="">
      <a href="#" class="text-light fw-bold"> Contact</a>
      <hr class="border border-secondary border-2 opacity-50">
    </li>
   
   
   
  </ul>
</aside>

<section id="wrapper">
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="uil-bars text-white"></i>
        </button>
        <a class="navbar-brand fw-bold" href="#">admin<span class="main-color fw-bold">kit</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown fw-bold">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item text-light" href="#">My account</a>
              </li>
              <li><a class="dropdown-item text-light" href="#">My inbox</a>
              </li>
              <li><a class="dropdown-item text-light" href="#">Help</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-light" href="../mainpage/mainpage.php">Log out</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div class="content rounded-3 p-3">
        <h1 class="fs-3 text-light">Welcome to Dashboard</h1>
        <p class="mb-0">Hello Admin, welcome to your Admin dashboard!</p>
      </div>
    </div>

    
    <section class="statistics mt-4">
    
  
      <div class="row">
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-3">
            <div class="d-flex align-items-center">
            <?php
                $sql = "SELECT id, usn, batch FROM students";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
                <h3 class="mb-0"><?php echo $row ?></h3> <span class="d-block ms-2 fw-bold">Total Student</span>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
            <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
            <div class="ms-3">
            <div class="d-flex align-items-center">
                <h3 class="mb-0">3</h3> <span class="d-block ms-2 fw-bold">  Batchs</span>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box d-flex rounded-2 align-items-center p-3">
            <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
            <div class="ms-3">
            <div class="d-flex align-items-center">
                <?php
                $sql = "SELECT id, username, password, batch FROM users";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
                <h3 class="mb-0"><?php echo $row ?></h3><span class="d-block ms-2 fw-bold">Total Users</span>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>

   

    

    <section class="statis mt-4 text-center">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-primary p-3">
          <?php
                $b1=1;
                $sql = "SELECT id, usn, batch FROM students where batch=$b1";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <i class="uil-eye"></i>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 1 Student</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-danger p-3">
            <i class="uil-user"></i>
            <h3>245</h3>
            <p class="lead fw-bold">User Request</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <div class="box bg-warning p-3">
          <?php
                $b1=2;
                $sql = "SELECT id, usn, batch FROM students where batch=$b1";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <i class="uil-shopping-cart"></i>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 2 Student</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box bg-success p-3">
          <?php
                $b1=3;
                $sql = "SELECT id, usn, batch FROM students where batch=$b1";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <i class="uil-feedback"></i>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 3 Student</p>
          </div>
        </div>
      </div>
    </section>

    
  </div>
</section>
  <!-- bootstrap js -->
  <script src="adimindash.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>