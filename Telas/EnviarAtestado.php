<?php
    namespace PHP\JoaoRoncon\Tela;
    require_once('..\Atestado.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\JoaoRoncon\Atestado;
    use PHP\JoaoRoncon\DAO\Conexao;
    use PHP\JoaoRoncon\DAO\Inserir;
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">  
    <title>Consultar Turma</title>
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu nome completo">
        </div>
        <div class="mb-3">
            <label for="lEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="tEmail"  name="tEmail" placeholder="Insira seu email">
        </div>
        <div class="mb-3">
            <label for="lLinkDrive" class="form-label">Insira o link do seu drive</label>
            <input type="text" class="form-control" id="tLinkDrive" name="tLinkDrive" placeholder="Insira seu">
        </div>
        

        <button type="submit">Enviar
            <?php
            $conexao = new Conexao();//conectar o banco
            if(isset($_POST['tNome'])){
                $nome = $_POST['tNome'];
                $email = $_POST['tEmail'];
                $linkDrive = $_POST['tLinkDrive'];
               $inserir = new Inserir();
               echo $inserir->cadastrarAtestado($conexao,$nome,$email,$linkDrive);
            }
            ?>
        </button>
        </form>
    </body>
</html>