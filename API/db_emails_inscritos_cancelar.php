<?php

require_once("../API/Conexao_MYSQL.php");

$ID = anti_inje($_GET['id']);
$ID_R = str_replace("afiliado_", "", $ID);

if (strpos($ID, 'afiliado_') !== false) {
$incricao = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM afiliados WHERE id = '".$ID_R."'"));  
}else{
$incricao = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM emails_inscritos WHERE id = '".$ID_R."'"));
}

if ($incricao['id'] == null){
  header("Location: http://www.fourweeks.com.br/");
  return;
}

?>
<title>Cancelamento de E-mail - FourWeeks</title>
<link rel="shortcut icon" href="https://www.fourweeks.com.br/4weeks.ico">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="navbar-brand" href="https://www.fourweeks.com.br/">FourWeeks</a>
  </div>
</div><!-- /.container-fluid -->
</nav>


<?php

if (strpos($ID, 'afiliado_') !== false) {
$C_incricao = mysqli_query($connect, "UPDATE `afiliados` SET `status_email`= 'NAO_RECEBER_EMAILS' WHERE id = '".$incricao['id']."'");  
}else{
$C_incricao = mysqli_query($connect, "UPDATE `emails_inscritos` SET `status`= 'NAO_RECEBER_EMAILS' WHERE id = '".$incricao['id']."'");
}

if ($C_incricao) {
  echo '<center>
  <h1>Feito!!!</h1>
  <h1>Você não receberá mais e-mail nosso.</h1>
  </center>
  ';
}else{
  echo '<center>
  <h1>ERRO</h1>
  <h1>tente novamente mais tarde.</h1>
  </center>
  ';
}


?>
