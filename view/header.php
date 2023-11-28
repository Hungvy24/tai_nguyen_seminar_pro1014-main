<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website bán hàng</title>
  <link rel="icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-180x180.png" />
  <link rel="stylesheet" href="./css/css.css">
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    #totalProduct {
      color: #fff;
      background-color: red;
      font-size: 12px;
      padding: 5px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="boxcenter">
    <!-- BIGIN HEADER -->
    <header>
      <div class="row mb header">
        <h1>SIÊU THỊ TRỰC TUYẾN</h1>
      </div>
      <div class="row mb menu">
        <ul>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php">Trang chủ</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=gioithieu">Giới thiệu</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php">Danh mục</a>
            <div class="dropdown_content">
              <a href="">Đồng hồ</a>
              <a href="">Điện thoại</a>
              <a href="">Laptop</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=gopy">Góp ý</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=hoidap">Hỏi đáp</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=lienhe">Liên hệ</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=listCart">Giỏ hàng</a>
            <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
          </li>
        </ul>
      </div>
    </header>
    <!-- END HEADER -->