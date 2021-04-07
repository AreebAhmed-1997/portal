<?php
include 'index2.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis&family=Overpass:wght@100&display=swap" rel="stylesheet">
<!-- font family -->

  <style>
      *{
          margin: 0px;
          padding: 0px; 
      }
      
      .bt_learnmore .intro{
          background-color:#FFD700;
      }
      .intro{
          color: #000;
          text-align: center;
          font-size:3vw;
      }
      .center {
  padding: 50vh 0;
  text-align: center;
}
::placeholder{
    color:#fff;
}
.bg1{
    background-image: url('afd.jpg');
    background-position: center;
    background-size: cover;
  
}
.myclass:hover
                {
                transition:0.7s ease-in ;
                }
                img{
                width:100%; height:50vh;
                }

  </style>
</head>
<body>
    <div class="bg1">
    <?php 
    include 'headerbasic.php'
    ?>
    <div class="center">
        <h1 class="text-white" style=" font-size:5vw;font-family: 'Dosis', sans-serif ;">helperpk</h1>
        <p  class="text-white" style=" font-size:3vw;font-family: 'Dosis', sans-serif ;">Hope,Help And Support For Lost One's</p>
      </div>
    </div>
     <div><br>

     <?Php
        $sel="select marquee1 from marquee ";
        $selque=mysqli_query($con,$sel);
        $num=mysqli_num_rows($selque);
        while($result=mysqli_fetch_array($selque)){
            ?>
                    <div class="marquee">
            <marquee style="background-color:#FFD700;font-size:1.5vw;" class=marquee1 behavior="" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" ><?php  echo $result['marquee1'];?> </marquee>
        </div >
            <?php
        }
        
        ?>
    <div class="container">
        <h1 class="intro" style="font-family: 'Dosis', sans-serif;">
            INTRODUCTION
                </h1><br>
        <p style="font-size:1.5vw;font-family: 'Overpass', sans-serif;">
            HELPERPK site was established in 11 February 2021 by Areeb Ahmed. HELPERPK site was built on the fundamental to help those who are in need, help those who are misplaced, help those who had accident or arrested due to some reason. This project was developed to spread happiness and hope of life to other<br><br>

We are an organization that believe in lightning up the life of people across the Pakistan. We are trying our best to deliver best services to you. And the best part is its all free no services charge no nothing just free. You can also give online sadqa and donation to give hope of life through you sadqa and donation.<br><br>

We are working hard so one day we can say our physical presence matter in Pakistan. This website can be used thorough out different cities like Karachi, faislabad, Multan etc of Pakistan for fulfilling different purpose<br><br>

Our team that’s working on this project personally belief that a little help can goes along way. But it wont be possible without your help with your help we can help thousand of people who are praying for it.<br><br>
        </p>
    </div>
    <div class="row w-100  " >

        <div class=" col-sm-12 col-md-6  col-lg-6 pr-0" >
          <div class="jumbotron" style="background-color: #FFD700; text-center">
           <p class="text-center" style="font-size:2.5vw"> Served Over More then <br><span style="font-size:3vw"> 100</span><br> City In Pakistan </p>     
          </div>
        
      </div>
        <div class=" col-sm-12 col-md-6  col-lg-6 ">
            <div class="mt-3 ml-1"  style="background-color:#FFf;">
                <h2 class="mb-2" style="font-size:2.5vw">Who Are We</h2>
                <p  style="font-size:1.5vw">we just started serving pakistan we dosent have spread throuout the country but In Sha Allah we will. We know how it's feel. When you lost someone that is more important to you then yourself that why we built this platform to help you in difficult situation. </p>     
               <button class="btn bt_learnmore "  style="background-color: #FFD700;"><a class="link text-white text-center rounded" href="#" style="font-size:2vw" > Learn More</a> </button>
            </div>      
                  </div>
                  </div><br><br>

   
   
   
   
   
   
   
                  <div class="row w-100  serve" >

        <div class=" col-sm-12 col-md-4  col-lg-4 pr-0" ><p>
            <i  class="glyphicon glyphicon-heart" style='width:100%; font-size:3vw ;text-align:center;color:#FFD700;'></i>
           
            <p style="font-size:1.5vw;color:#A9A9A9;">
                IDEA: The idea for this website was to create a platform to help all the people in Pakistan deal with emergencies situation

            </p>
      </div>
        <div class=" col-sm-12 col-md-4  col-lg-4">
           
            <i class="fa fa-trophy w-100 mb-4" style='width:100%; font-size:3vw ;text-align:center;color:#FFD700;'></i>
            <p style="font-size:1.5vw;color:#A9A9A9;">
                To help people in a best way in order to make our society for all a better palce to live in
        </p>
    </div>
        <div class=" col-sm-12 col-md-4 col-lg-4 pl-0 serve">
            <i class="fa fa-gear mb-4"  style='width:100%; font-size:3vw ;text-align:center;color:#FFD700;' ></i>
            <p style="font-size:1.5vw;color:#A9A9A9;">
                Helperpk is providing tools that will empower family member of missing person to enter and search case information
        </p>
    </div>
    
    </div><br>
   
   
   
   
   
    <div class="">
        <h1 class="text-center display-3">Have You Seen Them</h1>
        

        <div class="row w-100 p-0 m-0">
                   
                   <?php
                   $seldemo="select p_id, p_name, p_img from  personal_infor order by p_id DESC limit 3 ";
                   $seldemque= mysqli_query($con,$seldemo);
                   $seldemnum=mysqli_num_rows($seldemque);
                   while($seldemres=mysqli_fetch_array($seldemque)){
                       ?>
                       
                        
                       <div class="col-lg-4 col-sm-6 col-12 "><br> <br>
                   <img src="<?php echo $seldemres['p_img'];?>" alt="">
                   <p style="font-size:1.5vw" class="text-center">Name: <?php echo $seldemres['p_name']; ?></p>
                   <a  style="font-size:1.5vw"  href="vieweach.php?updid=<?php echo $seldemres['p_id'];?>"><button style="font-size:1.5vw" class="btn btn-success" >VIEW INFO</button></a>
                       </div><br>
       
                 
                   <?php
                   }
                  
                   ?>


       <button  class="btn  w-100"><a style="font-size:1.5vw;" class="link text-warning w-100 text-center" href="home.php" >View all</a></button>
       
    </div>

    <div class="row w-100  "  style="background-color:#FFD700;">

        <div class=" col-sm-12 col-md-6  col-lg-6 pr-0" >
          <div class="jumbotron" style="background-color:#FFD700;">
          <img  style="border-radius:20px" class="w-100" src="foam.jpg" alt="image cannot be shoe">
          </div>
        
      </div>
                <?php


            if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $contact=$_POST['contact'];
            $text=$_POST['text'];

            $inserting="insert into email(name,contact,feedback) values ('$name','$contact','$text')";
            $res=mysqli_query($con,$inserting);
                if ($res){
                    ?>
                    <script>alert("data inserted")</script>
                    <?php
                }
                else{
                    ?>
                <script> alert("data not inserted")</script>
                <?php
                }

            }

            ?>



        
        <div class=" col-sm-12 col-md-6  col-lg-6 ">
            <div class="mt-3 ml-1" >
               
               <form action="">
                   <div class="form-group">
                   <div   class="container">
        <H1 id="themeses" class="text-center text-white display-3">FEEDBACK FORM </H1>
    <form  action="" method="POST">
    
    <form  action="" method="POST">
    
    <label for="" >NAME</label>
    <input  class="form-control" style="font-size:1.5vw; background:transparent; border:none; outline:#000; border-bottom:2px solid #000" type="text" name="name" placeholder="Enter Your Name"><br>
    <label for="">CONTACT</label>
    <input  class="form-control"  style="font-size:1.5vw; background:transparent; border:none; outline:#000; border-bottom:2px solid #000"  style="font-size:1.5vw;" type="text" name="contact"  placeholder="Enter Your Contact No#"><br>
    <label for="">FEEDBACK</label><br>
    <textarea name="text"  style="font-size:1.5vw; background:transparent; border:none; outline:#000; border-bottom:2px solid #000"      class="form-control" cols="100" rows="3" placeholder="Enter Your Feedback"></textarea><br>
    <input  class="btn  btn-success w-25" style="font-size:2vw;" type="submit" name="submit" value="SEND"><br> <br>
  </form>
  </form>
    </div>
                </div>
               </form>
            
            </div>      
                  </div>
                  </div><br>

                  <?php
                  include 'footer.php';
                  ?>
    
</body>
</html>