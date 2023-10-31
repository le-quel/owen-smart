<?php
session_start();
ob_start();

include "./view/header.php";
include_once "./modules/connectdb.php";
include_once "./adminfunc/sanpham.php";
include "./adminfunc/danhmuc.php";
include "./adminfunc/user.php";
connectdb();
include './modules/addtocart.php';
include './modules/signupfunc.php';
include './modules/loginfunc.php';


if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dangnhap':
        
            include "view/login.php";
            break;
        case 'logout':
            if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0))
            {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
            break;
        case 'login':
            if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                $name=$_POST["name"];
                $password=$_POST["password"];
                
                // xử lý
                
                $kq=checkuser($name,$password);

                var_dump($kq);
                if (is_array($kq)&&(count($kq))) {
                    $_SESSION['s_user']=$kq;
                    header('location: index.php');
                }else{
                    $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai";
                    $_SESSION['tb_dangnhap']=$tb;
                    header('location: index.php?act=dangnhap');
                }
                
            }
            break;
            case 'myaccount':
                $one=getoneuser($id);
                // if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0))
                // {
                //     include "view/myaccount.php";
                // }
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    
                }
                if(isset($_POST['id'])){
                    $id =$_POST['id'];
                    $name =$_POST['name'];
                    $email =$_POST['email'];
                    $address =$_POST['address'];
                    $password =$_POST['password'];
                    $phone =$_POST['phone'];
                    $id_loaiuser =$_POST['id_loaiuser'];
                    
                    updateuser($id,$name, $email, $address,$password,$phone,$id_loaiuser);
                }
              
                // $user=getall_user();
                include "view/myaccount.php";
                break;   
            
          
        
        case 'giohang':
            
            include "view/giohang.php";
            break; 
            case 'dangky':
                include "view/signup.php";
                break; 
            case 'adddk':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id =$_POST['id'];
                    $name =$_POST['name'];
                    $email =$_POST['email'];
                    $address =$_POST['address'];
                    $password =$_POST['password'];
                    $phone =$_POST['phone'];
                    $id_loaiuser =$_POST['id_loaiuser'];
                    $kq = getall_loaiuser();
                    themuser($id,$name, $email, $address,$password,$phone,$id_loaiuser);
                }
                $kq = getall_loaiuser();
                $user= getnewuser_2table();
                //   $user=getall_user();
                
                include "view/login.php";
              
                break;
            
     

        default: 
        $dssp = getnewproduct_2table();
        include "./view/mainsanpham.php";
            break;
    }
}
else if (isset($_GET['pg']) && $_GET['pg'] === 'productdetail' && isset($_GET['idproduct'])) {
    
    $idproduct = $_GET['idproduct'];
    $detail = get_product_detail($idproduct);
    include "./view/productdetail.php";

}
    else {
        $dssp = getnewproduct_2table();
        include "./view/mainsanpham.php";
}
    include "./view/footer.php";
    
?>