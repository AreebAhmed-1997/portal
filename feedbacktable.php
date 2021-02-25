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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    tr , td{color:#fff}
    </style>
    </style>
</head>
<body>
<div class=main>
<?php
include 'header.php';

?>
<table class="table tab">
   <tr>
   <th> ID </th>
   <th> NAME </th>
   <th>CONTACT</th>
   <th>FEEDBACK</th>
   <th>DELETE</th>
   </tr>


<?php
include 'index2.php';
$selectque="select * from email";
$query=mysqli_query($con,$selectque);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
?>
<tr>
<td> <?php  echo $res['id'] ;?> </td>
<td> <?php  echo $res['name'] ;?> </td>
<td> <?php  echo $res['contact'] ;?> </td>
<td> <?php  echo $res['feedback'] ;?> </td>
<td><a  data-toggle="tooltip" data-placement="top" title="DELETE!" class="btn btn-danger"  style="text-decoration:none;" href="deletefeedbacktable.php?delid=<?php echo $res['id'];?>">DELETE</a></td>
</tr>
<?php

}


?>
</div>
 </table>   
</body>
</html>