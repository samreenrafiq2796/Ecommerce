<?php
include("../connection.php");
$id=$_GET["update"];
if($query=mysqli_query($conn,"UPDATE `order_info` SET `Status`='Order Shipped' WHERE `ID`=$id"))
{
    echo
    "<script>
    alert('Order Has Been Shipped');
    window.location.href='dispatchorder.php';
    </script>";
}
?>