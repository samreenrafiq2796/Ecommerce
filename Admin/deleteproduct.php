
<?php
include ("../connection.php");

$i = $_GET["a"];

$q = "DELETE FROM `product` WHERE id = $i";

if (mysqli_query($conn, $q)) {
    echo "<script>
    alert('Product deleted successfully');
    window.location.href='showproduct.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting product');
    window.location.href='showproduct.php';
    </script>";
}


?>