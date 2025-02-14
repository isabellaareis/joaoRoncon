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
    <title>Atualizar Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method = "POST">
        <label>CPF: </label>
        <input type="text" name="tCpf"/><br><br>

        <label>Escolha o campo que deseja atualizar:</label>
        <select name="tCampo">
            <option value="nome">Nome</option>
            <option value="NomeSocial">Nome Social</option>
            <option value="genero">Gênero</option>
            <option value="pronome">Pronome</option>
            <option value="email">Email</option>
            <option value="telefone">Telefone</option>
            <option value="dtNascimento">Data de nascimento</option>
            <option value="senha">Senha</option>
        </select><br><br>

        <label>Novo dado: </label>
        <input type="text" name="tNovoDado"/><br><br>
        <button type="submit">Atualizar
            <?php
            $conexao = new Conexao();
            if(isset($_POST['tCpf'])){
            $atualizar = new Atualizar();

            $cpf = $_POST['tCpf'];
            $campo = $_POST['tCampo'];
            $novoDado = $_POST['tNovoDado'];
            }
            ?>

        </button>
    </form>
    <?php
        if(isset($_POST['tCpf'])){
        echo $atualizar->atualizarAdministrador($conexao, $campo,$novoDado,$cpf);
        }
    ?>
</body>
</html>