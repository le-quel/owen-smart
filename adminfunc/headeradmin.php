<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
</head>
<style>
header {
    background-color: WHITE;
    position: fixed;
    top: 0;
    z-index: 10;
    height: 100px;

}

.menu {
    text-align: center;
}

.menucon {
    margin: 7px;
    width: 150px;
    height: 20px;
    border-radius: 10px;
    padding: 10px;
    background-color: rgba(255, 114, 114, 0.996);
    text-decoration: none;
    color: black;
    font-size: 15px;


}

.end-header {
    padding-top: 100px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: 10px;
    row-gap: 10px;
    margin: 20px auto;
    background-color: white;

}

h1 {
    text-align: center;
}
</style>

<body>
    <div id="container">
        <header>
            <br>
            <h1>TRANG QUẢN LÍ CỦA ADMIN </h1><br>

            <div class="menu">

                <a class="menucon" href="admin.php?act=danhmuc"><i class="fa-solid fa-bars"></i> Danh mục</a>
                <a class="menucon" href="admin.php?act=sanpham"><i class="fa-solid fa-location-dot"></i> Quản lý sản
                    phẩm</a>
                <a class="menucon" href="admin.php?act=user"><i class="fa-solid fa-phone-volume"></i> Quản lý user</a>

                <a class="menucon" href="admin.php?act=conmment"><i class="fa-solid fa-location-dot"></i> Quản lý bình
                    luận</a>
                <!-- <a class="menucon" href="adminfunc.php?act=giohang"><i class="fa-solid fa-cart-plus"></i> Giỏ Hàng</a> -->
                <?php 
                        if(isset($_SSESION['username'])&&($_SESSION['username']!="")){
                            echo '<a class="menucon" href="index.php?act=dangky"><i class="fa-solid fa-user"></i> Đăng Ký</a>';
                        }else{

                        
                    ?>
                <a class="menucon" href="index.php?act=dangky"><i class="fa-solid fa-user"></i> Đăng Ký</a>
                <a class="menucon" href="index.php?act=dangnhap"><i class="fa-solid fa-user"></i> Đăng nhập</a>
                <?php
                            } 
                        ?>
            </div>
        </header>
        <!-- menu bên trái  -->
        <div class="end-header">
            <div class="menu-left">
                <!-- <ul>
               <li><a href=""><i class="fa-solid fa-mobile-screen"></i> Điện thoại, Tablet</a></li>
               <li><a href=""><i class="fa-solid fa-laptop"></i> Laptop</a></li>
               <li><a href=""><i class="fa-solid fa-headphones-simple"></i> Âm thanh</a></li>
               <li><a href=""><i class="fa-solid fa-house-signal"></i> Nhà Thông Minh</a></li>
               <li><a href=""><i class="fa-regular fa-keyboard"></i> Phụ Kiện</a></li>
               <li><a href=""><i class="fa-solid fa-desktop"></i> PC, Màn Hình</a></li>
               <li><a href=""><i class="fa-solid fa-tv"></i> Tivi</a></li>
               <li><a href=""><i class="fa-solid fa-mobile-screen-button"></i> Thu cũ đổi mới</a></li>
               <li><a href=""><i class="fa-solid fa-laptop-code"></i> Hàng cũ</a></li>
               <li><a href=""><i class="fa-solid fa-bullhorn"></i> Kuyến Mãi</a></li>
               <li><a href=""><i class="fa-solid fa-comment-dots"></i> Tin Công Nghệ</a></li>
            </ul>
        </div> -->
                <!-- banner giữa  -->
                <div class="banner-center">
                    <!-- <img src="./img/banner-center.webp" alt="">
            <img src="./img/slideshowao.png" width="690px" alt=""> -->
                </div>
                <!-- bannner right  -->
                <div class="banner-right" style="margin: 10px;">
                    <!--           
            <img  src="./img/banner-right1.webp" width="280px" height="100px" alt="">
            <img src="./img/banner-right2.webp" width="280px" height="100px" alt="">
            <img src="./img/banner-right3.webp"  width="280px" height="100px" alt=""> -->
                </div>
                <!-- div banner  -->
            </div>
            <!-- <img src="img/banner-next2.webp" alt="">
    <img src="./view/img/banner3.png" width="100%" alt=""> -->

            <!-- main  -->


        </div>


</body>

</html>