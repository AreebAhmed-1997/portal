<?php

$username= "root";
$password="";
$server="localhost";
$database="portal";
$con=mysqli_connect($server,$username,$password,$database);
if (!$con){ 
?>
<script> alert("database not connected")</script>;
<?php
}

?>