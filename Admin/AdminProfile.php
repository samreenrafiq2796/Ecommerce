<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ("header.php");
    $id = $_SESSION["id"];
    $q = "SELECT * FROM `user` where id = $id";
    $r = mysqli_query($conn,$q);
    $d = mysqli_fetch_array($r);
    ?>

    <h2>Admin Profile</h2>
<hr>

<form action="" method="post" class="container">
    <input type="text" name="name" id="" class="form-control" value="<?php echo $d[1]; ?>"><br>
    <input type="email" name="email" id="" class="form-control" value="<?php echo $d[2]; ?>"><br>
    <input type="password" name="pswd" id="" class="form-control" value="<?php echo $d[3]; ?>"><br>
    <input type="text" name="gender" id="" class="form-control" value="<?php echo $d[4]; ?>"><br>
    <input type="text" name="number" id="" class="form-control" value="<?php echo $d[5]; ?>"><br>
    <input type="text" name="add" id="" class="form-control" value="<?php echo $d[6]; ?>"><br>


    <button type="submit" class="btn btn-primary" name="btn">Update Profile</button>
</form>


<?php
    if (isset($_POST["btn"])) {
        $a = $_POST["name"];
        $b = $_POST["email"];
        $c = $_POST["pswd"];
        $d = $_POST["gender"];
        $e = $_POST["number"];
        $f = $_POST["add"];

        $update_query = "UPDATE `user` SET 
        `Name`='$a',
        `Email`='$b',`password`='$c',
        `Gender`='$d',`PhoneNumber`='$e',
        `Address`='$f' WHERE id = $id";

        if(mysqli_query($conn, $update_query)){
           echo "<script>
           alert('Profile Update, Login Again');
           window.location.href='logout.php';
           </script>";
        }
        else{
            echo "<script>
            alert('Profile Not Update, Try Again');
           
            </script>";
        }

    }
?>


    <?php include ("footer.php");?>

</body>
</html>