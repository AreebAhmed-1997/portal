<?php
    include ('index2.php');
                $delid=$_GET['delid'];
                $select="delete from email where id = $delid";
                $que=mysqli_query($con,$select);
                header('location:feedbacktable.php');

                ?>