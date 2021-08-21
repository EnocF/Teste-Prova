<?php
include_once("../SQL/con.php");


$result = mysqli_query($mysqli, "SELECT * FROM DQCMODEL");
header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=teste.xls");
 header("Pragma: no-cache");
?>

<meta charset='utf-8'>
    <table width='80%' border=1>
        <tr>TABELA: DQCMODEL</tr>
    <tr>
        <th>ID</th> <th>Model</th> <th>Operações</th>
    </tr>
    <?php
    while($model=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$model['Id']."</td>";
        echo "<td>".$model['Model']."</td>";
        echo "<td><a href='editar.php?id=$model[Id]'>Edit</a> | <a href='Controle/con_delete.php?Id=$model[Id]'>Delete</a></td></tr>";
    }
    ?>
    </table>