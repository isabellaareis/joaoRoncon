<?php
namespace PHP\JoaoRoncon\DAO;
require_once('Conexao.php');
use PHP\JoaoRoncon\DAO\Conexao;
 
class Login {
    public function loginAluno(Conexao $conexao, string $email, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select email,senha from aluno where email = '$email' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['email'] == $email && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuAluno.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function loginProfessor(Conexao $conexao,  string $email, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select email,senha from professor where email = '$email' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['email'] == $email && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuProfessor.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    public function loginAdministrador(Conexao $conexao,  string $email, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select email, senha from administrador where email = '$email' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['email'] == $email && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuAdministrador.php');
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