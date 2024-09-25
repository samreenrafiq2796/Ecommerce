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
    $q="SELECT * FROM `privacy` where ID= $id";
    $run=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($run);
    ?>
    <div class="container">
<form action="" method="post">
    <h1>Update Privacy Policy</h1><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required>
    <?php echo $row[1];?>
    </textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">Update</button>
</form>
</div>
    <?php
    include("footer.php");
    if(isset($_POST["btn"]))
    {
        $description=$_POST["description"];
        $query="UPDATE `privacy` SET `Description`='$description' WHERE `ID`=$id";
        if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Category updated successfully');
            window.location.href='ShowPrivacy.php';
            </script>";
        }
    }

    ?>
</body>
</html>