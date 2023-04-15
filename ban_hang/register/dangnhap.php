<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>

    <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

  form {
    margin: 0 auto;
    width: 40%;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
  }

  h1 {
    text-align: center;
    font-size: 36px;
    color: #555;
    margin-bottom: 20px;
  }

  p {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-size: 18px;
    color: #555;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #ddd;
    font-size: 16px;
    color: #555;
    background-color: #f8f8f8;
    transition: border-bottom-color 0.3s ease-in-out;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    outline: none;
    border-bottom-color: #00a5e5;
  }

  input[type="submit"] {
    background-color: #00a5e5;
    color: #fff;
    font-size: 18px;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease-in-out;
  }

  input[type="submit"]:hover {
    background-color: #0077b3;
  }

  a {
    color: #00a5e5;
    text-decoration: none;
    margin-left: 20px;
    font-size: 18px;
    transition: color 0.3s ease-in-out;
  }

  a:hover {
    color: #0077b3;
  }
</style>
</head>
    <body>
    <form action="dangnhap.php?do=login" method="POST">
  <div class="container">
    <h1>Đăng Nhập</h1>
    <hr>
    <label for="text"><b>Tên đăng nhập:</b></label>
    <input type="text" placeholder="Tên đăng nhập" name="txtUsername" required>
    <br>
    <label for="psw"><b>Mật Khẩu:</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu" name="txtPassword" required>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
    </label>

    <input type='submit' value='Đăng nhập' />
    <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
  </div>
</form>
    </body>
</html>