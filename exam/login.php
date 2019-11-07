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
$cache = './cache/sample.cache.php';

$password=md5($password);
$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
  if (isset($_POST['chkMe'])) {
    $objData = serialize($logObj);
    $cookie_name = "user";
    $cookie_value = $objData;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //the value stored for 30 days
  }
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["quizSub"] = array();
$_SESSION["quizAtm"] = array();
$_SESSION["quizOptions"] = array();
header("location:account.php?q=1");
}
else {
	echo $email;
  echo $password;
}
?>
