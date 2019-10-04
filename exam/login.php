<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';

class loginInfo {
    }
$logObj = new loginInfo;



$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);

$logObj->email = $email;
$logObj->pass = $password;
$cache = 'sample.cache.php';

$password=md5($password);
$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	echo "COrrect Pass Login Granted<br>";
  if (isset($_POST['chkMe'])) {
    $f = fopen($cache, 'w+') or die("error writing file");
    $objData = serialize($logObj);
    fwrite($f, $objData);
    fclose($f);
    echo"cache Written";
  }
  else {
    echo "not ticked";
  }
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:account.php?q=1");
}
else {
	header("location:$ref?w=Wrong Username or Password");
}
?>
