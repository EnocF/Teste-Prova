<?php

	if(isset($_POST['Update'])) {
		$id = $_POST['Id'];
		$model = $_POST['model'];
        
        //Conexão db
		include_once("../SQL/con.php");

	// update user data
	$result = mysqli_query($mysqli, "UPDATE DQCMODEL SET id='$id',Model='$model' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: ../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM DQCMODEL WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['Id'];
	$model = $user_data['model'];
}
?>