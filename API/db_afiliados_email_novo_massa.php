<?php

require_once("Conexao_MYSQL.php");
require_once("API-email.php");

if ($_POST['eu'] == null){$d_eu = $_GET['eu'];}else{$d_eu = $_POST['eu'];}
if ($_POST['assunto'] == null){$d_assunto = $_GET['assunto'];}else{$d_assunto = $_POST['assunto'];}
if ($_POST['enviados'] == null){$d_enviados = $_GET['enviados'];}else{$d_enviados = $_POST['enviados'];}
if ($_POST['texto'] == null){$d_texto = $_GET['texto'];}else{$d_texto = $_POST['texto'];}
$sec = 20;
if($_GET['inicio'] == null){$inicio = 0;}else{$inicio = $_GET['inicio'];}
$fim = 10;
$p_inicio = $inicio+$fim;
$POSTS_GETS = '?inicio='.$p_inicio.'&eu='.$d_eu.'&assunto='.$d_assunto.'&enviados='.$d_enviados.'&texto='.$d_texto.'';
$POSTS_GETS_0 = '?inicio=0&eu='.$d_eu.'&assunto='.$d_assunto.'&enviados='.$d_enviados.'&texto='.$d_texto.'';

echo '
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
';


if ($d_enviados == "TODOS"){
$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' ORDER BY id DESC LIMIT ".$inicio.",".$fim."");
$LISTA_T = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' ORDER BY id DESC");
$LISTA_TOTAL = mysqli_num_rows($LISTA_T);
}else
if ($d_enviados == "NUNCA"){
$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' AND abriu_pg_conclusao = '0' ORDER BY id DESC LIMIT ".$inicio.",".$fim."");
$LISTA_T = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' AND abriu_pg_conclusao = '0' ORDER BY id DESC");;
$LISTA_TOTAL = mysqli_num_rows($LISTA_T);
}else
if ($d_enviados == "JA_RECEBEU"){
$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' AND abriu_pg_conclusao >= '1' ORDER BY id DESC LIMIT ".$inicio.",".$fim."");
$LISTA_T = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status_email = 'RECEBER_EMAILS' AND abriu_pg_conclusao >= '1' ORDER BY id DESC");
$LISTA_TOTAL = mysqli_num_rows($LISTA_T);
}
$LISTA_N = mysqli_num_rows ($LISTA);
if (!$LISTA_N == 0) {
echo '

<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="navbar-brand" href="https://www.fourweeks.com.br/painel">Painel - FourWeeks</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
      <li><a><h4>Fila de espera '.number_format($inicio,0,",",".").' de '.number_format($LISTA_TOTAL,0,",",".").'</h4></a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

';

while($LISTAS = mysqli_fetch_array($LISTA)){

echo '<br><hr><br>'.$LISTAS['id'].' - '.$LISTAS['email'].'<br>';

$TEXTO = str_replace("(ID)", $LISTAS['id'], str_replace("(EMAIL)", $LISTAS['email'], str_replace("(NOME)", $LISTAS['nome'], $d_texto)));
$codigo_html_email = $TEXTO.'<div style="text-align: center;"><br><br><br><p style="font-size: 10px;">Caso não queira mais receber e-mails nossos <a href="https://www.fourweeks.com.br/cancelar_inscricao_emails/'.$LISTAS['id'].'">clique aqui</a></p></div>';
if (strpos(enviar_email($d_eu,$LISTAS['email'],$d_assunto,$codigo_html_email), 'OK') !== false) {
echo 'OK: email enviado!!<br>';

$ENVIADOS = $LISTAS['emails_enviados']+1;
if (mysqli_query($connect, "UPDATE `afiliados` SET `emails_enviados`= '".$ENVIADOS."', `assunto_ultimo_email`= '".$d_assunto."' WHERE id = '".$LISTAS['id']."'")) {
echo "OK: Dados modifcado.<br>";
}else{
echo "ERRO: Dados não modificado.<br>";
}

}else{
echo 'ERRO: email não enviado!!<br>';
}

}

sleep($sec);
echo '
<script language="JavaScript"> 
window.location=\'https://www.fourweeks.com.br/API/db_afiliados_email_novo_massa.php'.$POSTS_GETS.'\'; 
</script> 
 
<noscript> 
Se não for direcionado automaticamente, clique <a href=\'https://www.fourweeks.com.br/API/db_afiliados_email_novo_massa.php'.$POSTS_GETS.'\'>aqui</a>. 
</noscript>
';
header('Location: https://www.fourweeks.com.br/API/db_afiliados_email_novo_massa.php'.$POSTS_GETS);

}else{
echo '

<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="navbar-brand" href="https://www.fourweeks.com.br/painel">Painel - FourWeeks</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
      <li><a><h4>Fila de espera acabou!!</h4></a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

';

if ($d_enviados == "NUNCA"){
echo '
<script language="JavaScript"> 
window.location=\'https://www.fourweeks.com.br/API/db_emails_inscritos_novo_massa.php'.$POSTS_GETS_0.'\'; 
</script> 
 
<noscript> 
Se não for direcionado automaticamente, clique <a href=\'https://www.fourweeks.com.br/API/db_emails_inscritos_novo_massa.php'.$POSTS_GETS_0.'\'>aqui</a>. 
</noscript>
';
header('Location: https://www.fourweeks.com.br/API/db_emails_inscritos_novo_massa.php'.$POSTS_GETS_0);
}


}


?>