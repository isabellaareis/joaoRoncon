<?php
    namespace PHP\JoaoRoncon\DAO;
    require_once('Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;


    class Excluir{
        function excluirAluno(Conexao $conexao, int $cpf){
            $conn = $conexao->conectar();
            $sql = "delete from Aluno where Cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }

        function excluirProfessor(Conexao $conexao, int $cpf){
            $conn = $conexao->conectar();
            $sql = "delete from Professor where Cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }
       
        function excluirAdministrador(Conexao $conexao, int $cpf){
            $conn = $conexao->conectar();
            $sql = "delete from administrador where Cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }
       

    }//fim da classe 
?> 