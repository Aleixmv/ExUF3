<?php session_start() ?>
<?php if(isset($_SESSION['nombre']))
{

?>
	<?php echo 'Bienvenido $_SESSION['nombre']'?>
    <?php    
}else{
    header("Location: index.php");
}