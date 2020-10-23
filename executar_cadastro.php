<?php 

	$conn = new PDO( "sqlsrv:server=localhost\SQLEXPRESS ; Database = dbphp7", "", "root");

$login= $_POST['login_usuario'];
$senha = $_POST['senha_usuario'];

$stmt = $conn->query("SELECT count(*) as num FROM tb_usuarios where login='$login'");
$stmt->execute();
$results=$stmt->fetch(PDO::FETCH_ASSOC);

if ($results['num'] ==1){
	echo"<script language='javascript' type='text/javascript'>
        alert('Login já existente. Favor escolha outro.');window.location
        .href='cadastrar.html';</script>";
}
else{
	$query = $conn->prepare("INSERT INTO tb_usuarios (login,senha) VALUES ('$login','$senha')");
	$query->execute();

	echo "<h1>Dados inseridos com sucesso</h1>";
    echo "<p> Clique no botão abaixo para logar</p><br><a href='index.html'>Logar</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Área de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
</body>
</html>