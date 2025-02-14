<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\Professor.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\JoaoRoncon\Professor;
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Professor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lCpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="Insira seu CPF">
        </div>
        <div class="mb-3">
            <label for="lNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu nome completo">
        </div>
        <div class="mb-3">
            <label for="lNomeSocial" class="form-label">Nome Social</label>
            <input type="text" class="form-control" id="tNomeSocial" name="tNomeSocial" placeholder="Insira seu nome social">
        </div>
        <label for="lgenero" class="label-genero">Gênero:</label>
            <select id="tGenero" name="tGenero">
            <option value="titulo" class="tituloGenero" aria-label="Escolha o seu gênero">Selecione uma opção</option>
            <option value="masculino" aria-label="Opção para pessoas do gênero masculino">Masculino</option>
            <option value="feminino" aria-label="Opção para pessoas do gênero feminino">Feminino</option>
            <option value="outro" aria-label="Opção para pessoas que preferem não informar o gênero">Prefiro não informar</option></select>
        <div class="mb-3">
            <label for="lPronome" class="form-label">Pronome</label>
            <input type="text" class="form-control" id="tPronome"  name="tPronome" placeholder="Insira com qual pronome deseja ser tratado">
        </div>
        <div class="mb-3">
            <label for="lEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="tEmail"  name="tEmail" placeholder="Insira seu email">
        </div>
        <div class="mb-3">
            <label for="lTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="Insira seu telefone">
        </div>
        <div class="mb-3">
            <label for="lDtNascimento" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="tDtNascimento" name="tDtNascimento" placeholder="Informe sua data de nascimento">
        </div>
        <div class="mb-3">
            <label for="lSenha" class="form-label">Senha</label>
            <input type="text" class="form-control" id="tSenha" name="tSenha" placeholder="Insira sua senha">
        </div>

        <button type="submit">Cadastrar
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
               echo $inserir->cadastrarProfessor($conexao,$cpf,$nome,$nomeSocial,$genero,$pronome,$email,$telefone,$dtNascimento,$senha);
            }
            ?>
        </button>
        </form>
    </body>
</html>