<?php 



  $name=$dob=$religion=$preadd=$email="";
  $nameErr=$dobErr=$religionErr=$emailErr="";

  $username=$password= "";
  $usernameErr = $passwordErr ="";

 
?>
<?php 



        if(isset($_POST["submitreg"]))
        {


          if ($_SERVER['REQUEST_METHOD']==="POST")
          {
            function test_input($data)
            {

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }


          if (empty($_POST["name"]))
            {
              $nameErr = "Name is required";
            }
            else
              {
                if (str_word_count($_POST["name"])>=1)
                  {
                    $name = test_input($_POST["name"]);

                    if (!preg_match("/^[a-zA-Z-' _]*$/",$name))
                      {
                        $nameErr = "Only letters and white space allowed";
                      }
                    }
                    else
                      {
                        $nameErr = "Type atleast two words";
                      }
              }


              if (empty($_POST["email"]))
                {
                  $emailErr = "Email is required";
                }
                else
                {
                  $email = test_input($_POST["email"]);
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                      $emailErr = "Invalid email format";
                    }
                }


                if (empty($_POST["dob"])) 
      {
        $dobErr = "Date of birth is required";
      } 
      else
        {
          $dob = test_input($_POST["dob"]);
        }

        if (empty($_POST["religion"])) 
    {
      $religionErr = "Religion is required";
    } 
    else {
      $religion = test_input($_POST["religion"]);
    }


    if (empty($_POST["username"]))
    {
      $usernameErr = "User Name is required";
    }
    else
      {
        if (str_word_count($_POST["username"]) ==1 && strlen($_POST["username"])>=2)
          {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-z0-9.-_]/i",$username))
              {
                $usernameErr = "Only alpha numeric characters, period, dash or underscore allowed";
              }
            }
             else {
              $usernameErr = "Type atleast two characters without any space";
             }
            }


            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);



    if(empty($_POST["password"]))
      {
        $password = test_input($_POST["password"]);
        $passwordErr = "Password is required";
      }
    }
          

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hospital";
          $connection = new mysqli($servername, $username, $password, $dbname);
          if ($connection->connect_error)
            {
              echo "Database Connection Failed!";
              echo "<br>";
              echo $connection->connect_error;
            }
            else
              {
                


                $uname = $_POST['name'];
                $upreadd= $_POST['preadd'];
                $uphone = $_POST['phone'];
                $udob = $_POST['dob'];
                $ureligion = $_POST['religion'];
                $uusername = $_POST['username'];
                $uemail = $_POST['email'];
                $upassword= $_POST['password'];

                $sql = "INSERT INTO doctor (Name,Present_Address,Phone,Dob,Religion,UserName,Email,Password) VALUES ('".$uname."','".$upreadd."','".$uphone."','".$udob."','".$ureligion."','".$uusername."','".$uemail."','".$upassword."')";

                  $ins = $connection->query($sql);

                if ($ins === true)
                  {
                    header("location:../View/Signinup.php");
                  }
                  else
                    {
                      echo "Error while saving";
                    }
                  }
                  $connection->close();
                }
              
              ?>

       

    