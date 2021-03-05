<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marque Edit</title>
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

<table class="table tab" style="color:#fff;">

<tr>
<th>S_NO</th>
<th>NEWS</th>
<th>UPCOMING EVENT </th>
<th>EDIT</th>
</tr>



<?php

include ('index2.php');
include 'header.php';
$queforsel="select * from marquee";
$query=mysqli_query($con,$queforsel);
$number=mysqli_num_rows($query);
while($result=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td>   <?php echo $result['sno'] ;?> </td>
    <td> <?php echo $result['marquee1'] ;?> </td>
    <td> <?php echo $result['marque2'] ;?> </td>
    <td> <a class="btn btn-primary" href="marqueefoam.php?marqueedit=<?php echo $result['sno'];?>">EDIT</a></td>
    </tr>
    <?php
}


?>
  </table>  
  </div>
</body>
</html>