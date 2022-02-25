<?php

$Servidor = "localhost";
$Usuario  = "root";
$Senha =  "bancodedados";
$dbname =   "BD_Locadora";

$conexao = mysqli_connect($Servidor, $Usuario,$Senha, );


if($conexao-> connect_error){
echo "Desconctado erro: " . $conexao->connect;
}else{
    echo "Conecatado";
}


?>
