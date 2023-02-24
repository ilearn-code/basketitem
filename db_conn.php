<?php
 $hostname     = "localhost"; // enter your hostname
 $username     = "root";  // enter your table username
 $password     = "";
 $dbname = "basket_db";
 
 $conn = mysqli_connect($hostname, $username, $password, $dbname);
 
 if($conn === false){
     die("Connection failed: " . mysqli_connect_error());
 }
 

        ?>
	