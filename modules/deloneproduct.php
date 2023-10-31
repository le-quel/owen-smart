<?php
    session_start();
    ob_start();
   if(isset($_SESSION['cart'])){

   }array_shift($_SESSION['cart']);
   
   header('Location: ../index.php?act=giohang');
    
  
?>

   
