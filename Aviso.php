<?php

namespace PHP\JoaoRoncon;

class Aviso{
    protected string $titulo;
    protected string $descricao;
    protected date $dt;


    public function __construct(string $titulo,string $descricao,date $dt)
    {
        //Instanciar 
        $this->titulo  = $titulo;
        $this->descricao  = $descricao;
        $this->dt  = $dt;
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
                "<br>Nome: ".$this->titulo.
                "<br>Nome: ".$this->descricao.
                "<br>Nome: ".$this->dt;
               
    }//fim do método
}//fim da classe Pessoa
?>