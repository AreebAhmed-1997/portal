<?php
 session_start();
 if(isset($_SESSION['user'])){  
}
else{
    header('location:adminlogin.php');
}
 include 'index2.php';

 if (isset($_POST['submit'])){
 $email = $_POST['useremail'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 $from="areeb1997ahmed@gmail.com";
 $header="from : $from";

 $inse="insert into email1(useremail,	subject, message )values('$email','$subject','$message')";
 $que = mysqli_query($con, $inse);

   if (mail( $email, $subject, $message, $header)){
       header('location:index3.php');
   }
   else{
       echo"not sent";
   }

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    
    ::placeholder {
  color: red;
}
    input[type=text] , input[type=email]{
        background-color: transparent ;
        border:2px solid #A9A9A9;
        color:#FFFAFA;
    }
    input[type=text] {
        color:#fff;
    }
    
        body{
        background:url('pic/back.png');
        background-size:cover;
        background-position:center;
        background-attachment: fixed;
        color:#fff;
       
    }
    .cont{
        background: rgba( 249, 249, 249, 0.15 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 6.0px );
        -webkit-backdrop-filter: blur( 6.0px );
        border-radius: 10px;
        color:#fff;
        
    }
    
    </style>
    <title>Document</title>
</head>
<body>
        <div class="main">
        <?php
        include 'header.php';
        ?>
    <h1 class="display-1 text-center text-white" >EMAIL SECTION</h1>
        <div class="cont">
        <form action="" class="ml-1" method="POST"><br>
        <label for=""> TO </label>
        <input class="form-control"  type="email" name="email"  placeholder="USER@GMAIL.COM" >
        <label for="">SUBJECT</label>
        <input class="form-control"  type="text" name="subject" placeholder="TYPE IN SUBJECT OF YOUR EMAIL">
        <label for="">MESSAGE</label>
        <input class="form-control"  type="text" name="message" placeholder="WRITE EMAIL "><br>
        
        <input class="btn btn-success" type="submit" name="submit" value="SUBMIT">
        
        
        
        </form>
        </div>

        </div>


</body>
</html>