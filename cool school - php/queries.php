<?php
function adminLoginQuery($user) {
                $result = $this->conn->query("SELECT * 
                FROM admins
                WHERE  email = '$user'");
                $count = $result->num_rows;
                $users = array();
                return $result;
                while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                    }
                }
            function coursesListQuery() {
                $result = $this->conn->query("SELECT * FROM courses
                ");
                $count = $result->num_rows;
                $users = array();
                return $result;
                    while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                        }
                    }
            function studentListQuery() {
                $result = $this->conn->query("SELECT * FROM students
                ");
                $count = $result->num_rows;
                $users = array();
                return $result;
                    while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                        }
                    }
            function studentQuery($studentId) {
                $result = $this->conn->query("SELECT * FROM students WHERE id = '$studentId'
                ");
                
                return $result;
                
                    }
            function courseQuery($courseId) {
                        $result = $this->conn->query("SELECT * FROM courses WHERE courseid = '$courseId' 
                        ");
                        
                        return $result;
                        
                            }
            function courseQueryByName($courseName) {
                $result = $this->conn->query("SELECT * FROM courses WHERE name ='$courseName'
                ");
                
                return $result;
                
                    }
            function adminsListQuery() {
                $result = $this->conn->query("SELECT * FROM admins
                ");
                $count = $result->num_rows;
                $users = array();
                return $result;
                    while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                        }
                    }
            function adminQuery($infoAdminId) {
                    $result = $this->conn->query("SELECT * FROM admins WHERE adminid = '$infoAdminId' 
                    ");
                    
                    return $result;
                    
                        }
            function courseStudentsQuery($courseId) {
                $result = $this->conn->query("SELECT *
                FROM students 
                INNER JOIN studentcourses
                ON students.id = studentcourses.id
                INNER JOIN courses
                ON courses.courseid = studentcourses.courseid
                WHERE courses.courseid = '$courseId'
                ");
                $count = $result->num_rows;
                $users = array();
                return $result;
                    while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                        }
                    }
            function courseStudentsQueryByName($courseName) {
                $result = $this->conn->query("SELECT *
                FROM students 
                INNER JOIN studentcourses
                ON students.id = studentcourses.id
                INNER JOIN courses
                ON courses.courseid = studentcourses.courseid
                WHERE courses.name = '$courseName'
                ");
                $count = $result->num_rows;
                $users = array();
                return $result;
                    while($row = $result->fetch_assoc()) {
                        array_push($users, $row);
                        return $users;
                        }
                    }
                    
            
            function insertNewCourseQuery($newCourseName, $newDescription ,$newImg ) {
                    $result = $this->conn->query("INSERT INTO courses(`name`, `description`, `courseimg`)
                    VALUES ('$newCourseName','$newDescription','$newImg') ");  
                        }
            function insertNewAdminQuery($newAdminId,$newAdminName,$newAdminRole,$newAdminPhone,$newAdminEmail,$hashed_password,$newAdminImg) {
                $result = $this->conn->query("INSERT INTO `admins`(`adminid`, `adminfullname`, `role`, `phone`, `email`, `password`, `adminimg`) 
                VALUES ('$newAdminId','$newAdminName','$newAdminRole','$newAdminPhone','$newAdminEmail','$hashed_password','$newAdminImg') ");  
                    }
            function insertNewStudentQuery($newId,$newFullName,$newPhone,$newEmail,$newImg)      {
                $result = $this->conn->query("INSERT INTO `students`(`id`, `fullname`, `phone`, `email`, `img`) 
                VALUES ('$newId','$newFullName','$newPhone','$newEmail','$newImg') ");  
                        }
            function assignStudentToCourseQuery($newId,$value) {
                            $result = $this->conn->query("INSERT INTO `studentcourses`
                            (`id`, `courseid`) VALUES ('$newId','$value') ");  
                                }
            function studentCoursesQuery($studentId) {
                $result = $this->conn->query("SELECT *
                FROM courses
                INNER JOIN studentcourses
                ON courses.courseid = studentcourses.courseid
                INNER JOIN students
                ON students.id = studentcourses.id
                WHERE students.id = '$studentId'
                ");
                $count = $result->num_rows;
                return $result;
                  
                    }
            function updateEditStudentQuery($editFullName, $editPhone ,$editEmail ,$editImg ,$editId) {
                 $result = $this->conn->query("UPDATE students 
                 SET fullname='$editFullName',`phone`='$editPhone',`email`='$editEmail',`img`='$editImg'
                 WHERE `id` = '$editId' ");  
                     }
            function updateEditAdminQuery(
                $saveEditAdminName,$saveEditAdminRole,$saveEditAdminPhone
                ,$saveEditAdminEmail, $saveEditAdminImg, $saveEditAdminId) {
                        $result = $this->conn->query("UPDATE admins SET
                        `adminfullname`='$saveEditAdminName',`role`='$saveEditAdminRole',`phone`='$saveEditAdminPhone',
                        `email`='$saveEditAdminEmail',`adminimg`='$saveEditAdminImg' 
                        WHERE `adminid` =  '$saveEditAdminId' ");  
                            }  
                            
                            
                 
            function deleteStudentFromCourseQuery($editId) {
                 $result = $this->conn->query("DELETE FROM `studentcourses` WHERE `id` = '$editId'");  
                     }
            function deleteAdminQuery($saveEditAdminId) {
            $result = $this->conn->query("DELETE FROM admins WHERE adminid = '$saveEditAdminId'");  
                }            
            function assignedCoursesChangesQuery($assignedCoursesChanges, $editId) {
                foreach ($assignedCoursesChanges as $value) {
                $result = $this->conn->query("INSERT INTO `studentcourses`
                (`id`, `courseid`) VALUES ('$editId','$value')");  
                }
            }
            function deleteStudentQuery($editId) {
                $result = $this->conn->query("DELETE FROM `students` WHERE `id` = '$editId'");  
                    }
            function checkForOwnerUser() {
                $result = $this->conn->query("SELECT `adminid` WHERE `role` = 'owner'"); 
                return $result; 
                    }
            function updateEditCourseQuery($saveEditCourseName, $saveEditCourseDescription , $saveEditCourseImg ,$saveCourseId) {
                        $result = $this->conn->query("UPDATE courses SET
                        `name`='$saveEditCourseName', `description`='$saveEditCourseDescription', `courseimg`='$saveEditCourseImg' 
                        WHERE `courseid`=  '$saveCourseId'");  
                            }    
            function deleteCourseQuery($saveCourseId) {
                $result = $this->conn->query("DELETE FROM courses WHERE `courseid`= '$saveCourseId'");  
                    }
        function __destruct(){
            $this->conn->close();
        }
           
?>