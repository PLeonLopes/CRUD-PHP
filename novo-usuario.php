<h2>NOVO USUÁRIO</h2>

<form action="?page=salvar" method="post"> <!-- Formulário HTML com ACTION para "salvar-usuario.php"-->
    <input type="hidden" name="acao" value="cadastrar"> <!--INPUT HIDDEN para confirmação do envio-->
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control"> <!--class="form-control" | Bootstrap"-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control"> <!--class="form-control" | Bootstrap"-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control"> <!--class="form-control" | Bootstrap"-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc" class="form-control"> <!--class="form-control" | Bootstrap"-->
    </div>
    <div class="mb-3"> <!--class="mb-3" | Bootstrap - MARGIN BOTTOM 3-->
        <button type="submit" class="btn btn-primary">ENVIAR</button> <!--class="btn btn-primary" | Bootstrap"-->
    </div>
</form>
