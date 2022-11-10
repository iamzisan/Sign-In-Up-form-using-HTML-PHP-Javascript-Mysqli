<?php
      session_start();
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	
</head>
<body>
  

    <div class="container">
    	<div class="header">
        <?php include 'include/Header2.php';?>
    </div>
    	<br><br><br><br><br><br><br><br>
    	<center>

    <h3>Welcome Doctor ~ <?php echo $_SESSION["userName"];?></h3>
    </center><br><br><br><br><br><br><br>


   <div class="footer">
    <?php include 'include/Footer.php';?>
  </div>

  </div>
   

    



    


<style>
	.container{
		height: 140%;
	width: 100%;
	background-image: url(../Model/blur-hospital.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
	}
</style>





    
		 
	
</body>
