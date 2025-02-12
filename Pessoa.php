<?php

namespace PHP\JoaoRoncon;

class Pessoa{
    protected int $cpf;
    protected string $nome;
    protected string $nomeSocial;
    protected string $genero;
    protected string $pronome;
    protected string $email;
    protected string $telefone;
    protected date $dtNascimento;
    protected string $senha;

    public function __construct(int $cpf, string $nome,string $nomeSocial, string $genero, string $pronome, string $email, string $telefone, date $dtNascimento,string $senha)
    {
        //Instanciar 
        $this->cpf = $cpf;
        $this->nome  = $nome;
        $this->nomeSocial  = $nomeSocial;
        $this->genero = $genero;
        $this->pronome = $pronome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dtNascimento = $dtNascimento;
        $this->senha = $senha;
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
        return  "<br>CPF: ".$this->cpf. 
                "<br>Nome: ".$this->nome.
                "<br>Nome Social: ".$this->nomeSocial.
                "<br>Gênero: ".$this->genero.
                "<br>Pronome: ".$this->pronome.
                "<br>Email: ".$this->email.
                "<br>Telefone: ".$this->telefone.
                "<br>Data de Nascimento: ".$this->dtNascimento.
                "<br>Senha: ".$this->senha;
    }//fim do método
}//fim da classe Pessoa
?>