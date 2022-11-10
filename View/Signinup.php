<?php 

  $name=$phone=$dob=$gender=$religion=$preadd=$email="";
  $nameErr=$dobErr=$genderErr=$religionErr=$emailErr="";

  $username=$password= "";
  $usernameErr = $passwordErr ="";

  $userName=$Password= "";
  $userNameErr = $PasswordErr ="";

?>

<?php

    include '../Controller/LoginAction.php';
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in & Signup form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
  .error {color: #FF0000;}
</style>
</head>
<body>
  <div class="header">
        <?php include 'include/Header.php';?>
    </div>
	<div class="container">
		<div class="form-box">
			
			<div class="btn-box">
				<div id="btn"></div>

				<button type="button" class="toggle-btn" onclick="login()">Sign In</button>
				<button type="button" class="toggle-btn" onclick="register()">Sign Up</button>


			</div>

			<form class="login-form" id="login" method="post">
				<img src="../Model/login.png" height="250px" width="300px">
			
				<input type="text" id="userName" class="form-field" placeholder="Username" name="userName" 
            value="<?php 
                        if(isset($_COOKIE['userName']))
                        {
                            echo $_COOKIE['userName'];
                        }
                        else {  echo $userName;  } ?>">
                     
				
				<input type="password" id="Password" class="form-field" placeholder="Password" name="Password"
            value = "<?php

                        if(isset($_COOKIE['Password']))
                                {
                                    echo $_COOKIE['Password'];
                                }

                        else { echo $Password;  }?>">

                   


				<input type="checkbox" class="checkbox" name="Remember">Remember me!

				


        <input type="submit" onsubmit="return validate()" id="submit" class="submitlog" name="Login" value="Sign In">
        <p style="color:red"><?php echo $msg; ?></p>


        <br>
        <br>
        <img src="../Model/login2.png" height="300px" width="310px">

			</form>


			<form class="login-form" id="register" method="POST" action="../Controller/RegAction.php">
				<img src="../Model/reg.jpg" height="260px" width="280px">

				<input type="text" class="form-field" placeholder="Name"  name="name"><small>*<?php echo $nameErr;?></small>
				
				<input type="text" class="form-field" placeholder="Present Address" name="preadd">

				<input type="text" class="form-field" placeholder="Mobile" name="phone"><br><br>


				

                <label for="dob" class="form-field">Date Of birth:</label>
                <input type="date" id="dob" name="dob"><small>* <?php echo $dobErr;?></small> <br><br>
               
                

           
                <label for="religion" class="form-field">Religion:</label>
            <select id="religion" name="religion">
                    <option value="islam">Islam</option>
                    <option value="hindu">Hindu</option>
                    <option value="christian">Christian</option>
                    <option value="buddhist">Buddhist</option>
                </select><small>* <?php echo $religionErr;?></small><br><br>
               
                
				<input type="text" class="form-field" placeholder="Username" name="username"><small>* <?php echo $usernameErr;?></small>
				
				<input type="email" class="form-field" placeholder="Email Address" name="email"><small>* <?php echo $emailErr;?></small>
				
				<input type="password" class="form-field" placeholder="Password" name="password"><small>* <?php echo $passwordErr;?></small><br><br>
				

				<input type="submit" id="submit" class="submitreg" name="submitreg" value="Sign Up"><br>
				

				

			</form>

		</div>
    <div class="footer">
    <?php include 'include/Footer.php';?>
  </div> 
		 
	</div>
	
		<script src="../Controller/validation.js"></script>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){ 
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>
</body>
