<?php
    include ('index2.php');
                $delid= $_GET['delid'];
                $select="delete FROM personal_infor where p_id =$delid ";
                $que=mysqli_query($con,$select);
                header('location:index3.php');

                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>DELETE RECORD</title>
                </head>
                <body>
                    
                </body>
                </html>
                