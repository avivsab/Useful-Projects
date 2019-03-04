<?php
    require 'config.php';       
 ?>   
 
 <?php
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$roleQuery = "SELECT role FROM administrator WHERE email='$email'";
$result1 = mysqli_query($conn, $roleQuery);
if (mysqli_num_rows($result1) === 1) {
$row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
}
$role = $row1[0]['role'];
$imgQuery = "SELECT adminpic FROM administrator WHERE email='$email'";
$result2 = mysqli_query($conn, $imgQuery);
if (mysqli_num_rows($result2) === 1) {
$row2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
$img = $row2[0]['adminpic'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellcome</title>
    <link rel="stylesheet" href="iv.css">
<script>
    function addCourseFunction() {
        document.getElementById("addCourse").value = "edit Course";
    }
    function addStudentFunction() {
        document.getElementById("addStudent").value = "edit Student";
    } 
</script>

   
</head>
<body>
<div class="menu">
<img src="coolschool_logo.jpg" alt="shcool logo" id="logo">
<a href="#" class="menuLink" id="firstmenuLink">School</a> 
<?php
$adminLink = ($role==='owner' || $role==='manager' ) ?  "<a href='support.html' class='menuLink'>Administration</a>" :  '';
echo $adminLink;


?>
<span class="clr"></span> 
<span class="rightMenu"> 

<span id="worker"> <img style='height:80px'src="<?php echo 'uploads' . '/' .'adminImages' . '/' . $img;?>" <?php echo "alt='shcool logo' id='test'>",ucwords($name),'&#44&nbsp&nbsp&nbsp', ucfirst($role);?> </span> 
</span>
            
<form action="logout.php" method='post'>
    
    <input type="submit" value='logout' name='logout' id="logout">
</form>

<hr style="width:100%">

</div>
<?php

$roleQuery = "SELECT role FROM administrator WHERE email='$email'";
// echo $roleQuery;
$result1 = mysqli_query($conn, $roleQuery);
if (mysqli_num_rows($result1) === 1) {
$row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
}
// echo $row1[0]['role'];

 
?>

<div class='row'style='background-color:#ccc; height:1800px'>
  <div class='column left' style='background-color:#ccc; height:1800px'>
    <h2 class='headrim'>Students</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <input type='submit' value='+' id="addStudent" class='plusBtn' title="add student" onclick='addStudentFunction()' name='add'>
    </form>
    <hr>
   
    <?php
        include_once 'studentsList.php';

    ?>
  </div>
  <div class='column middle' style='background-color:#ccc; height:1800px'>
    <h2 class='headrim'>Courses</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
         <input type='submit' value='+' id="addCourse" class='plusBtn' title="add course" onclick='addCourseFunction()' name='add'>
    </form>
    <hr>
    <?php
    include 'coursesList.php';
  ?>
   
  </div>
  
  <div class="column right" style="background-color:#ccc">
    <!-- <h2>Column 3</h2>$response['outputHTML'] = file_get_contents(__DIR__ . '/table-html.php'); -->
    <div id="mainContent" disabled contenteditable="true">
        <?php 
         
        if(!isset($_POST['add'])){
            include 'mainContainer.php';
            // include 'student.php';
            $_POST['add'] = "";
        }else{
            switch ($_POST['add']) {
                case 'edit Course':
                    include 'addCorse.php'; 
                    break;
                case 'edit Student':
                    include 'addStudent.php';
                    break;
                case 'studentInformation':
                    include 'student.php';
                    break;
                case 'courseInformation':
                    // there was here "break" that waste me a--lot--- of hours.......                  
                    include 'course.php';
                    break;              
                default:
                   include 'mainContainer.php';
                   break;
            }
        }
        ?>
    </div>
   
  </div>
</div>

</body>
</html>









