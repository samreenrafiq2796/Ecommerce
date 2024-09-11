<?php
    session_start();
    if (isset($_SESSION["user_name"])) {
        # code...

    }
    else{
        header("location: ../login/index.php");
    }


?>