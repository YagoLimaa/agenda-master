<h3>Apagar Pessoa</h3>

<?php

    $IdContato = mysqli_real_escape_string($conexao, $_GET["IdContato"]);

    $consulta = "DELETE FROM tbcontatos WHERE IdContato = '{$IdContato}'";

    mysqli_query($conexao, $consulta) or die("Não foi possivel fazer a busca" . mysqli_error($conexao));
 

    echo "Pessoa apagada com sucesso";


?>