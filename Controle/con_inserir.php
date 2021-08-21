<?php

$id = $_POST['Id'];
$model = $_POST['Model'];
        
//Conexão db
include_once("../SQL/con.php");

// Inserir
    $result = mysqli_query($mysqli, "INSERT INTO DQCMODEL(Id, Model) VALUES('$id','$model')");

// Retornar para Index
	header("Location: ../index.php");
	?>