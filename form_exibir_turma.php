<!--
 # Etec Tenente Aviador Gustavo Klug
 # Curso: Informática Para Internet
 # 3º Módulo -Turma B
 # Disciplina: Desenvolvimento de Software II
 # Competências: Analisar a orientação a objetos e sua aplicação em sistemas web; Integrar sistemas web com sistemas gerenciadores de banco de dados.
 # Prof. Adriano Virgílio
 # Data: 23/04/2019
-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exibindo Dados da Tabela Turma</title>
<link href="css/estilo2.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="todoconteudo">
	
    <div id="cabecalho">    
    </div>
    
    <div id="menu">    
    </div>
    
    <div id="corpo">
     <h1>RELATÓRIO DE TURMAS</h1>
    <table align="center" border="1">    <tr>
    	<td>Código:</td>
        <td>Data Inicial:</td>
        <td>Data Final:</td>
        <td>Hora Inicial:</td>
        <td>Hora Final:</td>
    </tr>
   <?php
	include("conecta.php");
	$comando_sql = "SELECT * FROM tb_turma";
	$consulta = $conexao->query($comando_sql);  
	while($registro = $consulta->fetch(PDO::FETCH_ASSOC))
	{
	 echo "<tr>";
	 echo "<td>{$registro['id_turma']}</td>";
	 echo "<td>". implode("/",array_reverse(explode("-", $registro['data_inicial'])))."</td>";
	 echo "<td>". implode("/",array_reverse(explode("-", $registro['data_final'])))."</td>";
	 echo "<td>{$registro['hora_inicial']}</td>";
	 echo "<td>{$registro['hora_final']}</td>";
	 echo "</tr>";
	}	
	?>    
	</table>
    </div> 
         
    <div id="rodape">
    </div>
</div>
</body>
</html>
