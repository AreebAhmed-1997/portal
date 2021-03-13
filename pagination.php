<?php
$limit=6;
$page=$_GET['pagination'];
$offset=($page-1)*$limit;
$selectquery= "select * from personal_infor order by p_id DESC";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    ?>
    <div  class="col-lg-4 col-sm-6 col-12 myclass "  style="border-bottom :2px solid 	#C0C0C0 ">
    <br>
    
    <img src="<?php echo $res['p_img'];?>" alt="this image has problem" style="" ><br><br>
    <p class="" style=" border-bottom:2px solid #C0C0C0; font-size:2vh; text-transform:capitalize;" >  Added By: <?php echo $res['founded_name']. "<br>";?> </p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  text-transform:capitalize;  ">Name: <?php echo $res['p_name']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  ">Email: <?php echo $res['p_email']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh; text-transform:capitalize;  ">Location: <?php echo $res['p_location']. "<br>";?></p>
    <p class=""  style=" border-bottom:2px solid #C0C0C0; font-size:2vh;  ">Contact: <?php echo $res['p_contact']. "<br>";?></p>
    <p class=""  style="  text-transform:capitalize;  font-size:2vh; ">Status: <?php echo $res['p_status']. "<br>";?></p>
    </div>

<?php
}
  


$selecting="select * from personal_infor";
  $selectingque=mysqli_query($con, $selecting);

  if(mysqli_num_rows($selectingque) > 0){
    $totrecords=mysqli_num_rows($selectingque);
    
    $totpage=ceil($totrecords/$limit);
    echo'<ul class="pagination admin-pagination">';
    for($i=1; $i<=$totpage; $i++){
     echo'<li><a href="home.php?pagination='.$i.'">'.$i.'</a></li>';
    }
    echo'</ul>';
  }
?>