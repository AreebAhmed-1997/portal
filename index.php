<?php
include 'index2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
        <div class="div1"> 
            <div class="subdiv1">
                <a href="#" class="fa fa-facebook" style="color: #000; margin: 16px 0px;"></a>
                <a href="#" class="fa fa-twitter" style=" color:#000; margin: 16px 0px;"></a>
                <a href="#" class="fa fa-instagram" style="color:#000; margin-top: 16px 0px; "></a>
                <a href="#" class="fa fa-youtube" style=" color: #000; margin-top: 10px 0px;"></a>
                <a href="#" class="fa fa-whatsapp" style=" color:#000;margin-top: 10px 0px;"></a>
            </div>
           <div class="subdiv2">
            <p style="text-align:center;">Millions of people's life has changed, millions more awaiting for your help</p>
           </div><br>
            <div class="btn">
            <button class="btn1" >OVERSEAS DONOR</button>
            <button class="btn2" >DONATE NOW</button>
            
            </div>
        </div>
        <br>
        <!-- <div class="div2">
            <div class="subdiv2_1">
                <img class="img__1" src="picture/saylani.png" alt="">
            </div>   
            <div  class="subdiv2_2">
                <i class="fas fa-bars bar" style="font-size: 30px; "></i>
                <a href="#" class="nav" style="color: #fff; background: #00539cff; border-radius: 30px; font-size: 20px;">HOME</a>
                <a href="#" class="nav">ABOUT</a>
                <a href="#" class="nav">SERVICE</a>
                <a href="#" class="nav">FUTURE-PROJECT </a>
                <a href="#" class="nav">MEDIA</a>
                <a href="#" class="nav">NEWS</a>
                <a href="#" class="nav">DONATION</a>
                <a href="#" class="nav">CONTACT US</a>
            </div>
        </div> -->
        <?php
        
        include 'headerbasic.php';
        
        ?>


        
        <br>
        <?Php
        $sel="select marquee1 from marquee ";
        $selque=mysqli_query($con,$sel);
        $num=mysqli_num_rows($selque);
        while($result=mysqli_fetch_array($selque)){
            ?>
                    <div class="marquee">
            <marquee class=marquee1 behavior="" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" ><?php  echo $result['marquee1'];?> </marquee>
        </div >
            <?php
        }
        
        ?>
       
        


        <div    class="theme">
            <div class="subtheme">
            <h1 class="theme0" style="font-family: 'Playfair Display', serif;">TOGETHER WE CAN MAKE A BETTER TOMORROW</h1>
            <p class="theme1" style="font-family: 'Playfair Display', serif;">A donation is a gift for charity, humanitarian aid, or to benefit a cause. A donation may take various forms, including money, alms, services, or goods such as clothing, toys, food, or vehicles. A donation may satisfy medical needs such as blood or organs for transplant.
              Charitable donations of goods or services are also called gifts in kind.</p>  <br><br>
              <div class="subtheme1">
             <a href="#themeses" class="theme3" style="font-family: 'Playfair Display', serif; font-weight:bold;">SEND FEEDBACK</a>
             <a href="index.php" class="theme3" style="font-family: 'Playfair Display', serif; font-weight:bold;">VIEW ALERT</a>
              
            </div>
            </div>           
            <img  class="theme2"src="pic/help.jpg" alt="this picture is not supported in your browser">

        </div>
        
        <div class="introduction">
            <h1 style="text-align: center; font-family: 'Oswald', sans-serif; ">INTRODUCTION</h1>
            
                <p class="introduction1" >
                                            HELPERPK site was established in 11 February 2021 by Areeb Ahmed. HELPERPK site was built on the
                            fundamental to help those who are in need, help those who are misplaced, help those who had accident
                            or arrested due to some reason. This project was developed to spread happiness and hope of life to
                            other <br><br>

                            We are an organization that believe in lightning up the life of people across the Pakistan. We are trying
                            our best to deliver best services to you. And the best part is its all free no services charge no nothing just
                            free. You can also give online sadqa and donation to give hope of life through you sadqa and donation. <br><br>

                            We are working hard so one day we can say our physical presence matter in Pakistan. This website can
                            be used thorough out different cities like Karachi, faislabad, Multan etc of Pakistan for fulfilling
                            different purpose <br><br>

                            Our team that’s working on this project personally belief that a little help can goes along way. But it
                            wont be possible without your help with your help we can help thousand of people who are praying for
                            it.

                .<br> <br></p>
                   </div>
                   <br><br>
                   <div class="div3">
                       <div class="subdiv3">
                    <div class="subdiv3_1">
                    <i class='fas fa-apple-alt' style='font-size:48px;color:#48D1CC;'></i><br><br>
                    <p style="font-size: 17px;color:#000; font-family: 'Playfair Display', serif;">125,000<br> DAILY DASTARKHAN (MONTHLY)</p><br><br>
                </div>
                <div  class="subdiv3_2">
                    <i class='fas fa-baby' style='font-size:48px;color:#48D1CC'></i><br><br>
                    <p  style="font-size: 17px;color:#000; font-family: 'Playfair Display', serif;">7,500<br>FAMILY ADOPTION (MONTHLY)</p><br><br>
                </div>
            </div>
            <div class="subdiv4">
                    <div class="subdiv3_3">
                    <i class="fa fa-heartbeat" style="font-size:48px;color:#48D1CC"></i><br><br>    
                   <p style="font-size: 17px;color:#000; font-family: 'Playfair Display', serif;">43,749<br> MEDICAL(MONTHLY)</p><br><br>
                </div>
                <div  class="subdiv3_4"> 
                   <i class='fas fa-graduation-cap' style='font-size:48px;color:#48D1CC'></i><br><br>
                    <p style="font-size: 17px;color:#000; font-family: 'Playfair Display', serif;">180,000 <br>EDUCATION (MONTHLY)</p>
                </div>
                </div>
            </div><br><br>
                <div class="div5"><br>
                    <h1 style="font-family: 'Oswald', sans-serif; color: #32CD32;">WHAT WE ARE DOING ?</h1> 
                    <div class="subdiv5_"> 
                    <div class="subdiv5_1_1"><br>
                    <i class='fas fa-hand-holding-usd' style='font-size:48px;color:#000080'></i><br><br>
                    <p style="color:#00539cff ;font-family: 'Oswald', sans-serif;">ONLINE SADQAH</p><br>
                    </div><br>
                    <div class="subdiv5_2_1"><br>
                    <i class='fas fa-users' style='font-size:48px;color:#006400'></i><br><br>
                    <p style="color:#00539cff ;font-family: 'Oswald', sans-serif;">WELFARE</p><br>
                </div><br> 
                <div class="subdiv5_3_1" ><br>
                    <i class='fas fa-stethoscope' style='font-size:48px;color:#4169E1'></i><br><br>
                    <p style="color:#00539cff ;font-family: 'Oswald', sans-serif;">MEDICAL</p><br>
                </div><br>
            </div>
            <div class="subdiv5_1">
                <div class="subdiv5_4_1"><br>
                    <i class="fa fa-fw fa-cutlery" style="font-size:48px;color:#6495ED"></i><br><br>
                    <P style="color:#00539cff ;font-family: 'Oswald', sans-serif;">DASTARKHWAN</P><br>
                </div><br>
                    <div class="subdiv5_5_1"><br>
                        <i class='fas fa-book-reader' style='font-size:48px;color:#FFD662FF;'></i><br><br>
                        <P style="color:#00539cff ;font-family: 'Oswald', sans-serif;">EDUCATION</P><br>
                    </div><br>
                <div class="subdiv5_5_2"><br>
                    <i class='fas fa-egg' style='font-size:48px;color:#48D1CC;'></i><br><br>
                    <P style="color:#00539cff ;font-family: 'Oswald', sans-serif;">RO PLANT</P><br>
                </div><br>
            </div>
                <br>    
            </div> 
          
                <!-- <h1 style="font-family: 'Oswald', sans-serif; color:#4169E1">MISSION AND UPCOMING PROJECT</h1>
            </div>
            <div class="flexing-thing">    -->
            <!-- <section>
                <div class="slide">
             <div class="content">
               <h2 class="flex1" style="text-align: center; ">HEPATITIS</h2> 
               <p class="flex1" style="text-align: center; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p> 
             </div>
           </div>
           <div class="slide">
             <div class="content">
               <h2 class="flex1" style="text-align: center; ">HOUSING SOCIETY</h2> 
               <p class="flex1" style="text-align: center; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p> 
             </div>
           </div>
           <div class="slide">
             <div class="content">
               <h2 class="flex1" style="text-align: center;">IT LITERACY</h2>
               <p class="flex1" style="text-align: center; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p> 
             </div>
           </div>
           <div class="slide">
             <div class="content">
               <h2 class="flex1" style="text-align: center; ">THARPARKAR</h2>
               <p class="flex1" style="text-align: center; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p> 
             </div>
           </div>
         </section> <br> <br> -->
         <br>
         <div class ="marque2" >
             <h1 style=" font-family: 'Playfair Display', serif; text-align: center; color:#32CD32 ;"> UPCOMING EVENT</h1>
            <marquee class="marquee2_1" direction="up" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">Saylani Welfare Distributing Ration & Clothes to affected people of Balochistan .More Detailsbr <br> <br>

                Entry Test Accouncement (Graphic Designing & Video Editing/Animation Course) On Sunday 3rd March 2019 @ 11:00Am Vanue: 4rh Floor, Saylani Welfare International Trust HeadOffice Bahadurabad .More Details <br><br>
                
                Dr Jamil Ahmed (Additional Inspector General of Police) & Atiqmir Visit Saylani Welfare International Trust, Saylani Mass I.T. Training .More Details <br><br>
                
                PIAIC Entrance Exam Merit Ranking List Announced.More Details <br><br>
                
                President of Pakistan (Dr. Arif Alvi) Visited Saylani Welfare International Trust HeadOffice Karachi. More Details <br> <br> </marquee> <br><br> <br>
        </div>
        
         <div style="background-color: #D0D0D0;" > 
         <h1 style="text-align:center; color: #000; font-family: 'Oswald', sans-serif;  ">  
            IMAGE GALLERY
         </h1>
         <div class="image_gallery"   data-aos="zoom-in"  data-aos-offset="300" data-aos-delay="50" data-aos-duration="2000">
             <div class="image_gallery1">
              <img class="img1"src="pic/miss1.jpg"  alt="this picture is not supported in your browser"> <br> <br>
              <img class="img2" src="pic/miss2.jpg" alt="this picture is not supported in your browser"> <br> <br>
            </div> <br>
            <div class="image_gallery2"> 
              <img class="img3" src="pic/miss3.png" alt="this picture is not supported in your browser"> <br> <br>
              <img class="img4" src="pic/miss4.jpg" alt="this picture is not supported in your browser"> <br> <br>
            </div><br>
            </div> <br> <br>
        </div > <br>
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



        <div   class="container"  data-aos="zoom-in"  data-aos-offset="300" data-aos-delay="50" data-aos-duration="2000">
        <H1 id="themeses" class="text-center display-3">FEEDBACK FORM </H1>
    <form  action="" method="POST">
    
    <label for="">NAME</label>
    <input  class="form-control" type="text" name="name"><br>
    <label for="">CONTACT</label>
    <input  class="form-control" type="text" name="contact"><br>
    <label for="">FEEDBACK</label><br>
    <textarea name="text" class="form-control" cols="100" rows="3"></textarea><br>
    <input  class="btn  btn-success w-25" type="submit" name="submit" value="SEND"><br> <br>
    </div>
         <div class="divtable1">
         <table class="TABLE">
             <tr class="TABLE-HEAD">
            <th></th>
            <th></th>
            <th></th>    
            </tr>
            <tr class="TABLE-DATA">
                <td style=" text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;">Head Office,</td>
                <td style="  font-family: 'Playfair Display', serif; color:#FFF;">USEFUL LINK</td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#FFF;">CONTACT WITH US</td>
            </tr>
            <tr >
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-map-marker" style="font-size:20px"> R-807, 16-A, Bufferzone Karachi, Pakistan</i></td>
                <td></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif;  color:#C0C0C0;"><i class="fa fa-facebook-f" style="font-size:20px;"> Facebook</i></td>
            </tr>
            <tr>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"></td>
                <td></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-twitter" style="font-size:20px"> Twitter</i></td>
            </tr>
            <tr>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-mobile-phone" style="font-size:20px"> CELL:03072079337</i></td>
                <td></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-instagram" style="font-size:20px"> Instagram</i></td>
            </tr>
            <tr>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-youtube-play" style="font-size:20px"> Youtube</i></td>
            </tr>
            <tr>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"></td>
                <td></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-whatsapp" style="font-size:20px"> Whatsapp</i></td>
            </tr>
            <tr>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-envelope" style="font-size:20px"> areeb1997ahmed@gmail.com </i></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center; font-family: 'Playfair Display', serif; color:#C0C0C0;"><i class="fa fa-envelope" style="font-size:20px"> Gmail</i></td>
            </tr>
         </table>
         <div class="footerbotom">
             <p>Copyright 2021 HELPERPK.COM</p>
         </div>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
