<?php
session_start();
if(isset($_SESSION['users'])){  
}
else{
    header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dosis&family=Overpass:wght@100&display=swap" rel="stylesheet">
<!-- link for google font -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPost-Helperpk</title>
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

    include 'index2.php';
    include 'topheader.php';
include 'headerbasic.php';
    $selectquery= "select * from personal_infor where p_email = '$_SESSION[users]'";
    $query = mysqli_query($con,$selectquery);
    $nums = mysqli_num_rows($query);
    ?>    
<div class="row w-100">
<?php

while( $res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-md-6 col-sm-12 myclass"  style="">
    <img src=" <?php echo $res['p_img'];?> " alt="something wrong" width=100 height=50><br>
    <p style="border-bottom:3px solid #D3D3D3; font-size:20px;font-family: 'Dosis', sans-serif ;text-align:center ;text-transform:capitalize;">Name: <?php echo $res['p_name']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Added by: <?php echo $res['founded_name']. "<br>";?> </p>
    
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Email: <?php echo $res['p_email']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Location: <?php echo $res['p_location']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Contact: <?php echo $res['p_contact']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Status: <?php echo $res['p_status']. "<br>";?></p>
    <a style="font-size:2.5vh;" class="btn btn-secondary " href="vieweach.php?updid=<?php echo $res['p_id'];?>">INFO</a> 
    <a href="usereditfoam.php?upded1=<?php echo $res['p_id'];?>"><button class="btn btn-primary w-25">EDIT</button></a>
    <a href="userfoundform.php?updfouform=<?php echo $res['p_id'];?>"><button class="btn btn-success w-25">FOUNDED</button></a><br><br> 
    </div>
    <?php
}
    ?>
    </div>
    <?php
    if($nums == 0){
      ?>
      <h1 class="text-center display-1 mt-5 mb-5"> NO POST TO SHOW</h1>
      <a href="index1.php" class="linkpost"><button class="buttonpost btn btn-success w-25 rounded" style="margin:0% 37%; font-size:2.5vh;">Click To Post</button> </a><br><br>
      <?php
    }
   
    include 'footer.php';
    ?>
</body>
</html>