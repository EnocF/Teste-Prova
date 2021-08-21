<?php

$id = $_POST['Id'];
$model = $_POST['model'];
        
//Conexão db
include_once("../SQL/con.php");

// update nodel
	$result = mysqli_query($mysqli, "UPDATE DQCMODEL SET id='$id',Model='$model' WHERE id=$id");

// Retornar para Index
	header("Location: ../index.php");
?>