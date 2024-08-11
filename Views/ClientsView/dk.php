<!-- register.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản</title>
    <!-- <link rel="stylesheet" href="/Common/assets/css/dk.css"> -->
     <style>
        /* Đặt các thuộc tính cơ bản cho toàn bộ trang */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: aquamarine;
}

/* Định dạng cho thẻ h2 */
h2 {
    color: #333;
    margin-bottom: 20px;
}

/* Định dạng cho form */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Định dạng cho các nhãn */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

/* Định dạng cho các ô nhập liệu */
input[type="text"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

/* Định dạng cho nút bấm */
button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

/* Thay đổi màu của nút khi di chuột qua */
button:hover {
    background-color: #0056b3;
}

     </style>
</head>
<body>
    <div class="form-dk">
    <h2>Đăng Ký Tài Khoản</h2>
    <form action="index.php?ctl=Register" method="post">
        <label for="username">Họ và Tên:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mật Khẩu:</label><br>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Đăng Ký</button>
    </form>
    </div>
    
</body>
</html>

