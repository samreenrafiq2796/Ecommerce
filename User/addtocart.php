<?php
// 3
        session_start();
        if (isset($_GET["btn"])) {
            $id= $_GET["pro_id"];
            $quant= $_GET["qty"];
            if (in_array($id, $_SESSION["mycart"])) {
               $_SESSION["product_already_added"] = "Product Already Added";
            }
            else{
                array_push($_SESSION["mycart"],$id);
                array_push($_SESSION["qty"],$quant);
                $_SESSION["msg"] = "Product Added Successfully";
            }
            header("location: shop.php");
        }
        else{
            header("location: shop.php");
        }

?>