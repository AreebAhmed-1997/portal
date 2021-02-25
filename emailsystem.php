<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php';
?>
    
<h1 class="display-2 text-center">EMAIL SYSTEM</h1>

<table class="table table-dark table-hover">
<tr>
<th>ID</th>
<th>NAME</th>
<th>CONTACT</th>
<th>MESSAGE</th>
<th>DELETE</th>


<?php
include 'index2.php';
$sele="select * from email";
$selque=mysqli_query($con,$sele);
$num=mysqli_num_rows($selque);
while($res = mysqli_fetch_array($selque) ){
    ?>
    <tr></tr>
    <td> <?php echo $res ['id'] ;?>     </td>
    <td> <?php echo $res ['name'];?>    </td>
    <td> <?php echo $res ['contact'];?> </td>
    <td> <?php echo $res ['feedback'] ; ?>    </td>
    <td><a  data-toggle="tooltip" data-placement="left" title="delete!"      class="btn btn-danger"  style="text-decoration:none;" href="delete.php?delid=<?php echo $res['p_id'];?>">DELETE</a> </td>
    </tr>
 <?php
}


?>
</table>




</body>
</html>