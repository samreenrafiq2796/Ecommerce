<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.php";
    $id=$_GET["b"];
    $fetch_query =" Select * from faq where id = $id_";
    $run = mysqli_query($conn, $fetch_query);
    $convert_array = mysqli_fetch_array($run);
    ?>

<div class="container">
<form action="" method="post">
    <h1>Update Frequently Asked Question</h1><br>
    <label>Add Question</label>
    <input type="text" name="que" class="form-control" value="<?php echo $convert_array[1];?>"required><br>
    <label>Add Answer</label>
    <input type="text" name="ans" class="form-control"value="<?php echo $convert_array[2];?>" required><br>
    <button type="submit" name="btn" class="btn btn-primary">Update </button>
</form>
</div>
<?php 
if(isset($_POST["btn"])){
    $Q = $_POST["que"];
    $A= $_POST["ans"];
  
    $update="UPDATE `faq` SET `Question`='$Q',`Answer`='$A', WHERE id = $id";
    if(mysqli_query($conn,$update)){
        echo "<script>
        alert('Record Updated');
        window.location.href='Show_FAQ.php';
        </script>";
      }
}
?>
<?php include "footer.php";?>
</body>
</html>