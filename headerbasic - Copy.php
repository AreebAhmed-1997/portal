<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            color: #818181;
            display: block;
            transition: 0.3s;
            }

            .sidenav a:hover {
            color: #f1f1f1;
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
        <a href="home.php">HOME</a>
        <a href="index.php">INDEX PAGE</a>
        <a href="index1.php">CREATE ALERT</a>
        <a href="signin.php">SIGN-IN</a>
        <a href="login.php">LOG-IN</a>
        </div>

        <div style="display:flex; width:100%;  background-color:#fff; border-bottom:2px solid #C0C0C0;">
        <h1 style="width:4%; margin-left:1%;font-size:30px;cursor:pointer ; margin:25px 0px 0px 20px" onclick="openNav()">&#9776; </h1>
        <h1 style="width:95% ; text-align:center; font-size:4vw; margin:0px">HELPERPK.COM</h1>
        </div>
    
</body>
</html>