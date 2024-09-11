<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php";
    $id_ayi=$_GET["i"];
    $fetch_query =" Select * from privacy where id = $id_ayi";
    $run = mysqli_query($conn, $fetch_query);
    $convert_array = mysqli_fetch_array($run);
    ?>
        <div class="container">
<form action="" method="post">
    <h1>Update Privacy & Policy</h1><br>
    <textarea type="text" name="privacy" class="form-control" required><?php echo $convert_array[1];?></textarea><br>
    <button type="submit" name="btn" class="btn btn-primary">UPDATE </button>
</form>
</div>
<?php 
if(isset( $_POST["btn"])){
    $privacy =$_POST["privacy"];


  $update="UPDATE `privacy` SET `Description`='$privacy'WHERE id= $id_ayi";
  if(mysqli_query($conn,$update)){
    echo "<script>
    alert('Record Updated');
    window.location.href='ShowPrivacy.php';
    </script>";
  }
}
?>

    <?php include "footer.php";?>
</body>
</html>