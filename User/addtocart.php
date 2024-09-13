<<<<<<< HEAD
<?php 
session_start();
if(isset($_SESSION["user_name"])){

}
else{
    header("location:../login/index.php");
}
=======
<?php
    session_start();
    if (isset($_SESSION["user_name"])) {
        # code...

    }
    else{
        header("location: ../login/index.php");
    }

>>>>>>> 59b89c26486c4d7202fe7e0cd92a06f227c1eee6

?>