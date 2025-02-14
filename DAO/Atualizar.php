<?php
    namespace PHP\JoaoRoncon\DAO;
    require_once('Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;

    class Atualizar
    {
        function atualizarAluno(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            int $Cpf
        ){
            $conn = $conexao->conectar();
            $sql = "Update Aluno set $campo = '$novoDado' where Cpf = '$Cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br> Não Atualizado!";
            }
        }//fim do metodo 

        function atualizarProfessor(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            int $Cpf
        ){
            $conn = $conexao->conectar();
            $sql = "Update Professor set $campo = '$novoDado' where Cpf = '$Cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br> Não Atualizado!";
            }
        }//fim do metodo 


        function atualizarAdministrador(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            int $Cpf
        ){
            $conn = $conexao->conectar();
            $sql = "Update administrador set $campo = '$novoDado' where Cpf = '$Cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br> Não Atualizado!";
            }
        }//fim do metodo 

    }//fim da classe
?>