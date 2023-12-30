<?php
session_start();
include 'db/connection.php';

// Kiểm tra xem có id được chuyển từ URL không
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Nếu không có hoặc không phải là số, chuyển hướng về trang admin
    $_SESSION['error'] = 'ID không hợp lệ';
    header('location: admin.php');
    exit;
}

$id = $_GET['id'];

// Sử dụng Prepared Statements để bảo vệ chống SQL injection
$sql = "DELETE FROM news WHERE news_id = ?";
$stmt = mysqli_prepare($conn, $sql);

// Kiểm tra lỗi
if ($stmt === false) {
    die('Lỗi trong truy vấn SQL');
}

// Gán giá trị cho tham số
mysqli_stmt_bind_param($stmt, 'i', $id);

// Thực thi truy vấn
mysqli_stmt_execute($stmt);

// Kiểm tra xem có bản ghi nào bị ảnh hưởng không
if (mysqli_stmt_affected_rows($stmt) > 0) {
    // Có bản ghi bị xóa, chuyển hướng về trang admin
    $_SESSION['success'] = 'Xóa sản phẩm thành công';
} else {
    // Không có bản ghi nào được xóa, chuyển hướng về trang admin
    $_SESSION['error'] = 'Xóa sản phẩm thất bại';
}

// Đóng kết nối và thoát
mysqli_stmt_close($stmt);
mysqli_close($conn);

header('location: admin.php');
exit;
?>
