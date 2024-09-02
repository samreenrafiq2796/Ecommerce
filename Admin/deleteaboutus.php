<?php
include ("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `about_us` WHERE id = $i";

if(mysqli_query($conn,$q)){
    echo "<script>
    alert('about us deleted successfully');
    window.location.href='show_aboutus.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting about us');
    window.location.href='show_aboutus.php';
    </script>";
}

?>