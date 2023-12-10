<?php
include("ketnoi-NKL.php");

if(isset($_POST["submit_delete_user"])){
    $user_id_nkl = $_POST["user_id"];

    $sql_delete_user = "DELETE FROM user_nkl WHERE USER_ID_NKL='$user_id_nkl'";

    if($conn_nkl->query($sql_delete_user)){
        echo "<script>alert('Xóa người dùng thành công');</script>";
        header("Location: danhmuc-NKL.php");
    } else {
        echo "<script>alert('Lỗi khi xóa người dùng');</script>";
    }
}
?>
