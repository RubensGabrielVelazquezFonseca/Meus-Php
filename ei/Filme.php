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







}








?>
