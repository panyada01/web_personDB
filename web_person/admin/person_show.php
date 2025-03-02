<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    include("config/condb.php");
    ?>
</head>

<body>
    <?php include("navbar2.php"); ?>
    <table id="example3" class="table table-bordered table-striped dataTable">
        <thead>
            <tr role="row" class="info">
                <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th> -->
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสอ้างอิงบุคคล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สกุล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">อาชีพ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 4%;">รูปภาพ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">แก้ไข</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ลบ</th>
            </tr>
            <?php
            $sql = "SELECT ps_id,ps_prefix,ps_name,ps_surname,occ_name,ps_other_detail,ps_image FROM tbl_person,tbl_occ WHERE tbl_person.occ_id =tbl_occ.occ_id ORDER BY tbl_occ.occ_id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {

            ?>

        <tbody>
            <tr>
                <td><?php print $row['ps_id']; ?> </td>
                <td><?php echo $row['ps_prefix'] . ' ' . $row['ps_name']; ?> </td>

                <td> <?php echo $row['ps_surname']; ?></td>
                <td> <?php echo $row['occ_name']; ?></td>
                <td> <?php echo $row['ps_other_detail']; ?></td>



                <td><img class="img-rounded" src="images_ps/<?= $row['ps_image']; ?>" width="100" height="100"> </td>

                <td><a class="btn btn-warning btn-flat btn-sm" href="person_frm_edit.php?act=edit&ps_id=<?php echo $row['ps_id']; ?>">
                        แก้ไข
                    </a> </td>

                <td> <a class="btn btn-success" href="person_del.php?ps_id=<?= $row['ps_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                        ลบ
                    </a></td>
            <?php } ?>
            </tr>
        </tbody>
        </thead>
    </table>







    <?php include("footboot.php"); ?>
</body>

</html>