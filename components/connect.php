<?php
$con = new mysqli('localhost','root','','military');
if(!$con){
    die(mysqli_error($con));
}
?>