
<?php
$nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
$telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
if (!empty($nome | $telefone)) {
    $consultasql = "INSERT INTO tbcontatos (Nome, Telefone) VALUES  ('{$nome}', '{$telefone}')";
    mysqli_query($conexao, $consultasql) or die("Erro ao inserir" . mysqli_error($conexao));
    echo "O contato foi inserido na tabela com sucesso";
} else {
    echo "Erro ao inserir. Porfavor digite na forma certa";
}
switch ($menuop) {
    case 'insertPessoa':
        include("contatoCreate.php");
        break;
    default:
        include("./php/home/home.php");
        break;
}
?>