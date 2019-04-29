<?php

include("connect.php");

include("index.php");

$nome=$_POST["nome"];

$sobrenome=$_POST["sobrenome"];

$email=$_POST["email"];

$senha=$_POST["senha"];

$confirmar_senha=$_POST["c_senha"];

$usuario=$_POST["nome_do_usuario"];

$sexo=$_POST["sexo"];

$foto=$_POST["foto"];

$nascimento=$_POST["nascimento"];

$liga="INSERT INTO registro(nome, sobrenome, email, senha, c_senha, nome_do_usuario, sexo, foto, nascimento) VALUES ('$nome','$sobrenome', '$email', '$senha', '$confirmar_senha', '$usuario', '$sexo','$foto', '$nascimento')";
$resultado= mysqli_query($connect, $liga);

?>