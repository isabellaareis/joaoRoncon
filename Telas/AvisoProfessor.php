<?php
namespace PHP\JoaoRoncon\Tela;

require_once(__DIR__ . '/../Aviso.php');
require_once(__DIR__ . '/../DAO/Conexao.php');
require_once(__DIR__ . '/../DAO/Inserir.php');
require_once(__DIR__ . '/../DAO/Consultar.php');
require_once(__DIR__ . '/../DAO/Atualizar.php');
require_once(__DIR__ . '/../DAO/Excluir.php');

use PHP\JoaoRoncon\Aviso;
use PHP\JoaoRoncon\DAO\Conexao;
use PHP\JoaoRoncon\DAO\Inserir;
use PHP\JoaoRoncon\DAO\Consultar;
use PHP\JoaoRoncon\DAO\Atualizar;
use PHP\JoaoRoncon\DAO\Excluir;

$conexao = new Conexao();
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tTitulo'], $_POST['tDescricao'], $_POST['tDt'])) {
        $titulo = trim($_POST['tTitulo']);
        $descricao = trim($_POST['tDescricao']);
        $dt = trim($_POST['tDt']);
        
        if (!empty($titulo) && !empty($descricao) && !empty($dt)) {
            $inserir = new Inserir();
            $mensagem = $inserir->cadastrarAviso($conexao, $titulo, $descricao, $dt);
        } else {
            $mensagem = "Preencha todos os campos corretamente!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Avisos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2>Cadastrar Aviso</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" name="tTitulo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" class="form-control" name="tDescricao" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control" name="tDt" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
</body>
</html>


