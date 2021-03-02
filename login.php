<?php
include 'index2.php';
 session_start();

 if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $pass=$_POST['pass'];

 $selecting="select * from signi where name = '$name' and pass='$pass' ";//check if the database field are correct
 $que=mysqli_query($con, $selecting);
 $num=mysqli_num_rows($que);
 if($num == 1){
     header('location:index1.php');
        $_SESSION['users'] = $name;
    }
  
    else{
        header('location:login.php');
    }
   }

// include 'index2.php';
// session_start();

// if(isset($_POST['submit'])){

//  $name=$_POST['name'];
//  $pass=$_POST['pass'];

//  $sel=" select * from signi where name = '$name' and pass = '$pass' ";

//  $que=mysqli_query($con, $sel);
//  $num=mysqli_num_rows($que);

//  if($num == 1){
//      header('location:index1.php');
//      $_SESSION['user'] = $name;
//  }

//  else{
//      header('location:login.php');
//  }

// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container_1">
      <form action="" method="POST">
          <img src="profile1.jpg" alt="" style="width: 30%;border-radius: 50px; margin: 0 35%;">
          <p class="p1">NAME</p>   
          <input type="text" name="name" >
          <p class="p2">PASSWORD</p>   
          <input type="text" name="pass"><br><br>
          <input type="submit" name="submit">
          <div class="buttons_for_login">
          <button class="login_button" ><a href="index.php"> HOME </a></button>
          <button class="forgot_button" > FORGOT PASSWORD !</button>
          <a href="#" class="cancel"> CANCEL</a>
          <a href="signin.php"class="sign_in"> SIGN-IN</a>
        </div>
      </form>
  </div>
</div>
</body>
</html>