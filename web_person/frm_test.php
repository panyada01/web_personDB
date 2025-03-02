<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("headboot.php") ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php include("navbar.php"); ?>

    <!-- End Navbar -->
    <div class="container mt-3">
        <h2>
            <div class="text-center"> My ฟอร์มบน Web </div>
        </h2>
        <form action="showdata1.php" method="POST" enctype="multipart/form-data" name="frmstudent" class="form-horizontal" id="frmstudent">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">เลขประจำตัว </label>
                    <input type="text" class="form-control" placeholder="พิมพ์เลขประจำตัว" name="txtidcard" id="txtidcard" required>

                </div>
                <div class="col-md-6">
                    <label for="" class="form-label ">คำนำหน้า </label>
                    <input class="form-check-input" type="radio" name="prefix" id="prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="prefix" id="prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="prefix" id="prefix" value="นาง"> นาง

                    <!-- <label for="" class="form-label"> ชื่อ สกุล </label> -->
                    <input type="text" class="form-control" placeholder="พิมพ์ชื่อ สกุล" name="txtname" id="txtname" required>

                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">เบอร์โทร </label>
                    <input type="text" class="form-control" placeholder="พิมพ์เบอร์โทร" name="txtphone" id="txtphone">

                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">E-mail</label>
                    <input type="text" class="form-control" placeholder="พิมพ์ Email" name="txtemail" id="txtemail">

                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">รายวิชา</label>
                    <select name="subject" id="subject">
                        <option value="" selected disabled>เลือกวิชาที่ชอบ</option>
                        <option value="Java Script">Java Script </option>
                        <option value="PHP">PHP </option>
                        <option value="Python">Python </option>
                        <option value="React JS">React JS </option>
                        <option value="React Native">React Native </option>
                        <option value="วิชาอื่น ๆ ">วิชาอื่น ๆ </option>
                    </select>
                </div>

                <div class="col-md-6">
                    <!-- <label for="" class="form-label ">งานอดิเรก </label> -->
                    <span class="input-group-text">งานอดิเรก </span>
                    <input class="form-check-input" type="checkbox" value="เล่นกีฬา" name="playsports" id="playsports">
                    <label class="form-check-label" for="flexCheckDefault">
                        เล่นกีฬา
                    </label>

                    <input class="form-check-input" type="checkbox" value="อ่านหนังสือ" name="readbook" id="readbook" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        อ่านหนังสือ
                    </label>


                    <input class="form-check-input" type="checkbox" value="ว่ายน้ำ" name="swim" id="swim">
                    <label class="form-check-label" for="flexCheckChecked">
                        ว่ายน้ำ
                    </label>

                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">อัพโหลดไฟล์</label>
                    <input type="file" class="form-control" name="myfile" id="myfile">

                </div>

                <div class="col-md-6">
                    <!-- <label for="" class="form-label">หมายเหตุ/รายละเอียดอื่น ๆ </label> -->
                    <span class="input-group-text"> หมายเหตุ/รายละเอียดอื่น ๆ </span>
                    <textarea class="form-control" aria-label="With textarea" name="note" id="note"></textarea>
                    <!-- <textarea id="note" name="note" rows="4" cols="50"> </textarea> -->
                </div>

                <div class="col-md-6 mb-3">
                    <input type="submit" class="form-control btn btn-primary" name="btnok" id="btnok" value="ตกลง">

                </div>
                <div class="col-md-6 mb-2">

                    <a href="index2.php" class="btn btn-primary btn-warning">
                        <img src="images/icon2.png" height="30px" width="30px" />กลับหน้าหลัก
                        <!-- <img src="https://www.devdit.com/favicon-16x16.png" height="16px" width="16px" />กลับหน้าฟอร์มรับค่า -->
                    </a>
                </div>

            </div>

        </form>


    </div>

    <?php include("footboot.php") ?>
</body>

</html>