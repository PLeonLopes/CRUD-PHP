<h2>EDITAR USUÁRIO</h2>

<?php     
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"]; // Seleciona tudo da tabela usuarios onde o ID vem do request do botão editar (pode ser 1, 2, 3, etc)

    $res = $conn->query($sql); // Realiza a busca

    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST"> <!-- Formulário HTML com ACTION para "salvar-usuario.php"-->
    <input type="hidden" name="acao" value="editar"> <!--INPUT HIDDEN para confirmação do envio, usando value EDITAR-->
    <input type="hidden" name="id" value="<?php echo $row->id?>"> <!--INPUT HIDDEN para confirmação do envio, usando name ID e value ID, pois estamos editando dados de 1 determinado ID-->
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row->nome;?>" class="form-control"> <!--class="form-control" | Bootstrap" | USANDO VALUE DIRETO DO SQL para printar no formulário-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?php echo $row->email;?>" class="form-control"> <!--class="form-control" | Bootstrap" | USANDO VALUE DIRETO DO SQL para printar no formulário-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required> <!--class="form-control" | Bootstrap" | USANDO REQUIRED (html) para printar precisar de senha-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $row->data_nasc;?>" class="form-control"> <!--class="form-control" | Bootstrap" | USANDO VALUE DIRETO DO SQL para printar no formulário-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <button type="submit" class="btn btn-primary">ENVIAR</button> <!--class="btn btn-primary" | Bootstrap"-->
    </div>
</form>
