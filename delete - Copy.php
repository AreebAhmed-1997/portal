<?php
    include ('index2.php');
                $delid= $_GET['delid'];
                $select="delete FROM personal_infor where p_id =$delid ";
                $que=mysqli_query($con,$select);
                header('location:index3.php');

                ?>