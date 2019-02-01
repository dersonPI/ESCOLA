<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  
?>

	<?php 	include_once("../conexao.php");


	$code = $_SESSION['code'];
	$password = $_SESSION['password'];
	$painel = $_SESSION['painel'];

	if($password == ''){
		echo "<script language='javascript'>window.alert('parou nesse!');window.location='index.php';</script>";
	}else if($code == ''){
		echo "<script language='javascript'>window.alert('parou aqui = array('' => , );');window.location='index.php';</script>";
	}else{

		$login_1 = mysqli_query($link,"SELECT * FROM acesso_ao_sistema WHERE code = '$code' AND senha = '$password'");
		$conta_login_1 = mysqli_num_rows($login_1);
		if($conta_login_1 == ''){	
		echo "<script language='javascript'>window.alert('VOCÊ SAIU DO SISTEMA COM SUCESSO!');window.location='index.php';</script>";
		}else{

		while($mostra_dados = mysqli_fetch_array($login_1)){
	 		
			$code = $mostra_dados['code'];
			
			$login_2 = mysqli_query($link,"SELECT * FROM estudantes WHERE code = '$code'");
				while($show = mysqli_fetch_array($login_2)){
					
					$serie = $show['serie'];
					$turno = $show['turno'];
		
		 if(@$painel = $_SESSION['painel'] != $painel_atual){
		  echo "<script language='javascript'>window.alert('Erro ao acessar o sistema!');window.location='index.php';</script>";
		 }else{
		
		 }
		}	
	  }
	 }
	}
	?>

	<?php if(@$_GET['pg'] == 'sair'){

	@session_destroy();

	$_SESSION['code'];
	$_SESSION['nome'];
	$_SESSION['password'];
	$_SESSION['painel'];

	echo "<script language='javascript'>window.location='index.php';</script>";

	}?>