<?php
session_start();
session_unset();
session_destroy();
$_POST['novalid'] = true;
header("location:index.php");
exit();
