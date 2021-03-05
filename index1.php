<?php
session_start();
if(!isset($_SESSION['users'])){

header('location:login.php');

}


include 'headerbasic.php';
include 'index2.php';

if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $location= $_POST['location']; 
    $contact=$_POST['Contact'];
    $status=$_POST['status'];
    //iMAGE INSERT
    $imge =$_FILES['image'];
    $filename = $imge['name'];
    $filepath= $imge['tmp_name'];
    $fileerr=$imge['error'];
    $filetype=$imge['type'];
    // if($filetype=="JPG" || $filetype=="PNG" || $filetype=="JPEG"){
    //      echo"file accepted";
    // }
    // else {
    //     echo"not accepted";
    // }
    if ($fileerr == 0){
            $des ='images/'.$filename;
            move_uploaded_file($filepath,$des);
    }
    $inserting = "insert into personal_infor(founded_name,p_name,p_email,p_location,p_contact, p_status,p_img) values ('$fname','$name','$email','$location','$contact','$status','$des')";
    $res=mysqli_query($con,$inserting);
    if ($res){
        ?>
        <script>alert("data inserted")</script>
        <?php
        header('location:home.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Alert</title>
    <STYle>
      
    </STYle>
</head>
<body>
    <H2 style="text-align: center;">ALERT PAGE</H2>
    <form action="" class="mx-2 p-0" method="POST" enctype=multipart/form-data>

        
        <input type="text"  name="fname" class="form-control mb-1" placeholder="PERSON NAME">
        
        <!-- <input type="email" class="form-control mb-1" placeholder="ENTER STATUS"> --> 
        <!-- <input type="date" class="form-control mb-1" id="birthday" name="birthday"> -->
        
        <input type="text" name="name" class="form-control mb-1" placeholder="YOUR NAME">
        <input type="text" name="email" class="form-control mb-1" placeholder="Enter EMAIL ">
        <input type="text" name="location" class="form-control mb-1" placeholder="Enter LOCATION ">
        <input type="text" name="Contact" class="form-control mb-1" placeholder="Enter CONTACT ">
        <input type="text" name="status" class="form-control mb-1" placeholder="Enter status ">
        
        <!-- <div class="form-group p-0">
                
            <select style="text-align: center;" class="form-control p-0" id="sel1" name="sellist1" placeholder="en">
              <option>MISSING</option>
              <option>HOSPITAL</option>
              <option>POLICE STATION</option>
              <option>ACCIDENT</option>
            </select>
           
            
          </div> -->

        
        <textarea row ="5" style="width:100% ;text-align:center;"  name="comment" form="usrform">
            Enter info here..</textarea> <br>

             
            <input type="file" name="image" class="btn mb-1 ">
            <button class="btn bg-success w-100 rounded-lg  text-white" type="submit" name="submit"> ADD ALERT</button>

    </form>
    
    
</body>
</html>
