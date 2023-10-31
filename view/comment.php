<?php
    $one = []; // Khởi tạo một mảng rỗng để tránh lỗi khi không có dữ liệu
    if(isset($one[0]['name'])) {
        $name = $one[0]['name'];
    } else {
        $name = ''; // Giá trị mặc định nếu không có dữ liệu
    }
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


<form action="admin.php?act=adduser" method="post">
    <h1>Quản lý bình luận</h1>
    <label>Tên User</label>
    <input type="text" name="name" id="" value=""><br>
    <label>Password</label>
    <input type="password" name="password" id="" value=""><br>
    <label>Số điện thoại</label>
    <input type="text" name="phone" id="" value=""><br>
    <label>Email</label>
    <input type="text" name="email" id="" value=""><br>
    <label>Địa chỉ</label>
    <input type="text" name="address" id="" value=""><br>
    <label for="">Loại user <select name="id_loaiuser" id="">
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
<table border="1" style="color:black; width:1100px" ;>
    <tr>
        <th>STT</th>
        <th>TÊN</th>
        <th>PASSWORD</th>
        <th>SỐ ĐIỆN THOẠI</th>
        <th>GMAIL</th>
        <th>ĐỊA CHỈ</th>
        <th>id_loaiuser</th>
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