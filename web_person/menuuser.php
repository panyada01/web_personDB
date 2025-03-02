<?php
session_start();
include("config/condb.php");
// require("Logintrue.php");
$ps_id=$_SESSION["ps_id"] ;
$ps_name=$_SESSION["ps_name"];
$ps_surname=$_SESSION["ps_surname"];
$username=$_SESSION["username"];
$password=$_SESSION["password"];
$level=$_SESSION["level"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("headboot.php") ?>

</head>

<body>
    <h1>
        <font color="red"> ข้อต้อนรับคุณ <?php echo $ps_name . " " . $ps_surname; ?> </font>
    </h1>

    <!-- <h3><font color=""> รหัสของคุณคือ  echo $ps_id; </font> </h3> -->

    <a href="person_frm.php">เพิ่มข้อมูลบุคลากร</a>
    <a href="person_user_show.php">จักการข้อมูลส่วนบุคล</a>
    <a href="logout.php">ออกจากระบบ</a>
    <?php include("footboot.php") ?>
</body>

</html>