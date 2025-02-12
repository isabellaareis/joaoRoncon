<?php
    namespace PHP\JoaoRoncon\DAO;
    require_once('Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;

    class Inserir{
        function cadastrarAluno(Conexao $conexao,string $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, string $dtNascimento,string $senha)
        {
            try{
                $conn = $conexao->conectar();// abrir o banco
                $sql = "Insert into aluno(cpf,nome,nomeSocial,genero,pronome,email,telefone,dtNascimento,senha)
                    values('$cpf','$nome','$nomeSocial','$genero','$pronome','$email','$telefone','$dtNascimento','$senha')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }

        }// fim do método
    }// fim da classe
?>