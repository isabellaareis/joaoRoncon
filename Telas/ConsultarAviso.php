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
    <link rel="stylesheet" href="estilo.css">  
    <title>Consultar Aviso</title>
    </head>
    <body>
    <a href="MenuAdministrador.php"> <button>Voltar</button></a> 
   
    <form method="POST">
    <label>Informe um data: </label>
    <input type = "date" name="tDt"/>
    <button type="submit">Consultar
    <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tDt'])){
                        $dt = $_POST['tDt'];
                    $consultar = new Consultar();
                    }  
                ?>
    </button>
    </form>
    <?php
            if(isset($_POST['tDt'])){
            echo $consultar->consultarAvisos($conexao,$dt);
            }else{
                echo "Preencha o campo CPF";
            }
        ?>
    </body>
    </html>