<?php

namespace PHP\JoaoRoncon;

class Turma{
    protected string $nome;


    public function __construct(string $nome)
    {
        //Instanciar 
        $this->nome  = $nome;
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
                "<br>Nome: ".$this->nome;
               
    }//fim do método
}//fim da classe Pessoa
?>