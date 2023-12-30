
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconect" href="https://cdnjs.cloudflare.com/" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="shortcut icon" href="./img/LOGO/favicon.png" type="image/x-icon">
    <title>TRANG CHỦ</title>
   
  </head>
  <body>
    <main>
      <!------------------ Header-------------------- -->
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
                <a href="#!">SẢN PHẨM HỢP MỆNH<i class="fa-regular fa-gem"></i></a>
                
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
            <li>
              <a
                style="
                  color: #ecad22;
                  font-weight: bold;
                  border-bottom: 3px solid #ecad22;
                "
                ;
                href="index.php"
                >TRANG CHỦ</a
              >
            </li>
            <li><a href="introduce.php">GIỚI THIỆU</a></li>
            <li><a href="product.php">SẢN PHẨM</a></li>
            <li><a href="Contact.php">LIÊN HỆ</a></li>
          </ul>
        </div>

        <!-- ------------------------ img action -------------------------- -->
        <div class="banner">
          <div class="banner-img">
            <img src="./img/LOGO/BG.png" alt="Banner hành động" />
            <div class="btn-action">
              <a href="#!">
                <span>XEM THÊM</span>
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </header>

      <!--------------------- lIST PRODUCT INTERNAL ---------------------->
      <!--------------------- lIST PRODUCT INTERNAL ---------------------->
     
     
      <!--------------------- commit - CAM KẾT  --------------------->
      <div class="commit">
        <div class="title">
          <h2>CAM KẾT</h2>
        </div>
        <div class="desc">
          <p>
            Chúng tôi, NVTM, hân hạnh được phục vụ quý khách hàng những mẫu đồng hồ thời 
            trang nam được xách tay chính hãng từ những thương hiệu hàng đầu trên thế giới.
            Bằng những dịch vụ hậu mãi tốt nhất, quý khách hàng sẽ yên tâm và hài lòng khi mua 
            đồng hồ nam chính hãng tại NVTM.
          </p>
        </div>
        <div class="list-commit">
          <div class="commit-item">
            <i class="fa-solid fa-headset"></i>
            <span>Tư vấn hoàn toàn miễn phí</span>
          </div>

          <div class="commit-item">
            <i class="fa-regular fa-gem"></i>
            <span>Đồng hồ chất lượng</span>
          </div>

          <div class="commit-item">
            <i class="fa-solid fa-circle-check"></i>
            <span>Sản phẩm đạt tiêu chuẩn kiểm định</span>
          </div>
        </div>
        <div class="commit-thank">
          <h3>Cảm ơn mọi người ghé qua cửa hàng</h3>
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
            <a href="#!"><i class="fa-brands fa-facebook"></i></a>
            <a href="#!"><i class="fa-brands fa-youtube"></i></a>
          </div>

          <!-- Input -->
          <div class="input-gmail">
            <input
              type="text"
              placeholder="Nhập Gmail để nhận sản phẩm đồng hồ mới"
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
            <h4>HỆ THỐNG CỬA HÀNG NVTM</h4>
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
