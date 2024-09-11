<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php";
    $id = $_GET["p"];
    $fetch_query = "select * from product where id=$id";
    $run = mysqli_query($conn,$fetch_query);
    $a = mysqli_fetch_array($run);
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img src="../Admin/<?php echo  $a[6]; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="mt-4"><?php echo $a[1];?></h3>
                <hr>
                <p>Rs. <?php echo $a[2];?></p>

                <p><?php echo $a[3];?></p>
                <a href="addtocart.php" class="btn btn-primary"> Add To Cart</a>
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>

    
</body>
</html>