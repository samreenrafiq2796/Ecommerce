<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php");
    $id=$_GET["update"];
    $q="SELECT * FROM `website_info` where ID= $id";
    $run=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($run);
    ?>
     <div class="container">
<form action="" method="post">
    <h1>Update Website Info</h1><br>
    <label>Name</label>
    <input type="text" name="name" class="form-control" required value="<?php echo $row[1];?>"><br>
    <label>Description</label>
    <textarea type="text" name="description" class="form-control" required value="<?php echo $row[2];?>"></textarea><br>
    <label>E-Mail</label>
    <input type="email" name="Mail" class="form-control" required value="<?php echo $row[3];?>"><br>
    <label>Phone Number</label>
    <input type="text" name="Number" class="form-control" required value="<?php echo $row[4];?>"><br>
    <label>Address</label>
    <input type="text" name="Address" class="form-control" required value="<?php echo $row[5];?>"><br>
    <label>Facebook Link</label>
    <input type="url" name="Facebook" class="form-control" required value="<?php echo $row[6];?>"><br>
    <label>Instagram Link</label>
    <input type="url" name="Instagram" class="form-control" required value="<?php echo $row[7];?>"><br>
    <label>Timing</label>
    <input type="time" name="timing" class="form-control" required value="<?php echo $row[8];?>"><br>
    <button type="submit" name="btn" class="btn btn-primary">Update </button>
</form>
</div>
    <?php
    include("footer.php");
    if(isset($_POST["btn"]))
    {
        $name=$_POST["name"];
        $description=$_POST["description"];
        $Mail=$_POST["Mail"];
        $Number=$_POST["Number"];
        $Address=$_POST["Address"];
        $Facebook=$_POST["Facebook"];
        $Instagram=$_POST["Instagram"];
        $timing=$_POST["timing"];
        $query="UPDATE `website_info` SET `Name`='$name',`Description`='$description',`E-Mail`='$Mail',`Phone Number`='$Number',
        `Address`='$Address',`Facebook Link`='$Facebook',`Insta Link`='$Instagram',`Timing`='$timing' WHERE `ID`=$id";
        if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Website Info updated successfully');
            window.location.href='Show_Website_Info.php';
            </script>";
        }
    }

    ?>
</body>
</html>