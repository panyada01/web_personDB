<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างการรับค่าจากฟอร์ม </title>
    <?php include("headboot.php") ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $idcard = $_POST["txtidcard"];
    $name = $_POST["txtname"];
    $phone = $_POST["txtphone"];
    $email = $_POST["txtemail"];
    $subject = $_POST["subject"];
    #print("รหัสประจำตัว " . $idcard . " ชื่อ-สกุล " . $name);
    #echo ("รหัสประจำตัว " . $idcard . "<br>" . " ชื่อ-สกุล " . $name);
    ?>
    <div class="container mt-3">
        <h2>
            <div class="text-center"> แสดงข้อมูล </div>
        </h2>
        <div class="row g-3">
            <div class="col-md-3">
                <label for="" class="form-label"><?php echo "รหัสประจำตัว : " . $idcard ?> </label>
            </div>

            <div class="col-md-3">
                <label for="" class="form-label">คำนำเหน้า </label>
                <label for="" class="form-label"><?php echo "ชื่อ-สกุล : " . $name ?> </label>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><?php echo "เบอร์โทร : " . $phone ?> </label>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><?php echo "Email : " . $email ?> </label>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label"><?php echo "เชี่ยวชาญด้าน : " . $subject ?> </label>
            </div>
            <div class="col-md-6 mb-2">
                <!-- <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="กลับหน้าฟอร์มรับค่า"> -->
                <a href="frm_test.php" class="btn btn-primary btn-warning">
                    <img src="images/icon1.png" height="30px" width="30px" />กลับหน้าฟอร์มรับค่า
                    <!-- <img src="https://www.devdit.com/favicon-16x16.png" height="16px" width="16px" />กลับหน้าฟอร์มรับค่า -->
                </a>
            </div>

        </div>
    </div>

    <?php include("footboot.php") ?>
</body>

</html>