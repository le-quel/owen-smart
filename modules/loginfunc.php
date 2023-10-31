<?php
require_once "./modules/connectdb.php";
include_once "./modules/connectdb.php";
  function all_user(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function ktuserdm($username,$password){
    $sql="Select * FROM user WHERE username=? and password=?";
    return pdo_query_one($sql, $username,$password);
   
}
// function get_user($id){
//     $sql="Select * FROM user WHERE id=?";
//     return pdo_query_one($sql, $id);
// }
    //    function all_user(){
    //     $conn= connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM user");
    //     $stmt->execute();   
        
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $udn=$stmt->fetchAll();
    //     return $udn;
    // }
    
    // function ktuserdm($udn,$phone,$password){
    //      xử lý hàm trả về gtri 0 nếu tồn tại số phone
    //     foreach ($udn as $value) {
    //         if((int)$phone==(int)$value['phone']&& $password==$value['password']){
    //             return $value['id_loaiuser'];
    //         }
    //     }
    //     return 2;
    // }
    // function checkformlogin($phone,$password){        
      
    
    //     if ($phone == "") {
    //         echo "Nhập số điện thoại";
    //     } else if ($password == "") {
    //         echo "Nhập Mật Khẩu";
    //     } else {
     
    //         $duplicateUser = false;
    //         $duplicatePass = false;
    //     }
    // }
?>