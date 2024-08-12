<?php
//Variables globales GET Y POST
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

echo "<h1> Hola $nombre $apellido</h1>";
echo '<h2>'.$_POST['nombre'].'</h2>';
echo 'Bienvendio a la página que recibe información del formulario'.'<br />';

var_dump($_POST)
?>
