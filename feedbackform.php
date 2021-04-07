<?php
include 'index2.php';


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
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <style>
                            body{
                                background-image:url(img/background.jpg);
                                background-repeat:none;
                                background-size:cover;
                                background-position:none;
                            }
                                .form{
                                    width:85%;
                                    margin: auto;
                                }
                                input[type=text]{
                                    background:transparent;
                                    border:2px solid #808080;
                                }
                                textarea{
                                    background:transparent;
                                }
                            </style>
                        </head>
                        <body>
                        <div class="feed">
                              <?php include 'headerbasic.php';?>
                              
                              <H1 id="themeses" class="text-center display-3 ">FEEDBACK FORM </H1>
                                <form  class=" form" action="" method="POST">
                                
                                <label for="">NAME</label>
                                <input  class="form-control rounded" type="text" name="name"><br>
                                <label for="">CONTACT</label>
                                <input  class="form-control" type="text" name="contact"><br>
                                <label for="">FEEDBACK</label><br>
                                <textarea style="background:transparent;border:2px solid #808080;" name="text" class="form-control" cols="100" rows="3"></textarea><br>
                                <input  class="btn  btn-success w-25" type="submit" name="submit" value="SEND"><br> <br>
                            </form>
                            </div>
                        </body>
                        </html>