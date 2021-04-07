

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
    <title>UPDATE</title>
    <STYle>
       img{

width:50%;
 height:60vh;
 margin:0% 24%;
}
    </STYle>
</head>
<body>
    
    <?php
    include 'topheader.php';
    include 'index2.php';
    
                $id=$_GET['upraid'];
                $select="select * from personal_infor where p_id =$id ";
                $que=mysqli_query($con,$select);
                $row=mysqli_num_rows($que);
                $res=mysqli_fetch_array($que);

                ?>
                <H2 style="text-align: center;">FOUNDED ALERT PAGE</H2>
        <img src="<?php echo $res['p_img']?>" alt=""  height=50><br>    <br>
    <form action="" class="mx-2 p-0" method="POST" enctype=multipart/form-data>
        <!-- <input type="email" class="form-control mb-1" placeholder="ENTER STATUS"> --> 
        <!-- <input type="date" class="form-control mb-1" id="birthday" name="birthday"> -->
        <input type="text"  name="fname" class="form-control mb-1"  value="<?php echo $res['founded_name'];?>">
        <input type="text" name="name" class="form-control mb-1" placeholder="YOUR NAME"  value="<?php echo $res['p_name'];?>">
        <input type="text" name="email" class="form-control mb-1" placeholder="Enter EMAIL "   value="<?php echo $res['p_email'];?>">
        <input type="text" name="location" class="form-control mb-1" placeholder="Enter LOCATION "   value="<?php echo $res['p_location'];?>">
        <input type="text" name="Contact" class="form-control mb-1" placeholder="Enter CONTACT "   value="<?php echo $res['p_contact'];?>">
        <input type="text"  class="form-control mb-1" placeholder="Enter status"   value="Founded">
        
        <!-- <div class="form-group p-0">
                
            <select style="text-align: center;" class="form-control p-0" id="sel1" name="sellist1" placeholder="en">
              <option>MISSING</option>
              <option>HOSPITAL</option>
              <option>POLICE STATION</option>
              <option>ACCIDENT</option>
            </select>
           
            
          </div> -->

        
        <!-- <textarea row ="5" style="width:100% ;text-align:center;"  name="comment" form="usrform">
            Enter info here..</textarea> <br> -->
            <button class="btn bg-success w-100 rounded-lg  text-white" type="submit" name="submit">Save</button>
    </form>    
</body>
</html>
<?php
include 'index2.php';

if(isset($_POST['submit'])){
    $upda=$_GET['upraid'];
    $fname= $_POST['fname'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $location= $_POST['location']; 
    $contact=$_POST['Contact'];
    
    $inserting = "update personal_infor set founded_name='$fname', p_name='$name', p_email='$email', p_location='$location', p_contact='$contact',   p_status='founded' where p_id=$upda";
    $resul=mysqli_query($con,$inserting);
    if ($resul){
        ?>
        <script>alert("Data Updated")</script>
        <?php
        
    }
    else{
        ?>
       <script> alert("Data Not Inserted")</script>
       <?php
    }

    
}
?>
<br>
<?php
include 'footer.php';

?>



<!-- p_name=$name,p_email=$email,p_location=$location,p_contact=$contact,p_status=$status  -->