<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>แสดงข้อมูลบุคคล</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    include('admin/config/condb.php');
    ?>
</head>

<body>
    <!-- Navbar -->

    <?php include("navbar.php");   ?>

    <!-- End Navbar -->

    <div class="container mt-3">
        <h1>
            <div class="text-center"> แสดงข้อมูลบุคลากร </div>
        </h1>
        <!-- Card Album2 -->
        <div class="row g-3">
            <?php
            $sql = "SELECT * FROM tbl_person order by ps_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4">

                    <div class="card">
                        <img src="images_ps/<?= $row['ps_image']; ?>" class="card-img-top" alt="..." width="800" height="700">



                        <div class="card-body">
                            <h5 class="card-title"><?php print $row['ps_id']; ?></h5>
                            <p class="card-text"><?php echo $row['ps_prefix'] . ' ' . $row['ps_name'] . ' ' . $row['ps_surname']; ?></p>
                            <p class="card-text"><?php echo $row['ps_other_detail']; ?></p>
                            <p class="card-text"><?php echo $row['occ_id']; ?></p>

                            <a class="btn btn-warning btn-flat btn-sm" href="person_frm_edit.php?act=edit&ps_id=<?php echo $row['ps_id']; ?>">
                                แก้ไข
                            </a>

                            <a class="btn btn-success" href="person_del.php?ps_id=<?= $row['ps_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                                ลบ
                            </a>

                        </div>
                    </div>

                </div>
            <?php } ?>




        </div>





    </div>


    <?php include("footboot.php"); ?>
</body>

</html>