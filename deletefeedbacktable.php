<?php
    include ('index2.php');
                $delid=$_GET['delid'];
                $select="delete from email where id = $delid";
                $que=mysqli_query($con,$select);
                header('location:feedbacktable.php');

                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>DEL FEEDBACK TABLE</title>
                </head>
                <body>
                    
                </body>
                </html>