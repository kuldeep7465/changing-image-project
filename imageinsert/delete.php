<?php
$conn=mysqli_connect("localhost","root","","image");
if ($conn) {
    # code...
    echo "connection succecessfull<br>";
}
else{
    echo "connection fiald";
}
$id=$_GET['id'];
  $sql="DELETE FROM `insert` WHERE `insert`.`id` = $id";
  $quary=mysqli_query($conn,$sql);
  if ($quary) {
      # code...
      echo "data delete";
      header("location:print.php");
  }
  else {
      # code...
      echo "data not delete";
  }
    

?>