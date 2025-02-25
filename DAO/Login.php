<?php
namespace PHP\JoaoRoncon\DAO;
require_once('Conexao.php');
use PHP\JoaoRoncon\DAO\Conexao;
 
class Login {
    public function loginAluno(Conexao $conexao, string $email, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select email,senha,turma from aluno where email = '$email' and senha = '$senha' ";
            $result = mysqli_query($conn,$sql);
            while ($dados = $result->fetch_array()) {
                if ($dados['email'] == $email && $dados['senha'] == $senha && $dados['turma'] == null) {
                    header('Location: ..\Telas\MenuAluno.php');
                    exit;
                } else if ($dados['email'] == $email && $dados['senha'] == $senha && $dados['turma'] == 1) {
                    header('Location: ..\Telas\MenuAluno1.php');
                    exit;
                } else if ($dados['email'] == $email && $dados['senha'] == $senha && $dados['turma'] == 2) {
                    header('Location: ..\Telas\MenuAluno2.php');
                    exit;
                } else if ($dados['email'] == $email && $dados['senha'] == $senha && $dados['turma'] == 3) {
                    header('Location: ..\Telas\MenuAluno3.php');
                    exit;
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
            $sql  = "select email,senha,turma from professor where email = '$email' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['email'] == $email && $dados['senha'] == $senha && $dados['turma'] == 1){
                    header('Location: ..\Telas\MenuProfessor.php');
                }else if($dados['email'] == $email  && $dados['senha'] == $senha && $dados['turma'] == 2){
                    header('Location: ..\Telas\MenuProfessor1.php');
                }else if ($dados['email'] == $email &&  $dados['senha'] == $senha && $dados['turma'] == 3) {
                    header('Location: ..\Telas\MenuProfessor2.php');
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