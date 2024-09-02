<?php
include ("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `faq` WHERE id = $i";

if (mysqli_query($conn, $q)) {
    echo "<script>
    alert('Qs&Ans deleted successfully');
    window.location.href='show_FAQ.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting Qs&Ans');
    window.location.href='show_FAQ.php';
    </script>";
}


?>