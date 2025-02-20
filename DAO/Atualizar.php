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

        
        function atualizarTurma(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            string $nome
        ){
            $conn = $conexao->conectar();
            $sql = "Update turma set $campo = '$novoDado' where Nome = '$nome'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br> Não Atualizado!";
            }
        }//fim do metodo 

        function atualizarAviso(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            string $dt
        ){
            $conn = $conexao->conectar();
            $sql = "Update Aviso set $campo = '$novoDado' where dt = '$dt'";
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