<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1 class="display-3 text-secondary text-center">Have You Seen Them</h1>
                   <div class="row w-100">
                   
                    <?php
                    $seldemo="select p_id, p_name, p_img from  personal_infor order by p_id DESC limit 3 ";
                    $seldemque= mysqli_query($con,$seldemo);
                    $seldemnum=mysqli_num_rows($seldemque);
                    while($seldemres=mysqli_fetch_array($seldemque)){
                        ?>
                        
                         
                        <div class="col-lg-4 col-sm-6 col-12 w-100"><br> <br>
                    <img src="<?php echo $seldemres['p_img'];?>" alt="">
                    <p class="text-center" style="text-transform:capitalize;">Name: <?php echo $seldemres['p_name']; ?></p>
                    <a href="vieweach.php?updid=<?php echo $seldemres['p_id'];?>"><button class="btn btn-success" >VIEW INFO</button></a>
                        </div><br>
        
                  
                    <?php
                    }
                   
                    ?>
                    </div><br><br>
</body>
</html>