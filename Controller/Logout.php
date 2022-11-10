<?php

session_start();

session_unset();
session_destroy();
setcookie("flag","false", time()-10,"/");
setcookie("userName","", time()-10,"/");
setcookie("Password","", time()-10,"/");

header("Location:../View/Signinup.php");

?>