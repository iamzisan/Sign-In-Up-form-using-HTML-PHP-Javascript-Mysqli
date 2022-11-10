<?php
          $typeErr =  "" ;

        $type = "";

      if($_SERVER["REQUEST_METHOD"] == "POST") {
          
          if (empty($_POST['type'])) {
                 $typeErr = "type is required"; 
          } 

          else { 
            $type = $_POST['type']; 

            if($type == "doctor")
            {
              header("Location: Signinup.php");
            }
          }

      }


      ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pre Registration</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body >
    <div class="header">
        <?php include 'include/Header.php';?>
    </div>

  	

  	<div class="main">



      <div class="prereg">
                
      <form name="jsForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return validate()"><br><br>

        <h1>Choose your role</h1><br><br><br>

          <label for="type">Choose type:</label>

          <input type="radio" name="type" id="type" value="doctor">Doctor 

          <input type="radio" name="type" id="type" value="nurse"> Nurse 

           <input type="radio" name="type" id="type" value="admin">Admin 

          <input type="radio" name="type" id="type" value="patient"> Patient 

          <p id = "te" style="color:red"><?php echo $typeErr; ?></p><br><br>
        

          <button type="submit" class="submit-btn"> Next</button>

          <? if(isset($type) && $type=="doctor")
          {
            echo "checked";

        }
        else{
          echo "Invalid role, Sorry"

        }?>
        </form>
        </div>
      </div>
        
    



	<div class="footer">
    <?php include 'include/Footer.php';?>
  </div>  

	

    <script>
          function validate() {
          var isValid = false;
          var type = document.forms["jsForm"]["type"].value;

      if(type == "") 

      {

        if(type == "")
            {
              document.getElementById("te").innerHTML = "<b>Type Required</b>";
              document.getElementById("te").style.color = "red";
            }
              
            else
            {
              document.getElementById("te").innerHTML = "";
            }


      }
      else {
        isValid = true;
      }

      return isValid;
    }

    </script>

    </body>
</html>