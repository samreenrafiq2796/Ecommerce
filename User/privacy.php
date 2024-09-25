<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
        <h1>Privacy & Policy</h1>
        <p>This is the privacy policy of our website. Please read it carefully before using our services.</p><br>
    </div>
    <?php
    $q="SELECT * FROM `privacy`";
    $r=mysqli_query($conn,$q);
    while($data=mysqli_fetch_array($r))
    {
        echo "<div class='container'>
        <ul><li>$data[1]</li></ul>
        </div>";
    }
    ?>
    <?php include("footer.php");  ?>
</body>

</html>