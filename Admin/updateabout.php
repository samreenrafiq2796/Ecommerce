<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php");
    $id=$_GET["update"];
    $q="SELECT * FROM `about_us` where ID= $id";
    $run=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($run);
    ?>
    <div class="container">
<form action="" method="post">
    <h1>Update About Us</h1><br>
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $row[1];?>" required><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required>
    <?php echo $row[2];?>
    </textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">Update </button>
</form>
</div>
    <?php
    include("footer.php");
    if(isset($_POST["btn"]))
    {
        $T=$_POST["title"];
        $des=$_POST["description"];
        $query="UPDATE `about_us` SET `Title`='$T',`Description`='$des' WHERE `ID`=$id";
        if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('About Us updated successfully');
            window.location.href='show_aboutus.php';
            </script>";
        }
    }

    ?>
</body>
</html>