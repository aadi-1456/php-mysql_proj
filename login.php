<?php

  // Include config file
  include "config/config.php";

  // Define variables and initialize with empty values
  $username = $password = '';
  $username_err = $password_err = '';

  // Process submitted form data
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if username is empty
    if(empty(trim($_POST['username']))){
      $username_err = 'Please enter username.';
    } else{
      $username = trim($_POST['username']);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
      $password_err = 'Please enter your password.';
    } else{
      $password = trim($_POST['password']);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = "SELECT id, username, password, batch FROM users WHERE username = '$username' and password = '$password'";
        
      $result=mysqli_query($mysql_db,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count=mysqli_num_rows($result);

      if($count == 1){
        session_start();

                // Store data in sessions
                
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['batch']=$row['batch'];
                // Redirect to user to page
                if($row['batch'] == 1){
                    header('location: batch/batch1.php');
                }
                elseif($row['batch'] == 2){
                    header('location: batch/batch2.php');
                }
                else{
                    header('location: batch/batch3.php');
                }
      }
      else {
        $username_err = "Username does not exists.";
        $password_err = 'Invalid password';
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
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              method="post" >
              <h2>Login</h2>
            <div class="user-box form-group <?php (!empty($username_err))?'has_error':'';?>">
                <input type="text" name="username" id="username" required="" value="<?php echo $username ?>">
                <label>Username</label>
                <span class="help-block text-light"><?php echo $username_err;?></span>
            </div>
            <div class="user-box form-group <?php (!empty($password_err))?'has_error':'';?>">
                <input type="password" name="password" id="password" required="" value="<?php echo $password ?>">
                <label>Password</label>
                <span class="help-block text-light"><?php echo $password_err;?></span>
            </div>
            <div class="d-grid gap-2 ">
                <input type="submit" class="btn  btn-outline-primary" value="Login">
            </div>
            <p class="text-light">Don't have an account?</p>
            <a href="register.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign in</a>
        </form>
    </div>
</body>
</html>
