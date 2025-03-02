<?php
session_start();
include("config/condb.php");
//require("Logintrue.php");
$ps_id = $_SESSION["ps_id"];
$ps_name = $_SESSION["ps_name"];
$ps_surname = $_SESSION["ps_surname"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$level = $_SESSION["level"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include("headboot.php"); ?>
</head>

<body>
    <font color="#FF5733">ขอต้อนรับผู้ดูแลระบบ <?php echo $ps_name . " " . $ps_surname; ?>
        <a href="person_frm.php"> เพิ่มข้อมูลบุคลากร | </a>
        <a href="person_show.php"> ข้อมูลบุคลากรทั้งหมด |</a>
        <a href="logout.php">ออกจากระบบ </a>

        <?php include("footboot.php"); ?>

</body>

</html>