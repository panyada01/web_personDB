<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลบข้อมูล</title>

</head>


<body>
    <?php include("config/condb.php");

    $ps_id = $_GET["ps_id"];
    $sql = "DELETE FROM tbl_person WHERE ps_id='$ps_id' ";
    $result = mysqli_query($conn, $sql) or die("Error in query: $sql ");

    //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
        echo "window.location = 'person_show.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }




    ?>

</body>

</html>