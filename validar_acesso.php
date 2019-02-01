<?php session_start();
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
require_once('./db.class.php');
$sql = "SELECT * FROM `acesso_ao_sistema` WHERE `code` = '$usuario' AND `senha`= '$senha'";
$objDb = new db();
$link = $objDb->conecta_mysql();
$resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
   

            $status = $resultado_id['status'];
            $painel = $resultado_id['painel'];
            $code = $resultado_id['code'];
            
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
?>