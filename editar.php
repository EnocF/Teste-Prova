<html>
    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
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
				<td><input type="hidden" name="id" value=<?php echo $_GET['Id'];?>></td>
				<td><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>