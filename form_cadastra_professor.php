<?php
	if(isset($_GET['cadastrar'])){
	include("conecta.php");
	
	try{
		$matricula = $_GET['matricula'];
		$sql ="INSERT INTO 
				tb_professor(matricula)
					VALUES(:valor1)";
		$stmt = $conexao->prepare($sql);
		$stmt->bindParam(':valor1',$matricula);
		$rs = $stmt->execute();
		if($rs){ echo "OK";}else{echo "Erro";}		
		}catch(PDOException $e){
			echo "Erro:" . $e->getMessage();
			}
		
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro de Professor:</title>
</head>

<body>
	<form action="#" method="get">
    	<p><label>Matrícula:</label></p>
        <p><input type="number" name="matricula"></p>
        <p><input type="submit" value="Cadastrar"
         		name="cadastrar"></p>
    
   </form>
</body>
</html>