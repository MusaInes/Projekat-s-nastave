<?php
session_start();

if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

    if($_REQUEST['password']=="admin")
    {
        $_SESSION['username']=$_REQUEST['username'];
        echo "Login success";
        header("Location: loginForm.php");
    }

}