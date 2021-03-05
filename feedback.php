<?php

include 'index2.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$contact=$_POST['contact'];
$text=$_POST['text'];

$inserting="insert into email(name,contact,feedback) values ('$name','$contact','$text')";
$res=mysqli_query($con,$inserting);
    if ($res){
        ?>
        <script>alert("data inserted")</script>
        <?php
    }
    else{
        ?>
       <script> alert("data not inserted")</script>
       <?php
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <H1 class="text-center">EMAIL FORM </H1>
    <form action="" method="POST">
    
    <label for="">NAME</label>
    <input  class="form-control" type="text" name="name"><br>
    <label for="">CONTACT</label>
    <input  class="form-control" type="text" name="contact"><br>
    <label for="">EMAIL</label><br>
    <textarea name="text" class="form-control" cols="100" rows="3"></textarea><br>
    <input  class=" btn btn-success w-25" type="submit" name="submit" value="SEND">


    </form>
</body>
</html>

   