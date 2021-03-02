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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    html{
        
    }
    body{
        background:url('pic/back.png');
        background-size:cover;
        background-position:center;
        background-attachment: fixed;
        color:#fff;
    }
    .tab{
        
        background: rgba( 249, 249, 249, 0.15 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 6.0px );
        -webkit-backdrop-filter: blur( 6.0px );
        border-radius: 10px;
        color:#fff;
    }
    tr:hover {  background: rgba( 249, 249, 249, 0.20 );}
    </style>



</head>
<body>
    
 
    <div class="main">
    <?php
 include 'header.php';
 ?>
    <h1 class="display-2 text-center text-white"> RECORD OF USER</h1>
    <form action="" method="POST" >
    <input class="inlineform-control w-75" type="text" name="search" placeholder="Search By Name">
    <input class="btn btn-success w-15" type="submit" name="submit">
    </form>
    <table  class="w-100 tab  tabel-hover">
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
if(isset($_POST['submit'])){
    $search=$_POST['search'];
$selectquery= "select * from personal_infor where founded_name like '{$search}%' ";
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
    <td><img src=" <?php echo $res['p_img'];?> " alt="something wrong" width=100 height=50></td>
    <td><a  data-toggle="tooltip" data-placement="left" title="UPDATE!" class="btn btn-success" style="text-decoration:none;"  href="update.php?updid=<?php echo $res['p_id'];?>">UPDATE</a></td>
    <td><a onclick="myfunc()" data-toggle="tooltip" data-placement="top" title="DELETE!" class="btn btn-danger"  style="text-decoration:none;" href="delete.php?delid=<?php echo $res['p_id'];?>">DELETE</a></td>
    </tr>
<?php
}
}
else{
    $sel="select * from personal_infor";
    $query = mysqli_query($con,$sel);
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
    <td><img src=" <?php echo $res['p_img'];?> " alt="something wrong" width=100 height=50></td>
    
    <td><a  data-toggle="tooltip" data-placement="left" title="UPDATE!" class="btn btn-primary" style="text-decoration:none;"  href="update.php?updid=<?php echo $res['p_id'];?>">UPDATE</a></td>
    <td><a onclick="myfunc()" data-toggle="tooltip" data-placement="top" title="DELETE!" class="btn btn-danger"  style="text-decoration:none;" href="delete.php?delid=<?php echo $res['p_id'];?>">DELETE</a></td>
    </tr>
<?php
}
}
?>   
  
    </table>

   
    
    </div>
    <script>

    function myfunc(){
        alert("are you sure you want to delete")

    }
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>