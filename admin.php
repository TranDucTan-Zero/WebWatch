<?php
// Import file kết nối cơ sở dữ liệu
require_once 'db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- File Bootstrap -->
    <!-- Thư viện CSS được biên dịch và thu gọn mới nhất -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <?php
    // Kiểm tra xem tham số 'page' đã được truyền hay chưa
    if (isset($_GET['page'])) {
        // Sử dụng cấu trúc switch để xác định trang cần hiển thị
        switch ($_GET['page']) {
            case 'show':
                // Trang hiển thị dữ liệu
                require_once 'vscode/show.php';
                break;

            case 'edit':
                // Trang chỉnh sửa dữ liệu
                require_once 'vscode/edit.php';
                break;

            case 'creat':
                // Trang tạo mới dữ liệu
                require_once 'vscode/creat.php';
                break;

            case 'delete':
                // Trang xóa dữ liệu
                require_once 'vscode/delete.php';
                break;
            
            default:
                // Trang mặc định (hiển thị)
                require_once 'vscode/show.php';
                break;
        }
    } else {
        // Nếu không có tham số 'page', mặc định hiển thị trang show
        require_once 'vscode/show.php';
    }
    ?>
</body>

</html>
