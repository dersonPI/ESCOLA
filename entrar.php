<?php session_start();?>

<?php
//header('Content-type: text/html; charset=iso-8859-1');?>



<title>escola online </title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="img/logo2.png" rel="shortcut icon" />
<?php require("conexao.php"); ?>
</head>


<body>
<?php include_once("./operacional.php"); ?>
<div class="text-center">
  <img src="img/logo.png" class="rounded mx-auto d-block" alt="...">
</div>


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
        
     
      $_SESSION['code'] = $code;
      $_SESSION['password'] = $password;
      $_SESSION['painel'] = $painel;
      
      if($painel == 'admin'){
        echo "<script language='javascript'>window.location='admin';</script>";
      }else if($painel == 'portaria'){
        echo "<script language='javascript'>window.location='portaria';</script>";
      }else if($painel == 'Tesoureiro'){
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
<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>
<style>
    
    

body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}


.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}




</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    
    
    <script type="text/javascript">
        
        
        $( document ).ready(function() {
  
    loadProfile();
});

function getLocalProfile(callback){
    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
    var profileName        = localStorage.getItem("PROFILE_NAME");
    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

    if(profileName !== null
            && profileReAuthEmail !== null
            && profileImgSrc !== null) {
        callback(profileImgSrc, profileName, profileReAuthEmail);
    }
}

function loadProfile() {
    if(!supportsHTML5Storage()) { return false; }
  
    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
       
        $("#profile-img").attr("src",profileImgSrc);
        $("#profile-name").html(profileName);
        $("#reauth-email").html(profileReAuthEmail);
        $("#inputEmail").hide();
        $("#remember").hide();
    });
}

function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}


        </script>
