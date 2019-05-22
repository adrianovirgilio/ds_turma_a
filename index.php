<?php
 session_start();
if((!isset($_SESSION['login']) == true)
    and (!isset ($_SESSION['senha']) == true))
 {
  	unset($_SESSION['login']);
  	unset($_SESSION['senha']);
  	header('location:index.html');
  }
?>
<!--
 # Etec Tenente Aviador Gustavo Klug
 # Curso: Informática Para Internet
 # 3º Módulo -Turma B
 # Disciplina: Desenvolvimento de Software II
 # Competências: Analisar a orientação a objetos e sua aplicação em sistemas web; Integrar sistemas web com sistemas gerenciadores de banco de dados.
 # Prof. Adriano Virgílio
 # Data: 04/05/2019
-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página Principal</title>
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
        
        <div id="corpo" style="height:300px">
        
        </div>
        
        <div id="rodape">
        </div>        
        
    </div>
</body>
</html>
