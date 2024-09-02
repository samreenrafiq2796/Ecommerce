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
    <h1>Add Privacy & Policy</h1><br>
    <textarea type="text" name="privacy" class="form-control" required></textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">Add </button>
</form>
</div>
<?php include("footer.php")?>
</body>
<?php
if (isset($_POST["btn"]))
{
    $privacy=$_POST["privacy"];
    $conn=mysqli_connect("localhost","root","","ecommerce");
    $sql="INSERT INTO `privacy`(`Description`)
     VALUES ('$privacy')";
   if ( mysqli_query($conn,$sql) )
    {
        echo "<script>
        alert('Privacy & Policy Added Successfully!');
        window.location.href='showprivacy.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Privacy & Policy can't be created!');
        window.location.href='Privacy.php';
        </script>";
    }
}
?>
</body>
</html>