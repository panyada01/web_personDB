<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- Navbar -->

    <?php include("navbar.php");   ?>

    <!-- End Navbar -->

    <div class="container mt-3">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="person_insert.php" method="POST" enctype="multipart/form-data" name="frmstd" id="frmstd">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-label">รหัสประชาชน/เลข passport/เลขอ้างอิงอื่น ๆ </label>
                    <input type="text" class="form-control" id="ps_id" name="ps_id" placeholder="กรุณาป้อนเลขบัตรประชาชนหรืออื่น ๆ ที่ใช้อ้างอิง" required>
                </div>

                <div class="col-md-4">
                    <label for="form-label">ชื่อบุคคล</label>

                </div>
                <div class="col-md-4">
                    <label for="form-label">ชื่อบุคคล</label>
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาง"> นาง
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value=" "> อื่่น ๆ [ให้พิมพ์ก่อนชื่อระบุชื่อ]
                    <input type="text" class="form-control" id="ps_name" name="ps_name" placeholder="กรุณาป้อนชื่อบุคคล" required>
                </div>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="ps_surname" name="ps_surname" placeholder="กรุณาป้อนนามสกุล" required>
                </div>
                <div class="col-md-4">

                    <span class="input-group-text"> ที่อยู่ </span>
                    <textarea class="form-control" aria-label="With textarea" name="ps_address" id="ps_address">   </textarea>

                </div>
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" name="occ_id">
                        <option selected>อาชีพ</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text">$รายได้</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="ps_income" name="ps_income">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-outline mb-3" style="width: 100%; max-width: 22rem">
                        <input type="text" id="ps_phone" name="ps_phone" class="form-control" data-mdb-input-mask="+48 999-999-999" />
                        <label class="form-label" for="phone">Phone number with country code</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="ps_email" name="ps_email" placeholder="name@example.com">
                </div>


                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" name="eography_id">
                        <option selected>พื้นฐานภูมิศาสตร์</option>
                        <option value="1">เหนือ</option>
                        <option value="2">ตะวันออกเฉียงเหนือ</option>
                        <option value="3">กลาง</option>
                        <option value="4">ใต้</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <span class="input-group-text"> รายละเอียดอื่น ๆ เกี่ยวกับบุคคล </span>
                    <textarea class="form-control" aria-label="With textarea" name="ps_other_detail" id="ps_other_detail">   </textarea>

                </div>


                <div class="col-md-4">

                    <input type="file" name="ps_image" id="ps_image" class="custom-file-input">
                    <label class="custom-file-label" for="filepicture">Choose file</label>
                </div>


                <div class="col-md-6">
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">


                </div>


            </div>
    </div>

    </form>

    </div>


    <?php include("footboot.php") ?>
</body>

</html>