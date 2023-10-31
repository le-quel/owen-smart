<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    table th {
        background-color: #f2f2f2;
        font-weight: bold;
        color: #333;
    }

    table td img {
        max-width: 100px;
        height: auto;
    }

    /* Định dạng các nút và liên kết */
    .nut {
        text-decoration: none;
        color: #007bff;
        transition: color 0.3s;
    }

    .nut:hover {
        color: #0056b3;
    }

    /* CSS cho tổng đơn hàng */
    td[colspan="5"] {
        text-align: right;
        font-weight: bold;
    }

    td[colspan="5"]:last-child {
        background-color: #ccc;
        font-size: 18px;
    }

    /* Định dạng nút đặt hàng và xóa giỏ hàng */
    .form h3 {
        text-align: center;
        margin-top: 20px;
    }

    .form .nut {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin: 10px;
        transition: background-color 0.3s;
    }

    .form .nut:hover {
        background-color: #0056b3;
    }

    /* Định dạng nút xóa */
    table td .nut {
        color: red;
        text-decoration: underline;
        cursor: pointer;
        transition: color 0.3s;
    }

    table td .nut:hover {
        color: #ff5733;
    }
    </style>
</head>

<body>
    <div id="container">

        <?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
    if(isset($_SESSION['cart'])){
        // echo var_dump($_SESSION['cart']);
      
    } else {
        echo "Giỏ hàng trống.";
    }
}
?>
        <div class="form">
            <div class="boxcenter">
                <h1 style="text-align:center; color:red;">Đơn hàng của bạn</h1>
                <table border="1px" style="width:1200px; ">
                    <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>thanh tien</th>
                        <th>Xóa</th>
                    </tr>
                    <?php
    $tong=0;
    $i=0;
        foreach ($_SESSION['cart'] as $sp) {
            $ttien=$sp[3]*$sp[4];
            $tong+=$ttien;
            // đọc phần tử mảng theo vị trí 
            echo '<tr>
            <td>'.($i+1).'</td>
        
            <td><img src="'.$sp[2].'" width="100"></td>.
            <td>'.$sp[1].'</td>
            <td>'.number_format($sp[3], 0 , ',' , '.').' VNĐ</td>
            <td>'. $sp[4].'</td>
            <td>'. number_format($ttien, 0 , ',' , '.') .' VNĐ</td>
            
            <td style="text-align:center;"> <a class="nut" href="./modules/deloneproduct.php">xóa</a></td>
    
        </tr>';
        $i++;
        }
    ?>

                    <tr>
                        <td colspan="5">Tổng đơn hàng</td>
                        <!-- tính tổng  -->
                        <td style="background-color:#ccc;"><?=number_format( $tong, 0 , ',' , '.');?> VNĐ</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <?php
      echo '<br><h3 style="color:red;"> Bạn có muốn tiếp tục đặt hàng không <a class="nut" href="./index.php">Đặt hàng <a/></h2>';
      echo '<h3 style="color:red;"> <a class="nut" href="./modules/deletecart.php">Xóa giỏ hàng <a/></h2>';  
    ?>