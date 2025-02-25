<?php
namespace PHP\JoaoRoncon\Tela;

require_once('..\DAO\Conexao.php');
require_once('..\DAO\Inserir.php');

use PHP\JoaoRoncon\DAO\Conexao;
use PHP\JoaoRoncon\DAO\Inserir;

// Conectar ao banco de dados
$conexao = new Conexao();
$conn = $conexao->conectar();


if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . $conexao->getError());
}

// Processar o formulário quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['turma'])) {
    $inserir = new Inserir(); 
    $resultado = $inserir->salvarTurmas($conexao, $_POST['turma']); // Chama o método salvarTurmas
    
    // Atualiza a turma do aluno no banco de dados
    foreach ($_POST['turma'] as $idAluno => $turma) {
        $sqlUpdate = "UPDATE aluno SET turma = ? WHERE Id = ?";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->bind_param("ii", $turma, $idAluno);
        $stmt->execute();
    }

    echo $resultado; 
}

// Executa a consulta para obter os alunos SEM TURMA definida
$sql = "SELECT * FROM aluno WHERE turma IS NULL"; 
$result = $conn->query($sql);

// Verifica se a consulta foi bem-sucedida
if (!$result) {
    die("Erro na consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liberar Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Liberar Acesso</h2>
        <form method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de nascimento</th>
                        <th>Turma 1</th>
                        <th>Turma 2</th>
                        <th>Turma 3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['Nome']) ?></td>
                                <td><?= htmlspecialchars($row['dtNascimento']) ?></td>
                                <td><input type="radio" name="turma[<?= $row['Id'] ?>]" value="1"></td>
                                <td><input type="radio" name="turma[<?= $row['Id'] ?>]" value="2"></td>
                                <td><input type="radio" name="turma[<?= $row['Id'] ?>]" value="3"></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">Nenhum aluno encontrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
