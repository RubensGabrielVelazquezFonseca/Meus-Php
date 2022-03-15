<?php
require_once 'conexao.php';
class Filme extends conteudo{
protected $duracao;
protected $diretor;

public function __construc($titulo, $data_lancamento, $genero, $duracao, $diretor)
{
    parent::__construc($titulo,$data_lancamento,$genero);

    $this->duracao = $duracao;
    $this->diretor = $diretor;



}
public function getDuracao(){
    return $this ->duracao;
}

public function setDuracao($duracao){
    return $this ->duracao = $duracao;
}

public function getDiretor(){
    return $this ->diretor;
}

public function setDiretor($diretor){
    return $this ->diretor = $diretor;
}













}








?>
