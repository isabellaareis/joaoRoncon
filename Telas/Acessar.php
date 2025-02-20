<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\DAO\Login.php');
    require_once('..\DAO\Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Login;
?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar com login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <header>
    <nav>
    
    <a  href="../index.html">
        <button class="back-button">
            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Voltar</span>
        </button>
    </a>
    </nav>
    </header>
    <body>
        <!-- From Uiverse.io by Yaya12085 --> 
        <div class="form-container">
            <p class="title">Login</p>
            <form class="form" method="POST">
                <div class="input-group">
                    <label for="lEmail" class="form-label" for="username">Email</label>
                    <input type="text" name="tEmail" placeholder="Digite seu Email" required>
                </div>
                <div class="input-group">
                    <label for="lSenhas" class="form-label" for="password">Senha</label>
                    <input type="password" name="tSenha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class ="sign">Entrar
                        <?php
                            if(isset($_POST['tEmail']) && isset($_POST['tSenha'])){
                                $conexao = new Conexao();    
                                $login = new Login();
                            
                                if ($login->loginAluno($conexao, $_POST['tEmail'], $_POST['tSenha']) === false) {
                                    if ($login->loginProfessor($conexao, $_POST['tEmail'], $_POST['tSenha']) === false) {
                                        if ($login->loginAdministrador($conexao, $_POST['tEmail'], $_POST['tSenha']) === false) {
                                            echo "Algo deu errado!";
                                        }
                                    }
                                }
                            }
                        ?>
                </button>
            </form>
            <p class="signup">Não tem uma conta?
                <a rel="noopener noreferrer" href="CadastrarAluno.php" class="">Criar</a>
            </p>
        </div>

    </body>
    </html>