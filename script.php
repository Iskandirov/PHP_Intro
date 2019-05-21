<?php
$error = array();
$is_valid_email=true;
if($_SERVER['REQUEST_METHOD']=="POST") {
    $email='';
    if(isset($_POST['txtEmail']) and !empty($_POST['txtEmail'])) {
        $email=$_POST['txtEmail'];
    }
    else 
    {
        $is_valid_email=false;
        $error['email']="Поле пошта є обов'язковим";
    }

    if(count($error)==0)
    {
        header("Location: /index.php");
        exit;
    }
    //echo "<h1>Request POST ".$email."</h1>";
}
?>