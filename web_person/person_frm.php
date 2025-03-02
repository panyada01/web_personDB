<?php 
session_start();
require("Logintrue.php");
?>

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
    <?php include("menuadmin.php"); ?>

    <div class="container mt-3">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="person_insert.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-label">รหัสประชาชน/เลข passport/เลขอ้างอิงอื่น ๆ </label>
                    <input type="text" class="form-control" id="ps_id" name="ps_id" placeholder="กรุณาป้อนรหัสบัตรที่อ้างอิง" required>
                </div>

                <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาง"> นาง
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value=" "> อื่น ๆ
                    <input type="text" class="form-control" id="ps_name" name="ps_name" placeholder="กรุณาป้อนชื่อ" required>
                </div>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล </label>
                    <input type="text" class="form-control" id="ps_surname" name="ps_surname" placeholder="กรุณาป้อนนามสกุล" required>
                </div>
                
                <div class="col-md-4">
                    <!-- <label for="exampleFormControlTextarea1">ที่อยู่</label> -->
                    <span class="input-group-text"> ที่อยู่ </span>
                    <!-- <textarea class="form-control" id="ps_address" name="ps_address" rows="4"></textarea> -->
                    <textarea class="form-control" aria-label="With textarea" name="ps_address" id="ps_address">   </textarea>
                </div>

                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" name="occ_id" id="occ_id">
                        <option selected>อาชีพ</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" name="geography_id" id="geography_id">
                        <option selected>ภูมิภาค</option>
                        <option value="1">ภาคเหนือ</option>
                        <option value="2">ภาคตะวันออกเฉียงเหนือ</option>
                        <option value="3">ภาคกลาง</option>
                        <option value="4">ภาคใต้</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <span class="input-group-text"> รายละเอียดเกี่ยวกับบุคคล</span>

                    <textarea class="form-control" aria-label="With textarea" name="ps_other_detail" id="ps_other_detail">   </textarea>
                </div>

                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$ รายได้</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="ps_income" id="ps_income">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <span class="input-group-text">เบอร์โทร</span>
                    <input type="text" class="form-control" id="ps_phone" name="ps_phone" placeholder="กรุณาป้อนเบอร์โทร">
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="ps_email" name="ps_email" placeholder="name@example.com">

                </div>

                <div class="col-md-4">
                    <input class="form-control form-control-lg" id="ps_image" name="ps_image" type="file">

                </div>
                <div class="col-md-4">
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">


                </div>


            </div>



        </form>

    </div>



    <?php include("footboot.php"); ?>
</body>

</html>