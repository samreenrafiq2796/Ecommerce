<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  include "header.php"; 
        $id_ayi = $_GET["i"];
        $fetch_query = "select * from about_us where id = $id_ayi";
        $run = mysqli_query($conn, $fetch_query);
        $convert_array = mysqli_fetch_array($run);
    ?>

<div class="container">
<form action="" method="post">
    <h1>Update About Us</h1><br>
    <label>Title</label>
    <input type="text" name="title" class="form-control" 
    value="<?php echo $convert_array[1]; ?>" required><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required>
    <?php echo $convert_array[2]; ?>  
    </textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">Update </button>
</form>
</div>



<?php
    if (isset($_POST["btn"])) {
       $t = $_POST["title"];
       $des = $_POST["description"];

       $update ="UPDATE `about_us` SET 
       `Title`='$t',
       `Description`='$des' WHERE id = $id_ayi";
       if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Record Updated');
                window.location.href='show_aboutus.php';
        </script>";
       }

    }


?>

    <?php include "footer.php";   ?>

</body>
</html>