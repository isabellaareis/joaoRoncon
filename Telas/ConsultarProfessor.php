<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Consultar;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/consultar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <title>Consultar Professor</title>
    </head>
    <body>

    <a  href="MenuAdministradorProfessor.php">
        <button class="back-button">
            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span>Voltar</span>
        </button>
    </a>
    
    <form method="post" class="consult-form">
        <label>Informe um CPF: </label>
        <input type = "text" name="tCpf" placeholder="000.000.000-00"/>
        <button type="submit">Consultar
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                    $cpf = $_POST['tCpf'];
                $consultar = new Consultar();
                }  
            ?>
        </button>
    </form>
    <?php
            if(isset($_POST['tCpf'])){
            echo $consultar->consultarProfessorIndividual($conexao,$cpf);
            }else{
                /*echo "Preencha o campo CPF";*/
            }
        ?>
    </body>
    </html>