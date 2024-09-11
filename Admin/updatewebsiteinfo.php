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
    $fetch_query =" Select * from website_info where id = $id";
    $run = mysqli_query($conn,$fetch_query);
    $convert_array = mysqli_fetch_array($run);
    ?>

<div class="container">
<form action="" method="post">
    <h1> Update Website Info</h1><br>
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $convert_array[1];?>" required><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required><?php echo $convert_array[2];?> </textarea><br>
    <label>E-Mail</label>
    <input type="email" name="Mail" class="form-control" value="<?php echo $convert_array[3];?>"  required><br>
    <label>Phone Number</label>
    <input type="text" name="Number" class="form-control"value="<?php echo $convert_array[4];?>"  required><br>
    <label>Address</label>
    <input type="text" name="Address" class="form-control" value="<?php echo $convert_array[5];?>" required><br>
    <label>Facebook Link</label>
    <input type="url" name="Facebook" class="form-control" value="<?php echo $convert_array[6];?>" required><br>
    <label>Instagram Link</label>
    <input type="url" name="Instagram" class="form-control" value="<?php echo $convert_array[7];?>" required><br>
    <label>Timing</label>
    <input type="time" name="timing" class="form-control" required value="<?php echo $convert_array[8];?>" ><br> 
    <button type="submit" name="btn" class="btn btn-primary">Update </button>
</form>
</div>
<?php 
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $des= $_POST["description"];
    $email = $_POST["email"];
    $ph = $_POST["Number"];
    $add = $_POST["Address"];
    $fb = $_POST["Facebook"];
    $insta = $_POST["Instagram"];
    $timing = $_POST["timing"];

    $update="UPDATE `website_info` SET `Name`='$name ',`Description`='$des',
    `E-Mail`='$email',`Phone Number`='$ph',`Address`='$add',
    `Facebook Link`='$fb',`Insta Link`='$insta',
    `Timing`='$timing', WHERE id = $id";
    if(mysqli_query($conn,$update)){
        echo "<script>
        alert('Record Updated');
        window.location.href='Show_Website_Info.php';
        </script>";
      }
}
?>
<?php include "footer.php";?>
</body>
</html>