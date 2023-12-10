<?php
include("ketnoi-NKL.php");

if(isset($_GET["user_id_nkl"])){
    $user_id_nkl = $_GET["user_id_nkl"];
    
    $sql_nkl = "SELECT * FROM `user_nkl` WHERE USER_ID_NKL='$user_id_nkl'";
    $result_nkl = $conn_nkl->query($sql_nkl);

    if($result_nkl->num_rows > 0){
        $row_nkl = $result_nkl->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-NKL.css">
</head>
<body>
    <section class="container">
        <h1>Chi tiết người dùng</h1>
        <hr/>
        <p><strong>ID người dùng:</strong> <?php echo $row_nkl["USER_ID_NKL"];?></p>
        <p><strong>Tên đăng nhập:</strong> <?php echo $row_nkl["USER_NAME_NKL"];?></p>
        <p><strong>Email:</strong> <?php echo $row_nkl["EMAIL_NKL"];?></p>
        <p><strong>Họ và tên:</strong> <?php echo $row_nkl["FULL_NAME_NKL"];?></p>

        <a href="danhmuc-NKL.php" class="btn">Quay lại danh sách người dùng</a>
    </section>
</body>
</html>
<?php
    } else {
        echo "<p>Không tìm thấy thông tin cho ID người dùng: $user_id_nkl</p>";
    }
} else {
    echo "<p>Không có ID người dùng được cung cấp.</p>";
}
?>
