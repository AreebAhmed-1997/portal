<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Alert Info</title>
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
include 'headerfilter.php';
include 'fil.php';
?>
<br>
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

$selectquery= "select * from personal_infor order by p_id DESC  limit {$offset},{$limit}";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
$showselecting="select * from personal_infor order by p_id desc";

$selecting="select * from personal_infor";
  $selectingque=mysqli_query($con, $selecting);

  if(mysqli_num_rows($selectingque) > 0){
    $totrecords=mysqli_num_rows($selectingque);
    
    $totpage=ceil($totrecords/$limit);
  
  }?>
  <div class="row w-100">
  <?php
while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-md-6 col-sm-12 myclass "  style="border-bottom :2px solid 	#C0C0C0 ">
    <br>
    
    <img src="<?php echo $res['p_img'];?>" alt="this image has problem" style="" ><br><br>
    <p class="" style=" border-bottom:2px solid #C0C0C0; font-size:2vh; text-transform:capitalize;" >  Added By: <?php echo $res['founded_name']. "<br>";?> </p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  text-transform:capitalize;  ">Name: <?php echo $res['p_name']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  ">Email: <?php echo $res['p_email']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh; text-transform:capitalize;  ">Location: <?php echo $res['p_location']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  ">Contact: <?php echo $res['p_contact']. "<br>";?></p>
    <p class=""  style="  text-transform:capitalize;  font-size:2vh; ">Status: <?php echo $res['p_status']. "<br>";?></p>
    <a style="font-size:2.5vh;" class="btn btn-success w-100" href="vieweach.php?updid=<?php echo $res['p_id'];?>">  VIEW INFO</a>
    </div>

<?php
}

?>  
</div> <br>
<?php
echo'<ul class="pagination  justify-content-center">';
for($i=1; $i<=$totpage; $i++){
 echo'<li class="page-item"><a style="font-size:2vh;  " href="home.php?pagination='.$i.'">'.$i.'</a></li>';
}
echo'</ul>';
include 'footer.php';
?>

</body>
</html>

