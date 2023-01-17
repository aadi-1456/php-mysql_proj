<<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: /practice/login.php');
		exit;
	}
    include "configstud.php";
    $sql="SELECT batch,dbms,mp,ss FROM `chartdb`";
    $result=mysqli_query($mysql_db,$sql);
?>
	<!--<h2 class="display-5">Batch 1 </h2>-->
		
			<!--<a href="/practice/logout.php" class="btn btn-block btn-outline-danger">Sign Out</a> -->
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
  <link rel="stylesheet" href="../admindash/admindash.css" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   

  <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'students per Day'],
  <?php
             $re="btw 40 and 50";
             $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and dbms BETWEEN 41 AND 50";
             $result=mysqli_query($mysql_db,$sql);
             while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 30 and 40";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and dbms BETWEEN 31 AND 40";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 20 and 30";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and dbms BETWEEN 21 AND 30";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 10 and 20";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and dbms BETWEEN 11 AND 20";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 0 and 10";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and dbms BETWEEN 1 AND 10";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
          ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'DBMS LAB B1', 'width':470, 'height':400,
    backgroundColor: {
        fill: '',
        fillOpacity: 0.8
      },
      legend:{textStyle: {color: 'white'}},
      pieSliceTextStyle:{color: 'white'},
      titleTextStyle:{color: 'white'},
      slices:{color: 'black'},
      is3D: true,
        
};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'students per Day'],
  <?php
             $re="btw 40 and 50";
             $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and mp BETWEEN 41 AND 50";
             $result=mysqli_query($mysql_db,$sql);
             while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 30 and 40";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and mp BETWEEN 31 AND 40";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 20 and 30";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and mp BETWEEN 21 AND 30";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 10 and 20";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and mp BETWEEN 11 AND 20";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 0 and 10";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and mp BETWEEN 1 AND 10";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
          ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'MP LAB B1', 'width':500, 'height':400,
    backgroundColor: {
        fill: '',
        fillOpacity: 0.8
      },
      legend:{textStyle: {color: 'white'}},
      pieSliceTextStyle:{color: 'white'},
      titleTextStyle:{color: 'white'},
      slices:{color: 'black'},
      is3D: true,
        
};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'students per Day'],
  <?php
             $re="btw 40 and 50";
             $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and ss BETWEEN 41 AND 50";
             $result=mysqli_query($mysql_db,$sql);
             while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 30 and 40";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and ss BETWEEN 31 AND 40";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 20 and 30";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and ss BETWEEN 21 AND 30";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 10 and 20";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and ss BETWEEN 11 AND 20";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
            $re="btw 0 and 10";
            $sql="SELECT COUNT(*) AS number FROM `students` where batch='2' and ss BETWEEN 1 AND 10";
            $result=mysqli_query($mysql_db,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$re."',".$row["number"]."],";
            }
          ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'SS LAB B1', 'width':500, 'height':400,
    
    backgroundColor: {
        fill: '',
        fillOpacity: 0.8
        
      },
      legend:{textStyle: {color: 'white'}},
      pieSliceTextStyle:{color: 'white'},
      titleTextStyle:{color: 'white'},
      slices:{color: 'black'},
      is3D: true,
        
};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data, options);
}
</script>

                    <?php
                        $sql = "SELECT batch, dbms, mp, ss FROM chartdb";
                        $result=mysqli_query($mysql_db,$sql);
                    ?>                   
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Batchs', 'DBMS', 'MP', 'SS'],
        
          <?php
             while($row=mysqli_fetch_assoc($result)){
                $batch=$row['batch'];
                $dbms=$row['dbms'];
                $mp=$row['mp'];
                $ss=$row['ss'];
                
                echo "['B".$batch."',".$dbms.",".$mp.",".$ss."],";
            }
          ?>
         
          
        ]);

        var options = {
          title : 'Performance by the Different Batchs',
          legend:{textStyle:{color:'white'}},
          vAxis: {title: 'Marks',gridline:{color:'white'},textStyle:{color:'white'},titleTextStyle:{color:'white'}},
          hAxis: {title: 'Batchs',gridline:{color:'white'},textStyle:{color:'white'},titleTextStyle:{color:'white'}},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
          titleTextStyle:{color: 'white'},
          textStyle:{color: 'white'},
          backgroundColor: {
        fill: '',
        fillOpacity: 0.8
      },
      
      is3D:true
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>

<body>
  <!-- Side-Nav -->
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left bg-dark" id="show-side-navigation1">
  <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
  <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg"
         alt="">
    <div class="ms-3">
      <h5 class="fs-5 mb-0">
        <a class="text-decoration-none text-light" href="#"><?php echo $_SESSION['username']; ?></a>
      </h5>
     
    </div>
  </div>

  <div class="search position-relative text-center px-4 py-3 mt-2 bg-">

    <i class="fa fa-search position-absolute d-block fs-6"></i>
  </div>

  <ul class="">
    <li class="">
    <a href="#" class="text-light fw-bold">DashBoard</a>
    <hr class="border border-danger border-2 opacity-50">
    </li>
    <li class="">
    <a href="batch2student.php" class="text-light fw-bold">Student Details</a>
    <hr class="border border-primary border-2 opacity-50">
    </li>
    <li class="">
      <a href="batch2lab.php" class="text-light fw-bold">Lab Details</a>
      <hr class="border border-warning border-2 opacity-50">
    </li>
    
    <li class="">
      <a href="batch2timetable.php" class="text-light fw-bold">Time Table</a>
      <hr class="border border-success border-2 opacity-50">
    </li>
    <li class="">
      <a href="#" class="text-light fw-bold"> Contact</a>
      <hr class="border border-secondary border-2 opacity-50">
    </li>
   
   
   
  </ul>
</aside>

<section id="wrapper" class="">
  <nav class="navbar navbar-expand-md bg-light">
    <div class="container-fluid mx-2 ">
        <div class="navbar-header ">
            <i class="uil-bars text-white"></i>
            
            <a class="navbar-brand fw-bold" href="#">Batch<span class="main-color fw-bold">B2</span></a>
        </div>
        <div class="collapse navbar-collapse" id="toggle-navbar">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown fw-bold">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <p class="mb-0">Hello <?php echo $_SESSION['username']; ?>, welcome to Batch B2 dashboard!</p>
      </div>
    </div>

    <section class="statistics mt-4">
    <div class="row">
    <div class="col-lg-5">
          <div class="box d-flex rounded-2 align-items-center mb-2 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-0">
            <div class="d-flex align-items-center">
            <div id="piechart" ></div>
      
            </div>

            </div>
          </div>
        </div>
        <div class="col-lg-7 ">
          <div class="box d-flex rounded-2 align-items-start mb-4 mb-lg-0 p-4">
            <i class="uil-envelope-shield fs-2 text-start bg-primary rounded-circle"></i>
            <div class="ms-0">
            <div class="d-flex align-items-start ">
            <div id="chart_div" style="width: 600px; height: 380px;"></div>
      
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
            <i class="uil-eye"></i>
            <?php
                $sql = "SELECT id, usn, batch FROM students WHERE batch='1'";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 1 Student</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <div class="box bg-danger p-3">
            <i class="uil-shopping-cart"></i>
            <?php
                $sql = "SELECT id, usn, batch FROM students WHERE batch='2'";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 2 Student</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box bg-warning p-3">
            <i class="uil-feedback"></i>
            <?php
                $sql = "SELECT id, usn, batch FROM students WHERE batch='3'";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <h3><?php echo $row ?></h3>
            <p class="lead fw-bold">Batch 3 Student</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-success p-3">
            <i class="uil-user"></i>
            <?php
                $sql = "SELECT batch FROM users WHERE batch='2'";
                $result=mysqli_query($mysql_db,$sql);
                if($result){
                    $row=mysqli_num_rows($result);
                }
                ?>
            <h3><?php echo $row ?></h3>
            <p class="lead text-bold fw-bold">B2 Users</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="statistics mt-4">
    <div class="row">
    <div class="col-lg-6">
          <div class="box d-flex rounded-2 align-items-center mb-2 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-0">
            <div class="d-flex align-items-center">
            <div id="piechart3" ></div>
      
            </div>

            </div>
          </div>
        </div>
    <div class="col-lg-6">
          <div class="box d-flex rounded-2 align-items-center mb-2 mb-lg-0 p-3">
            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
            <div class="ms-0">
            <div class="d-flex align-items-center">
            <div id="piechart2" ></div>
      
            </div>

            </div>
          </div>
        </div>
        
        
        
    </div>
    </section>

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

    <br>
    
    
    
  </div>
</section>
  <!-- bootstrap js -->
  <script src="../admindash/adimindash.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>