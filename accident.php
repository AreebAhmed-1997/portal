<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .myclass:hover
    {
      transform:scale(1.01);
      transition:0.7s ease-in ;
    }
    img{

    width:100%; height:50vh;
    }
    </style>
</head>
<body>
<?php
include 'topheader.php';
include 'headerbasic.php';
?>

<form class="form-inline w-100" class="" action="" method="POST">
<input style="width:75vw;" class=" ml-1 form-control" type="text" name="search">
<input  class="rounded btn btn-success ml-1" style="width:20vw;"type="submit" name="submit">
</form><br>




<?php

include 'index2.php';
include 'fil.php'; 
if(isset($_POST['submit'])){
    $search=$_POST['search'];
$selectquery= "select * from personal_infor where p_name like '{$search}%'  and p_status='accident' ";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
?>
<div class="row w-100">
<?php
while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-md-6 col-sm-12 myclass " >
    <img src=" <?php echo $res['p_img'];?> " alt="something wrong" width=100 height=50>
    <p  style="border-bottom:3px solid #D3D3D3;font-size:20px;font-family: 'Dosis', sans-serif ;text-align:center ;text-transform:capitalize;" >Name:&nbsp;<?php echo $res['p_name']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;" >Added by:&nbsp;<?php echo $res['founded_name']. "<br>";?> </p>
    
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;" >Email:&nbsp;<?php echo $res['p_email']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Location: &nbsp;<?php echo $res['p_location']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Contact: &nbsp;<?php echo $res['p_contact']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Status: &nbsp;<?php echo $res['p_status']. "<br>";?></p>
    <a style="font-size:2.5vh;" class="btn btn-success w-100" href="vieweach.php?updid=<?php echo $res['p_id'];?>">  VIEW INFO</a> <br><br>
    </div>
   
<?php
}
?>
</div>
<?php
}
else{
  include 'accidentsearch.php';
}
?>  
</div>
</body>
</html>