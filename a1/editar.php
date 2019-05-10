<!DOCTYPE html>
<html>
<head>
<style>
	body{
	width: 100%;
	height: 100%;
	background: blue;
	text-align: center;


}#nomediv{
		background:purple;
	float: left;
		top:50%;
		left: 50%;
		margin-left: 750px;
		font-size: 30px;
		color:white;
		box-shadow: 3px 3px 25px  black;

		
	}
	#nomediv input{
		width: 90%;
		height: 20px;
		background: rgba(255,255,255,0.5);
	}

	#nomediv input[type='submit']{
		width: 100px;
		height: 40px;
		font-size: 20px;
}
p{
	text-align: center;
}
	</style>
	<title></title>
</head>
<body>
<?php

$numero=$_GET['n'];
$nome=$_GET['nome'];
$sexo=$_GET['sexo'];
$nota=$_GET['nota'];

?>


<div id="nomediv" align="center">
<a href="listar.php">Listar</a>
<form action="atualizar.php" method="POST">
<p>Editar o Aluno</p>
	N°:<br><input type="text" name="n" id="n" value="<?php echo $numero;  ?>"><br>
	Nome:<input type="tetx" name="nome" id="nome" value="<?php echo $nome; ?>"><br>
	       Sexo:<input type="radio" name="sexo" id="sexo" value="m" <?php echo ($sexo == 'm') ? 'checked' : null ?>>Masculino<br>
	<input type="radio" name="sexo" id="sexo" value="f" <?php echo ($sexo == 'f') ? 'checked' : null ?>>Feminino<br>
	Nota:<input type="text" name="nota" id="notas" value="<?php echo$nota?>">
	<input type="text" name="antigo" id="n" value="<?php echo $numero;  ?>" hidden="true"><br>
	<input type="submit" value="enviar">
		
</form>

</div>
</body>
</html>
