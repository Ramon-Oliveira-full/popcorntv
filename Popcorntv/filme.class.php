<?php
 
class Filme{
	
	private $titulo;
	private $codigo;
	private $sinopse;
	private $quantidade;
	private $trailer;

	public function __construct($tilulo, $codigo, $sinopse, $quantidade, $trailer)
	{
		$this->titulo = $tilulo;
		$this->codigo = $codigo;
		$this->sinopse = $sinopse;
		$this->quantidade = $quantidade;
		$this->trailer = $trailer;
	}
	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($tilulo){
		return $this->titulo = $titulo;
	}
	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		return $this->codigo = $codigo;
	}
	public function getSinopse(){
		return $this->sinopse;
	}

	public function setSinopse($sinopse){
		return $this->sinopse = $sinopse;
	}
	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setQuantidade($quantidade){
		return $this->quantidade = $quantidade;
	}
	public function getTrailer(){
		return $this->trailer;
	}

	public function setTrailer($trailer){
		return $this->trailer = $trailer;
	}
}


?>