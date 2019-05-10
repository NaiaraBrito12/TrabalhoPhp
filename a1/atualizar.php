
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
</head>
<body>
	<a href="listar.php">Listar</a>
<?php
$numero=$_POST['n'];
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$nota=$_POST['nota'];
$antigo = $_POST['antigo'];
include_once("conexao.php");
$sql="UPDATE ALUNO SET NOME='$nome', NUMERO=$numero, SEXO='$sexo' WHERE NUMERO=$antigo";
$r=mysqli_query($con,$sql);
if($r){
	echo "Dados cadastrados com sucesso";

}else{
	echo "Erro ao cadastrar";
}
?>
</body>
</html>
