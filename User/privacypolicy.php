<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php";?>
    <h1>Privacy & Policy</h1><hr>
    <?php
    
    $query="SELECT * FROM `privacy`";
    $result=mysqli_query($conn,$query);
 
    ?><ul>
    <?php
    while ( $data=mysqli_fetch_array($result)) {
        echo "<li>$data[1]</li>";
    }
    ?>
    </ul>
    <?php include "footer.php";?>
</body>
</html>