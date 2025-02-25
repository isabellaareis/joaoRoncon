<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\Aluno.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\JoaoRoncon\Aluno;
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Aluno</title>
        <link rel="stylesheet" href="../css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       
    </head>
    <body>
    <a  href="/PI/Telas/acessar.php">
        <button class="back-button">
            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Voltar</span>
        </button>
    </a>
    <div class="form-container">
    <p class="title">Cadastrar</p>
    <form class="form" method="POST">
        <div class="input-row">
            <div class="input-group">
                <label for="tCpf">CPF</label>
                <input type="text" id="tCpf" name="tCpf" placeholder="000.000.000-00"/>
            </div>
            <div class="input-group">
                <label for="tNome">Nome</label>
                <input type="text" id="tNome" name="tNome" placeholder="Insira seu nome"/>
            </div>
        </div>

        <div class="input-row">
            <div class="input-group">
                <label for="tPronome">Pronome</label>
                <input type="text" id="tPronome" name="tPronome" placeholder="Ex: Ele/Dele">
            </div>
            <div class="input-group">
                <label for="tGenero">Gênero</label>
                <select id="tGenero" name="tGenero">
                    <option value="titulo">Selecione uma opção</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Prefiro não informar</option>
                </select>
            </div>
        </div>

        <div class="input-group">
            <label for="tNomeSocial">Nome Social</label>
            <input type="text" id="tNomeSocial" name="tNomeSocial" placeholder="Nome Social"/>
        </div>

        <div class="input-group">
            <label for="tEmail">Email</label>
            <input type="email" id="tEmail" name="tEmail" placeholder="Insira seu email">
        </div>

        <div class="input-row">
            <div class="input-group">
                <label for="tTelefone">Telefone</label>
                <input type="text" id="tTelefone" name="tTelefone" placeholder="(xx) xxxxx-xxxx">
            </div>
            <div class="input-group">
                <label for="tDtNascimento">Data de Nascimento</label>
                <input type="date" id="tDtNascimento" name="tDtNascimento">
            </div>
        </div>

        <div class="input-row">
            <div class="input-group">
                <label for="tSenha">Senha</label>
                <input type="password" id="tSenha" name="tSenha" placeholder="Digite sua senha">
            </div>
            <div class="input-group">
                <label for="tSenha">Confirmar Senha</label>
                <input type="password" id="tSenha" name="tSenha" placeholder="Digite sua senha">
            </div>
        </div>

        <button class="sign">Cadastrar
        <?php
                $conexao = new Conexao();//conectar o banco
                if(isset($_POST['tNome'])){
                    $cpf = $_POST['tCpf'];
                    $nome = $_POST['tNome'];
                    $nomeSocial = $_POST['tNomeSocial'];
                    $genero = $_POST['tGenero'];
                    $pronome = $_POST['tPronome'];
                    $email = $_POST['tEmail'];
                    $telefone = $_POST['tTelefone'];
                    $dtNascimento = $_POST['tDtNascimento'];
                    $senha = $_POST['tSenha'];
                $inserir = new Inserir();
                echo $inserir->cadastrarAluno($conexao,$cpf,$nome,$nomeSocial,$genero,$pronome,$email,$telefone,$dtNascimento,$senha);
                }
            ?>
        </button>
    </form>
    </div>


</body>
</html>