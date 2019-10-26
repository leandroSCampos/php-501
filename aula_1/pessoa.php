<?php

class Pessoa
{
	public $nome;
	public $sobrenome;
	public $dataDeNascimento;
	public $sexo;

	//: string para retornar a função como string
	public function nomeCompleto(): string
	{
		return "{$this->nome} {$this->sobrenome}";
	}

}

class Funcionario extends Pessoa
{
	public $cargo;
	public $setor;
}

$f = new Funcionario();

$f->nome = 'Leandro';
$f->sobrenome = 'Campos';

$f->cargo = 'Desenvolvedor';
$f->setor = 'Desenvolvimento';

echo $f->nomeCompleto();