<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
    <style>
   
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
 <a href="index.php"> MAIN PAGE</a>
 <a href="userdetail.php"> USERS DETAIL</a>
  <a href="index3.php">INFO RECORD</a>
  <a href="e_mail1.php"> PERSONAL EMAIL</a>
  <a href="emailall.php"> EMAIL TO ALL</a>
  
  <a href="feedbacktable.php">VIEW FEEDBACK </a>
   <a href="logoutadminpanel.php">LOGOUT</a>
</div>

<div style="display:flex; width:100%;  background-color:#transparent; border-bottom:2px solid #C0C0C0;color:#fff; ">
<h1 style="width:4%; margin-left:1%;font-size:30px;cursor:pointer ; margin:25px 0px 0px 20px" onclick="openNav()">&#9776; </h1>
<h1 style="width:95% ; text-align:center; background-color:transparent; font-size:4vw; margin:0px; ">HELPERPK.COM</h1>

</div>


    
</body>
</html>