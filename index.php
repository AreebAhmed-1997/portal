	<?php
	session_start();
	include 'index2.php';
	?>
	
	
	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Charity</title>
		<style>
                .myclass:hover
                {
                transition:0.7s ease-in ;
                }
                img{
                width:100%;
				height:50vh;
                }
				.logoimg{
        width:100%;
        height:10vh;
    }
	.nav{
      width:80%;

    }
    .navi{
     font-size:16px;
     color:#fff;
    }
	a.navbar-link.navi{
		margin :0px;
	}
    .navi:hover{
        
        border-radius:30px;
     transition:0.3s ease-in;
     background-color :#D3D3D3;
    }
    .navi1{
        
        
    }
				
				/*  */

</style>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
			<!-- font kit owsum link -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/home1.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</head>
		<body>
	
			<nav class="navbar navbar-expand-md w-100 " style="background-color:#212529;"  >
  <a href="index.php" class="w-25"> <img class="logoimg " src="img\logo1.png" alt="logo" ></a>
  <button  class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsibleNavbar" ><i class="fas fa-bars" style="color:#fff;font-size:16px;"></i>
    <span"  class="navbar-toggler-icon text-body"></span> 
  </button>
 
   
  
  <div class="collapse navbar-collapse nav "  id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#fff;"  href="index.php">Home</a>
      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi " style="color:#fff;"   href="home.php">Missing information</a>
      </li>
      
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi "style="color:#fff;"   href="index1.php">Report missing</a>
      </li>
	  <li class="nav-item  navi1 mr-1 ml-1">
        <a id="mypost" class="nav-link navi "style="color:#fff;"   href="mypost.php">Mypost</a>
      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi "style="color:#fff;" id="signup" href="signin.php">Signin</a>

      </li>
      <li class="nav-item  navi1 mr-1 ml-1">
        <a class="nav-link navi "style="color:#fff;" id="login"   href="login.php">Login</a>
      </li> 
      <li class="nav-item  navi1  mr-1 ml-1">
        <a class="nav-link navi "style="color:#fff;"   id="logout" style="color:#000;"  href="filterlogout.php">Logout</a>
      </li>   
         
    </ul>

  </div>  
</nav>
        
<?php
if(!isset($_SESSION['users'])){
    ?>
    <script>
	 document.getElementById('mypost').style.display="none";
    document.getElementById('logout').style.display="none";
    </script>
    <?php

}
else{
	?>
	<script>document.getElementById('login').style.display="none";
	document.getElementById('signup').style.display="none";
		</script>
	<?php
}
?>

			<!-- Start Header Area -->
			<!-- <header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#project">Projects</a>
									<a href="#about">About</a>
									<a href="#donate">Donate</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header> -->
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
							<div class="banner-content col-lg-9 col-md-12">
								<h1>
									Help,Hope And Support For The Lost one's
								</h1>
								
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start callto Area -->
				<section class=" callto-area relative ">
					<div class="container ">
						<div class="rounded-lg row d-flex callto-wrap justify-content-between pt-40 pb-40">
							<h4 class="text-white ">We are an organization that believe in lightning up the life of people across the Pakistan.</h4>
							
						</div>
					</div>
				</section>
			<!-- End callto Area -->
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


			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Waiting for Help</h1>
							<p>
								YOU CAN HELP US AND THOUSAND OF PEOPLE BY SENDING THEM BACK TO THEIR LOVE ONCE. IF YOU KNOW SOMEONE WHO IS MISPLACED OR FOUNDED.BY CLICKING BELOW BUTTON WILL CREATE AN ALERT OR INFORMATION CARD THAT WILL HELP OTHER TO FIND THEIR LOVED ONCE
							</p>
							<div class="col-lg-12 d-flex justify-content-end send-btn">
							<a href="index1.php"> <button class="submit-btn primary-btn mt-20 text-uppercase ">Create Alert <span class="lnr lnr-arrow-right"></span></button></a>
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/search.gif" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Quick Search</h2></a>
						  		<p>Quick searching help in finding people missing person more efficently search your case information it's time saving.</p>
						  		
							</div>

						</div>
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/filter.gif" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<!-- <a href="#" class="head-btn btn text-uppercase">Filters</a> -->
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Filter Result</h2></a>
						  		<p>Filter are the best feature for finding out the specific result. Use filter to filter out the result.</p>
						  		
							</div>
						</div>
						<div class="col-lg-4 col-md-4 project-wrap">
							<div class="single-project">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/data.gif" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<!-- <a href="#" class="head-btn btn text-uppercase">Record Management</a> -->
								      	</div>
								    </a>
								 </div>
							</div>
							<div class="details">
								<a href="#"><h2>Easy Record Management</h2></a>
						  		<p>Keeping the record clean is the identity of professional website .We try our best to not to complicate it. </p>
						  		
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End project Area -->

			<!-- Start about Area -->
			<section class="about-area" id="about">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1 id="intr">INTRODUCTION</h1>
							<p style="color:#fff;">
								HELPERPK site was established in 11 February 2021 by  <a style="color:#FFA500;"  data-toggle="tooltip" data-placement="top" title="Areeb Ahmed khan" href="https://offiareeb.000webhostapp.com/index46.html" class="link">Areeb Ahmed.</a>. HELPERPK site was built on the fundamental to help those who are in need, help those who are misplaced, help those who had accident or arrested due to some reason. This project was developed to spread happiness and hope of life to other <br>

We are an organization that believe in lightning up the life of people across the Pakistan. We are trying our best to deliver best services to you. And the best part is its all free no services charge no nothing just free. You can also give online sadqa and donation to give hope of life through you sadqa and donation.<br><br>

We are working hard so one day we can say our physical presence matter in Pakistan. This website can be used thorough out different cities like Karachi, faislabad, Multan etc of Pakistan for fulfilling different purpose<br><br>

Our team that’s working on this project personally belief that a little help can goes along way. But it wont be possible without your help with your help we can help thousand of people who are praying for it. .<br>	
							
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start volunteer Area -->
			<!-- <section class="volunteer-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Our Volunteers</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v1.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v2.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v3.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 vol-wrap">
							<div class="single-vol">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/v4.jpg" alt="">
								      	<div class="content-details fadeIn-bottom">
								      		<h4>Andy Florence</h4>
								      		<p>
								      			inappropriate behavior
								      		</p>
								      	</div>
								    </a>
								 </div>
							</div>
						</div>

					</div>
				</div>
			</section> -->
			<!-- End volunteer Area -->


			<!-- Start donate Area -->
			<br>

			<h2 class="text-center"> Have You Seen Them</h2>
			
			<div class="row w-100">
                   
                    <?php
                    $seldemo="select p_id, p_name, p_img from  personal_infor order by p_id DESC limit 3 ";
                    $seldemque= mysqli_query($con,$seldemo);
                    $seldemnum=mysqli_num_rows($seldemque);
                    while($seldemres=mysqli_fetch_array($seldemque)){
                        ?>
                        
                         
                        <div class="col-lg-4 col-sm-6 col-12 w-100"><br> <br>
                    <img src="<?php echo $seldemres['p_img'];?>" alt="">
                    <p class="text-center">Name: <?php echo $seldemres['p_name']; ?></p>
                    <a href="vieweach.php?updid=<?php echo $seldemres['p_id'];?>"><button class="btn btn-success" >VIEW INFO</button></a>
                        </div><br>
        
                  
                    <?php
                    }
                   
                    ?>
                    </div>
			
			
			
			<br><br>




			<?Php
        $sel="select marque2 from marquee ";
        $selque=mysqli_query($con,$sel);
        $num=mysqli_num_rows($selque);
        while($reult=mysqli_fetch_array($selque)){
            ?>
         <div class ="marque2" >
             <h1 style=" font-family: 'Playfair Display', serif; text-align: center;"> UPCOMING EVENT</h1> <br>
            <marquee class="marquee2_1" direction="up" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();"> <?php  echo $reult['marque2'];?> <br> <br> </marquee> <br><br> <br>
        </div>
        <?php
    }
    ?>



			<section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text pb-0">
							<h1>Give Us Feed Back</h1>
							<p  style="color:#fff;">
								Feedback help us to improve our system more. You can become a part of our family just by giving a feedback.
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4  style="color:#fff;">Divided Evenly</h4>
								<p>
									
								</p>
							</div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p  style="color:#fff;">
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
							<div class="single-info">
								<h4>Trustworthy</h4>
								<p  style="color:#fff;">
									inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
								</p>
							</div>
						</div>

						<div class="col-lg-6 contact-right ">

						<a href="feedbackform.php"> <button class="submit-btn primary-btn mt-20 text-uppercase ">FeedBack <span class="lnr lnr-arrow-right"></span></button></a>
							<!-- <form class="booking-form" id="myForm" action="" method="POST">
								 	<div class="row">
								 		<div class="col-lg-12 d-flex flex-column">
							 				
								 		</div>
							 			<div class="col-lg-6 d-flex flex-column">
										 <input  class="form-control" type="text" name="name"><br>
											<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
										</div>
										<div class="col-lg-6 d-flex flex-column">
										<input  class="form-control" type="text" name="contact"><br>
											<input  name="contact" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control mt-20" required="" type="text">
										</div>
										<div class="col-lg-12 d-flex flex-column">
											
										<textarea name="text" class="form-control" cols="100" rows="3"></textarea><br>
											<textarea class="form-control mt-20" name="text" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>

										<div class="col-lg-12 d-flex justify-content-end send-btn">
										<input  class="btn  btn-success w-25" type="submit" name="submit" value="SEND"><br> <br>
											<button type="submit"  name="submit" class="submit-btn primary-btn mt-20 text-uppercase ">Send<span class="lnr lnr-arrow-right"></span></button>
										</div>

										
									</div>
					  		</form> -->
					  		
						</div>
					</div>
				</div>
			</section>
			<!-- End donate Area -->


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
						<ul class="footer-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="#project">Portfolio</a></li>
							<li><a href="#about">Alert Page</a></li>
							<li><a href="#donate">Login</a></li>
						</ul>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-wordpress"></i></a>
							<a href="#"><i class="fa fa-wordpress"></i></a>
						</div>
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Areeb Ahmed</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
			<script>
			    $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
			</script>
		</body>
	</html>
