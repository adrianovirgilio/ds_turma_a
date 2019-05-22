<?php
	session_start();
	$user = $_POST['login'];
	$password = md5($_POST['senha']);
	include("conecta.php");
	$cmd_sql = "SELECT * FROM tb_professor WHERE login = ? AND senha = ?";
	$busca = $conexao->prepare($cmd_sql);
	$busca->bindParam(1,$user);
	$busca->bindParam(2,$password);
	$busca->execute();
	if($busca->rowCount()>0)
	{
		$_SESSION['login'] = $user;
		$_SESSION['senha'] = $password;
		header('location:index.php');			
	}
	else
	{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		header('location:index.html');
	}
?>
