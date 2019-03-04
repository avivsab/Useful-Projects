    <?php
    include_once 'config.php';
        
        $querystudentlist = "SELECT * FROM student";
        
        $result1 = mysqli_query($conn, $querystudentlist);
        
        while($rows = $result1->fetch_assoc()) {
        ?>
        <form method='post' action='inputvalid.php' name='add'>
            <div style='border:1px dashed darkgrey'>
                <input type='image' id="student"onclick="this.viewStudentInfo()" src="<?php echo 'uploads' . '/' .'studentsImages' . '/' . $rows['student_img']; ?>"height="85px" width="85px"/>
                
                <?php
                echo "<input type='hidden' name='add' value='studentInformation'> 
                 <input type='hidden' name='studentInfoId' id='student' value='".$rows['student_id']."'>
                      
                <h3 style='display:inline-block';>Name: ".$rows['student_name']."</h3><h5 style='display:inline-block';>".  "Phone: 0".$rows['phone']."</h5><br/>   
            </div><br/>
        </form>";
    }
    ?>
   


   