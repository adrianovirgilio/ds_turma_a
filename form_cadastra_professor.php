<?php
	if(isset($_GET['cadastrar'])){
	include("conecta.php");
	
	try{
		$nome = $_GET['nome'];
		$email = $_GET['email'];
		$telefone = $_GET['telefone'];
		$login = $_GET['login'];
		$senha = md5($_GET['senha']);
		$sql ="INSERT INTO tb_professor(nome,email,telefone,login,senha)VALUES(?,?,?,?,?)";
		$stmt = $conexao->prepare($sql);
		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$email);
		$stmt->bindParam(3,$telefone);
		$stmt->bindParam(4,$login);
		$stmt->bindParam(5,$senha);
		$rs = $stmt->execute();
		if($rs)
		 {
		   echo "<script>alert('Dados gravados com sucesso!');</script>";
		 }
		  else
		 {
		   echo "<script>alert('Falha ao tentar gravar o registro!');</script>";
		 }		
		}catch(PDOException $e)
		{
			echo "Erro:" . $e->getMessage();
		}
		
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro de Professor:</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">
</head>

<body>
 <div id="todoconteudo">    
    
        <div id="banner">
        	
        </div>
        
        <div id="menu">
          <ul>
            <li><a href="#">Home</a></li>           
            <li class="dropdown">
                <a href="javascript:void(0)" 
                     class="dropbtn">Consultar</a>
                <div class="dropdown-content">
                  <a href="#">Aluno</a>
                  <a href="#">Professor</a>
                  <a href="#">Turma</a>
                </div>
 			</li>
            <!-- Aqui começa o seu menu-drop down -->
            <li class="dropdown">
                <a href="javascript:void(0)" 
                     class="dropbtn">Cadastrar</a>
                <div class="dropdown-content">
                  <a href="#">Aluno</a>
                  <a href="form_cadastra_professor.php">Professor</a>
                  <a href="#">Turma</a>
                </div>
       </li>
       <li><a href="logout.php">Sair</a></li>
		</ul>
        </div>
        
        <div id="corpo" style="height:100%">
        <form action="#" method="get">
    	<!--<p><label>Matrícula:</label></p>
        <p><input type="number" name="matricula"></p> -->
        
        <p><label>Nome do Professor:</label></p>
        <p><input type="text" name="nome" size="50" maxlength="50" required></p>
        
        <p><label>E-mail:</label></p>
        <p><input type="email" name="email" size="50" maxlength="50" required></p>
        
        <p><label>Login:</label></p>
        <p><input type="text" name="login" size="20" maxlength="10" required></p>
        
        <p><label>Senha:</label></p>
        <p><input type="password" name="senha" size="20" maxlength="20" required></p>
        
        <p><label>Telefone:</label></p>
        <p><input type="tel" name="telefone" size="15" maxlength="15" required></p>
        
        <p><input type="submit" value="Cadastrar" name="cadastrar"></p>    
   </form>        
        </div>        
        <div id="rodape">
        </div>       
        
    </div>
 </body>
</html>