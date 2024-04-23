<?php 
    class Cliente {
        // Atributos
        private $id;
        private $nome;
        private $cpf;
    
        // Método construtor
        public function __construct($id, $nome, $cpf)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function __toString() {
            return "Nome: $this->nome - CPF: $this->cpf";
        }
    }


?>