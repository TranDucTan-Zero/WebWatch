<?php
session_start();

include 'db/connection.php'; // Đảm bảo rằng bạn đã kết nối đến CSDL

if (isset($_POST['submit'])) {
    $news_title = $_POST['news_title'];
    $news_image = $_FILES['news_image']['name'];
    $news_image_tmp = $_FILES['news_image']['tmp_name'];
    $news_intro = $_POST['news_intro'];
    $news_detail = $_POST['news_detail'];
    $news_status = $_POST['news_status'];

    // VALIDATE FORM
    if (
        empty($news_title) ||
        empty($news_image) ||
        empty($news_intro) ||
        empty($news_detail) ||
        empty($news_status)
    ) {
        $_SESSION['error'] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
        header('location: admin.php?page=creat');
        die;
    }

    if ($_FILES['news_image']['size'] > 37000000) {
        $_SESSION['error'] = 'Ảnh Phải Dưới 3G';
        header('location: admin.php?page=creat');
        die;
    }

    if (strlen($news_title) > 200) {
        $_SESSION['error'] = 'title phải dưới 200 ký tự';
        header('location: admin.php?page=creat');
        die;
    }

    $sql = "INSERT INTO news(news_title, news_image, news_intro, news_detail, news_status)"
        . "VALUES('$news_title','$news_image','$news_intro','$news_detail','$news_status')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        move_uploaded_file($news_image_tmp, 'image/' . $news_image);
        header('location: admin.php'); // Chỉ giữ lại một lệnh header
        exit;
    } else {
        $_SESSION['error'] = 'Lỗi khi thêm sản phẩm';
        header('location: admin.php?page=creat');
        die;
    }
}
?>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data">
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p style=color:red>' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <div class="form-group">
            <label for="title">Tên sản phẩm</label>
            <input type="text" name="news_title" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="image">Ảnh sản phẩm</label>
            <input type="file" name="news_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="intro">Mô tả</label>
            <input type="text" name="news_intro" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="detail">Chi tiết</label>
            <input type="text" name="news_detail" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="status">Giá</label>
            <input type="text" name="news_status" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary" name="submit" type="submit"> THÊM </button>
    </form>
</div>
