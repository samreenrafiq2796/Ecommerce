<?php
include("../connection.php");
$id=$_GET["update"];
if($query=mysqli_query($conn,"UPDATE `order_info` SET `Status`='Order Dispatched' WHERE `ID`=$id"))
{
    echo
    "<script>
    alert('Order Has Been Dispatched');
    window.location.href='confirmorder.php';
    </script>";
}
?>