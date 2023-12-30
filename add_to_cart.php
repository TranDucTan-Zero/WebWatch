<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    // Kiểm tra xem các trường cần thiết đã được gửi từ form hay chưa
    if (isset($_POST['news_id'], $_POST['news_title'], $_POST['news_image'], $_POST['news_intro'], $_POST['news_detail'], $_POST['news_status'])) {
        $productId = $_POST['news_id'];
        $productDetails = [
            'news_id' => $_POST['news_id'],
            'news_title' => $_POST['news_title'],
            'news_image' => $_POST['news_image'],
            'news_intro' => $_POST['news_intro'],
            'news_detail' => $_POST['news_detail'],
            'news_status' => $_POST['news_status'],
            'quantity' => 1,
        ];

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($_SESSION['cart'][$productId])) {
            // Nếu đã tồn tại, tăng số lượng lên 1
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            // Nếu chưa tồn tại, thêm vào giỏ hàng
            $_SESSION['cart'][$productId] = $productDetails;
        }
       // Đặt một thông báo thành công
      
        header('Location: product.php');
        exit();
    }
}
?>
