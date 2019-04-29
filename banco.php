<?php
$localhost='127.0.0.1';
$username='root';
$password='';
$bd='formulario';
$ligada=mysqli_connect($localhost, $username, $password, $bd);
if (!$ligada) {
	echo "<h1>ERROR 404 DATABASE NÃO ENCONTRADA</h1>";
	exit;
}
?>