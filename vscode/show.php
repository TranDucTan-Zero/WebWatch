<?php
// Truy vấn dữ liệu sản phẩm từ bảng 'news'
$sql = "SELECT * FROM news";
$query = mysqli_query($conn,$sql);

?>
<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Mô tả</th>
                <th>Chi tiết</th>
                <th>Giá</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $i ++;?></td>
    <td><?= $row['news_title']?></td>
    <td>
        <img src="image/<?= $row['news_image']?>" width="170px">
</td>
    <td><?= $row['news_intro']?></td>
    <td><?= $row['news_detail']?></td>
    <td><?= $row['news_status']?> VND</td>
    <td>
        <a class="nut" href="admin.php?page=edit&id=<?= $row['news_id']?>">Sửa</a>
    </td>
    <td>
        <a class="nut"
         onclick="return confirm('bạn có chắc chắn xóa sp này ko?')"
          href="admin.php?page=delete&id=<?= $row['news_id']?>">Xóa</a>
    </td>
    <!--$row là một mảng liên kết (associative array) trong PHP.
Các phần tử của mảng $row tương ứng với các cột trong hàng của bảng news.-->
    
    
</tr>
           <?php }
?>
</tbody>
    </table>
    <a  href="admin.php?page=creat" class="btn btn-danger"> Thêm sảm phẩm</a>
</div>
<style>
  body{
    background-color: #5B1201;
  }  
  .nut{
    display: inline-block;
    width: 80px;
    height: 27px;
    background-color: #ECAD22;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    color: aliceblue;
  }
 
  th {
    
    font-weight: bold; 
    color: #ECAD22; 
  }

  tr {
    font-weight: bold; 
    color: #ECAD22; 
  }
</style>