<!DOCTYPE html>
<html>
<head>
	<style >
		body{
	width: 100%;
	height: 100%;
	background: blue;


}
		#a{
			font-size: 20px;
			background: blue;
		}
		
			#nome{
		background:purple;
		float: left;
		font-size: 30px;
		top:50%;
		left: 50%;
		margin-left: 650px;
		color:white;
		box-shadow: 3px 3px 25px  black;
		
	}
	#nome input{
		width: 90%;
		height: 20px;
		background: rgba(255,255,255,0.5);
	}

	#nome input[type='submit']{
		width: 100px;
		height: 40px;
		font-size: 20px;
		}
	</style>
	<title>Alunos</title>
</head>
<body >
	<div id="nome">
	<table border="1px">
		
		<tr>
				<p>Total de Aluno</p>
			<td>Nome</td>
			<td>N°</td>
			<td>Sexo</td>
			<td>Nota</td>
			<td>Editar</td>
			<td>Excluir</td>
		</tr>
	
	<?php 
	include_once('conexao.php');
	$sql="SELECT*FROM aluno";
	$r= mysqli_query($con,$sql);
	if ($r) {
		while ($result = mysqli_fetch_array($r)) { ?>
 
			
			<tr>
				<td><?php echo $result['numero']; ?></td>
				<td><?php echo $result['nome']; ?></td>
				<td><?php echo $result['sexo']; ?></td>
				<td><?php echo $result['nota']; ?></td>
				<td><a href="editar.php?n=<?php echo $result['numero'];?> &nome=<?php echo $result['nome'];?>&sexo=<?php echo $result['sexo'];?>&nota=<?php echo $result['nota'];?> "><img src="editar.png" width="20px" height="20px"></a></td>
				<td><a href="excluir.php?id=<?php  echo $result['numero'];?>"><img src="excluir.jpg" width="20px" height="20px"></a></td>
			</tr>
			<?php } }?>
	
	</table>
</div>
</body>
</html>