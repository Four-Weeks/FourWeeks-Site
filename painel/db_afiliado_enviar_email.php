<?php

require_once("../API/Conexao_MYSQL.php");
require_once("../API/API-email.php");

$ID = anti_inje($_GET['id']);
$afiliado = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM afiliados WHERE id = '".$ID."'"));

if ($_POST['eu'] == null){$d_eu = $_GET['eu'];}else{$d_eu = $_POST['eu'];}
if ($_POST['assunto'] == null){$d_assunto = $_GET['assunto'];}else{$d_assunto = $_POST['assunto'];}
if ($_POST['texto'] == null){$d_texto = $_GET['texto'];}else{$d_texto = $_POST['texto'];}

?>

<title>Painel - FourWeeks</title>
<link rel="shortcut icon" href="https://www.fourweeks.com.br/4weeks.ico">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/lang/summernote-pt-BR.min.js"></script>

<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="navbar-brand" href="https://www.fourweeks.com.br/painel">Painel - FourWeeks</a>
  </div>
</div><!-- /.container-fluid -->
</nav>


<?php

if ($_GET['e'] == "1"){

  echo '<br><hr><br>'.$afiliado['id'].' - '.$afiliado['email'].'<br>';
  
  $TEXTO = str_replace("(ID)", $afiliado['id'], str_replace("(EMAIL)", $afiliado['email'], str_replace("(NOME)", $afiliado['nome'], $d_texto)));
  $codigo_html_email = $TEXTO.'<div style="text-align: center;"><br><br><br><p style="font-size: 10px;">Caso não queira mais receber e-mails nossos <a href="https://www.fourweeks.com.br/cancelar_inscricao_emails/afiliado_'.$afiliado['id'].'">clique aqui</a></p></div>';
  
  $R_E_E = enviar_email($d_eu,$afiliado['email'],$d_assunto,$codigo_html_email);
  if ($R_E_E == 'OK') {
  echo 'OK: email enviado!!<br>';
  
  $ENVIADOS = $afiliado['emails_enviados']+1;
  if (mysqli_query($connect, "UPDATE `afiliados` SET `emails_enviados`= '".$ENVIADOS."',`assunto_ultimo_email`= '".$d_assunto."' WHERE id = '".$afiliado['id']."'")) {
  echo "OK: Dados modifcado.<br>";
  }else{
  echo "ERRO: Dados não modificado.<br>";
  }
  
  echo "<br><a href='https://www.fourweeks.com.br/painel/db_afiliados.php'>Voltar</a>";

  }else{
  echo 'ERRO: '.$R_E_E.'<br>';
  echo "<br><a href='https://www.fourweeks.com.br/painel/db_afiliados.php'>Voltar</a>";
  }



  return;
}
?>


<div class="container">
<form action="?id=<?php echo $afiliado['id'];?>&e=1"  method="post" align="center">

<input class="form-control" name="eu" id="eu" value="robo@fourweeks.com.br" required disabled type="text">
<br>
<?php
$LISTA = mysqli_query ($connect, "SELECT * FROM emails_modelos ORDER BY id DESC");
$LISTA_N = mysqli_num_rows ($LISTA);
if (!$LISTA_N == 0) {
echo '
<script>
function AutoCompleteForm(){
  $("#assunto").val($("#modelo option:selected").text());
  $("#texto").summernote("code", $("#modelo").val());
}
</script>
<select class="form-control" name="modelo" id="modelo" onchange="javascript:AutoCompleteForm();">';
echo '<option value="">Escolha um modelo de e-mail.</option>';
while($LISTAS = mysqli_fetch_array($LISTA)){
echo '<option value=\''.$LISTAS['texto'].'\'>'.$LISTAS['assunto'].'</option>';
}

echo '</select>';
}
?>
<br>
<input class="form-control" name="para" id="para" value="<?php echo $afiliado['email']; ?>" required disabled type="text">
<br>
<input class="form-control" name="assunto" id="assunto" placeholder="Assunto" required type="text">
<br>
<center><span>Ei, você pode chamar as seguintes chaves no e-mail (ID), (NOME) e (EMAIL)</span></center>
<textarea class="form-control" required name="texto" id="texto" rows="15" placeholder="Texto do email, pode contecer HTML."></textarea>
<br>
<input class="btn" type="submit" value="Enviar">
</form>
</div>

<script>
$( document ).ready(function() {
  $("#texto").summernote();
});
</script>
';

