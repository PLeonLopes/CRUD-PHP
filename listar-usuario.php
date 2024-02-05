<h2>LISTAR USUÁRIOS</h2>
<?php 

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql); // Busca no banco de dados

$qtd = $res->num_rows; // variável php para quantidade de linhas na tabela

if ($qtd > 0) { // Caso seja maior que zero, criará a tabela
    echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Nome</th>";
            echo "<th>E-mail</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th colspan='2' class='text-center'>Ações</th>";
        echo "</tr>";
    while ($row = $res->fetch_object()) { // continuar escrevendo dados na tabela até o último usuário ser mostrado
        echo "<tr>";
            echo "<td>".$row->id."</td>"; // ID do usuário na tabela
            echo "<td>".$row->nome."</td>"; // Nome do usuário na tabela
            echo "<td>".$row->email."</td>"; // E-mail do usuário na tabela
            echo "<td>".$row->data_nasc."</td>"; // Data de Nascimento do usuário na tabela
            
            echo "<td><button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button></td>"; // botões das ações com bootstrap e função JS para mandar para página de editar com o id desejado.
            echo "<td><button onclick=\"if(confirm('Tem certeza que deseja EXCLUIR?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button></td>"; // botões das ações com bootstrap e função JS para confirmar a exclusão, usando um IF/ELSE do JS embutido no onclick (0_0)
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>"; // Caso a tabela esteja vazia, será mostrada um alerta informando o usuário, ao invés de mostrar a tabela
}
?>