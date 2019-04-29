<?php
include_once('banco.php');

include "index.php";

$email=$_POST['email'];

$senha=$_POST['senha'];

$lili="INSERT INTO login(email, senha) VALUES ('$email', '$senha')";

$sei=mysqli_query($ligada, $lili);

?>