<?php
    namespace PHP\JoaoRoncon\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Excluir;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Excluir Turma</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
        <label>Informe nome:</label>
        <input type="text" name="tNdt"/>
        <button type="submit">Excluir
        <?php
            $conexao = new Conexao();
            if(isset($_POST['tNdt'])){
                $nome = $_POST['tNdt'];
                $excluir = new Excluir();
            }        

        ?>
        </button>
        <?php
        if(isset($_POST['tNdt'])){
            echo $excluir->excluirTurma($conexao, $nome);
        }else{
            echo "Preencha o nome da turma";
        }
    ?>
        </form>
    </body>
</html>