<?php
   
    echo"<h2>student</h2>";?>
    <?php echo "<form action="?><?php echo $_SERVER['PHP_SELF'];?>"<?php echo "method='post'>
        <input type='submit' value='Edit'>
    </form>
    <hr>";
?>
    <?php
include_once 'config.php';
$firstsql="SELECT * FROM student";
$selectedStudent= 1;
$sql="SELECT student_name,phone,Email,student_img FROM student WHERE student_id={$_POST['studentInfoId']}";

if ($result=mysqli_query($conn,$sql))
  {
  // Get field information for all fields
  while ($fieldinfo=mysqli_fetch_assoc($result))
    {
    $namefield = $fieldinfo['student_name'];
    $namefield = strtoupper($namefield);
    $studentImg=$fieldinfo['student_img'];    
    echo ("<img src='uploads/studentsImages/$studentImg' width='200px' hight='100px'>");
    echo ("<br>{$namefield}<br>");
    echo ("0{$fieldinfo['phone']}");
    echo ("<br>{$fieldinfo['Email']}");
    
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
</body>
</html>