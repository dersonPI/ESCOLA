<?php $painel_atual = "admin";?>
<?php require_once("../config.php");

?>
<?php header('Content-type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<head>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

 
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css"></script>


<style>
.alinhadoEsquerda {text-align:left;}
.alinhadoCentro {text-align:center;}
.alinhadoDireita {text-align:right;}

.textoRealce-E {color:#2C55FF;}
.textoRealce-C {color:green;}
.textoRealce-D {color:red;}

td {padding: 8px; border: 1px solid #E4E4E4;}
</style>



  <!-- =======================================================
   1João 4:8
  
 " Quem não ama não conhece a Deus, porque Deus é amor."   
  
  ======================================================= -->
 <style>
        body {
    color: black;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #F0F0F0;
  font-size: 15px;
  color: #666;
  font-family: 'Bitter', sans-serif;
}
.content {
  height: 200px;
}
a { text-decoration: none; }


.container {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.nav-xbootstrap {
  display: block;
  margin-bottom: 15px 0;
  background: #33b82e;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  border-radius: 3px;
}
.iconsize {
    font-size: 12px; 
    top: 2px; 
    left: 3px;
}

.nav-xbootstrap ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: block;
}

.nav-xbootstrap li {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-block;
  position: relative;
  font-size: 14;
  color: #def1f0;
}

.nav-xbootstrap li a {
  padding: 15px 20px;
  font-size: 14;
  color: #def1f0;
  display: inline-block;
  outline: 0;
  font-weight: 400;
  text-decoration: none;
}

.nav-xbootstrap li:hover ul.dropdown { 
    display: block; 
}

.nav-xbootstrap li ul.dropdown {
  position: absolute;
  display: none;
  width: 200px;
  background: #258a39;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  padding-top: 0;
}

.nav-xbootstrap li ul.dropdown li {
  display: block;
  list-style-type: none;
}

.nav-xbootstrap li ul.dropdown li a {
  padding: 15px 20px;
  font-size: 15px;
  color: #fff;
  display: block;
  font-weight: 400;
}

.nav-xbootstrap li ul.dropdown li:last-child a { border-bottom: none; }

.nav-xbootstrap li:hover a {
  background: #258a39;
  color: #fff !important;
}

.nav-xbootstrap li:first-child:hover a { border-radius: 3px 0 0 3px; }

.nav-xbootstrap li ul.dropdown li:hover a { background: rgba(0,0,0, .1); }

.nav-xbootstrap li ul.dropdown li:first-child:hover a { border-radius: 0; }

.nav-xbootstrap li:hover .arrow-down { border-top: 5px solid #fff; }

.arrow-down {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #258a39;
  position: relative;
  top: 15px;
  right: -5px;
  content: '';
}
.title-mobile {
  display: none;
}
 @media only screen and (max-width:900px) {

.nav-xbootstrap {
  background: #fff;
  width: 200px;
  height: 100%;
  display: block;
  position: fixed;
  left: -200px;
  top: 0px;
  -webkit-transition: left 0.25s ease;
  -moz-transition: left 0.25s ease;
  -ms-transition: left 0.25s ease;
  -o-transition: left 0.25s ease;
  transition: left 0.25s ease;
  margin: 0;
  border: 0;
  border-radius: 0;
  overflow-y: auto;
  overflow-x: hidden;
  height: 100%;
}
.title-mobile {
  position: fixed;
  display: block;
    top: 10px;
    font-size: 20px;
    left: 100px;
    right: 100px;
    text-align: center;
    color: #FFF;
}
.nav-xbootstrap.visible {
  left: 0px;
  -webkit-transition: left 0.25s ease;
  -moz-transition: left 0.25s ease;
  -ms-transition: left 0.25s ease;
  -o-transition: left 0.25s ease;
  transition: left 0.25s ease;
}

.nav-bg-xbootstrap {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  height: 50px;
  margin: 0;
  position: absolute;
  top: 0px;
  left: 0px;
  background: #258a39;
  padding: 12px 0 0 10px;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
}

.navbar-xbootstrap {
  display: inline-block;
  vertical-align: middle;
  height: 50px;
  cursor: pointer;
  margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    padding: 12px;
}

.navbar-xbootstrap span {
  height: 2px;
  background: #fff;
  margin: 5px;
  display: block;
  width: 20px;
}

.navbar-xbootstrap span:nth-child(2) { width: 20px; }

.navbar-xbootstrap span:nth-child(3) { width: 20px; }

.nav-xbootstrap ul { padding-top: 50px; }

.nav-xbootstrap li { display: block; }

.nav-xbootstrap li a {
  display: block;
  color: #258a39;
  font-weight: 600;
}

.nav-xbootstrap li:first-child:hover a { border-radius: 0; }

.nav-xbootstrap li ul.dropdown { position: relative; }

.nav-xbootstrap li ul.dropdown li a {
  background: #258a39 !important;
  border-bottom: none;
  color: #fff !important;
}

.nav-xbootstrap li:hover a {
  background:  #258a39;
  color: #fff !important;
}

.nav-xbootstrap li ul.dropdown li:hover a {
  background: rgba(0,0,0,.1); !important;
  color: #fff !important;
}

.nav-xbootstrap li ul.dropdown li a { padding: 10px 10px 10px 30px; }

.nav-xbootstrap li:hover .arrow-down { border-top: 5px solid #fff; }

.arrow-down {
  border-top: 5px solid #258a39;
  position: absolute;
  top: 20px;
  right: 10px;
}

.cover-bg {
  background: rgba(0,0,0,0.5);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
 @media only screen and (max-width:1199px) {

.container { width: 96%; }


.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
}

    </style>
</head>



<script type="text/javascript">
  

$(document).ready(function(){
    $('.navbar-xbootstrap').click(function(){
      $('.nav-xbootstrap').toggleClass('visible');
      $('body').toggleClass('cover-bg');
    });
  });

</script>



<!-- Example split danger button -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div id="main">
  <div class="col-mod-12">
     <nav >
      <div class="nav-xbootstrap">
        
        <ul class="navbar-nav mr-auto"> 
          <li><a  href="index.php">HOME</a></li>
          <li><a  href="javascript:void(0)">CURSOS E DISCIPLINAS<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
            <ul class="dropdown">
             <li><a  href="cursos_e_disciplina.php?pg=curso">Cadastrar Curso</a></li>
             <li><a  href="cursos_e_disciplina.php?pg=disciplina">Cadastrar Disciplina</a></li>
             <li><a  href="cursos_e_disciplina.php?pg=cursoedisciplinas">Cursos & Disciplinas</a></li>
            </ul>
          </li>

          <li><a  href="javascript:void(0)" >PROFESSORES<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
            <ul class="dropdown">
            <li><a  href="professores.php?pg=todos">PROFESSORES</a></li>            
            </ul>
          </li>
          <li><a  href="javascript:void(0)" >ESTUDANTES<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
            <ul class="dropdown">
            <li><a  href="estudantes.php?pg=todos">ESTUDANTES</a></li>
           
            </ul>
          </li>
            <li><a  href="setor_financeiro.php">SETOR FINANCEIRO</a></li>
             <li><a  href="javascript:void(0)">RELATÓRIOS<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
             <ul class="dropdown">
               <li><a  href="relatorios.php?tipo=alunos&s=<?php echo base64_encode("SELECT * FROM estudantes WHERE nome != ''"); ?>">Alunos</a></li>
              <li><a  href="relatorios.php?tipo=professor&s=<?php echo base64_encode("SELECT * FROM professores WHERE nome != ''"); ?>">Professores</a></li>
               <li><a  href="fluxo_de_caixa.php?s=<?php echo base64_encode("SELECT * FROM fluxo_de_caixa WHERE m = '$m' AND a = '$y'"); ?>">Fluxo de caixa</a></li>
            </ul>
          </li>
         <li><a  href="javascript:void(0)" >EXTRAS<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
            <ul class="dropdown">
          <li><a  href="funcionarios.php?pg=todos">Funcionários</a></li>        
            </ul>
          <li><a  href="suporte_tecnico.php">SUPORTE TECNICO</a></li>
        </ul><h6 class=" text-white"><strong>Seja Bem Vindo - Seu código de acesso é: <?php echo @$code; ?></strong> <strong><a  class="navbar-toggler" href="../config.php?pg=sair">Sair</a></strong></h6>
      </div>
       <br> <br> <br> <br> <br>
    </nav>
    <div></div>   
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<title>Administração INSTITUTO EDUCACIONAL VENCER </title>
