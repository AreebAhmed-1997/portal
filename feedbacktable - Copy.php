<?php
session_start();
if(isset($_SESSION['user'])){  
}
else{
    header('location:adminlogin.php');
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
include 'header.php';

?>
<table class="table table-dark table-hover">
   <tr>
   <th> ID </th>
   <th> NAME </th>
   <th>CONTACT</th>
   <th>FEEDBACK</th>
   <th>DELETE</th>
   </tr>


<?php
include 'index2.php';
$selectque="select * from email";
$query=mysqli_query($con,$selectque);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
?>
<tr>
<td> <?php  echo $res['id'] ;?> </td>
<td> <?php  echo $res['name'] ;?> </td>
<td> <?php  echo $res['contact'] ;?> </td>
<td> <?php  echo $res['feedback'] ;?> </td>
<td><a  data-toggle="tooltip" data-placement="top" title="DELETE!" class="btn btn-danger"  style="text-decoration:none;" href="delete.php?delid=<?php echo $res['p_id'];?>">DELETE</a></td>
</tr>
<?php

}


?>
 </table>   
</body>
</html>