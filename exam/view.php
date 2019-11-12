<?php
include_once 'dbConnection.php';
$id= @$_GET['id'];
if($q= mysqli_query($con, "select * from quiz where eid='$id'")) {
  $row = mysqli_fetch_array($q);
  header('Content-Type:'.$row['mime']);
  echo base64_decode($row['answers']);
}
else {
  echo "no files found";
}
 ?>
