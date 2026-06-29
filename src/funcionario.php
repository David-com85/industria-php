<?php

class Funcionario{
    private $id;
    private $nome;
    private $matricula;

    public function cadastrar($id, $nome, $matricula){
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}
