<?php
session_start();
include 'db/connection.php';

// Kiểm tra xem có id được chuyển từ URL không
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Nếu không có hoặc không phải là số, chuyển hướng về trang admin
    $_SESSION['error'] = 'ID không hợp lệ';
    header('location: admin.php?page=show');
    exit;
}

$id = $_GET['id'];

$sql_up = "SELECT * FROM news where news_id='$id'";
$query_up = mysqli_query($conn, $sql_up);
$row_up = mysqli_fetch_array($query_up);

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
        empty($news_intro) ||
        empty($news_detail) ||
        empty($news_status)
    ) {
        $_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin';
        header("location:admin.php?page=edit&id=$id");
        die;
    } elseif ($_FILES['news_image']['size'] > 3000000) {
        $_SESSION['error'] = 'Ảnh phải dưới 3GB';
        header("location:admin.php?page=edit&id=$id");
        die;
    } elseif (strlen($news_title) > 200) {
        $_SESSION['error'] = 'Title phải dưới 200 ký tự';
        header("location:admin.php?page=edit&id=$id");
        die;
    }
    $news_image = empty($news_image) ? $row_up['news_image'] : $news_image; // Nếu không có ảnh mới thì giữ ảnh cũ

    $sql = "UPDATE news SET
        news_title='$news_title',
        news_image='$news_image',
        news_intro='$news_intro',
        news_detail='$news_detail',
        news_status='$news_status'
        WHERE news_id= '$id'";

    $query = mysqli_query($conn, $sql);
    move_uploaded_file($news_image_tmp, 'image/' . $news_image);

    header('location:admin.php?page=show');
    exit;
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
            <input type="text" value="<?= $row_up['news_title'] ?>" name="news_title" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="image">Ảnh sản phẩm</label>
            <input type="file" name="news_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <img src="image/<?= $row_up['news_image'] ?>" width="100px">
        </div>
        <div class="form-group">
            <label for="intro">Mô tả</label>
            <input type="text" value="<?= $row_up['news_intro'] ?>" name="news_intro" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="detail">Chi tiết</label>
            <input type="text" value="<?= $row_up['news_detail'] ?>" name="news_detail" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="status">Giá</label>
            <input type="text" value="<?= $row_up['news_status'] ?>" name="news_status" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary" name="submit" type="submit">SỬA</button>
    </form>
</div>
        