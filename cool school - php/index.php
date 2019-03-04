<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu">
<img src="coolschool_logo.jpg" alt="shcool logo" id="logo">
<a href="#">Home</a> -
<a href="support.html">Support</a> 
</div>
<span>System connection:</span>
<?php
// session_start();
include 'config.php'; 
echo "<span class='hivuigood'> Good</span>";
   ?>
<div class="center">
<h1>Welcome Guest!</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <div class="form-group">
    <label for="email"></label>
    <input type="email" autofocus class="form-control" id="email" placeholder="Email address" name="email">
    <!-- abc<input type="file" name="" id="" value=""> -->
  </div>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="password" class="form-control" class="center" id="pwd" placeholder=" Password" name="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Login</button>
</form>
</div>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"]; 
        $pwd = $_POST["pwd"]; 
    } else {  
            $email = $pwd = "";
        }
 $emailErr = $pwdErr = "";
    if (empty($_POST["email"])) {
        $emailErr = "Your Email address is required";
    
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
        }
    }
        if (empty($_POST["pwd"])) {
            $pwdErr = "You must fill in your password"; 
        } else {
            $pwd = test_input($_POST["pwd"]);
            if ( !filter_var($pwd, FILTER_VALIDATE_INT) === true) {
                $pwdErr = "Wrong combination call support immediately";
            
            }
        }
  if (strlen($pwd)>1 && strlen($pwd) < 6) {
    $pwdErr = "Fill full password";
    }
    
    if ($emailErr!="" || $pwdErr!="") {
  
        if ($emailErr!="") {
            echo "<span class='loginErr'> {$emailErr} </span>";
        }else {
        
            echo "<span class='loginErr'> {$pwdErr} </span>";
            }
    }else{
        $email = $_POST["email"]; 
        $pwd = $_POST["pwd"];
        $query = "SELECT password FROM administrator WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        }
    if (!isset($result)){
             $result = "";
    } else{
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);  
            } else{    
        $emailErr = 'Not recognize in the school system';   
        echo "<span class='loginErr'> {$emailErr} </span>";
            }
    // $enter = ( $row[0]['password'] === $pwd) ? header("Location:http://192.168.64.2/php_pro/inputvalid.php") :  'not match';
    if (isset($row[0]['password']) && $row[0]['password'] === $pwd) {
        $_SESSION['email']=$email;
        $nameQuery = "SELECT name FROM administrator WHERE email='$email'";       
        $result1 = mysqli_query($conn, $nameQuery);
        if (mysqli_num_rows($result1) === 1) {
            $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            $name = $row1[0]['name'];
            $_SESSION['name'] = $name;  
            header("Location:http://192.168.64.2/php_pro/inputvalid.php");          
            }            
        }else {
            $row[0]['password'] = '';
            echo "<div class='loginErr' style='padding-top:100px'>password and user do not match</div>";
        } 
        echo '<br><br><br><br><br>';       
// $roleQuery = "SELECT role FROM administrator WHERE email='$email'";

// $result1 = mysqli_query($conn, $roleQuery);
// if (mysqli_num_rows($result1) === 1) {
// $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
//     }
}
?>

</body>
</html>