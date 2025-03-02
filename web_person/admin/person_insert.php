<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลบุคคล</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    ?>
</head>

<body>

    <?php
    include("config/condb.php");
    $ps_id = $_POST["ps_id"];
    $ps_prefix = $_POST["ps_prefix"];
    $ps_name = $_POST["ps_name"];
    $ps_surname = $_POST["ps_surname"];
    $ps_other_detail = $_POST["ps_other_detail"];
    $occ_id = $_POST["occ_id"];

    // print $ps_id;
    // echo $ps_name;
    print "รหัสบัตรอ้างอิง คือ : " . $ps_id . "<br>";
    echo "ชื่อ : " . "<font color='#C61C17 '> " . $ps_prefix . " " . $ps_name . "</font>" . " นามสกุล " . $ps_surname;

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
    //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
    $date1 = date("Ymd_His");
    //ตัวแปรสุ่มตัวเลขเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $upload = $_FILES["ps_image"]; //ตัวแปรที่รับมาจากฟอร์ม


    if ($upload <> '') {
        //โฟลเดอร์ที่เก็บไฟล์
        $path = "images_ps/";
        //ตัวขื่อกับนามสกุลภาพออกจากกัน
        $type = strrchr($_FILES["ps_image"]["name"], ".");
        //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "images_ps/" . $newname;
        //คัดลอกไฟล์ไปยังโฟลเดอร์
        move_uploaded_file($_FILES["ps_image"]["tmp_name"], $path_copy);
    }

    $sql = "INSERT INTO tbl_person (ps_id,ps_prefix,ps_name,ps_surname,ps_other_detail,ps_image,occ_id)VALUES ('$ps_id','$ps_prefix','$ps_name','$ps_surname','$ps_other_detail','$newname','$occ_id')";
    $result = mysqli_query($conn, $sql) or die("Error in query หรือจัดการข้อมูลไม่ได้ : $sql ");
    mysqli_close($conn);

    //ถ้าสำเร็จให้ขึ้นอะไร
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('ทำการบันทึกข้อมูลสำเร็จเรียบร้อยแล้ว');";
        echo "window.location = 'person_show.php';";
        echo "</script>";
    } else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
        echo "<script type='text/javascript'>";
        echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
        echo "window.location = 'index1.php'; ";
        echo "</script>";
    }
    ?>





    <?php include("footboot.php"); ?>
</body>

</html>