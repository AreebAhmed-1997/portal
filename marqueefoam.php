<?php
include 'index2.php';
include 'headerfilter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee Edit Foam</title>
</head>
<body>
<form action="" method="POST">
<?php
 $marids = $_GET['marqueedit'];
 $selquery = "select * from marquee  where sno=$marids";
 $query = mysqli_query($con, $selquery);
 $reslt = mysqli_fetch_array($query);
 if(isset($_POST['updating'])){
    $marupids = $_GET['marqueedit'];
     $marq1=$_POST['marquee1'];
     $marq2=$_POST['marque2'];
     $update="update marquee set marquee1='$marq1' , marque2='$marq2' where sno='$marupids' ";
    $updmarque=mysqli_query($con, $update);
    if($updmarque){
    header('location:marqueeedit.php');
        }
        else{
            echo "notupdated";
        }
    }



?>
<label class="display-3" style="width:100vw ; text-align:center; "  for="" class=""> NEWS</label> <br>
<input type="text" name="marquee1" id="" class="w-100 "style="height:20vh"  value="<?php echo $reslt['marquee1'] ;?>">

<label class="display-3" style="width:100vw ; text-align:center; " for="">UPCOMING EVENT</label><br>
<input type="text" name="marque2" id="" class="w-100" style="height:20vh" value="<?php echo $reslt['marque2'] ;?>"><br><br>
<input class="btn btn-success w-25 float-right" type="submit"  name="updating" value="SUBMIT">


</form>
    
</body>
</html>