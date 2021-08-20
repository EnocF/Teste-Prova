	<?php


	if(isset($_POST['Submit'])) {
		$id = $_POST['Id'];
		$model = $_POST['Model'];
        
        //Conexão db
		include_once("../SQL/con.php");

		// Inserir
		$result = mysqli_query($mysqli, "INSERT INTO DQCMODEL(Id, Model) VALUES('$id','$model')");

		// Show message when user added
		echo "User added successfully. <a href='../index.php'>Lista de modelos</a>";
	}
	?>
