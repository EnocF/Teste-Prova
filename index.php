<?php
include_once("SQL/con.php");


$result = mysqli_query($mysqli, "SELECT * FROM DQCMODEL");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>TABELA DQCMODEL</title>
</head>

<body>
<div align=left>
<a href="inserir.php">INSERIR CONTEUDO</a>
</div><br>
<div align=left>
    <a href="Controle/imprimir2.php">REPORT DQCMODEL</a>
</div>
<br/><br/>

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
</body>
</html>