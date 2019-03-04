<?php
   
    echo"<h2>course</h2>";?>
    <?php echo "<form action="?><?php echo $_SERVER['PHP_SELF'];?>"<?php echo "method='post'>
        <input type='submit' value='Edit'>
    </form>
    <hr>";
?>
    <?php
include_once 'config.php';

$sql="SELECT coursepic,course_name,description FROM courses WHERE serial={$_POST['courseInfoId']}";
if ($result=mysqli_query($conn,$sql))
  {
   
  while ($fieldinfo=mysqli_fetch_assoc($result))
    {
    $namefield = $fieldinfo['course_name'];
    $namefield = strtoupper($namefield);
    $courseImg=$fieldinfo['coursepic'];    
    echo ("<img src='uploads/coursesImages/$courseImg' width='200px' hight='100px'>");
    echo ("<br>{$namefield}<br>");
    echo ("{$fieldinfo['description']}");
   
    
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
</body>
</html>