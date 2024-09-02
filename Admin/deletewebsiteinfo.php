<?php
include ("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `website_info` WHERE id = $i";

if (mysqli_query($conn, $q)) {
    echo "<script>
    alert('website info deleted successfully');
    window.location.href='show_Website_info.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting website info ');
    window.location.href='show_Website_info.php';
    </script>";
}







?>