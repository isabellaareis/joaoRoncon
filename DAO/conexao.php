<?php
    namespace PHP\JoaoRoncon\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','JoaoRoncon');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro)
            {
                return "Algo deu errado!<br><br>".$erro;
            }

        }//fim do conectar
    }//fim da classe 
?>