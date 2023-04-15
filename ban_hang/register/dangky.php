<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background-color: #f2f2f2;
}

.container {
  width: 500px;
  margin: 0 auto;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  padding: 20px;
}

h1 {
  text-align: center;
}

input[type=text], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

button {
  background-color: #00a5e5;
  color:#fff;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}

button:hover {
    background-color: #0077b3;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media (max-width: 600px) {
  .container {
    width: 100%;
  }
}

    </style>
    <title>Đăng Ký</title>
</head>
    <body>
    <form action="xuly.php" method="POST">
  <div class="container">
    <h1>Đăng Ký</h1>
    <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
    <hr>
    <label for="text"><b>Tên đăng nhập:</b></label>
    <input type="text" placeholder="Tên đăng nhập" name="txtUsername" required>
    <br>
    <label for="psw"><b>Mật Khẩu:</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu" name="txtPassword" required>
    <br>
    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Nhập Email" name="txtEmail" required>
    <br>
    <label for="text"><b>Họ và tên:</b></label>
    <input type="text" placeholder="Họ và tên" name="txtFullname" required>
    <br>
    <label for="text"><b>Ngày sinh:</b></label>
    <input type="text" placeholder="Ngày sinh" name="txtBirthday" required>
    <br>
    <label for="text"> <b>Giới tính:</b></label>
    <select name="txtSex" require>
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Đăng Ký</button>
    </div>
  </div>
</form>
    </body>
</html>