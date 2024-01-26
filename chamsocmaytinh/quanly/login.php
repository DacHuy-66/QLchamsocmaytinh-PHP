<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/sb-admin-2.css">
  <style>
    .loi {
      color: red;
    }
  </style>
</head>

<body>
  <div class="boxcenter">
    <h2>Đăng Nhập</h2>
    <form action="loginDB.php" method="post">
      <div class="imgcontainer">
        <img src="../image/login.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="" name="uname" required>

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="" name="psw" required>

        <!-- Thêm phần thông báo -->
        <?php if (isset($_GET['loi'])) { ?>
          <p class="loi"><?php echo $_GET['loi']; ?></p>
        <?php } ?>

        <button class="btn btn-primary btn-user btn-block" type="submit" name="login" value="Đăng nhập">Đăng nhập</button>
        <a href="dangky.php" class="btn btn-primary btn-user btn-block" >Đăng ký</a>
      </div>
    </form>
  </div>
</body>

</html>