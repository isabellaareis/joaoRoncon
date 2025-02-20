<?php

namespace PHP\JoaoRoncon;

class Atestado{
    protected string $nome;
    protected string $email;
    protected string $linkDrive;
    


    public function __construct(string $nome,string $email,string $linkDrive)
    {
        //Instanciar 
        $this->nome  = $nome;
        $this->email  = $email;
        $this->linkDrive  = $linkDrive;
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
        return 
                "<br>Nome: ".$this->nome.
                "<br>Nome: ".$this->email.
                "<br>Nome: ".$this->linkDrive;
               
    }//fim do método
}//fim da classe Pessoa
?>