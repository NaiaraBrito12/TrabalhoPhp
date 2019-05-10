<?php

include_once "conexao.php";

$number = $_GET['id'];

$sql= "DELETE FROM aluno WHERE numero = $number";
$r= mysqli_query($con,$sql);
if ($r) {
echo "Deletado com sucesso";
}
else{
	echo "Erro";
}