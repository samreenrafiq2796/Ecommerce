<?php
include("../connection.php");
$Id=$_GET["delete"];
$query="DELETE FROM `faq` WHERE `ID`='$Id'";
mysqli_query($conn,$query);
echo "<script>
        alert('Data Deleted Successfully');
        window.location.href='Show_FAQ.php';
    </script>";
?>