<?php include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">

    <title>Agenda Desafio</title>
</head>

<body>
    <header id="nav" class="bg-dark">
        <div class="container-md">
    
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <a href="#" class="navbar-brand">
                    <img src="./img/person-lines-fill.svg" alt="Logo" width="40px">
                </a>


                <div id="Navbar2" class="collapsenavbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link" class="nav-item"> <a href="./index.php?menuop=home" style="text-decoration: none;">Home</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <?php

        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

        switch ($menuop) {
            case 'home':
                include("./php/home/home.php");
                break;
            case 'contatoCreate':
                include("./php/contatos/contatoCreate.php");
                break;
            case 'insertPessoa':
                include("./php/contatos/insertPessoa.php");
                break;
            case 'editarPessoa':
                include("./php/contatos/editarPessoa.php");
                break;
            case 'apagar':
                include("./php/contatos/apagarPessoa.php");
                break;
            case 'atualizarPessoa':
                include("./php/contatos/atualizaPessoa.php");
                break;
            default:
                include("./php/home/home.php");
                break;
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>