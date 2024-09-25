<?php
include("../connection.php");
session_start();

    
    $u_id=$_SESSION["u_id"];
    $cart_id=implode(",",$_SESSION["mycart"]);
    $bill=$_SESSION["total"];
    $query="INSERT INTO `order_info`( `u_id`, `cart_id`, `Bill`) 
    VALUES ('$u_id','$cart_id','$bill')";
   if(mysqli_query($conn,$query))
   {
    unset($_SESSION["qty"]);
    unset($_SESSION["mycart"]);
    unset($_SESSION["total"]);
    $_SESSION["order_placed"]="Thabnk You For Placing An Order At Furni.".$_SESSION["u_name"]." We'll let you know when your odrder is out for Delivery";
  echo  "<script>
    window.location.href='shop.php'
    </script>";

   } 


?>