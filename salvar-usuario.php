<?php 
switch ($_REQUEST["acao"]) { // "acao" é do INPUT HIDDEN de "novo-usuario.php" (uma das formas de confirmar envio do formulário sem usar o botão)
    case 'cadastrar': // INPUT HIDDEN do "novo-usuario.php", para confirmação do envio do formulário
        $nome = $_REQUEST["nome"]; // Captura de dados do formulário usando $_REQUEST
        $email = $_REQUEST["email"]; // Captura de dados do formulário usando $_REQUEST 
        $senha = $_REQUEST["senha"]; // Captura de dados do formulário usando $_REQUEST
        $data_nasc = $_REQUEST["data_nasc"]; // Captura de dados do formulário usando $_REQUEST

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')"; // Inserção dos dados no Banco de Dados

        $res = $conn->query($sql); // QUERY SQL

        if ($res == true) {
            echo "<script type='text/javascript'>alert('Cadastrado com sucesso!');</script>"; // Confirmação de cadastro com alert JS
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuario.php"
        } else {
            echo "<script type='text/javascript'>alert('Não foi possível concluir a operação.');</script>"; // Mensagem de "erro",por algum motivo não foi possível concluir o cadastro
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuário.php"
        }
        break;
    case 'editar':
        $nome = $_REQUEST["nome"]; // Captura de dados do formulário DE EDIÇÃO usando $_REQUEST
        $email = $_REQUEST["email"]; // Captura de dados do formulário DE EDIÇÃO usando $_REQUEST 
        $senha = $_REQUEST["senha"]; // Captura de dados do formulário DE EDIÇÃO usando $_REQUEST
        $data_nasc = $_REQUEST["data_nasc"]; // Captura de dados do formulário DE EDIÇÃO usando $_REQUEST
    
        $sql = "UPDATE usuarios SET 
                    nome = '{$nome}',
                    email = '{$email}',
                    senha = '{$senha}',
                    data_nasc = '{$data_nasc}'                   
                WHERE
                    id = {$_REQUEST["id"]}";
                    
        // ⭡ UTILIZANDO UPDATE NO SQL, E EDITANDO CADA VALOR MUDADO PELAS VARIÁVEIS DO PHP E PEGANDO O ID DO FORMULÁRIO ⭡

        $res = $conn->query($sql);
        
        if ($res == true) {
            echo "<script type='text/javascript'>alert('Editado com sucesso!');</script>"; // Confirmação de EDIÇÃO com alert JS
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuario.php"
        } else {
            echo "<script type='text/javascript'>alert('Não foi possível concluir a operação de edição.');</script>"; // Mensagem de "erro", por algum motivo não foi possível editar
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuário.php"
        }
        break;
    case 'excluir':
        
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        
        if ($res == true) {
            echo "<script type='text/javascript'>alert('Excluido com sucesso!');</script>"; // Confirmação de EDIÇÃO com alert JS
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuario.php"
        } else {
            echo "<script type='text/javascript'>alert('Não foi possível Excluir.');</script>"; // Mensagem de "erro", por algum motivo não foi possível editar
            echo "<script type='text/javascript'>location.href='?page=listar';</script>"; // Redireciona o usuário para a página "listar-usuário.php"
        }
        break;


        break;
}
?>