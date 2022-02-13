<?php
include("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("A conexão falhou" . mysqli_connect_error());
?>