<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("header.php") ?>
<div class="container">
<h1>Frequently Asked Question</h1>
<br>
<?php

$query="SELECT * FROM `faq`";
$result=mysqli_query($conn,$query);

?>
    <?php
    while ( $data=mysqli_fetch_array($result)) {
        echo "
        <h4>$data[1]</h4><hr>
        <p>$data[2]</p>
        ";
    }
    ?>
    </div>
<?php include("footer.php") ?>
</body>
</html>