
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sign-in.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
</head>
<body>
    <div class="container">
        <div class="container_1">
            <h1 class="container_1heading"   > WELCOME </h1><br> <br>     
           <p class="container_1para">to keep connected with us please login with your porsonal info <b>NOTE</b>: Our security system is not to much strong so try to avoid your personal acoount (like atm, bank, bussiness ) password as your website password .If you  have a account simply <a href="login.php"> LOGIN</a> OR <a href="#signin.php"> SIGN-UP</a>.Wanna go to the<a href="index.php"> HOME</a></p> 

        </div> <br>
        <div class="container_2">
            <h1 class="container_2HEADING"> REGISTER HERE</h1><BR>
            <img class="img" src="pic/help1.png" alt="" width="30%;">
            <div id="sign-in">
            <form action=" " method="POST">
<p class="foam_paragraph">NAME </p>       <input  type="text"   name="name"     id="foam_paragraph1"   placeholder="ENTER YOUR NAME" required><br><br>
<p class="foam_paragraph">LAST NAME</p>   <input  type="text"   name="lastname" class="foam_paragraph" placeholder="ENTER YOUR LAST NAME" required><br><br>
<p class="foam_paragraph">EMAIL</p>       <input  type="text"   name="email"    class="foam_paragraph" placeholder="ENTER YOUR EMAIL" required><br><br>
<p class="foam_paragraph">PHONE NUMBER</p><input  type="text"   name="phone"    class="foam_paragraph" placeholder="ENTER YOUR PHONE NUMBER" required><br><br>
<p class="foam_paragraph">PASSWORD </p>   <input  type="text"   name="pass"     class="foam_paragraph" placeholder="ENTER YOUR PASSWORD" required><br><br>

<div id="btns_submit">
<button name="submitT" type="submit" id="btn_submit1"  > Submit button</button> <br>
</div>
            </form>
        </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php
include 'index2.php';

if(isset($_POST['submitT'])){
    $name= $_POST['name'];
    $lname= $_POST['lastname'];
    $email= $_POST['email']; 
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
   
    $inserting = "insert into signi(name,lastname ,email , phone,pass) values('$name' ,'$lname' ,'$email' ,'$phone' ,'$pass')";
    $res=mysqli_query($con,$inserting);
    if ($res){
        header( "refresh:5;url=login.php" )
        ?>
        <script>alert("data inserted")</script>
        <?php
    }
    else{
        ?>
       <!-- <script> alert("data not inserted")</script> -->
                    <div class="alert alert-danger w-100 text-center p-0 m-0"   >
                    <p class="m-0 pt-4 p-0"><strong>Alert!</strong> Incorrect Useremail or Password.</p><br><br>
                </div>
       <?php
    }

    
}

?>
