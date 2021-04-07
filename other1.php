<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Other info</title>
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

include 'index2.php';
include 'fil.php';

$missing="missing";
$police="police";
$accident="accident";
$selectquery= "SELECT * FROM  personal_infor WHERE p_status !='missing' AND p_status!='police' AND p_status!='accident'";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
?>
<div class="row w-100">
<?php
while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-sm-6 col-12 myclass" style="border-bottom :2px solid 	#C0C0C0 ">
    <br>
    
    <img src="<?php echo $res['p_img'];?>" alt="this image has problem" style="" >
    <p  style="font-size:20px;font-family: 'Dosis', sans-serif ;text-align:center ;text-transform:capitalize;" >Name:&nbsp;<?php echo $res['p_name']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;" >Added by:&nbsp;<?php echo $res['founded_name']. "<br>";?> </p>
    
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;" >Email:&nbsp;<?php echo $res['p_email']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Location: &nbsp;<?php echo $res['p_location']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Contact: &nbsp;<?php echo $res['p_contact']. "<br>";?></p>
    <p style="font-size:16px;font-family: 'Overpass', sans-serif;">Status: &nbsp;<?php echo $res['p_status']. "<br>";?></p>
    <a href="vieweach.php?updid=<?php echo $res['p_id'];?>"><button class="btn btn-success" >VIEW INFO</button></a>
    </div>
    
    
    
<?php
}

?>
</div> <br>
<?php
include 'footer.php';
?>


       
    </table>
</body>
</html>