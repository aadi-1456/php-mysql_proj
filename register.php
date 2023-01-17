<?php
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	require_once 'config/config.php';
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$batch = $_POST["batch"];
			
	$sql = "INSERT INTO `users` ( `username`,
				`password`, `batch`) VALUES ('$username',
				'$password', '$batch')";
	
			$result = mysqli_query($mysql_db, $sql);	
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>SignUp</title>
</head>
<body>
    <div class="login-box">
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              method="post" >
              <h2>Sign Up</h2>
              <p class="tex">Please fill in your credentials.</p>
            <div class="user-box form-group ">
                <input type="text" name="username" id="username" required="" >
                <label>UserName</label>
                
            </div>
            <div class="user-box form-group text-light ">
                <input type="password" name="password" id="password" required="">
                <label>Password</label>
               
            </div>
            <div class="user-box form-group text-light ">
                <input type="password" name="confirm_password" id="password" required="" >
                <label>Confirm Password</label>
                
            </div>
            <div class="user-box form-group text-light ">
                <input type="text" name="batch" id="batch" required="" >
                <label>Batch</label>
                
            </div>
            <div class="d-grid gap-2">
        			<input type="submit" class="btn  btn-outline-success" value="Submit">
        			<input type="reset" class="btn  btn-outline-primary" value="Reset">
        		</div>
            <p class="text-light">Already have an account?</p>
            <a href="login.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login</a>
                
        </form>
    </div>
</body>
</html>