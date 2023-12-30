<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['product_id'])) {
    $productIdToRemove = $_GET['product_id'];

    // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
    if (isset($_SESSION['cart'][$productIdToRemove])) {
        // Xóa sản phẩm khỏi giỏ hàng
        unset($_SESSION['cart'][$productIdToRemove]);
    }
}
// Chuyển hướng về trang giỏ hàng
header('Location: Cart.php');
exit();
?>
