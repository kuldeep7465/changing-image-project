<?php
$conn=mysqli_connect("localhost","root","","image");
if ($conn) {
    # code...
    echo "connection succecessfull<br>";
}
else{
    echo "connection fiald";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $conn=mysqli_connect("localhost","root","","image");
    if ($conn) {
        # code...
        echo "connection succecessfull";
    }
    else{
        echo "connection fiald";
    }
if (isset($_POST['submit'])) {
    # code...
    
    $email=$_POST['email'];
    $pass=$_POST['password'];

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
// echo $tempname."<br>";
// echo $filename."<br>";
$folder="image/".$filename;


move_uploaded_file($tempname,$folder);
 echo "<img src='$folder'  height='100' width='100'/><br>";

 $sql="INSERT INTO `insert` ( `email`, `pass`,`image`) VALUES (  ' $email', '  $pass','$folder')";
$quarey=mysqli_query($conn,$sql);
if ($quarey) {
 # code...
 echo "succesesfull insert";
}
else {
 
 echo "not inset";
}
}
include("print.php");

?>
</body>
</html>