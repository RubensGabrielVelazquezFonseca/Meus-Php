<?php
include_once("conexao.php");
echo "<h1> Selecionando Registros usando FOR    </h1>";

$sqlRegistros  = mysqli_query(conexao, "select * from tbfFilmes");
$num_linhas = mysqli_num_rows($sqlRegistros);
for($i=0; $i<$num_linhas; $i++){

$dados   = mysqli_fetch_array($sqlRegistros);
$idFilme = $dados["idFilme"];
$tituloFilme = $dados["tituloFilme"];
$DuracaoFilme = $dados["DuracaoFilme"];
$valorLocacao = $dados["valorLocacao"];

echo "Codigo: $idFilme | Titulo: $tituloFilme | Duracao: $DuracaoFIlme| Titulo: $tituloFilme | Valor: $valorLocacao <br>";










}

?>
