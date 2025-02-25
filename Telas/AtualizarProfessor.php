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
    <link rel="stylesheet" href="../css/atualizar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <a href="MenuAdministradorProfessor.php">
        <button class="back-button">
            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Voltar</span>
        </button>
    </a>
    
    <form method="POST" class="consult-form">
        <div class="input-group">
        <label>Informe um CPF:</label>
            <input type="text" name="tCpf" class="form-control" required placeholder="000.000.000-00">
        </div>

        <div class="input-group">
            <label>Escolha o campo:</label>
            <select name="tCampo" class="form-control">
                <option value="nome">Nome</option>
                <option value="NomeSocial">Nome Social</option>
                <option value="genero">Gênero</option>
                <option value="pronome">Pronome</option>
                <option value="email">Email</option>
                <option value="telefone">Telefone</option>
                <option value="dtNascimento">Data de nascimento</option>
                <option value="senha">Senha</option>
            </select>
        </div>

        <div class="input-group" id="campoTexto">
        <label>Novo dado:</label>
            <input type="text" name="tNovoDado" class="form-control" required placeholder="Digite aqui o novo dado">
        </div>

        <button class="btn" type="submit">Atualizar
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
        echo $atualizar->atualizarProfessor($conexao, $campo,$novoDado,$cpf);
        }
    ?>
</body>
</html>