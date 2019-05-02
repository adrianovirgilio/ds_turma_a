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
	include("conecta.php");
	if(isset($_GET['cadastrar'])){
		
		$rm = 0;
		$nome = $_GET['nome'];
		$id = 0;
		try{
				
				$cmd_sql = "INSERT INTO tb_aluno(rm,nome)VALUES(?,?)";
				$stmt = $conexao->prepare($cmd_sql);
				$stmt->bindParam(1,$rm);
				$stmt->bindParam(2,$nome);
				$rs1 = $stmt->execute();				
				$stmt = $conexao->prepare("INSERT INTO tb_endereco(id,rm,rua)VALUES(?,?,?)");
			    $stmt->bindParam(1,$id);
				$stmt->bindValue(2,$conexao->lastInsertId());
				$stmt->bindParam(3,$rua);
				$rs2= $stmt->execute();

			
			
			}catch(PDOException $e){
				print "Erro:" . $e->getMessage();
				
				}
		
				
		
		}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Aluno</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="todoconteudo">
    
        <div id="cabecalho">    
        </div>
        
        <div id="menu">
        <ul>
              <li><a href="http://localhost:8080/turma-a/">Home</a></li>
              <li><a href="#">Sair</a></li>
              <!-- Aqui começa o seu menu-drop down -->
               <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
 			 </li>
              <!-- fim do  menu drop down -->
		</ul>    
        </div>
        
        <div id="corpo">
        <fieldset>
        	<form action="#" method="get"> 
            
            <p><label>Nome do aluno:</label></p>
            <p><input type="text" size="50" required name="nome"</p>       
            
            <p>    
     		<!-- Select que vai buscar as turma disponíveis para cadastro-->
            <label>Seleciona o código de uma turma:</label>
            <select name="turma" required>
            	<option></option>
            	<?php
					$busca = $conexao->query("SELECT * FROM tb_turma"); 
					while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
    					echo "<option value={$linha['id_turma']}>{$linha['id_turma']}</option>";
					}
                 ?>             
            </select>
            <!-- fim do select -->
            
            </p>                
            	<p><input type="submit" name="cadastrar" value="Cadastrar Aluno"> </p>        
            
            </form>
           </fieldset>         
        </div>
        
        <div id="rodape">
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>
