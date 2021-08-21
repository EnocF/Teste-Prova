<?php

$id = $_POST['id'];
$model = $_POST['model'];
        
//Conexão db
include_once("../SQL/con.php");

// update nodel
	$result = mysqli_query($mysqli, "UPDATE DQCMODEL SET Id='$id',Model='$model' WHERE Id=$id");

// Retornar para Index
	header("Location: ../index.php");
?>