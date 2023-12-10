<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
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
        <h1>Sửa thông tin người dùng</h1>
        <hr/>
        <form action="process-edit-user-NKL.php" method="POST">
            <label for="user_id">Mã người dùng:</label>
            <input type="text" id="user_id" name="user_id" value="<?php echo $row_detail_user_nkl["USER_ID_NKL"]; ?>" required>
    
            <label for="user_name">Tên đăng nhập:</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $row_detail_user_nkl["USER_NAME_NKL"]; ?>" required>
            
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" value="<?php echo $row_detail_user_nkl["PASSWORD_NKL"]; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row_detail_user_nkl["EMAIL_NKL"]; ?>" required>
            
            <label for="full_name">Họ và tên:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $row_detail_user_nkl["FULL_NAME_NKL"]; ?>" required>
        
            <button type="submit" name="submit_edit_user" class="btn">Lưu thay đổi</button>
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
