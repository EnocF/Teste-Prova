<?php
include_once("../SQL/con.php");

$id = $_GET['Id'];

$result = mysqli_query($mysqli, "DELETE FROM DQCMODEL WHERE Id=$id");

header("Location:../index.php");
?>