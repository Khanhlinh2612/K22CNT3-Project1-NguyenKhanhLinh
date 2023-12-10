<?php
include("ketnoi-NKL.php");

if(isset($_POST["submit_edit_user"])){
    $user_id_nkl = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $full_name = $_POST["full_name"];

    $sql_edit_user = "UPDATE user_nkl
                      SET USER_NAME_NKL='$user_name', PASSWORD_NKL='$password', EMAIL_NKL='$email', FULL_NAME_NKL='$full_name' 
                      WHERE USER_ID_NKL='$user_id_nkl'";

    if($conn_nkl->query($sql_edit_user)){
        echo "<script>alert('Sửa thông tin người dùng thành công');</script>";
        header("Location: danhmuc-NKL.php");
    } else {
        echo "<script>alert('Lỗi khi sửa thông tin người dùng');</script>";
    }
}
?>
