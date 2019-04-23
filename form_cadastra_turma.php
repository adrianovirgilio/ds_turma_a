<!--
 # Etec Tenente Aviador Gustavo Klug
 # Curso: Informática Para Internet
 # 3º Módulo -Turma B
 # Disciplina: Desenvolvimento de Software II
 # Competências: Analisar a orientação a objetos e sua aplicação em sistemas web; Integrar sistemas web com sistemas gerenciadores de banco de dados.
 # Prof. Adriano Virgílio
 # Data: 23/04/2019
-->
<?php
 if(isset($_GET['cadastrar']))
  {
	$data_inicio = $_GET['data_inicio'];
	$data_termino = $_GET['data_termino'];
	$hora_inicio = $_GET['hora_inicio'];
	$hora_termino = $_GET['hora_termino'];
	$id = 0;
	include("conecta.php");//chamando conexão
	$sql = "INSERT INTO
   			tb_turma(id_turma,data_inicial,data_final,hora_inicial,hora_final)VALUES(:parametro1,:parametro2,:parametro3,:parametro4,:parametro5)";
	$stmt = $conexao->prepare($sql);	
	$stmt->bindParam(':parametro1',$id);
	$stmt->bindParam(':parametro2',$data_inicio);
	$stmt->bindParam(':parametro3',$data_termino);
	$stmt->bindParam(':parametro4',$hora_inicio);
	$stmt->bindParam(':parametro5',$hora_termino);
	$rs = $stmt->execute();
	if($rs)
	{
 		echo "<script>alert('Dados Gravados!')</script>";
	}
	else
	{
	echo var_dump($stmt->errorInfo());
	}
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Turma</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="todoconteudo">
	<div id="cabecalho">    
    </div>
    
    <div id="menu">    
    </div>
    
    <div id="corpo">
    <fieldset> 
    <form action="#" method="get">
     <p><label>Data início:</label> </p>
     <p><input type="date" name="data_inicio"></p>
     
     <p><label>Data  término:</label> </p>
     <p><input type="date" name="data_termino"></p>
     
     <p><label>Horário início:</label> </p>
     <p><input type="time" name="hora_inicio"></p>
     
      <p><label>Horário término:</label> </p>
     <p><input type="time" name="hora_termino"></p>
     
     <p><input type="submit" value="Cadastrar" name="cadastrar"></p>
    </form>
    </fieldset>
     </div> 

    
    <div id="rodape">
    </div>
</div>
</body>
</html>
