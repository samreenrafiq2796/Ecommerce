<?php
    include("../connection.php");

    $i = $_GET["a"];
    $q = "DELETE FROM `privacy` WHERE `ID` = $i";


   if (mysqli_query($conn, $q)) {
    echo "<script>
    alert('Data deleted successfully');
    window.location.href='showprivacy.php';
    </script>";
} else {
    echo "<script>
    alert('Error deleting data');
    window.location.href='showprivacy.php';
    </script>";
}


?>