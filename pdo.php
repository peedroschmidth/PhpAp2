<?php
try
{
	$conn = new PDO( "sqlsrv:server=localhost\SQLEXPRESS ; Database = dbphp7", "", "root");
    echo "Conectado";
	echo "<br>---------------<br>";
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>