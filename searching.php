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
    <title>Filter-Info</title>
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
    $limit=6;
    if(isset($_GET['pagination'])){
    $page=$_GET['pagination'];
    }
    else{
      $page=1;
    }
    $offset=($page-1)*$limit;
    
    $selectquery= "select * from personal_infor where p_status!='Founded' order by p_id DESC  limit {$offset},{$limit}";
    $query = mysqli_query($con,$selectquery);
    $nums = mysqli_num_rows($query); 

// $sel="select * from personal_infor";
//     $query = mysqli_query($con,$sel);
// $nums = mysqli_num_rows($query);
?>    
<div class="row w-100">
<?php
while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-md-6 col-sm-12 myclass"  style="">
    <img src=" <?php echo $res['p_img'];?> " alt="something wrong" width=100 height=50><br>
    <p style="border-bottom:3px solid #D3D3D3; font-size:20px;font-family: 'Dosis', sans-serif ;text-align:center ;text-transform:capitalize;">Name: <?php echo $res['p_name']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Added by: <?php echo $res['founded_name']. "<br>";?> </p>
    
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Email: <?php echo $res['p_email']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Location: <?php echo $res['p_location']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Contact: <?php echo $res['p_contact']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Dosis', sans-serif ;">Status: <?php echo $res['p_status']. "<br>";?></p>
    <a style="font-size:2.5vh;" class="btn btn-success w-100" href="vieweach.php?updid=<?php echo $res['p_id'];?>">VIEW INFO</a> <br><br>
    </div>
    <?php
}
?>
</div>
<?php
$selecting="select * from personal_infor";
$selectingque=mysqli_query($con, $selecting);

if(mysqli_num_rows($selectingque) > 0){
  $totrecords=mysqli_num_rows($selectingque);
  
  $totpage=ceil($totrecords/$limit);

}
echo'<ul class="pagination  justify-content-center">';
for($i=1; $i<=$totpage; $i++){
 echo'<li class="page-item"><a style="font-size:2vh; padding:0px 3px; border:2px solid #ADD8E6; margin:0px 1px;" href="home.php?pagination='.$i.'">'.$i.'</a></li>';
}
echo'</ul>';
include 'footer.php';

?>
</body>
</html>