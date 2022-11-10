<?php

	      $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hospital";


	function getConnection(){
		global  $servername;
		global $username;
		global $password;
		global $dbname;

		$connection = new mysqli($servername, $username, $password, $dbname);
	

		if ($connection->connect_error)
            {
              echo "Database Connection Failed!";
              echo "<br>";
              echo $connection->connect_error;
            }
            else
              {
              	return $connection;
              }
	}
?>