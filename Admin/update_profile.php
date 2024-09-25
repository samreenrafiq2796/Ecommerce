<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php");
    $id=$_SESSION["ID"];
    $q="SELECT * FROM `user` where id= $id";
    $r=mysqli_query($conn,$q);
    $data=mysqli_fetch_array($r);
    ?>
    <div class="container">
        <h1>Update Profile</h1>
        <form action="" method="post">
            <label>Name</label><br>
            <input type="text" name="name" class="form-control" value="<?php echo $data[1]?>"><br>
            <label>E-Mail</label><br>
            <input type="email" name="mail" class="form-control" value="<?php echo $data[2]?>"><br>
            <label>Password</label><br>
            <input type="password" name="password" class="form-control" value="<?php echo $data[3]?>"><br>
            <label>Gender</label><br>
            <input type="text" name="gender" class="form-control" value="<?php echo $data[4]?>"><br>
            <label>Phone Number</label><br>
            <input type="text" name="number" class="form-control" value="<?php echo $data[5]?>"><br>
            <label>Address</label><br>
            <input type="text" name="address" class="form-control" value="<?php echo $data[6]?>"><br><br>

            <button type="submit" class="btn btn-primary btn-block"  name="btn">Update Profile</button>
        </form>
        <?php
        if(isset($_POST["btn"]))
        {
        $name=$_POST["name"];
        $mail=$_POST["mail"];
        $password=$_POST["password"];
        $gender=$_POST["gender"];
        $number=$_POST["number"];
        $address=$_POST["address"];
        $query="UPDATE `user` SET `Name`='$name',
        `EMail`='$mail',`Password`='$password',
        `Gender`='$gender',`Phone`='$number',
        `Address`='address' WHERE `Id`=$id";
        if (mysqli_query($conn,$query)) {
            echo    "<script>
                    alert('Profile Updated, Login Again');
                    window.location.href='logout.php'
                    </script>";
        } else {
            echo    "<script>
            alert('Profile Not Updated');
            </script>";
        }
    }
        ?>
    </div>
    <?php include("footer.php");?>
</body>
</html>