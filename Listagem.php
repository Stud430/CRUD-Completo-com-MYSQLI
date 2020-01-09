<?php
	//abre conexao ao servidos MySQL
	include "conexao.php";
?>

<?php
	//cria consulta SQL
	$query = $conecta->query ("SELECT id, nome_completo, idade, email, usuario, senha FROM login");
?>

<html>
<head> <br>
<title> Listagem de Dados </title>
<link rel="stylesheet" href="css/listagemPDO.css">
<link rel="stylesheet" type="text/css" href="css/jquery-3.4.1.min.js">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


<table border=0 align=right width=20% cellspacing=0 cellpadding=10>
<tr>
	<td align=center> <a href="Tela_Cadastro.html"> CADASTRO </a> </td> 
	<td align=center> <label> | </label> </td> 
	<td align=center> <a href="Listagem_PDO.php"> LISTAGEM </a> </td> 
</tr>
</table>
<br>
<hr>

</head>

<!-- <center><h1>Listar Mensagem</h1></center> -->

<center>
<body>

<?php

	//executa consulta
	echo "<h2> Listagem de Registros </h2>";
	echo "<br><table border=1 align=center cellspacing=0 cellpadding=10>";
	echo "<tr>";
	echo "<td align=center><h4> ID </h4></td>"; 
	echo "<td align=center><h4> Nome Completo </h4></td>";
	echo "<td align=center><h4> Idade </h4></td>"; 
	echo "<td align=center><h4> Email </h4></td>"; 
	echo "<td align=center><h4> Usuário </h4></td>";
	echo "<td align=center><h4> Senha </h4></td>"; 
	echo "<td align=center><h4> Acoes </h4></td>";              
	echo "</tr>";

while ($resultado = mysqli_fetch_assoc($query)){
    echo "<tr>";	
	echo "<td>" . $resultado ["id"] . "</td>";
	echo "<td>" . $resultado ["nome_completo"] . "</td>";
	echo "<td>" . $resultado ["idade"] . "</td>";
	echo "<td>" . $resultado ["email"] . "</td>";
	echo "<td>" . $resultado ["usuario"] . "</td>";
	echo "<td>" . $resultado ["senha"] . "</td>";	
?>

	<td><center><a class="btn btn-warning" href="AtualizacaoMYSQLI.php?id=<?php echo $resultado["id"]?>"> Atualizar</a> <a class="btn btn-danger" href="ExclusaoMYSQLI.php?id=<?php echo $resultado["id"]?>">Excluir</a></center></td>
<?php
echo "</tr>";
}

echo "</table>";
echo "<br> Total de Registros: ";
echo $total = mysqli_num_rows($query);
mysqli_close ($conecta);
?>

</body>
</center>

</html>