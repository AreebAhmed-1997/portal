<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
include 'index2.php';
include 'header.php';
$sel="select email from signi"; //check here
$que=mysqli_query($con, $sel);
$num=mysqli_num_rows($que);
while($row=mysqli_fetch_array($que)){
  $result[] = $row['email'];//also check here
}
  
if(isset($_POST['submit']))
{

$message=$_POST['email'];
$subject=$_POST['subject'];
$to=implode(', ' ,$result);
$from="from: areeb1997ahmed@gmail.com";
mail( $to,$subject ,$message  ,$from  );

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
   
    </style>
</head>
<body>
<form action="" method=POST>
<label for="" class="ml-3"> SUBJECT</label>
<input class="form-control" style=" background-color:transparent; color:#fff;" type="text " name="subject">
<label for="" class="ml-3">MESSAGE</label>
<input class="form-control" style=" background-color:transparent; color:#fff;" type="text" name="email"><br>

<input class="btn btn-success ml-1 w-25 float-right" type="submit" name="submit">

</form>
    
</body>
</html>