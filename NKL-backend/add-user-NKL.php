<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới người dùng</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-NKL.css">
</head>
<body>
    <header>
        <h1> Quan lí nhân sự -Nguyễn Khánh Linh - 2210900035 </h1>
    </header>
    <section>

        <h2>Thêm mới người dùng</h2>
        <form action="process-add-user-NKL.php" method="POST">
            <label for="user_id">Mã người dùng:</label>
            <input type="text" id="user_id" name="user_id" required>

            <label for="user_name">Tên đăng nhập:</label>
            <input type="text" id="user_name" name="user_name" required>
            
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="full_name">Họ và tên:</label>
            <input type="text" id="full_name" name="full_name" required>

            <button type="submit" name="submit_add_user" class="btn">Thêm người dùng</button>
        </form>
    </section>
</body>
</html>
