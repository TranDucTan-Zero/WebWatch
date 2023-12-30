<?php
// Kết nối đến cơ sở dữ liệu
require_once 'db/connection.php';

// Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM news";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản Phẩm</title>
    <link rel="preconect" href="https://cdnjs.cloudflare.com/" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/styte-produc.css" />
    <link rel="shortcut icon" href="/img/LOGO/favicon.png" type="image/x-icon">
  

  </head>
  <body>
    <main>
      <header class="header">
        <div class="container-header">
          <div class="navbar">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <a href="tel: 0909123456">LIÊN HỆ: 0909123456</a>
            </div>
            <div class="user">
              <i class="fa-regular fa-user"></i>
              <a id="sign-in" href="#!">ĐĂNG KÍ</a>
              <a href="#!">ĐĂNG NHẬP</a>
            </div>
          </div>
        </div>
        <!------------------ container-after-header ---------------------->
        <div class="container-after-header">
          <!-- Logo -->
          <div class="logo">
            <a href="/"><img src="./img/LOGO/PNGDH.png" alt="Logo bán đá" /></a>
          </div>

          <!-------------------- Nhap tim kiem ---------------->
          <div class="finding">
            <input type="text" placeholder="Tìm sản phẩm mong muốn" />
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>

          <!------------------- List ------------------------->
          <div class="list">
            <ul class="sub-list">
              <li>
                <a href="#!">SẢN PHẨM HỢP MỆNH</a>
                <i class="fa-regular fa-gem"></i>
                <ul class="list-item">
                  <li><a href="#!">SẢN PHẨM MỆNH MỘC</a></li>
                  <li><a href="#!">SẢN PHẨM MỆNH KIM</a></li>
                  <li><a href="#!">SẢN PHẨM MỆNH THỦY</a></li>
                  <li><a href="#!">SẢN PHẨM MỆNH THỔ</a></li>
                  <li><a href="#!">SẢN PHẨM MỆNH HỎA</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="cart">
            <p><a href="Cart.php">GIỎ HÀNG</a></p>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>

        <!---------------------------- Menu ------------------------ -->
        <div class="menu">
          <ul class="sub-menu">
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li>
              <a href="introduce.php">GIỚI THIỆU</a>
            </li>
            <li><a  style="
              color: #ecad22;
              font-weight: boldl;
              border-bottom: 3px solid #ecad22;
            "
             href="product.php">SẢN PHẨM</a></li>
            <li><a href="Contact.php">LIÊN HỆ</a></li>
          </ul>
        </div>
      </header>

          <!-- information introducing -->
          <div class="container-info">
        <div class="logo">
            <h2>Thông tin sản phẩm</h2>
            <img src="/img/LOGO/PNGDH.png" alt="" />
        </div>
    
        <div class="gallery">
    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <div class="content">
            <!-- Form để thêm sản phẩm vào giỏ hàng -->
            <form action="add_to_cart.php" method="post">
                <?php foreach ($row as $key => $value): ?>
                    <!-- Sử dụng các trường dữ liệu của sản phẩm làm các trường ẩn -->
                    <input type="hidden" name="<?= $key ?>" value="<?= $value ?>">
                <?php endforeach; ?>
                <!-- Hiển thị hình ảnh sản phẩm -->
                <img src="image/<?= $row['news_image'] ?>" alt="<?= $row['news_title'] ?>">
                <!-- Hiển thị tiêu đề sản phẩm -->
                <h3><?= $row['news_title'] ?></h3>
                <!-- Hiển thị mô tả ngắn của sản phẩm -->
                <p><?= $row['news_intro'] ?></p>
                <!-- Hiển thị chi tiết sản phẩm -->
                <p><?= $row['news_detail'] ?></p>
                <!-- Hiển thị giá sản phẩm -->
                <h6><?= $row['news_status'] ?> VND</h6>
                <!-- Nút "Đặt trước" để thêm sản phẩm vào giỏ hàng -->
                <button type="submit" name="add_to_cart" class="more-shop">Đặt trước</button>
            </form>
        </div>
    <?php endwhile; ?>
    <!--điều kiện hoặc vòng lặp -->
</div>

    </div>

      
        </div>
  </div>

      <!---------------------- Footer - Chân trâng------------------------------------ -->
      <div class="footer">
        <div class="title">
          <h2>KẾT NỐI VỚI CHÚNG TÔI</h2>
        </div>
        <div class="container-footer">
          <!-- Icon social Network -->
          <div class="social-icon">
            <a href="#!">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#!">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>

          <!-- Input -->
          <div class="input-gmail">
            <input
              type="text"
              placeholder="Nhập Gmail để nhận cẩm nang phong thủy"
            />
          </div>

          <!-- Button sign up -->
          <div class="btn-sign-up">
            <a href="#!">Đăng kí</a>
            <a href="#!">Nhận tư vấn</a>
          </div>
        </div>

        <!-- infor store -->
        <div class="info-store">
          <div class="title-info">
            <h4>HỆ THỐNG CỬA HÀNG</h4>
          </div>
          <div class="info-store-title">
            <div class="address">
              <i class="fa-solid fa-house-chimney"></i>
              <span
                >72 Đường số 8, P.11, Q. Gò Vấp, Ho Chi Minh City, Vietnam</span
              >
            </div>
            <div class="phone-contact">
              <i class="fa-solid fa-phone"></i>
              <span><a href="tel: 0908 999999">0908 999999</a></span>
            </div>
          </div>
          <div class="highlight">
            <div class="title-highlight">
              <p>
                Copyright &copy; 2021 | Bản quyền thuộc về nhóm 04 - Đại học Gia
                Định
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
