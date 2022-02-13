<header>
    <h4>Lista de contatos cadastrados</h4>
</header>
<section>
    <div class="container">
        <div>
            <a class="center" href="./index.php?menuop=contatoCreate">Adicione Novo contato</a>
        </div>
        <div id="table-container" class="container-sm">
            <table class="table table-hover table-dark table-hover table table-bordered border-primary ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Editar Pessoa</th>
                        <th>Apagar Pessoa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $paginas = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                    $quantasPG = 10;
                    $comeco = ($quantasPG * $paginas) - $quantasPG;
                    $contatosdb = "SELECT * FROM tbcontatos LIMIT $comeco, $quantasPG";
                    $rs = mysqli_query($conexao, $contatosdb) or die("Não foi possivel consultar" . mysqli_error($conexao));
                    while ($data = mysqli_fetch_assoc($rs)) {

                    ?>
                        <tr>
                            <td><?= $data["IdContato"] ?> </td>
                            <td><?= $data["Nome"] ?> </td>
                            <td><?= $data["Telefone"] ?> </td>
                            <td class="text-center">
                                <a class="btn-sm btn-warning" href="./index.php?menuop=editarPessoa&IdContato=<?= $data["IdContato"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg></a>
                            </td>
                            <td class="text-center">
                                <a class="btn-sm btn-danger" href="./index.php?menuop=apagar&IdContato=<?= $data["IdContato"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg></a>
                                </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<ul class="pagination">
    <?php

    $resultado = "SELECT IdContato FROM tbcontatos";
    $total = mysqli_query($conexao, $resultado) or die(mysqli_error($conexao));
    $quantidade = mysqli_num_rows($total);
    $totalPG = ceil($quantidade / $quantasPG); // vai fazer a aproximação, para os valores nao ficarem quebrados
    echo "<li class='page-tem'><span class='page-link'>Total de cadastro:" . $quantidade . "</span></li>";
    for ($i = 1; $i <= $totalPG; $i++) {
        if ($i == $paginas) {
            echo "<div class = 'divisoria'>
    <li class='page-link><class='pagina\">&nbsp $i &nbsp</a>
    </div>";
        } else {
            echo "<a class='text-decoration-none'  href=\"?menuop=home&pagina=$i\">&nbsp $i &nbsp</a>";
        }
    }

    ?>
</ul>