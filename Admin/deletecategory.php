<?php
include ("../connection.php");

$i = $_GET["a"];

$q = "DELETE FROM `category` WHERE `ID` = $i";

if (mysqli_query($conn, $q)) {
    echo "<script>
    alert('Category deleted successfully');
    window.location.href='showcategory.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting category');
    window.location.href='showcategory.php';
    </script>";
}


?>