<?php
    namespace PHP\JoaoRoncon\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Atualizar;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atualizar Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method = "POST">
        <label>Nome: </label>
        <input type="text" name="tNdt"/><br><br>

        <label>Escolha o campo que deseja atualizar:</label>
        <select name="tCampo">
            <option value="nome">Nome</option>
        </select><br><br>

        <label>Novo dado: </label>
        <input type="text" name="tNovoDado"/><br><br>
        <button type="submit">Atualizar
            <?php
            $conexao = new Conexao();
            if(isset($_POST['tNdt'])){
            $atualizar = new Atualizar();

            $nome = $_POST['tNdt'];
            $campo = $_POST['tCampo'];
            $novoDado = $_POST['tNovoDado'];
            }
            ?>

        </button>
    </form>
    <?php
        if(isset($_POST['tNdt'])){
        echo $atualizar->atualizarTurma($conexao, $campo,$novoDado,$nome);
        }
    ?>
</body>
</html>