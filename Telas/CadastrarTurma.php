<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\Turma.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\JoaoRoncon\Turma;
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Turma</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lNdt" class="form-label">Nome da turma</label>
            <input type="text" class="form-control" id="tNdt" name="tNdt" placeholder="ex:Infantil">
        </div>
        

        <button type="submit">Cadastrar
            <?php
            $conexao = new Conexao();//conectar o banco
            if(isset($_POST['tNdt'])){
                $nome = $_POST['tNdt'];
               $inserir = new Inserir();
               echo $inserir->cadastrarTurma($conexao,$nome);
            }
            ?>
        </button>
        </form>
    </body>
</html>