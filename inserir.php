<html>
<head>
	<title>INSERIR MODELOS</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="inserir.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Id</td></td>
				<td><input type="text" name="Id"></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="Model"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php


	if(isset($_POST['Submit'])) {
		$id = $_POST['Id'];
		$model = $_POST['Model'];
        
        //Conexão db
		include_once("con.php");

		// Inserir
		$result = mysqli_query($mysqli, "INSERT INTO DQCMODEL(Id, Model) VALUES('$id','$model)");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>Lista de modelos</a>";
	}
	?>
</body>
</html>
