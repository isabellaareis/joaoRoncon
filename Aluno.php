<?php
    namespace PHP\JoaoRoncon;
    require_once('Pessoa.php');
    use PHP\JoaoRoncon\Pessoa;

    Class Aluno extends Pessoa{
        protected int $turma;

        public function __construct(int $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, date $dtNascimento,string $senha,int $turma)
        {
            parent:: __construct($cpf,$nome,$nomeSocial,$genero,$pronome,$email,$telefone,$dtNascimento,$senha);
            $this->turma = $turma;
        }//fim do construtor

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void 
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir()."<br>Turma: ".$this->turma;//
        }//fim do método

    }//fim da classe 
?>