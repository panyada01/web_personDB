<?php
$conn = mysqli_connect("localhost", "root1", "123456", "person_db") or die("Error: " . mysqli_error($con));
mysqli_query($conn, "SET NAMES 'utf8' ");
error_reporting(error_reporting() & ~E_NOTICE);
date_default_timezone_set('Asia/Bangkok');
?>