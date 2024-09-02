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
<form action="" method="post">
    <h1>Add About Us</h1><br>
    <label>Title</label>
    <input type="text" name="title" class="form-control" required><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required></textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">Add </button>
</form>
</div>
<?php include("footer.php")?>
</body>
<?php
if (isset($_POST["btn"]))
{
    $title=$_POST["title"];
    $description=$_POST["description"];
 
    $sql="INSERT INTO `about_us`(`Title`, `Description`) VALUES ('$title','$description')";
   if ( mysqli_query($conn,$sql) )
    {
        echo "<script>
        alert('Privacy & Policy Added Successfully!');
        window.location.href='show_aboutus.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Privacy & Policy can't be created!');
        window.location.href='aboutus.php';
        </script>";
    }
}
?>
</body>
</html>