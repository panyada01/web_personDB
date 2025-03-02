<meta charset="utf-8">
<?php
if(isset($_SESSION['ps_name'])) {} else{
    echo"<script>";
    echo"window.location='login_frm.php'";
    echo"</script>";
    exit();
}
?>