<?php

class Cliente {
	
	public $id;
	public $nome;
	public $cpf;
	public $endereco;
	public $telefone;
	public $email;
	
	function __construct($id, $nome, $cpf, $endereco, $telefone, $email) {
		
		$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
		$this->email = $email;
	}
	
	function __toString(){
		
		return  "id= " . $this->cpf . "nome= " . $this->nome . ", cpf= " . $this->cpf . ", endereco= " . $this->endereco . ", telefone= " . $this->telefone . ", email= " . $this->email  ;
	}
}

?>