<?php
if (!session_id())session_start();
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
?>
