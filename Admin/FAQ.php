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
    <h1>Add Frequently Asked Question</h1><br>
    <label>Add Question</label>
    <input type="text" name="que" class="form-control" required><br>
    <label>Add Answer</label>
    <input type="text" name="ans" class="form-control" required><br>
    <button type="submit" name="btn" class="btn btn-primary">Add </button>
</form>
</div>
<?php include("footer.php")?>
</body>
<?php
if (isset($_POST["btn"]))
{
    $que=$_POST["que"];
    $ans=$_POST["ans"];
 
    $sql="INSERT INTO `faq`( `Question`, `Answer`) VALUES ('$que','$ans')";
   if ( mysqli_query($conn,$sql) )
    {
        echo "<script>
        alert('Privacy & Policy Added Successfully!');
        window.location.href='Show_FAQ.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Privacy & Policy can't be created!');
        window.location.href='FAQ.php';
        </script>";
    }
}
?>
</body>
</html>