<?php
session_start();
if (isset($_POST['username'])) {
    include("config/condb.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_person WHERE username='" . $username . "' AND password='" . $password . "' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION["ps_id"] = $row["ps_id"];
        $_SESSION["ps_name"] = $row["ps_name"];
        $_SESSION["ps_surname"] = $row["ps_surname"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["level"] = $row["level"];

        if ($_SESSION['level'] == "admin") {
            Header("Location:menuadmin.php");
        }
        if ($_SESSION['level'] == "user") {
            Header("Location: menuuser.php");
        }
    } else {
        echo "<script>";
        echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {

    Header("Location: login_frm.php"); //user & password incorrect back to login again

}