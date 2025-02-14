<?php
    namespace PHP\JoaoRoncon\DAO;
    require_once('Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;

    class Inserir{
        function cadastrarAluno(Conexao $conexao,int $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, string $dtNascimento,string $senha)
        {
            try{
                $conn = $conexao->conectar();// abrir o banco
                $sql = "Insert into Aluno(id, cpf,nome,nomeSocial,genero,pronome,email,telefone,dtNascimento,senha)
                    values('', '$cpf','$nome','$nomeSocial','$genero','$pronome','$email','$telefone','$dtNascimento','$senha')";
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

        function cadastrarProfessor(Conexao $conexao, float $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, string $dtNascimento,string $senha)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into professor(id,cpf,nome,nomeSocial,genero,pronome,email,telefone,dtNascimento,senha) values('', '$cpf','$nome','$nomeSocial','$genero','$pronome','$email','$telefone','$dtNascimento','$senha')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Except $erro)
            {
                return "<br>Algo deu errado".$erro;
            }
        } //fim do metodo 

        function cadastrarAdministrador(Conexao $conexao, string $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, string $dtNascimento,string $senha)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into administrador(id,cpf,nome,nomeSocial,genero,pronome,email,telefone,dtNascimento,senha) values('', '$cpf','$nome','$nomeSocial','$genero','$pronome','$email','$telefone','$dtNascimento','$senha')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Except $erro)
            {
                return "<br>Algo deu errado".$erro;
            }
        } //fim do metodo 
    }// fim da classe
?>