<?php
    $IdContato = $_GET["IdContato"];

    $saveSQL = "SELECT * FROM tbcontatos WHERE IdContato = {$IdContato}";

    $rs = mysqli_query($conexao, $saveSQL) or die("Não foi possivel fazer a consulta" . mysqli_error($conexao));

    $data = mysqli_fetch_assoc($rs);

?>


<h2>Editar Pessoa</h2>
<div>
    <form class="form-control" action="./index.php?menuop=atualizarPessoa" method="post">
    <div>
        <label for="IdContato">Identificação</label>
        <input type="text" name="IdContato" value=" <?= $data["IdContato"] ?>" readonly>
    </div>
    <div>
        <label for="Nome">Nome</label>
        <input type="text" placeholder="Username" name="Nome" id="username" value=" <?= $data["Nome"] ?>" pattern="[a-z\s]+$" />
    </div>
    <div>
        <label for="Telefone">Telefone</label>
        <input placeholder="(99) 99999-9999" class="form-control" type="text" id="telefone" name="Telefone" value=" <?= $data["Telefone"] ?>">
    </div>

    <div>
        <input type="submit" value="Atualizar" nome="Atualizar">
    </div>
    <script>
            $("#telefone").mask("(99) 99999-9999");
        </script>
    </form>
</div>
