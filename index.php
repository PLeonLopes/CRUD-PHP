<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!--Bootstrap CSS-->
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Cadastro</a> <!--Nome do site (navbar)-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php"); // Include na configuração do Banco de Dados
                    switch (@$_REQUEST["page"]) { // (@ serve para ignorar possíveis erros)
                        case 'novo':
                            include("novo-usuario.php"); // quando clicar em "Novo Usuário" na navbar, o include rodará e o usuário será redirecionado para a página
                            break;
                        case 'listar':
                            include("listar-usuario.php"); // quando clicar em "Listar Usuários" na navbar, o include rodará e o usuário será redirecionado para a página
                            break;
                        case 'salvar':
                            include("salvar-usuario.php"); // Action do form da página "novo-usuario.php", para salvar informações do usuário e mandar pro Banco de Dados
                            break;
                        case 'editar':
                            include("editar-usuario.php"); // include manda para "editar-usuario.php", onde é possível editar as informações, usando o mesmo formulário
                            break;
                        default:
                            echo "<h2>Bem vindo!</h2>"; // Mensagem Default que aparece na página inicial
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!--Bootstrap JS-->
</body>
</html>
