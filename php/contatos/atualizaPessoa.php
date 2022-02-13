<header>
    <h3>Atualizar Pessoa</h3>
</header>

<?php

$IdContato = mysqli_real_escape_string($conexao, $_POST["IdContato"]);
$Nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
$Telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);

$consultasql = "UPDATE tbcontatos SET Nome = '{$Nome}', Telefone = '{$Telefone}' WHERE IdContato = '{$IdContato}'";

mysqli_query($conexao, $consultasql) or die("Erro ao inserir" . mysqli_error($conexao));
echo "O contato foi atualizado na DataBase";

?>