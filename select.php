<?php
session_start();
if(!isset($_SESSION['userr'])){
    header('location:adminlogin.php');
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="display-2 text-center"> RECORD OF USER</h1>
    <table  class="table table-dark table-hover">
        <tr>
        <th>id</th>
        <th>FOUNDED PERSON </th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>LOCATION</th>
        <th>CONTACT</th>
        <TH>STATUS</TH>
        <th>IMAGE</th>
        <th>UPDATE</th>
        <th>DELETE</th>
        </tr>


        <?php

include 'index2.php';
$selectquery= "select * from personal_infor";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
    
    ?>
    <tr>
    <td><?php echo $res ['p_id']; ?>  </td>
    <td><?php echo $res['founded_name']. "<br>";?> </td>
    <td><?php echo $res['p_name']. "<br>";?></td>
    <td><?php echo $res['p_email']. "<br>";?></td>
    <td><?php echo $res['p_location']. "<br>";?></td>
    <td><?php echo $res['p_contact']. "<br>";?></td>
    <td><?php echo $res['p_status']. "<br>";?></td>
    <td><img src=" <?php echo $res['p_img'];?> " alt="" width=100 height=50></td>
    <td><a  data-toggle="tooltip" data-placement="left" title="UPDATE!" class="btn btn-success" style="text-decoration:none;"  href="update.php?updid=<?php echo $res['p_id'];?>">UPDATE</a></td>
    <td><a  data-toggle="tooltip" data-placement="top" title="DELETE!" class="btn btn-danger"  style="text-decoration:none;" href="delete.php?delid=<?php echo $res['p_id'];?>">DELETE</a></td>
    </tr>
<?php
}

?>     
    </table>

    <h1 class="display-2 text-center">EMAIL SYSTEM</h1>

    <table class="table table-dark table-hover">
    <tr>
   <th>ID</th>
   <th>NAME</th>
   <th>CONTACT</th>
   <th>MESSAGE</th>
   <th>DELETE</th>


    <?php
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
    <button> <a href="logoutadminpanel.php">LOGOUT</a></button>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>