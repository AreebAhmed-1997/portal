<!-- 

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
 -->
 <?php
 session_start();
include 'index2.php';
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LOGIN</title>
     <style>
     body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #808080;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
     </style>
 </head>
 <body>

 <div class="sidenav">
         <div class="login-main-text">
            <h2>HelperPK<br> Login Page</h2>
            <p>Login or register from here to access.</p>
            
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST">
                  <div class="form-group">
                     <label>User Email</label>
                     <input type="text" class="form-control" name="name" placeholder="User Name" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="pass" placeholder="Password" required>
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary"><a  style="color:#fff;"  href="signin.php">Register</a></button>
                  <button  class="btn btn-secondary"><a  style="color:#fff;"  href="index.php">Home</a></button><br><br>
               </form>
               <?php
 if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $pass=$_POST['pass'];

 $selecting="select * from signi where email = '$name' and pass='$pass' ";//check if the database field are correct
 $que=mysqli_query($con, $selecting);
 $num=mysqli_num_rows($que);
 if($num == 1){
     ?>
        <script>
        window.location='index1.php';
        </script>
     <?php
        $_SESSION['users'] = $name;
      
    }
  
    else{
        // header('location:login.php');
        ?>
        <div class="alert alert-danger w-100 text-center p-0 m-0"   >
    <p class="m-0 pt-4 p-0"><strong>Alert!</strong> Incorrect Useremail or Password.</p><br><br>
  </div>
        <?php
    }
   }
   ?>
            </div>
         </div>
      </div>
      
     
 </body>
 </html>
