<?php

class Funcionario{

    private $id;
    private $nome;
    private $matricula;
    private $cargo;
    private $email;

    public function cadastrar($id, $nome, $matricula, $cargo, $email){
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->email = $email;
    }

}
