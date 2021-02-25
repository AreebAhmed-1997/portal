<?php

include 'index2.php';
session_start();

if(isset($_POST['submit'])){

 $name=$_POST['name'];
 $pass=$_POST['pass'];

 $sel=" select * from adminlogin where name = '$name' and pass = '$pass' ";

 $que=mysqli_query($con, $sel);
 $num=mysqli_num_rows($que);

 if($num == 1){
     header('location:index3.php');
     $_SESSION['user'] = $name;
 }

 else{
     header('location:adminlogin.php');
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'headerbasic.php';   


?>
<h1 class='display-1 text-center'>LOGIN FOR ADMIN PANEL</h1>
<form class="ml-1" action="" method="POST">
    <label for="">USERNAME</label><br>
    <input  class="form-group w-100" type="text"     name="name" ><br>
    <label for="">PASSWORD</label><br>
    <input  class="form-group w-100" type="password" name="pass"><br>
    <input class="btn btn-success" type="submit"   name="submit" value="SUBMIT" > <br>
    </form>
    
</body>
</html>