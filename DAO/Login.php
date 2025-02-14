<?php
namespace PHP\JoaoRoncon\DAO;
require_once('Conexao.php');
use PHP\JoaoRoncon\DAO\Conexao;
 
class Login {
    public function loginAluno(Conexao $conexao, int $id, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select id, tipo, senha from aluno where id = '$id' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['id'] == $id && $dados['tipo'] == 1 && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuFuncionario.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function loginProfessor(Conexao $conexao, int $id, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select id, tipo, senha from Professor where id = '$id' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['id'] == $id && $dados['tipo'] == 1 && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuFuncionario.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function loginAdinistrador(Conexao $conexao, int $id, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select id, tipo, senha from Administrador where id = '$id' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['id'] == $id && $dados['tipo'] == 1 && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuFuncionario.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}
?>