 <?php

 
//Criação da Classe
class  Camiseta
{
	//Atributos da Classe
	//private só pode acessar dentro da classe
	private $preco;
	private $tamanho;
	private $foto;

	//Quando usa function é um método
	public function __construct($preco, $tamanho, $foto)
	{
		$this->preco = $preco;
		$this->tamanho = $tamanho;
		$this->foto = $foto;
	}	

	public function comprar($quantidade)
	{
		echo "Você comprou " . $quantidade . " camisetas";
	}
}

$camiseta = new Camiseta(100.00, 'GG', null);

$camiseta->comprar(10);