<?php

?>
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

<form action="admin.php?act=updateuser" method="post" onsubmit="return check();">
    <h1>CẬP NHẬT USER</h1>
    <label>Tên User</label>
    <input type="text" name="name" id="name" value="<?= $one[0]['name'] ?>"><br>
    <label>Password</label>
    <input type="password" name="password" id="password" value="<?= $one[0]['password'] ?>"><br>
    <label>Số điện thoại</label>
    <input type="text" name="phone" id="phone" value="<?= $one[0]['phone'] ?>"><br>
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?= $one[0]['email'] ?>"><br>
    <label>Địa chỉ</label>
    <input type="text" name="address" id="address" value="<?= $one[0]['address'] ?>"><br>
    <label for="">Loại user <select name="id_loaiuser" id="id_loaiuser">
            <option value="0">Chọn loại user</option>
            <?php
       
        if(isset($kq)){
            
            foreach($kq as $loai){
                echo '<option value="'.$loai['id'].'">'.$loai['nameloai'].'</option>';
            }
        } 
    ?>
        </select></label><br>

    <input type="hidden" name="id" value="<?=$one[0]['id'] ?>">
    <input type="submit" name="themmoi" value=" Thêm mới ">
</form>
</form>
<table border="1" style="color:black" ;>
    <tr>
        <th>STT</th>
        <th>TÊN</th>
        <th>PASSWORD</th>
        <th>SỐ ĐIỆN THOẠI</th>
        <th>EMAIL</th>
        <th>ĐỊA CHỈ</th>
        <th>ROLE</th>
        <th>HÀNH ĐỘNG</th>
    </tr>
    <?php   
       if(isset($user)&&(count($user)>0)){
        $i=1;
        foreach ($user as $value){
            echo ' <tr>
            <th>'.$i.'</th>
            <th>'.$value['name'].'</th>
            <th>'.$value['password'].'</th>
            <th>'.$value['phone'].'</th>
            <th>'.$value['email'].'</th>
            <th>'.$value['address'].'</th>
            <th>'.$value['nameloai'].'</th>
            <th><a href="admin.php?act=updateuser&id='.$value['id'].'">sửa</a> | <a href="admin.php?act=deluser&id='.$value['id'].'">Xóa</a></th>
        </tr>';
        $i++;
        }
       }
    ?>

</table>
<script>
function check() {
    var name = document.getElementById("name");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");

    // Check if any field is empty
    if (name.value.trim() === "" || password.value.trim() === "" || phone.value.trim() === "" || email.value.trim() ===
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