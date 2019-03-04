<?php
   include_once 'config.php';
   echo '<style>';
   include 'smallWinStyle.css';
   echo "</style>";
   echo "<img src='mcimg.jpeg' style='width:80%; height:250px'>";
$sql1 = "SELECT * FROM student";
 $result1 = mysqli_query($conn, $sql1);
 if (mysqli_num_rows($result1) > 0) {
     echo "<div id='littleStyle'>Number of students:  ";
     echo mysqli_num_rows($result1);
     echo '<br><br>';
 }

 $sql2 = "SELECT * FROM courses";
 $result2 = mysqli_query($conn, $sql2);
 if (mysqli_num_rows($result2) > 0) {
     echo "Number of courses in the school:  ";
     echo mysqli_num_rows($result2);
     echo '</div>';
 }


$conn->close();
?>
