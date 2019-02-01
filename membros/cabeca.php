<? $painel_atual = "admin";?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRAÇÃO INSTITUTO EDUCACIONAL VENCER </title>
	<meta http-equiv="Content-Language" content="pt-br" charset="utf-8">


<!DOCTYPE  ">
<html ">
<head>
  <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<? require "../config.php"; ?>
<link href="css/topo.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<link href="../css/lightbox.css" rel="stylesheet" />


<link rel="stylesheet" href="../jquery.superbox.css" type="text/css" media="all" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

	<script type="text/javascript" src="../jquery.superbox-min.js"></script>
	<script type="text/javascript">

		$(function(){

			$.superbox.settings = {

				closeTxt: "Fechar",

				loadTxt: "Carregando...",

				nextTxt: "Next",

				prevTxt: "Previous"

			};

			$.superbox();

		});

	</script>
</head>

<body>
<div id="box_topo">
 
 <div id="logo">
  <img src="../img/logo.png" />
 </div><!-- logo -->
 
 <div id="campo_busca">
  <form name="" method="post" action="" enctype="multipart/form-data">
   <input type="text" name="key" /><input class="input" type="submit" name="search" value="" />
  </form>
 </div><!-- campo_busca -->
 
 <div id="mostra_login">
  <h1><strong>Seja Bem Vindo - Seu código de acesso é: <? echo @$code; ?></strong> <strong><a href="../config.php?pg=sair">Sair</a></strong></h1>
 </div><!-- mostra_login -->
</div><!-- box_topo -->

<div id="box_menu">
 
 <div id="menu_topo">
  <ul>
   <img src="img/separador_menu.png" />
   <li><a href="index.php">HOME</a></li>
   <img src="img/separador_menu.png" />
   <li><a href="cursos_e_disciplina.php?pg=cursoedisciplinas">CURSOS E DISCIPLINAS</a>
    <ul>
     <li><a href="cursos_e_disciplina.php?pg=curso">Cadastrar Curso</a></li>
     <li><a href="cursos_e_disciplina.php?pg=disciplina">Cadastrar Disciplina</a></li>
     <li><a href="cursos_e_disciplina.php?pg=cursoedisciplinas">Cursos & Disciplinas</a></li>
    </ul>
   </li>
   <img src="img/separador_menu.png" />
   <li><a href="professores.php?pg=todos">PROFESSORES</a></li>   
   <img src="img/separador_menu.png" />
   <li><a href="estudantes.php?pg=todos">ESTUDANTES</a></li>
   <img src="img/separador_menu.png" />
   <li><a href="setor_financeiro.php">SETOR FINANCEIRO</a></li>
   <img src="img/separador_menu.png" />
   <li><a href="">RELATÓRIOS</a>
    <ul>
     <li><a href="relatorios.php?tipo=alunos&s=<? echo base64_encode("SELECT * FROM estudantes WHERE nome != ''"); ?>">Alunos</a></li>
     <li><a href="relatorios.php?tipo=professor&s=<? echo base64_encode("SELECT * FROM professores WHERE nome != ''"); ?>">Professores</a></li>
     <li><a href="fluxo_de_caixa.php?s=<? echo base64_encode("SELECT * FROM fluxo_de_caixa WHERE m = '$m' AND a = '$y'"); ?>">Fluxo de caixa</a></li>
    </ul>
   </li>
   <img src="img/separador_menu.png" />
   <li><a href="suporte_tecnico.php">SUPORTE TECNICO</a></li>
   <img src="img/separador_menu.png" />
   <li><a href="">EXTRAS</a>
    <ul>
    <li><a href="funcionarios.php?pg=todos">Funcionários</a></li>
    </ul>
   </li>
   <img src="img/separador_menu.png" />   
  </ul>
 </div><!-- menu_topo -->

</div><!-- box_menu -->
</body>
</html>