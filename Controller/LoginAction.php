<?php
    session_start();
    require_once('../Model/Model.php');
    $userNameErr= $PasswordErr="";
   
    $userName="";
    $Password="";
    $flag=0;
    $msg="";


	if(isset($_POST['Login']))
    {
        
        if(empty($_POST['userName'])) 
        {
          $userNameErr = "Please fill up user name properly";
        }
        else 
        {
          $userName = $_POST['userName'];
        }

        if(empty($_POST['Password'])) 
        {
          $PasswordErr = "Please fill up password properly";
        }
        else 
        {
          $Password = $_POST['Password'];
        }
        
        if($userName != "" && $Password != "")
        {
           $user=validate($userName, $Password);

            if ($user)
            {
                $_SESSION['userName'] = $userName;
                $_SESSION['Password'] = $Password;

                if(isset($_POST["Remember"])) 
                    {
                        setcookie ("userName",$_POST["userName"],time()+ 3600,"/");
                        setcookie ("Password",$_POST["Password"],time()+ 3600,"/");
                    }
                setcookie("flag", "true", time()+1800, "/");
                
                    header('location: ../View/Portal.php');

            }
                else
                    {
                        $msg = "Invalid Username/Password.";
                    }
         }
    }

   

    else{
		echo "";
	}

?>