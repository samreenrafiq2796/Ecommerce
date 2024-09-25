<?php
    session_start();
        include "../connection.php";
    $u_id= $_SESSION["u_id"];
  
    $cart_id = implode(",",$_SESSION["mycart"]);

    $bill = $_SESSION["total_price"];


    $insert = " INSERT INTO `order_tbl`( `Cart_id`, `User_id`, `Bill`) 
    VALUES ('$cart_id','$u_id','$bill')";
    if (mysqli_query($conn, $insert)) {
        unset($_SESSION["qty"]);
        unset($_SESSION["mycart"]);
        unset($_SESSION["total_price"]);
        $_SESSION["order_placed"] = "Thank you for placing an order at Falana Dhimaka, ". $_SESSION["u_name"] ." We’ll let you know when your Order is on its way. ";
        echo '<script>
        window.location.href="shop.php"
        </script>';
      

    }

?>