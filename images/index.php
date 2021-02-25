<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

include 'index2.php';
$selectquery= "select * from personal_infor";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
    ?>

    <div style="width:33%;">
    <p>foundedname <?php echo $res['founded_name']. "<br>";?> </p>
    <p>name<?php echo $res['p_name']. "<br>";?></p>
    <p>email<?php echo $res['p_email']. "<br>";?></p>
    <p>location<?php echo $res['p_location']. "<br>";?></p>
    <p>contact<?php echo $res['p_contact']. "<br>";?></p>
    <p>status<?php echo $res['p_status']. "<br>";?></p>
    </div>
    <tr>
    <td><?php echo $res['founded_name']. "<br>";?> </td>
    <td><?php echo $res['p_name']. "<br>";?></td>
    <td><?php echo $res['p_email']. "<br>";?></td>
    <td><?php echo $res['p_location']. "<br>";?></td>
    <td><?php echo $res['p_contact']. "<br>";?></td>
    <td><?php echo $res['p_status']. "<br>";?></td>
    </tr>
<?php
}

?>



       
    </table>
</body>
</html>