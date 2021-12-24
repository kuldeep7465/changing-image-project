
<form action="" method="post" enctype="multipart/form-data">
<table border="1" cellpadding="1" cellspacing="5" align="centre">

<!-- <tr>  <td>email</td>   <td><input type= "text" name="email" id="address"> </td>  </tr>
<tr>  <td>password</td>      <td><input type= "file" name="password" id="name"></td>         </tr> -->
<tr>  <td>image</td>   <td><input type= "file" name="image" id="address"> </td>  </tr>
<tr>  <td><input type="submit" name="submit" value="submit" id="submit"></td>		 </tr>
</table>
</form>
<?php
if (isset($_POST['submit'])) {
    # code...

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
// echo $tempname."<br>";
// echo $filename."<br>";
$folder="image/".$filename;

echo $folder;
echo "<br>";
move_uploaded_file($tempname,$folder);
 echo "<img src='$folder'  height='100' width='100'/><br>";
}
?>
