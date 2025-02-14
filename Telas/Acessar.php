<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Login.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Login;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Acessar com login</title>
</head>
<body>
<header>
<nav>
<a href="Index.php" class="button-cor">Voltar</a>
</nav>
</header>
<section class="hero">
<div class="login-container">
<h2>Login</h2>
<form  method="POST">
<input type="text" name="tId" placeholder="Digite seu ID" required>
<input type="text" name="tSenha" placeholder="Digite sua senha" required>
<button type="submit" class = "cor-button">Entrar
<?php
                if(isset($_POST['tId']) && isset($_POST['tSenha'])){
                    $conexao = new Conexao();    
                    $login = new Login();
                    if($login->loginPessoa($conexao, $_POST['tId'], $_POST['tSenha'])==false){
                        echo "Algo deu errado!";
                    }                   
 
                }  
            ?>
</button>
</form>
</div> 
</section>

</body>
</html>