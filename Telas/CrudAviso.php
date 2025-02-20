<?php
namespace PHP\JoaoRoncon\Tela;

require_once('..\Aviso.php');
require_once('..\DAO\Conexao.php');
require_once( '..\DAO\Inserir.php');
require_once('..\DAO\Consultar.php');
require_once( '..\DAO\Atualizar.php');
require_once('..\DAO\Excluir.php');

use PHP\JoaoRoncon\Aviso;
use PHP\JoaoRoncon\DAO\Conexao;
use PHP\JoaoRoncon\DAO\Inserir;
use PHP\JoaoRoncon\DAO\Consultar;
use PHP\JoaoRoncon\DAO\Atualizar;
use PHP\JoaoRoncon\DAO\Excluir;

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
         <button type="submit">Cadastrar
            <?php
            $conexao = new Conexao();//conectar o banco
            if(isset($_POST['tTitulo'])){
                $titulo = $_POST['tTitulo'];
                $descricao = $_POST['tDescricao'];
                $dt = $_POST['tDt'];
               $inserir = new Inserir();
               echo $inserir->cadastrarAviso($conexao,$titulo,$descricao,$dt);
            }
            ?>
        </button>
        </form>

        <div class="container mt-4">
        <h2>Excluir Aviso</h2>
        <form method="POST">
            <label>Informe uma Titulo:</label>
            <input type="text" name="tTitulo"/>
            <button type="submit">Excluir
                <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tTitulo'])){
                        $titulo = $_POST['tTitulo'];
                        $excluir = new Excluir();
                    }        

                ?>
                </button>
                <?php
                if(isset($_POST['tTitulo'])){
                    echo $excluir->excluirAviso($conexao, $titulo);
                }else{
                    echo "Preencha o CPF";
                }
            ?>
        </form>

        <div class="container mt-4">
        <h2>Consultar Aviso</h2>
        <form method="POST">
            <label>Informe um data: </label>
            <input type = "date" name="tDt"/>
            <button type="submit">Consultar
            <?php
                            $conexao = new Conexao();
                            if(isset($_POST['tDt'])){
                                $dt = $_POST['tDt'];
                            $consultar = new Consultar();
                            }  
                        ?>
            </button>
            </form>
            <?php
                    if(isset($_POST['tDt'])){
                    echo $consultar->consultarAvisos($conexao,$dt);
                    }else{
                        echo "Preencha o campo CPF";
                    }
                ?>

        <div class="container mt-4">
        <h2>Atualizar Aviso</h2>
        <form method = "POST">
            <label>Data: </label>
            <input type="date" name="tDt"/><br><br>

            <label>Escolha o campo que deseja atualizar:</label>
            <select name="tCampo">
                <option value="titulo">Título</option>
                <option value="descricao">Descrição</option>
            </select><br><br>

            <label>Novo dado: </label>
            <input type="text" name="tNovoDado"/><br><br>
            <button type="submit">Atualizar
                <?php
                $conexao = new Conexao();
                if(isset($_POST['tDt'])){
                $atualizar = new Atualizar();

                $dt = $_POST['tDt'];
                $campo = $_POST['tCampo'];
                $novoDado = $_POST['tNovoDado'];
                }
                ?>

            </button>
        </form>
        <?php
            if(isset($_POST['tDt'])){
            echo $atualizar->atualizarAviso($conexao, $campo,$novoDado,$dt);
            }
        ?>

</body>
</html>


