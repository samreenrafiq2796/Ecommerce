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
    <h1>Website Info</h1><br>
    <label>Name</label>
    <input type="text" name="name" class="form-control" required><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required></textarea><br>
    <label>E-Mail</label>
    <input type="email" name="Mail" class="form-control" required><br>
    <label>Phone Number</label>
    <input type="text" name="Number" class="form-control" required><br>
    <label>Address</label>
    <input type="text" name="Address" class="form-control" required><br>
    <label>Facebook Link</label>
    <input type="url" name="Facebook" class="form-control" required><br>
    <label>Instagram Link</label>
    <input type="url" name="Instagram" class="form-control" required><br>
    <label>Timing</label>
    <input type="time" name="timing" class="form-control" required><br>
    <button type="submit" name="btn" class="btn btn-primary">Add </button>
</form>
</div>
<?php include("footer.php")?>
</body>
<?php
if (isset($_POST["btn"]))
{
    $name=$_POST["name"];
    $description=$_POST["description"];
    $Mail=$_POST["Mail"];
    $Number=$_POST["Number"];
    $Address=$_POST["Address"];
    $Facebook=$_POST["Facebook"];
    $Instagram=$_POST["Instagram"];
    $timing=$_POST["timing"];

    $sql="INSERT INTO `website_info`(`Name`, `Description`, `E-Mail`, `Phone Number`, `Address`, `Facebook Link`, `Insta Link`, `Timing`)
     VALUES ('$name','$description','$Mail','$Number','$Address','$Facebook','$Instagram','$timing')";
   if ( mysqli_query($conn,$sql) )
    {
        echo "<script>
        alert('Privacy & Policy Added Successfully!');
        window.location.href='show_Website_Info.php';
        </script>";
    } 
    else
    {
        echo "<script>
        alert('Privacy & Policy can't be created!');
        window.location.href='Website_Info.php';
        </script>";
    }
}
?>
</body>
</html>
