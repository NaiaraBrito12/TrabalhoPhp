<?php 
$host = "localhost";
$usuario= "root";
$senha = "";
$banco = "turma";
$con = mysqli_connect($host, $usuario, $senha, $banco);
if ($con) {
echo "conectado com sucesso";
}
else{
	echo "erro ao conectar";
}



 ?>