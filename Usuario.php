<?php

class Usuario {
    public $crm;
    public $cpf;
    public $nome;
    public $rua;
    public $bairro;
    public $cidade;
    public $cep;

    public function cadastrar() {
        $objeto = new UsuarioDAO();
        $objeto->set("crm", $this->crm);
        $objeto->set("cpf", $this->cpf);
        $objeto->set("nome", $this->nome);
        $objeto->set("rua", $this->rua);
        $objeto->set("bairro", $this->bairro);
        $objeto->set("cidade", $this->cidade);
        $objeto->set("cep", $this->cep);
        return $objeto->cadastrar();
    }
    
    public function alterar() {
        $objeto = new UsuarioDAO();        
        $objeto->set("crm", $this->crm);
        $objeto->set("cpf", $this->cpf);
        $objeto->set("nome", $this->nome);
        $objeto->set("rua", $this->rua);
        $objeto->set("bairro", $this->bairro);
        $objeto->set("cidade", $this->cidade);
        $objeto->set("cep", $this->cep);
        return $objeto->alterar();
    }

    public function excluir() {
        $objeto = new UsuarioDAO();
        $objeto->set("crm", $this->crm);
        $objeto->set("cpf", $this->cpf);
        $objeto->set("nome", $this->nome);
        $objeto->set("rua", $this->rua);
        $objeto->set("bairro", $this->bairro);
        $objeto->set("cidade", $this->cidade);
        $objeto->set("cep", $this->cep);
        return $objeto->excluir();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function consultar(){
        $objeto = new UsuarioDAO();
        $objeto->set("crm", $this->crm);

        return $objeto->consultar(); 
    }
}