<?php
echo '<style>';
include 'smallWinStyle.css';
echo '</style>';
    echo"<h2>Add/Edit Course</h2>
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
  <input type="text" name="coursename" value="">
</p>
<p>
  Description:
  <input type="text" name="description" value="" style='height:100px'>
</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<p>
    Image:
<img src="coolschool_logo.jpg" alt="">
</p>

<p>
</form>
<?php

?>
</div>