<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #5B1201;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
    }

    h1 {
        color: #ECAD22;
    }

    img {
        width: 300px;
    }

    table {
        width: 80%;
        margin-top: 20px;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px  solid #ECAD22;
    }

    th {
        background-color: #ECAD22;
        color: #5B1201;
    }

    td img {
        max-width: 80px;
        border-radius: 5px;
    }

    td a {
        color: #e44d26;
        text-decoration: none;
    }

    td a:hover {
        text-decoration: underline;
    }

    tfoot {
        background-color: #ECAD22;
        color: #5B1201;
    }

    tfoot td {
        font-weight: bold;
    }
</style>
<body>
    <h1>Giỏ Hàng</h1>
    <img src="./img/LOGO/PNGDH.png" alt="">
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng cộng</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0; // Tổng giá của giỏ hàng

            // Lặp qua từng sản phẩm trong giỏ hàng
            foreach ($_SESSION['cart'] as $productId => $product) {
                // Lấy giá sản phẩm và tính tổng giá của từng sản phẩm
                $productPrice = isset($product['news_status']) ? (float) str_replace(['.', ','], '', $product['news_status']) : 0;
                $totalProductPrice = $productPrice * $product['quantity'];
                $totalPrice += $totalProductPrice;
            ?>
            <tr>
                <td><?= isset($product['news_title']) ? $product['news_title'] : 'N/A' ?></td>
                <td><img src="image/<?= isset($product['news_image']) ? $product['news_image'] : 'no_image.jpg' ?>" alt="Ảnh sản phẩm" width="80px"></td>
                <td><?= isset($product['news_status']) ? number_format($productPrice) : 'N/A' ?></td>
                <td><?= isset($product['quantity']) ? $product['quantity'] : 'N/A' ?></td>
                <td><?= number_format($totalProductPrice) ?> VND</td>
                <td><a href="remove_from_cart.php?product_id=<?= $productId ?>">Xóa</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align: right;">Tổng cộng:</td>
                <td><?= number_format($totalPrice) ?> VND</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
