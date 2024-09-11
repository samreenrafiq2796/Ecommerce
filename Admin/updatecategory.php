<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.php";
    $id=$_GET["a"];
    $fetch_query =" Select * from category where id = $id";
    $run = mysqli_query($conn, $fetch_query);
    $convert_array = mysqli_fetch_array($run);
    ?>

<div class="container">
<form action="" method="post">
    <h1>Update Category</h1>
    <label>Enter a Category Name</label>
    <input type="text" name="category_name" class="form-control"value="<?php echo $convert_array[1];?>" required><br>
    <button type="submit" name="btn" class="btn btn-primary">Update</button>
</form>
</div>
<?php 
if(isset($_POST["btn"])){
    $name = $_POST["category_name"];
   

    $update="UPDATE `category` SET Name='$name'  WHERE id = $id";
    if(mysqli_query($conn,$update)){
        echo "<script>
        alert('Record Updated');
        window.location.href='showcategory.php';
        </script>";
      }
}
?>
<?php include "footer.php";?>
</body>
</html>