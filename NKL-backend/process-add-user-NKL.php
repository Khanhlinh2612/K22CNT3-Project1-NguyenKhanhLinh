<?php
include("ketnoi-NKL.php");

if(isset($_POST["submit_add_user"])){
    $user_id = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $full_name = $_POST["full_name"];

    $sql_add_user = "INSERT INTO user_nkl (USER_ID_NKL, USER_NAME_NKL, PASSWORD_NKL, EMAIL_NKL, FULL_NAME_NKL) 
                     VALUES ('$user_id', '$user_name', '$password', '$email', '$full_name')";

    if($conn_nkl->query($sql_add_user)){
        echo "<script>alert('Thêm người dùng thành công');</script>";
        header("Location: danhmuc-NKL.php"); 
    } else {
        echo "<script>alert('Lỗi khi thêm người dùng');</script>";
    }
}
?>
