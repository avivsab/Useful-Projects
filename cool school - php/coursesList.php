<?php
    include_once 'config.php';
?>
    <?php
        $querycourselist = "SELECT * FROM courses";
        
        $result2 = mysqli_query($conn, $querycourselist);
    while($rows = $result2->fetch_assoc()) {
?>
<form method='post' action='inputvalid.php' name='add'>
            <div style='border:1px dashed darkgrey'>
                <input type='image' onclick="viewCourseInfo()" src="<?php echo 'uploads' . '/' .'coursesImages' . '/' . $rows['coursepic']; ?>"height="85px" width="85px"/>
                
                <?php
                echo "<input type='hidden' name='add' value='courseInformation' id='course'> 
                 <input type='hidden' name='courseInfoId'  value='".$rows['serial']."'>
                      
                <h3 style='display:inline-block';>Course: ".$rows['course_name']."</h3>  
            </div><br/>
        </form>";
    }