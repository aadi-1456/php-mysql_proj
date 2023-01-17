<?php
include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$usn = $_POST["usn"];
	$name = $_POST["name"];
    $surname=$_POST["surname"];
    $dbms=$_POST["dbms"];
    $mp=$_POST["mp"];
    $ss=$_POST["ss"];
	$batch = $_POST["batch"];
			
	$sql = "INSERT INTO `students` ( `usn`,
				`name`,`surname`, `batch`, `dbms`, `mp`, `ss` ) VALUES ('$usn',
				'$name', '$surname', '$batch', '$dbms', '$mp', '$ss')";
	
			$result = mysqli_query($mysql_db, $sql);
            
            $b1no=0;
            $totalb1dbms=0;
            $totalb1mp=0;
            $totalb1ss=0;

            $b2no=0;
           $totalb2dbms=0;
           $totalb2mp=0;
           $totalb2ss=0;

            $b3no=0;
            $totalb3dbms=0;
            $total3mp=0;
            $totalb3ss=0;

            $sql = "SELECT id, usn, name, surname, batch, dbms, mp, ss FROM students";
            $result=mysqli_query($mysql_db,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $batch=$row['batch'];
                    $dbms=$row['dbms'];
                    $mp=$row['mp'];
                    $ss=$row['ss'];	
                    if($batch== 1){
                        $b1no+=1;
                        $totalb1dbms+=$dbms;
                        $totalb1mp+=$mp;
                        $totalb1ss+=$ss;
                    }
                    if($batch == 2){
                        $b2no+=1;
                        $totalb2dbms+=$dbms;
                        $totalb2mp+=$mp;
                        $totalb2ss+=$ss;
                    }
                    if($batch == 3){
                        $b3no+=1;
                        $totalb3dbms+=$dbms;
                        $totalb3mp+=$mp;
                        $totalb3ss+=$ss;
                    }
                }
                $averb1dbms=$totalb1dbms/$b1no;
                $averb1mp=$totalb1mp/$b1no;
                $averb1ss=$totalb1ss/$b1no;

                $averb2dbms=$totalb2dbms/$b2no;
                $averb2mp=$totalb2mp/$b2no;
                $averb2ss=$totalb2ss/$b2no;

                $averb3dbms=$totalb3dbms/$b3no;
                $averb3mp=$totalb3mp/$b3no;
                $averb3ss=$totalb3ss/$b3no;
               
                $sql = "UPDATE `chartdb` SET `dbms` = '$averb1dbms', `mp` = '$averb1mp', `ss` = '$averb1ss' WHERE `chartdb`.`batch` = 1";
			    $result = mysqli_query($mysql_db, $sql);	

                $sql = "UPDATE `chartdb` SET `dbms` = '$averb2dbms', `mp` = '$averb2mp', `ss` = '$averb2ss' WHERE `chartdb`.`batch` = 2";
			    $result = mysqli_query($mysql_db, $sql);	

                $sql = "UPDATE `chartdb` SET `dbms` = '$averb3dbms', `mp` = '$averb3mp', `ss` = '$averb3ss' WHERE `chartdb`.`batch` = 3";
			    $result = mysqli_query($mysql_db, $sql);	

               
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
    <li class="text-decoration-none">
      <a href="admindash.php" class="text-light fw-bold">DashBoard</a>
      <hr class="border border-danger border-2 opacity-50">
    </li>
    <li class="text-decoration-none">
    <a href="usertable.php" class="text-light fw-bold"> User Management</a>
    <hr class="border border-primary border-2 opacity-50">
    </li>
    <li class="text-decoration-none">
      <a href="#" class="text-light fw-bold"> Student Management</a>
      <hr class="border border-warning border-2 opacity-50">
    </li>
    
    <li class="text-decoration-none">
      <a href="adminabout.php" class="text-light fw-bold"> About</a>
      <hr class="border border-success border-2 opacity-50">
    </li>
    <li class="text-decoration-none">
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
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="p-4">
    <div class="welcome">
      <div class="content rounded-3 p-3">
        <h1 class="fs-3 text-light">Student Database Table</h1>
        <p class="mb-0">It consists of all the student related details</p>
      </div>
    </div>

   

   
    <section class="charts mt-4">
      <div class="chart-container p-4">
            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">USN</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Batch</th>
                    <th scope="col">DBMS</th>
                    <th scope="col">MP</th>
                    <th scope="col">SS</th>
                    <th scope="col">Func</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $sql = "SELECT id, usn, name, surname, batch, dbms, mp, ss FROM students";
                        $result=mysqli_query($mysql_db,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $usn=$row['usn'];
                                $name=$row['name'];
                                $surname=$row['surname'];
                                $batch=$row['batch'];
                                $dbms=$row['dbms'];
                                $mp=$row['mp'];
                                $ss=$row['ss'];
                                echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$usn.'</td>
                                <td>'.$name.'</td>
                                <td>'.$surname.'</td>
                                <td>'.$batch.'</td>
                                <td>'.$dbms.'</td>
                                <td>'.$mp.'</td>
                                <td>'.$ss.'</td>
                                <td ><button type="button" class="btn btn-success btn-sm"><a href="deleteadminstudent.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
                                </td>
                            
                            </tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        
        </div>
    </section>
    <section class="charts mt-5">
      <div class="chart-container p-5">
      <h1 class="fs-3 text-light">Add New Users</h1>
      <div class="content rounded-4 p-5">
        
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                    method="POST">
                <div class="col-sm-10 mb-3 fw-bold">
                    <label  class="form-label text-light ">USN</label>
                    <input type="text" class="form-control " name="usn" id="usn" placeholder="Enter the valid usn">
                </div>
                <div class="col-sm-10 mb-3 fw-bold">
                    <label  class="form-label text-light">First Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter the First Name">
                </div>
                <div class="col-sm-10 mb-3 fw-bold">
                    <label  class="form-label text-light">SurName</label>
                    <input type="text" class="form-control text-central" name="surname" id="surname" placeholder="Enter the Surname">
                </div>
                <div class="col-sm-10 mb-3  fw-bold">
                    <label  class="form-label text-light">DBMS</label>
                    <input type="text" class="form-control" name="dbms" id="dbms" placeholder="Enter the DBMS Lab Marks">
                </div>
                <div class="col-sm-10 mb-3  fw-bold">
                    <label  class="form-label text-light">MP</label>
                    <input type="text" class="form-control" name="mp" id="mp" placeholder="Enter the MP Lab Marks">
                </div>
                <div class="col-sm-10 mb-3  fw-bold">
                    <label  class="form-label text-light">SS</label>
                    <input type="text" class="form-control" name="ss" id="ss" placeholder="Enter the SS Marks">
                </div>
                <div class="mb-2 col-sm-10 mb-3  fw-bold">
                    <label  class="form-label text-light">Batch</label>
                    <input type="text" class="form-control" name="batch" id="batch" placeholder="Enter the Batch Number">
                </div>
                <br>
                <div class=" d-grid gap-2 col-4 ">
                <button type="submit" class="btn btn-outline-primary ">Submit</button>
                </div>
              
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