<?php
    session_start();
    ob_start();
   if(isset($_SESSION['cart'])){

   }unset($_SESSION['cart']);

   header('Location: ../index.php?act=giohang');
    
  
?>

   
