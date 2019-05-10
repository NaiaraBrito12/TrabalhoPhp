
<head>
	<title></title>
</head>
<body>
<a href="listar.php">Listar</a>
<<?php 
//include_once('form.html');
include_once('conexao.php');
$numero=$_POST['n'];
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$nota=$_POST['nota'];
echo  "numero".$numero."nome".$nome."sexo".$sexo,"nota".$nota;
$sql="INSERT INTO ALUNO(numero,nome,sexo,nota) Values($numero,'$nome','$sexo', $nota)";
$r=mysqli_query($con,$sql);
if ($con) {
	echo "Dados cadastrados com sucesso";
}
else{
	echo "Erro ao cadastrar";
}

 ?><html>
</body>
</html>