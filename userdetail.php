<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    html{
        
    }
    body{
        background:url('pic/back.png');
        background-size:cover;
        background-position:center;
        background-attachment: fixed;
        color:#fff;
    }
    .tab{
        
        background: rgba( 249, 249, 249, 0.15 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 6.0px );
        -webkit-backdrop-filter: blur( 6.0px );
        border-radius: 10px;
        color:#fff;
    }
    td , th{
        color:#fff;
    }
    tr:hover
     {
           background: rgba( 249, 249, 249, 0.20 );
           }
    </style>
</head>
<body>
    <table class="table">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>LASTNAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>PASS</th>
    <th>UPDATE</th>
    <th>DELETE</th>
    </tr>
    <?php
include 'index2.php';
include 'header.php';
$select="select * from signi";
$que=mysqli_query($con, $select);
$num=mysqli_num_rows($que);
while($row=mysqli_fetch_array($que)){
    ?>
    <tr>
    <td><?php echo $row['name_id']; ?></td>
    <td><?php echo $row['name'] ;?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['pass']; ?></td>
    <td> <a class="btn btn-primary" data-toggle="tooltip" data-placement="left"  title="UPDATE!" href="#">UPDATE</a></td>
    <td> <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="DELETE" href="#">DELETE</a></td>
    </tr>
    <?php
}







?>
    </table>
    <script>
    $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
    