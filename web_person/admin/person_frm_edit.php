<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ฟอร์มแก้ไข</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    include('config/condb.php');
    if ($_GET["ps_id"] == '') {
        echo "<script type='text/javascript'>";
        echo "alert('Error Contact Admin !!');";
        echo "window.location = 'person_show.php'; ";
        echo "</script>";
    }
    $ps_id = mysqli_real_escape_string($conn, $_GET['ps_id']);
    $query = "SELECT * FROM tbl_person WHERE ps_id=$ps_id" or die("Error:" . mysqli_error($conn));
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    extract($row);    ?>
</head>

<body>
<?php include("navbar.php"); ?>

    <div class="container mt-3">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="person_edit.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-label">รหัสประชาชน/เลข passport/เลขอ้างอิงอื่น ๆ </label>
                    <input type="text" class="form-control" id="ps_id" name="ps_id" value="<?php echo $ps_id; ?>">
                    <input type="hidden" name="hd_ps_id" value="<?php echo $ps_id;  ?>" />
                </div>

                <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาง"> นาง
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value=" "> อื่น ๆ
                    <input type="text" class="form-control" id="ps_name" name="ps_name" value="<?php echo $ps_name; ?>">
                </div>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล </label>
                    <input type="text" class="form-control" id="ps_surname" name="ps_surname" value="<?php echo $ps_surname; ?>">
                </div>
                <div class="col-md-4">
                    <!-- <label for="exampleFormControlTextarea1">ที่อยู่</label> -->
                    <span class="input-group-text"> ที่อยู่ </span>
                    <!-- <textarea class="form-control" id="ps_address" name="ps_address" rows="4"></textarea> -->
                    <textarea class="form-control" aria-label="With textarea" name="ps_address" id="ps_address">   </textarea>
                </div>

                <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="occ_id" id="occ_id">
                        <option value=""> เลือกอาชีพให้ตรง </option>
                        <?php
                        include('config/condb.php');
                        $query = "select * From tbl_occ  order by occ_name " or die("Error:" . mysqli_error($conn));
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?= $row["occ_id"]; ?>"><?=  $row["occ_id"] . " - " .  $row["occ_name"]; ?></option>

                        <?php
                        }
                        ?>
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

                    <textarea class="form-control" aria-label="With textarea" name="ps_other_detail" id="ps_other_detail"> <?php echo $ps_other_detail; ?>  </textarea>
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
                    <input class="form-check-input" type="radio" name="chk_edit_no" id="chk_edit_no" value="0" checked> ไม่ต้องการแก้ไขรูปภาพ
                    <input class="form-check-input" type="radio" name="chk_edit_no" id="chk_edit_no" value="1"> ต้องการแก้ไขรูปภาพ
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