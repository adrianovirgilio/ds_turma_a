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
<title>Formulário de pesquisa</title>
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
    <legend>Formulário de Pesquisa</legend>
	<form action="#" method="get">
    <p><label>Digite o código(id) da turma que deseja pesquisa:</label></p>
 	<p><input type="text" name="valor_de_busca" size="50" required> </p>
 	<p><input type="submit" name="buscar" value="Pesquisar"></p>
    </form>
    <?php
		if(isset($_GET['buscar'])){
			include("conecta.php");
			$valor = $_GET['valor_de_busca'];
			$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$comando_sql = "SELECT * FROM tb_turma WHERE id_turma=$valor";
			$consulta = $conexao->query($comando_sql);
			print "<p>Resultado:</p>";
			while($registro = $consulta->fetch(PDO::FETCH_ASSOC))
					{
						print "<p>Turma:<b>{$registro['id_turma']}</b><br>
								  Data de início:" .  implode("/", array_reverse(explode("-", $registro['data_inicial'])))."<br>
								  Data de término:" .  implode("/", array_reverse(explode("-", $registro['data_final'])))."<br>
								  Horário:{$registro['hora_inicial']} as {$registro['hora_final']}
							  </p>";
					}
		}	
	?>    
    </fieldset>
    </div>
        
        <div id="rodape">
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>
