<?php
namespace PHP\JoaoRoncon\Telas;

require_once('../DAO/Conexao.php');
use PHP\JoaoRoncon\DAO\Conexao;

// Criar a conexão
$conn = (new Conexao())->conectar();

// Buscar alunos da mesma turma
$query = "SELECT * FROM aluno WHERE turma = 2";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Alunos</title>
</head>
<body>


<h3>Lista de alunos da sua turma:</h3>

<table border="1">
    <tr>

        <th>Nome</th>

    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
        </tr>
    <?php } ?>
</table>

<div class="card">
    <h3>Cadastrar</h3>
    <p>Cadastre-se aqui</p>
    <a href="CadastrarAluno.php" class="btn">Acessar</a>
</div>

<div class="card">
    <h3>Consultar</h3>
    <p>Veja e acesse os dados registrados aqui</p>
    <a href="ConsultarAluno.php" class="btn">Acessar</a>
</div>

<div class="card">
    <h3>Atualizar</h3>
    <p>Veja e acesse os dados registrados aqui</p>
    <a href="AtualizarAluno.php" class="btn">Acessar</a>
</div>

<div class="card">
    <h3>Excluir</h3>
    <p>Veja e acesse os dados registrados aqui</p>
    <a href="ExcluirAluno.php" class="btn">Acessar</a>
</div>

<br>
<a href="logout.php">Sair</a>

</body>
</html>
