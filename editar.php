<?php 
include_once("SQL/con.php");
	
//Mostrar conteúdo baseado no id
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM DQCMODEL WHERE Id='$id'");
$e_model = mysqli_fetch_array($result);
	$id = $e_model['Id'];
	$model = $e_model['Model'];

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Editar Modelo</title>
</head>

<body>
	<a href="index.php">Retornar</a>
	<br/><br/>

	<form name="edit" method="post" action="Controle/con_editar.php">
		<table border="0">
			<tr>
				<td>Id</td>
				<td><input type="text" name="Id" value=<?php echo $id;?>></td>
			</tr>
			<tr>
				<td>Modelo</td>
				<td><input type="text" name="model" value=<?php echo $model;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>