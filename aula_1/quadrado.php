<?php

class Quadrado
{
	public $lado;

	static instancia = null;

	static function getQuadrado($lado)
	{
		if(!Quadrado::instancia){
			Quadrado::instancia = new Quadrado();
		}

		return Quadrado::instancia;
	}

	private function __construct()
	{
		
	}

	pubic function setLado($lado)
	{
		$this->lado = $lado;
		return $this

	}

	pubic function getLado()
	{
		return $this->lado = $lado;

	}

}