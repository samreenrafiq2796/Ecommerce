<?php 
session_start();
if(isset($_SESSION["user_name"])){

}
else{
    header("location:../login/index.php");
}

?>