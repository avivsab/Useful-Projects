<?php
echo '<style>';
include 'smallWinStyle.css';
echo '</style>';
    echo"<h2>Add/Edit Student</h2>
    <form action='config.php'>
        <input type='submit' value='Edit' id='editBtn'>
    </form>
    <div id='clr' style='clear:both'></div>
    <hr>";
?>
<button>SAVE</button>
<button style='float:right'>Delete</button>
<div id="center">
<form action="inputvalid.php" method="post">
<p>
    Name:
  <input type="text" name="name" value="">
</p>
<p>
  Phone:
  <input type="number" name="phone" value="">
</p>
<p>
  Email:
  <input type="email" name="lastname" value="">
</p>
<p>
    Image:
<img src="coolschool_logo.jpg" alt="student image">
</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<p>
  courses: 
    <div>
  <input type="checkbox" name="vehicle" value="Bike" checked> course A<br>
  <input type="checkbox" name="vehicle" value="Car" checked>course B
  </p> 
</div>
</form>
</div>