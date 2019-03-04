<?php

session_start();
$servername = "localhost";
   $username = "root";
   $password = "";
   $db = "cool_school";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $db);
   
   // Check connection
   if (!$conn) {
       die("<h2 class='hivuibad'> Call suport, Connection failed:</h2> " . mysqli_connect_error());
   }
//    echo "<span class='hivuigood'> Good</span>";
//    mysqli_close($con);mysqli_close($con);
   ?>