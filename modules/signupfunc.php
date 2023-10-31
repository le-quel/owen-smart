<?php
function  themuserdk($id,$name, $email, $address,$password,$phone,$id_loaiuser){
    try{
        $sql = "INSERT INTO user( name, email, address, password, phone, id_loaiuser) VALUES (?,?, ?, ?, ?, 2)";
        pdo_execute($sql,$name, $email, $address,$password,$phone,$id_loaiuser,);
        echo "Thêm user mới thành công";
    }catch (PDOException $e) {
        echo "Thêm thất bại! " . $e->getMessage();
    }
}

    // function get_user($id){
    //     $sql="Select * FROM user WHERE id=?";
    //     return pdo_query_one($sql, $id);
    // }
    //  function alluser(){
    //     $conn= connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM user");
    //     $stmt->execute();   
      
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $udk=$stmt->fetchAll();
    //     return $udk;
    // }
    // function ktuserdk($udk,$phone){
      
    //     foreach ($udk as $value) {
    //         if($phone==$value['phone']){
    //             return 0;
    //         }
    //     }
    //     return 1;
    // }
    // function themuserdk($name, $email, $address,$password,$phone) {
       
    //     try {
    //         $conn = connectdb();
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //          $sql = "INSERT INTO user(name, email, address,password,phone) VALUES( '$name', '$email', '$address','$password','$phone')";
    //         $conn ->exec($sql);
          
            
    //         echo " thành công";
           
    //         } catch (PDOException $e){
    //             echo "Thêm thất bại: " . $e->getMessage();
    //         }
    // }
   
?>