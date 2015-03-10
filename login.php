<?php
require_once 'class_login/login.class.php';
$nuevoSingleton = Login::singleton_login();
if(isset($_POST['nick']))
{
    $nick = $_POST['nick'];
    $password = $_POST['password'];
    $usuario = $nuevoSingleton->login_users($nick,$password);
    
    if($usuario == TRUE)
    {
        header("Location:home.php");
    }
}
?>