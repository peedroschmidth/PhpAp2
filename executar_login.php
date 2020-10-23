<?php 
$login = $_POST['login_usuario'];
$senha = $_POST['senha_usuario'];

	$conn = new PDO( "sqlsrv:server=localhost\SQLEXPRESS ; Database = dbphp7", "", "root");

$stmt = $conn->query("SELECT count(*) as num FROM tb_usuarios where login='$login' and senha='$senha'");
$stmt->execute();
$results=$stmt->fetch(PDO::FETCH_ASSOC);

if ($results['num'] ==1){
	echo "<h1>Seja bem-vindo usuário: ".$login."!</h1>";
	echo "=========================================================<br>";
}


else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Credenciais inválidas, ou usuário não cadastrado. Cadastre-se');window.location
        .href='index.html';</script>";
}

echo "<br><a href='index.html'>Deslogar</a>"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Área do Cliente</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body></body>
</html>