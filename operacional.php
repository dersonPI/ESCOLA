
<? // Este comando faz com que o sistema feche automáticamente o periodo de entrega do trabalho bimentral 
$sql_1 =  mysqli_query($link,"SELECT * FROM trabalhos_bimestrais");
$conta_sql_1 = mysqli_num_rows($sql_1);
if($conta_sql_1 == ''){
}else{
 while($res_1 = mysqli_fetch_array($sql_1)){
	 
	 $data_encerramento = $res_1['data_entrega'];
	 $date_hoje = date("d/m/Y");

	 $id = $res_1['id'];
	 
	 if($date_hoje == $data_encerramento){
		 
		 $sql_2 = mysqli_query($link,"UPDATE trabalhos_bimestrais SET status = 'Encerrado' WHERE id = '$id'");
	 
  }
 }
}
?>


<? // Este comando faz com que o sistema feche automáticamente o periodo de entrega dos trabalhos extras 
$sql_1 =  mysqli_query($link,"SELECT * FROM trabalhos_extras");
$conta_sql_1 = mysqli_num_rows($sql_1);
if($conta_sql_1 == ''){
}else{
 while($res_1 = mysqli_fetch_array($sql_1)){
	 
	 $data_encerramento = $res_1['data_entrega'];
	 $date_hoje = date("d/m/Y");

	 $id = $res_1['id'];
	 
	 if($date_hoje == $data_encerramento){
		 
		 $sql_2 = mysqli_query($link,"UPDATE trabalhos_extras SET status = 'Encerrado' WHERE id = '$id'");
	 
  }
 }
}
?>
