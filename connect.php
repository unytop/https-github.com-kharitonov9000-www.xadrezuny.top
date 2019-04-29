<?php

$localhost="localhost";

$user="root";

$pass="";

$bd="formulario";

$connect=mysqli_connect("localhost","root","","formulario");

if (!$connect) {

	echo "error 4004";

	exit;

}

?>