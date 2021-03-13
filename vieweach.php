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
    <title>VIEW-EACH</title>
    <style>
   img{

width:100%; height:50vh;
}
    </style>
</head>
<body>
    
    <?php
    include ('topheader.php');
    include ('index2.php');
    include ('headerbasic.php');
    
                $id= $_GET['updid'];
                $select="SELECT * FROM personal_infor where p_id =$id ";
                $que=mysqli_query($con,$select);
                $res=mysqli_fetch_array($que);

                ?>
                <p class="text-center" style="font-size:4vh;text-transform:capitalize;">  <?php echo $res['p_name']. "<br>";?>  </p>
                <div class="row w-100  " >
                <div class="col-md-3 p-0"> 
        <img class="p-0 " src="<?php echo $res['p_img'];?>" alt="this image has problem"  ><br><br>
        </div>
        
        <div  class="col-md-6 ">
        <p class="" style=" border-bottom:2px solid #C0C0C0; font-size:3vh; text-transform:capitalize;" ><b>  Added By:</b> <?php echo $res['founded_name']. "<br>";?> </p>
        <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:3vh;  text-transform:capitalize;  "><b>Name:</b> <?php echo $res['p_name']. "<br>";?></p>
        <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:3vh;  "><b>Email:</b> <?php echo $res['p_email']. "<br>";?></p>
        <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:3vh; text-transform:capitalize;  "><b>Location: </b><?php echo $res['p_location']. "<br>";?></p>
        <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:3vh;  "><b>Contact:</b> <?php echo $res['p_contact']. "<br>";?></p>
        <p class=""  style=" border-bottom:2px solid #C0C0C0;  text-transform:capitalize;  font-size:3vh; "><b>Status: </b><?php echo $res['p_status']. "<br>";?></p>
        
        </div>
        <div  class="col-md-3 " style="border:2px solid #000;">
        <p class="mr-2 ml-2 mt-2 mb-0"  style="solid #C0C0C0;  text-transform:capitalize;  "><b>  Information: </b><br> <?php echo $res['info']. "<br>";?></p>
        </div>
        </div><br>
        <?php
        include 'seen.php';
        ?>
        <div class="container" >
    <h1 style="text-transform:capitalize;">We are here to help </h1>  
    <div class="row">
        <div class=" col-md-6 col-sm-12">
         
        <img class="w-100 rounded" src="pic/helpline.jpg" alt="no image">
        </div>
        <div  class=" col-md-6 col-sm-12">
            <p style="padding: 70px 0; font-size:2.5vh;">
                If you have been affected by someone in your life going missing, or you are away or thinking of leaving, we’re here for you. 
            </p>
            <button class="btn btn-success">Contact us</button>
        </div>
    </div>

</div><br>
       <?php
       
       include 'footer.php';
       ?>
        
    

      
 
        
</body>
</html>

<!-- <?php
include 'index2.php';

if(isset($_POST['submit'])){
    $upda=$_GET['updid'];
    $fname= $_POST['fname'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $location= $_POST['location']; 
    $contact=$_POST['Contact'];
    $status=$_POST['status'];
    // $inserting = "update personal_infor SET founded_name='$fname', p_name='$name', p_email='$email', p_location='$location', p_contact='$contact', p_status='$status' where p_id=$upda";
    $resul=mysqli_query($con,$inserting);
    if ($resul){
        ?>
        <script>alert("data inserted")</script>
        <?php
        header('location:index.php');
    }
    else{
        ?>
       <script> alert("data not inserted")</script>
       <?php
    }

    
}
?> -->
<!-- p_name=$name,p_email=$email,p_location=$location,p_contact=$contact,p_status=$status  -->