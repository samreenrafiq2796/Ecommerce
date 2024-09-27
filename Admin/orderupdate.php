<?php
include("../connection.php");
$id=$_GET["update"];
if($query=mysqli_query($conn,"UPDATE `order_info` SET `Status`='Order Confirmed' WHERE `ID`=$id"))
{
    echo
    "<script>
    alert('Order Has Been Confirmed');
    window.location.href='showorder.php';
    </script>";
}
?>