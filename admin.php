<?php
include "./adminfunc/headeradmin.php";
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
            
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $phone=$_POST['phone'];
                $password =$_POST['password'];
                $udn = all_user();
                $kt= ktuserdm($udn,$phone,$password);
                if($kt==1){
                    // cho đăng nhập admin
                    header('location: admin.php');
                }else if($kt==0){
                    // cho đăng nhập user
                    
                    $dssp = getnewproduct_2table();
                   header('location: index.php');
                }else{
                    echo "Số Điện thoại hoặc mật khẩu không đúng ! vui lòng đăng nhập lại !";
                  
                }
            } 
            include "./view/login.php";
            break;
        case 'giohang':
            include "view/giohang.php";
            break; 
 
        case 'danhmuc':
            $kq=getall_dm();
            include "view/danhmuc.php";
            break;
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendm=$_POST['tendm'];
                $uutien=$_POST['uutien'];
                $hienthi=$_POST['hienthi'];
                themdm($tendm,$uutien,$hienthi);
            }
            $kq=getall_dm();
           include "view/danhmuc.php";
                break;
        case 'updatedmform':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $kq1=getonedm($id);
            }
            if(isset($_POST['id'])){
                $id=$_POST['id'];
                $tendm=$_POST['tendm'];
                $uutien=$_POST['uutien'];
                $hienthi=$_POST['hienthi'];
                updatedm($id,$tendm,$uutien,$hienthi);
            }
            $kq=getall_dm();
            include "adminfunc/updatedmform.php";
            break;
        case 'deldm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                deldm($id);
            }
            $kq=getall_dm();
            include "view/danhmuc.php";
            break;   
            
    // end case danh mục 

    // case sản phẩm 
    case 'sanpham':
        $kq=getall_dm();
        $dssp = getnewproduct_2table();
        include "adminfunc/adsp.php";
            break; 
        case 'adspadd':
            if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $name=$_POST['name'];
                $price=$_POST['price'];
                $giacu= $_POST['giacu'];
                // if($_FILES['image']['name']!="") $image=$_FILES['image']['name']; else $image="";
              $target_dir = "./uploaded/";
              $target_file = $target_dir . basename($_FILES['image']['name']);
              $image=$target_file;
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
              if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg"
              && $imageFileType != "gif"){
                $uploadOk = 0;
              }
              move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                insert_sanpham($iddm,$name,$image,$price,$giacu);
            } 
            
            // load all danh mục 
            $kq=getall_dm();
            // loa all sản phẩm 
            
            // $dssp = getnewproduct();
            $dssp = getnewproduct_2table();
            include "adminfunc/adsp.php";
                break;
        case 'updatesp':

             // load all danh mục 
             $kq=getall_dm();

             $dssp = getnewproduct_2table();
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $iddm=$_POST['iddm'];
                $name=$_POST['name'];
                $price=$_POST['price'];
                $id=$_POST['id'];
                $giacu= $_POST['giacu'];
                if($_FILES['image']['name']!=""){
                    $target_dir = "./uploaded/";
              $target_file = $target_dir . basename($_FILES['image']['name']);
              $image=$target_file;
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
              if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg"
              && $imageFileType != "gif"){
                $uploadOk = 0;
              }
              move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
              updatesp($id,$name,$image,$price,$giacu,$iddm);
            } 
                }else{
                    $image="";
                
            }      
            if(isset($_GET['id'])&&($_GET['id']>0)){
                   $id=$_GET['id'];
                  
                     $kqsp=getonesp($_GET['id']);
                 }
            // $kqsp=getonesp($id);
            $dssp = getnewproduct_2table();
            // $dssp = getnewproduct();
          
            include "adminfunc/updatesp.php";
            break;
        case 'delsp':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                delsp($id);
            }
            $dssp = getnewproduct_2table();
            // $dssp = getnewproduct();
            include "adminfunc/adsp.php";
            break;   
// end case san phẩm 

// case user 
        case 'comment':
            $kq = getall_loaiuser();
            $user= getnewuser_2table();
            // $user=getall_user();
        
            include "view/comment.php";
            break;
        case 'user':
            $kq = getall_loaiuser();
            $user= getnewuser_2table();
            // $user=getall_user();
           
            include "view/user.php";
            break;
        case 'adduser':
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
            include "view/user.php";
            break;   
    case 'updateuser':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $one=getoneuser($id);
            }
            if(isset($_POST['id'])){
                $id =$_POST['id'];
                $name =$_POST['name'];
                $email =$_POST['email'];
                $address =$_POST['address'];
                $password =$_POST['password'];
                $phone =$_POST['phone'];
                $id_loaiuser =$_POST['id_loaiuser'];
                $kq = getall_loaiuser();
                updateuser($id,$name, $email, $address,$password,$phone,$id_loaiuser);
            }
            $kq = getall_loaiuser();
            $user= getnewuser_2table();
            // $user=getall_user();
            include "adminfunc/updateuser.php";
            break;   
        case 'deluser':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                deluser($id);
            }
            $kq = getall_loaiuser();
            $user= getnewuser_2table();
            // $user=getall_user();
            include "view/user.php";
            break;   
// end case user 
        default: 
        
    }
}
else if (isset($_GET['pg']) && $_GET['pg'] === 'productdetail' && isset($_GET['idproduct'])) {
    $idproduct = $_GET['idproduct'];
    $detail = get_product_detail($idproduct);
    include "./view/productdetail.php";

}
    else {
      
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendm=$_POST['tendm'];
                $uutien=$_POST['uutien'];
                $hienthi=$_POST['hienthi'];
                themdm($tendm,$uutien,$hienthi);
            }
            $kq=getall_dm();
            include "view/danhmuc.php";
                
}
   
    
?>