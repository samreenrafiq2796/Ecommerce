
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("header.php")?>
<div class="container">
<form action="" method="post">
    <h1>Add Category</h1>
    <label>Enter a Category Name</label>
    <input type="text" name="category_name" class="form-control" required><br>
    <button type="submit" name="btn" class="btn btn-primary">Add</button>
</form>
</div>
<?php include("footer.php")?>
</body>
</html>
<?php
if (isset($_POST["btn"]))
{
    $category_name=$_POST["category_name"];

    $sql="INSERT INTO `category`(`Name`) VALUES ('$category_name')";
   if ( mysqli_query($conn,$sql) )
    {
        echo "<script>
        alert('New Category created successfully');
        window.location.href='showcategory.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Category Can't be created!');
        window.location.href='category.php';
        </script>";
    }
}

// window.location.href='category.php';




?>
