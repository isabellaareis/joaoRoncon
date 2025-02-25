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

        function cadastrarTurma(Conexao $conexao,string $nome)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into turma(id,nome) values('','$nome')";
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
        
        function cadastrarAviso(Conexao $conexao,string $titulo,string $descricao, string $dt
        ){
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into Aviso(titulo,descricao,dt) values('$titulo','$descricao','$dt')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }//fim do método

        function cadastrarAtestado(Conexao $conexao, string $nome, string $email, string $linkDrive)
        {
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into Atestado(nome,email,linkDrive) values('$nome','$email','$linkDrive')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }//fim do método

        function salvarTurmas(Conexao $conexao, array $turmas) {
            try {
                $conn = $conexao->conectar(); // Conectar ao banco
        
                // Itera sobre as turmas e executa a query para cada aluno
                foreach ($turmas as $id => $turma) {
                    $sql = "UPDATE aluno SET turma = '$turma' WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);
        
                    if (!$result) {
                        throw new Exception("Erro ao atualizar o aluno ID $id: " . mysqli_error($conn));
                    }
                }
        
                mysqli_close($conn); // Fechar a conexão
                return "";
        
            } catch (Exception $erro) {
                return "" . $erro->getMessage();
            }
        }


    }// fim da classe
?>