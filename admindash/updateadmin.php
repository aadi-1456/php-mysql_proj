<?php
include "config.php";
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $batch=$_POST['batch'];

   $sql="update 'users' set username='$username', password='$password', batch='$batch' where id=$id";
    $result=mysqli_query($mysql_db,$sql);
    if($result){
        echo "Successful";
    }
    else{
        echo "no error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- bootstrap 5 css -->

  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
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
         src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
         alt="">
    <div class="ms-2">
      <h5 class="fs-6 mb-0">
        <a class="text-decoration-none" href="#">Admin</a>
      </h5>
     
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2">
    <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here">
    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="">
    <li class="">
      <a href="admindash.php">DashBoard</a>
    </li>
    <li class="">
    <a href="usertable.php"> User Management</a>
     
    </li>
    <li class="">
      <a href="Studentdash.php"> Student Management</a>
    </li>

    <li class="">
      <a href="#"> Batch's</a>
    </li>
    <li class="">
      <a href="#"> About</a>
    </li>
    <li class="">
      <a href="#"> Contact</a>
      

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
        <a class="navbar-brand" href="#">admin<span class="main-color">kit</span></a>
      </div>
      <div class="collapse navbar-collapse" id="toggle-navbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">My account</a>
              </li>
              <li><a class="dropdown-item" href="#">My inbox</a>
              </li>
              <li><a class="dropdown-item" href="#">Help</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div class="content rounded-3 p-3">
        <h1 class="fs-3">User Database Table</h1>
        <p class="mb-0">It consists of all the faculty login credintial</p>
      </div>
    </div>

   

   
    <section class="charts mt-4">
      <div class="chart-container p-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                <input type="text" class="form-control" id="username" name="username"aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light">Password</label>
                <input type="password" class="form-control  " id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light">Batch</label>
                <input type="text" class="form-control  " id="batch" name="batch">
            </div>
            <button type="submit" class="btn btn-dark text-light" name="submit">Update</button>
        </form>
  

        
      </div>
    </section>
  </div>
</section>
  <!-- bootstrap js -->
  <script src="adimindash.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>