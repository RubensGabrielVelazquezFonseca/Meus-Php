<?php class conteudo{
private $id;
protected $titulo;
protected $data_lancamento;
protected$genero;
protected $assistido;

public function __construc($titulo, $data_lancamento, $genero, bool $assistido = false){

  $$this -> titulo = $titulo;
$this -> data_lancamento= $data_lancamento;
  $this -> genero = $genero;
  $this -> assistindo = $assistido;
  

}

public function getid(){
return $this ->id;


}

public function getTitulo(){

    return $this ->titulo;
}



public function getdata_lancamento(){

    return $this ->data_lancamento;
}

public function getassitindo(){

    return $this ->getassitindo();
}


public function assistir(){}
public function apagarConteudo(){}
public function listaConteudo(){}









}







?>
