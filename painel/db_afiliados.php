<?php

require_once("../API/Conexao_MYSQL.php");

echo '
<title>Painel - FourWeeks</title>
<link rel="shortcut icon" href="https://www.fourweeks.com.br/4weeks.ico">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.16/r-2.2.0/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.16/r-2.2.0/datatables.min.js"></script>
<script>
$("table").ready(function(){
  $("table").dataTable( {
    "paging": false,
    "searching": false
} );
});
</script>
';

echo '

<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a class="navbar-brand" href="https://www.fourweeks.com.br/painel">Painel - FourWeeks</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-left" action="" method="get">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pesquisar" name="p" id="p">
      </div>
      <button type="submit" class="btn btn-default">OK</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="lista_afiliados_para_aprovar.php?m=aprovar_todos">Aprovar todos pendentes</a></li>
      <li><a href="db_afiliado_emails_todos.php">Enviar E-mail</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

';

if ($_GET['p'] != null){
$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados WHERE id = '".anti_inje($_GET['p'])."' OR cupom_cod LIKE '%".anti_inje($_GET['p'])."%' OR nome LIKE '%".anti_inje($_GET['p'])."%' OR email LIKE '%".anti_inje($_GET['p'])."%' OR status LIKE '%".anti_inje($_GET['p'])."%' ORDER BY id DESC LIMIT 200");
}else{
$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados ORDER BY id DESC LIMIT 200");
}

$LISTA_N = mysqli_num_rows ($LISTA);
if (!$LISTA_N == 0) {

echo '
<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>Cupom</th>
<th>Nome</th>
<th>E-mail</th>
<th>Status</th>
<th>Indicado</th>
<th>Viws pagina</th>
<th>Emails enviados</th>
<th>Assunto do ultimo email</th>
<th>Enviar um e-mail</th>
<th>E-mail para aprovar</th>
<th>Download da Ficha Cadastral</th>
</tr>
</thead>
<tbody>
';

while($LISTAS = mysqli_fetch_array($LISTA)){
if($LISTAS['ficha_cadastral'] != null){$Ficha = '<a href="'.$LISTAS['ficha_cadastral'].'" download>Baixar >></a>';}else{$Ficha = 'NULL';}
if($LISTAS['status_email'] == "RECEBER_EMAILS"){$ENVIAR_EMAIL = '<a href="db_afiliado_enviar_email.php?id='.$LISTAS['id'].'">Enviar e-mail >></a>';}else{$ENVIAR_EMAIL = 'NAO_RECEBER_EMAILS';}
echo '
<tr>
<th scope="row">'.$LISTAS['id'].'</th>
<td>'.$LISTAS['cupom_cod'].'</td>
<td>'.$LISTAS['nome'].'</td>
<td>'.$LISTAS['email'].'</td>
<td>'.$LISTAS['status'].'</td>
<td>'.$LISTAS['veio_por'].'</td>
<td>'.$LISTAS['abriu_pg_conclusao'].'</td>
<td>'.$LISTAS['emails_enviados'].'</td>
<td>'.$LISTAS['assunto_ultimo_email'].'</td>
<td>'.$ENVIAR_EMAIL.'</td>
<td><a href="db_afiliado_email_aprovacao.php?id='.$LISTAS['id'].'" target="_blank">Ler e-mail >></a></td>
<td>'.$Ficha.'</td>
</tr>
';
}

echo '
</tbody>
</table>
';

}else{
echo 'Lista vazia!!';
}
?>
