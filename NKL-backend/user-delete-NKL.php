<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa người dùng</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-NKL.css">
</head>
<body>
    <?php
        include("ketnoi-NKL.php");

        if(isset($_GET["user_id_nkl"])){
            $user_id_nkl = $_GET["user_id_nkl"];

            $sql_detail_user_nkl = "SELECT * FROM user_nkl WHERE USER_ID_NKL='$user_id_nkl'";
            $result_detail_user_nkl = $conn_nkl->query($sql_detail_user_nkl);

            if($result_detail_user_nkl->num_rows > 0){
                $row_detail_user_nkl = $result_detail_user_nkl->fetch_assoc();
    ?>
    <section class="container">
        <h1>Xóa người dùng</h1>
        <hr/>
        <p>Bạn có chắc chắn muốn xóa người dùng có Mã: <?php echo $row_detail_user_nkl["USER_ID_NKL"]; ?>?</p>
        <form action="process-delete-user-NKL.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $row_detail_user_nkl["USER_ID_NKL"]; ?>">
            <button type="submit" name="submit_delete_user" class="btn-delete">Xóa người dùng</button>
        </form>
        <a href="danhmuc-NKL.php" class="btn">Quay lại danh sách người dùng</a>
    </section>
    <?php
            } else {
                echo "<p>Không tìm thấy thông tin cho ID người dùng: $user_id_nkl</p>";
            }
        } else {
            echo "<p>Không có ID người dùng được cung cấp.</p>";
        }
    ?>
</body>
</html>
