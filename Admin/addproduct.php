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
<form action="" method="post" enctype="multipart/form-data">
    <h1>Add Products</h1>
    <label>Enter a Product Name</label>
    <input type="text" name="product_name" class="form-control" required><br>
    <label>Enter a Product Price</label>
    <input type="text" name="product_price" class="form-control" required><br>
    <label>Enter a Product Detail</label>
    <input type="text" name="product_detail" class="form-control" required><br>
    <label>Select a Product Category</label>
<select name="product_category" id="" class="form-select">
    <option value="">Select Option</option>
    <?php
     
     $query="SELECT * FROM category";
     $result=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($result))
     {
         echo "<option value='$row[0]'>$row[1]</option>";
     }
    ?>
</select>
     <label>Select Image</label>
     <input type="file" name="pro_image" accept="image/*">
<br><br>

    <button type="submit" name="btn" class="btn btn-primary">Add Product</button>
</form>
</div>
<?php include("footer.php")?>
</body>
<?php
if (isset($_POST["btn"]))
{
    $product_name=$_POST["product_name"];
    $product_price=$_POST["product_price"];
    $product_detail=$_POST["product_detail"];
    $product_category=$_POST["product_category"];
    $image_name = $_FILES["pro_image"]["name"];
    $image_loc = $_FILES["pro_image"]["tmp_name"];
    $folder = "ProductImage/" . $image_name;
   
    $sql="INSERT INTO `product`(`Name`, `Price`, `Detail`, `Category`,`ProductImage`)
     VALUES ('$product_name','$product_price','$product_detail','$product_category','$folder')";
   if ( mysqli_query($conn,$sql) )
    {
        move_uploaded_file( $image_loc,$folder);
        echo "<script>
        alert('New Product created successfully');
        window.location.href='showproduct.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Product Can't be created!');
        window.location.href='addproduct.php';
        </script>";
    }
}
?>
</html>