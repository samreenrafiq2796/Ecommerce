<?php
include("../connection.php");
$Id=$_GET["delete"];
$query="DELETE FROM `about_us` WHERE `ID`='$Id'";
mysqli_query($conn,$query);
echo "<script>
        alert('Data Deleted Successfully');
        window.location.href='show_aboutus.php';
    </script>";
?>