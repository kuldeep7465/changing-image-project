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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <title>Document</title>
</head>
<body>
 <table class="table table-bordered table-primary" border="1" cellpadding="1" cellspacing="5" align="centre" id="example">
 <thead>
    <tr>
    <th scope="col">id</th>
    <th scope="col">email</th>
    <th scope="col">pass</th>
    <th scope="col">image</th>
    <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    <?php

    
    $sql="SELECT * FROM `insert`";
$quarey=mysqli_query($conn,$sql);
$result=mysqli_num_rows($quarey);
echo $result;

while ($result=mysqli_fetch_assoc($quarey)) {
    # code...
    echo "<tr>
    <td scope='row'>".$result['id']."</td>
    <td scope='row'>".$result['email']."</td>
    <td scope='row'>".$result['pass']."</td>
    <td><img src='". $result['image']."' height='100' width='100'</td>
    <td >
    <a href='delete.php?id=$result[id]' onclick='return checkdelete()'>DELETE</a>
    </td>
    </tr>";
    
}

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script> 
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</tbody>
</table>
</body>
</html>