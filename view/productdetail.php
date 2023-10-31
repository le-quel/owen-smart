<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel='shortcut icon' href='img/Screenshot 2023-04-01 091641.png' />
    <style>
    .img {
        text-align: center;
        padding: 5%;
    }

    p {
        padding-left: 10%;
        margin: 15px;
    }

    .click {
        border-radius: 10px;
        background-color: white;

    }

    .click:hover {
        background-color: pink;

    }

    .trangthai {
        background-color: red;
        color: white;
        margin: 10px;
        padding: 10px;
        border-radius: 10px;
    }

    .trangthai:hover {
        background-color: rgb(130, 3, 3);

    }

    .trangthai a {
        text-decoration: none;
        color: black;
    }

    .xemthem {
        background-color: blue;
        color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .xemthem a {
        text-decoration: none;
        color: black;
    }

    h4 {
        border-radius: 10px;
        background-color: rgb(156, 151, 151);
        padding: 5px;
    }

    .uudai {
        border-radius: 10px;
        border: 10px;
        background-color: rgb(228, 222, 215);
        margin: 10px;
    }

    .nut {
        width: 200px;
        height: 40px;
        margin: 10px;
    }



    .gia {
        background-color: rgb(243, 243, 243);
        border-radius: 10px;
        text-align: center;
        margin: 10px;
    }

    .right {
        padding: 5px;
        margin: 20px;
        border-radius: 10px;
        background-color: rgb(243, 243, 243);
        margin: 10px;
    }

    .fullsp {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
    </style>
</head>
<?php
// productdetail.php

if (is_array($detail)) {
    extract($detail);
    // Tiếp tục sử dụng các biến được extract từ mảng
    // ...
} else {
    echo "Product details not available.";
}
?>

<body>
    <div class="fullsp">
        <!-- 1 div sp  -->
        <div class="sanpham">
            <div class="left">
                <h3><?=$name?>⭐⭐⭐⭐⭐ 10 đánh giá</h3>
                <h1>
                    <h3>TÍNH NĂNG NỔI BẬC</h3>
                </h1>
                <div class="slider">
                    <a class="sanpham-image" href="'.$linkdetail.'"><img src="'.$image.'" width="200px" alt=""></a>
                    <img src="<?=$image ?>" height="320px" width="300px" class="bt" alt="">
                </div>
                <img src="img/12_3_8_2_8.webp" width="50px" height="50px" alt="">
                <img src="img/13_4_7_2_7.webp" width="50px" height="50px" alt="">
                <img src="img/15_2_7_2_5.webp" width="50px" height="50px" alt="">
                <img src="img/12_3_8_2_8.webp" width="50px" height="50px" alt="">
                <img src="img/iphone-13-02_4.webp" width="50px" height="50px" alt="">
                <img src="img/14_1_9_2_9.webp" width="50px" height="50px" alt="">
            </div>
        </div>
        <!-- 2 div sp  -->
        <div class="sanpham">
            <div class="center">
                <div class="gia">
                    <br>
                    <h2>GIÁ:<strong style="color:red" ;><?= '  '.$price?></strong></h2>

                    <button class="click">512GB <br><?= '  '.$price?></button>
                    <button class="click">256GB <br><?= '  '.$price?></button>
                    <button class="click">128Gb <br><?= '  '.$price?></button><br>

                    <form action="./modules/addtocart.php" method="post">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="hidden" name="img" value="./image/<?=$image ?>">
                        <input type="hidden" name="tensp" value="<?=$name ?> ">
                        <input type="hidden" name="gia" value="<?=$price ?>">
                        <input style="background-color:red;" class="nut" type="submit" value="Đặt hàng" name="dathang">
                    </form>
                    <a href="index.php"> <input class="nut" type="submit" value="Xem thêm sản phẩm khac" name=""> </a>

                </div>
                <div class="uudai">
                    <h4> <strong> ƯU ĐÃI THÊM</strong></h4>
                    <p>✅ Giảm thêm tới 1% cho thành viên (áp dụng tùy sản phẩm)</p>
                    <p>✅ Bảo vệ toàn diện sản phâm với dịch vụ bảo hành mở rộng</p>
                    <p>✅ Giảm thêm 5% tối đa 500.000 đ cho thanh toán bằng Credivo</p>
                    <p>✅ Giảm thêm đến 300.000 đ cho đơn hàng từ 5 triệu đồng trở <br>
                        lên khi thanh toán qua VNPAY</p>
                    <p>✅ Giảm thêm 600.00 qua thẻ tín dụng JCB cho đơn hàng từ 10.000.000đ</p>
                    <p>✅ Thu cũ đổi mới: Giá thu cao - Thủ tục nhanh chóng - Trợ giá tốt nhất</p>
                </div>
            </div>
        </div>
        <!-- 3 div sp  -->
        <div class="sanpham">
            <div class="right">
                <h3><strong>Thông tin sản phẩm</strong></h3>
                <p>📱 Máy mới 100%, chính hãng Apple Việt Nam.</p>
                <p>🎁 iPhone 13 256GB cáp USB-C sang lightning</p>
                <p>🛡️ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất . Bảo hành 12 tháng tại trung tâm bảo hành chính
                    hãng
                    Apple
                    <a href="#" style="text-decoration: none;color: red;">xem chi tiêt</a>
                </p>
            </div>

            <div class="right">

                <h3><strong>Thông số kỹ thuật</strong></h3>
                <p>Kích thước màn hình: 6.1 inches</p>
                <p>Công nghệ màn hình : OLED</p>
                <p>Camera sau : Camera góc rộng: 12MP, f/1.6 Camera góc siêu rộng: 12MP, f/2.4 </p>
                <p>Kích thước màn hình: 6.1 inches</p>
                <p>Công nghệ màn hình : OLED</p>
                <p>Camera sau : Camera góc rộng: 12MP, f/1.6 Camera góc siêu rộng: 12MP, f/2.4 </p>
                <p>Kích thước màn hình: 6.1 inches</p>
                <p>Công nghệ màn hình : OLED</p>
                <p>Camera sau : Camera góc rộng: 12MP, f/1.6 Camera góc siêu rộng: 12MP, f/2.4 </p>


            </div>

        </div>
        <!-- end div full sp  -->
    </div>
</body>

</html>