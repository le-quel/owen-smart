<?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0))
{
    extract($_SESSION['s_user']);
    $userinfo=get_user($id);
    extract($userinfo);
}
?>

<div class="container">
    <div class="boxleft mr2pt menutrai">
        <h1>Dành cho bạn</h1><br><br>

        <a href="">Cập nhật thông tin</a>
        <a href="">Lịch sử mua hàng</a>
        <a href="">Thoát hệ thống</a>
    </div>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    form {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        padding: 20px;
        width: 500px;
    }

    h1 {
        color: #ff5733;
    }

    label {
        font-weight: 600;
    }

    input[type="text"],
    input[type="password"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-weight: 600;
        padding: 10px;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    table {
        background-color: #fff;
        border: 1px solid #ccc;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: white;
        color: black;
        font-weight: 600;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e0e0e0;
    }
    </style>

    <form action="index.php?act=myaccount" method="post" onsubmit="return check();">
        <h1>Trang cá nhân</h1>
        <label>Tên User</label>
        <input type="text" name="name" id="name" value="<?= $one[0]['name'] ?>"><br>
        <label>Password</label>
        <input type="text" name="password" id="password" value="<?= $one[0]['password'] ?>"><br>
        <label>Số điện thoại</label>
        <input type="text" name="phone" id="phone" value="<?= $one[0]['phone'] ?>"><br>
        <label>Email</label>
        <input type="text" name="email" id="email" value="<?= $one[0]['email'] ?>"><br>
        <label>Địa chỉ</label>
        <input type="text" name="address" id="address" value="<?= $one[0]['address'] ?>"><br>

        </select></label><br>
        <input type="hidden" name="id_loaiuser" value="2">
        <input type="hidden" name="id" value="<?=$one[0]['id'] ?>">
        <input type="submit" name="themmoi" value=" Cập nhật ">
    </form>
    <script>
    function check() {
        var name = document.getElementById("name");
        var password = document.getElementById("password");
        var phone = document.getElementById("phone");
        var email = document.getElementById("email");

        // Check if any field is empty
        if (name.value.trim() === "" || password.value.trim() === "" || phone.value.trim() === "" || email.value
            .trim() ===
            "") {
            alert("Vui lòng điền đầy đủ thông tin!");
            return false;
        }

        // Check if the password has at least 6 characters
        if (password.value.length < 6) {
            alert("Mật khẩu phải có ít nhất 6 ký tự.");
            password.focus();
            return false;
        }

        // Check if the phone number is numeric and 10 digits
        if (isNaN(phone.value) || phone.value.length !== 10) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập 10 chữ số.");
            phone.focus();
            return false;
        }

        // Check if the email is in a valid format
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(email.value)) {
            alert("Email không hợp lệ. Vui lòng nhập đúng định dạng.");
            email.focus();
            return false;
        }

        return true;
    }
    </script>