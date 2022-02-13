<header>
    <h3>Cadastrar novos contatos</h3>
</header>

<div>
    <form class="form-control" name="Create-contact" action="./index.php?menuop=insertPessoa" method="post">
        <div>
            <label for="Nome">Nome</label>
            <input type="text" placeholder="Username" name="Nome" id="username" pattern="[a-z\s]+$" />
   
        </div>
        <div>
            <label for="Telefone">Telefone</label>
            <input placeholder="(99) 99999-9999" class="form-control" type="text" id="telefone" name="Telefone">

        </div>
        <div>
            <input type="submit" value="Adicionar" nome="Adc-Contato">
        </div>
        <script>
            $("#telefone").mask("(99) 99999-9999");
        </script>
    </form>
</div>