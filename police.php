<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Police Alert</title>
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
include 'headerfilter.php';
include 'index2.php';
$police="police";
$selectquery= "select * from personal_infor where p_status like '{$police}%'";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-sm-6 col-12 myclass" style="border-bottom :2px solid 	#C0C0C0 ">
    <br>
    
    <img src="<?php echo $res['p_img'];?>" alt="this image has problem" style="" >
    <p class="form-control" style=" border-bottom:2px solid #C0C0C0; " >  Added By : <?php echo $res['founded_name']. "<br>";?> </p>
    <p class="form-control"  style=" border-bottom:2px solid #C0C0C0; ">Name: <?php echo $res['p_name']. "<br>";?></p>
    <p class="form-control"  style=" border-bottom:2px solid #C0C0C0; ">Email: <?php echo $res['p_email']. "<br>";?></p>
    <p class="form-control"  style=" border-bottom:2px solid #C0C0C0; ">Location: <?php echo $res['p_location']. "<br>";?></p>
    <p class="form-control"  style=" border-bottom:2px solid #C0C0C0; ">Contact: <?php echo $res['p_contact']. "<br>";?></p>
    <p class="form-control"  style=" border-bottom:2px solid #C0C0C0; ">Status: <?php echo $res['p_status']. "<br>";?></p>
    </div>
    
    
    
<?php
}

?>



       
    </table>
</body>
</html>