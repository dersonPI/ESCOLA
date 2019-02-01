
<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>INTITUDO EDUCACIONAL VENCER </title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="img/logo2.png" rel="shortcut icon" />
<?php require("conexao.php"); ?>
</head>


<body>
<?php include_once("operacional.php"); ?>
<div id="logo">
 <img src="img/logo.png" />
</div><!-- logo -->

<div id="caixa_login">
<?php if(isset($_POST['button'])){

$code = $_POST['code'];
$password = $_POST['password'];

if($code == ''){
  echo "<h2>Por favor, digite o número do seu cartão ou o código de acesso!</h2>";
}else if($password == ''){
  echo "<h2>Por favor, digite sua senha!</h2>"; 
}else{
  
  $login_1 = mysqli_query($link,"SELECT * FROM acesso_ao_sistema WHERE code = '$code' AND senha = '$password'");
  $conta_login_1 = mysqli_num_rows($login_1);
  if($conta_login_1 == ''){ 
      echo "<h2>As Informações digitadas estão incorretas. Tente novamente!</h2>";
  }else{
      while($res_1 = mysqli_fetch_array($login_1)){
      
      $status = $res_1['status'];
      $painel = $res_1['painel'];
      $code = $res_1['code'];
      
      if($status == 'Inativo'){
         echo "<h2>Você está inativo, por favor, digiga-se a coordenação da escola para que seu acesso seja liberado!</h2>";
      }else{
        
      session_start();
      $_SESSION['code'] = $code;
      $_SESSION['password'] = $password;
      $_SESSION['painel'] = $painel;
      
      if($painel == 'admin'){
        echo "<script language='javascript'>window.location='admin';</script>";
      }else if($painel == 'portaria'){
        echo "<script language='javascript'>window.location='portaria';</script>";
      }else if($painel == 'tesouraria'){
        echo "<script language='javascript'>window.location='tesoraria';</script>"; 
      }else if($painel == 'aluno'){
        echo "<script language='javascript'>window.location='aluno';</script>"; 
      }else if($painel == 'professor'){
        echo "<script language='javascript'>window.location='professor';</script>";
      }else{
         echo "<h2>Seu acesso está correto, porém, não estamos conseguindo acessar o seu painel, por favor, digira-se a coordenação!</h2>";
      
   }
    }
   }
  }
 }
}?>

<form name="form" method="post" action="" enctype="multipart/form-data">
 <table width="400" border="0">
  <tr>
    <td><h1>Número do cartão ou código de acesso:</h1></td>
  </tr>
  <tr>
    <td><label for="textfield"></label>
    <input type="text" name="code" id="textfield"></td>
  </tr>
  <tr>
    <td><h1>Senha:</h1></td>
  </tr>
  <tr>
    <td><label for="textfield2"></label>
    <input type="password" name="password" id="textfield2"></td>
  </tr>
  <tr>
    <td><input class="input" type="submit" name="button" id="button" value="Enviar"></td>
  </tr>
  </table>
  </form>
</div><!-- caixa_login -->


</body>
</html>