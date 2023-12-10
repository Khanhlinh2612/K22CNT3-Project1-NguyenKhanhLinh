<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí nhân sự - Nguyễn Khánh Linh - 2210900054</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-NKL.css">
</head>
<body>
    <?php
        include("ketnoi-NKL.php");
        
        if(isset($_POST["submit_add_user"])){
            $user_name = $_POST["user_name"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $full_name = $_POST["full_name"];

            $sql_add_user = "INSERT INTO user_nkl (USER_NAME_NKL, PASSWORD_NKL, EMAIL_NKL, FULL_NAME_NKL) 
                             VALUES ('$user_name', '$password', '$email', '$full_name')";

            if($conn_nkl->query($sql_add_user)){
                echo "<script>alert('Thêm người dùng thành công');</script>";
            } else {
                echo "<script>alert('Lỗi khi thêm người dùng');</script>";
            }
        }

        $sql_nkl = "SELECT * FROM `user_nkl` WHERE 1 =1";

        $result_nkl = $conn_nkl->query($sql_nkl);
    ?>

    <header>
        <h1> Quản lí nhân sự - Nguyễn Khánh Linh - 2210900054 </h1>
    </header>
    <section>
        <table border="1px" width="80%" align="center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã </th>
                    <th>Tên</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Tên đầy đủ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt_nkl = 0;
                    while($row_nkl = $result_nkl->fetch_array()){
                        $stt_nkl ++;
                ?>
                <tr>
                    <td><?php echo $stt_nkl; ?></td>
                    <td><?php echo $row_nkl["USER_ID_NKL"]; ?></td>
                    <td><?php echo $row_nkl["USER_NAME_NKL"]; ?></td>
                    <td><?php echo $row_nkl["PASSWORD_NKL"]; ?></td>
                    <td><?php echo $row_nkl["EMAIL_NKL"] ;?></td>
                    <td><?php echo $row_nkl["FULL_NAME_NKL"] ;?></td>
                    <td>
                        <a href="user-detail-NKL.php?user_id_nkl=<?php echo $row_nkl["USER_ID_NKL"]; ?>" class="btn detail">Chi tiết</a>
                        <a href="user-edit-NKL.php?user_id_nkl=<?php echo $row_nkl["USER_ID_NKL"]; ?>" class="btn edit">Sửa</a>
                        <a href="user-delete-NKL.php?user_id_nkl=<?php echo $row_nkl["USER_ID_NKL"]; ?>" 
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn delete">Xóa</a>
                    </td>    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <a href="add-user-NKL.php" class="btn">Thêm mới người dùng</a>
        
    </section>
</body>
</html>
