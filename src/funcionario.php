<?php

class Funcionario{
    private $id;
    private $nome;
    private $matricula;
    private $cargo;

    public function cadastrar($id, $nome, $matricula, $cargo){
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
    }
}
