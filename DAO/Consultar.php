<?php
   namespace PHP\JoaoRoncon\DAO;
    require_once('Conexao.php');
    use PHP\JoaoRoncon\DAO\Conexao;
 
    class Consultar{
         function consultarAlunoIndividual(Conexao $conexao, int $cpf)        
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from Aluno where Cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);
                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['Cpf'] == $cpf){
                        return  "<br>cpf: ".$dados['Cpf'].
                             "<br>Nome: ".$dados['Nome'].
                             "<br>Nome Social: ".$dados['NomeSocial'].
                             "<br>Gênero: ".$dados['genero'].
                             "<br>Pronome: ".$dados['pronome'].
                             "<br>Email: ".$dados['email'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Data de Nascimento: ".$dados['dtNascimento'].
                             "<br>Senha: ".$dados['senha'];
                    }
                }
                return "Digite um CPF válido!";
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do método
        
        function consultarProfessorIndividual(Conexao $conexao, int $cpf)        
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from Professor where Cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);
                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['Cpf'] == $cpf){
                        return  "<br>cpf: ".$dados['Cpf'].
                             "<br>Nome: ".$dados['Nome'].
                             "<br>Nome Social: ".$dados['NomeSocial'].
                             "<br>Gênero: ".$dados['genero'].
                             "<br>Pronome: ".$dados['pronome'].
                             "<br>Email: ".$dados['email'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Data de Nascimento: ".$dados['dtNascimento'].
                             "<br>Senha: ".$dados['senha'];
                            
                    }
                }
                return "Digite um CPF válido!";
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do método


        function consultarAdministradorIndividual(Conexao $conexao, int $cpf)        
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from administrador where Cpf = '$cpf'";
                $result = mysqli_query($conn,$sql);
                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['Cpf'] == $cpf){
                        return  "<br>cpf: ".$dados['Cpf'].
                             "<br>Nome: ".$dados['Nome'].
                             "<br>Nome Social: ".$dados['NomeSocial'].
                             "<br>Gênero: ".$dados['genero'].
                             "<br>Pronome: ".$dados['pronome'].
                             "<br>Email: ".$dados['email'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Data de Nascimento: ".$dados['dtNascimento'].
                             "<br>Senha: ".$dados['senha'];
                            
                    }
                }
                return "Digite um CPF válido!";
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do método
        
    }//fim da classe
?>
