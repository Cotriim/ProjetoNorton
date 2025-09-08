<?php

class UsuarioDAO {
    public $crm;
    public $cpf;
    public $nome;
    public $rua;
    public $bairro;
    public $cidade;
    public $cep;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO 
            medico (crm, cpf, nome, rua, bairro, cidade, cep)
            VALUES ('$this->crm', '$this->cpf', '$this->nome', '$this->rua', '$this->bairro', '$this->cidade', '$this->cep');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    
    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE medico SET cpf ='$this->cpf', nome ='$this->nome', rua ='$this->rua', bairro ='$this->bairro', cidade ='$this->cidade', cep ='$this->cep' WHERE crm ='$this->crm'";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }

    public function excluir() {
        $objeto = new Conexao();
        $SQL = "DELETE FROM medico WHERE crm='$this->crm'";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Excluído com Sucesso";
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function consultar(){
        $objeto = new Conexao();
        $SQL = "SELECT crm, cpf, nome, rua, bairro, cidade, cep FROM medico ";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }
}