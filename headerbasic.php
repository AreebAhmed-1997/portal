<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.logoimg{
        width:100%;
        height:10vh;
    }
    .navi{
     font-size:3vh;
     color:#fff;
    }
    .navi:hover{
        
        border-radius:30px;
     transition:0.3s ease-in;
     background-color :#D3D3D3;
    }
    .navi1{
        
        
    }
</style>
    </head>
            <body>


                <!-- <script>
                function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
            </script>
                <style>
                .myclass:hover
                {
                transform:scale(1.01);
                transition:0.7s ease-in ;
                }
                img{

                width:100%; height:50vh;
                }
                .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            }

            .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #fff;
            display: block;
            transition: 0.3s;
            }

            .sidenav a:hover {
                background:#fff;
                border-radius:10px;
            color: #000;
            }

            .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
                </style>
</head>
<body>


        <div id="mySidenav" class="sidenav">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
        <a href="index.php">HOME</a>
        <a href="home.php">ALERT PAGE</a>
        <a href="index1.php">CREATE ALERT</a>
        
        <a href="signin.php">SIGN-IN</a>
        <a href="login.php">LOG-IN</a>
        <a id="logout"href="filterlogout.php" >LOGOUT</a>
        
       

        </div>

        <div style="display:flex; width:100%;  background-color:#fff; border-bottom:2px solid #C0C0C0;">
        <h1 style="width:4%; margin-left:1%;font-size:30px;cursor:pointer ; margin:25px 0px 0px 20px" onclick="openNav()">&#9776; </h1>
        <h1 style="width:95% ; text-align:center; font-size:4vw; margin:0px">HELPERPK.COM</h1>
        </div>
    
</body> -->
<nav class="navbar navbar-expand-md navbar-light "  >
  <a href="index.php" class="w-25"> <img class="logoimg " src="img\logo.png" alt="logo" ></a>
  <button  class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
    <span class="navbar-toggler-icon text-body"></span>
  </button>
 
   
  
  <div class="collapse navbar-collapse " style="justify-content:flex-end;" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;" href="index.php">Home</a>
      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;"   href="home.php">Missing information</a>
      </li>
      
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;"   href="index1.php">Report missing</a>
      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " id="mypost" style="color:#000; "   href="mypost.php">Mypost</a>
      </li> 
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;" id="signup"  href="signin.php">Signup</a>

      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;" id="login"  href="login.php">Login</a>
      </li> 

      <li class="nav-item  navi1  mr-1 ml-1">
        <a class="nav-link navi " style="color:#000;"  id="logout" style="color:#000;"  href="filterlogout.php">Logout</a>
      </li>   
         
    </ul>

  </div>  
</nav>
        </body>
        </html>
<?php
if(!isset($_SESSION['users'])){
    ?>
    <script>
    document.getElementById('logout').style.display="none";
    document.getElementById('mypost').style.display="none";
    </script>
    <?php
}
else{
	?>
	<script>
  document.getElementById('login').style.display="none";
  document.getElementById('signup').style.display="none";
  	</script>
	<?php
}
?>
</html>