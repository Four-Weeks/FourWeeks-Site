<?php

require_once("../API/Conexao_MYSQL.php");
require_once("../API/API-email.php");

echo '
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
';

if ($_GET['m'] == "aprovar_todos"){

$LISTA = mysqli_query ($connect, "SELECT * FROM afiliados WHERE status = 'aguardando_aprovacao_form' ORDER BY id DESC");
$LISTA_N = mysqli_num_rows ($LISTA);
if (!$LISTA_N == 0) {
while($LISTAS = mysqli_fetch_array($LISTA)){

echo '<br><hr><br>'.$LISTAS['nome'].'<br>';

$codigo_html_email = '<div style="text-align: center;"><strong><span style="font-size:20px;">'.$LISTAS['nome'].', PARAB&Eacute;NS!!!</span></strong></div><div>&nbsp;</div><div>Voc&ecirc; esta a poucos passos de se tornar um Afiliado do Produto mais desejado na atualidade,</div><div>FALAR INGL&Ecirc;S!!!.</div><div>&nbsp;</div><div>Por favor, acompanhe com aten&ccedil;&atilde;o os passos descritos no link, para concluirmos sua afilia&ccedil;&atilde;o</div><div>e voc&ecirc; come&ccedil;ar a ir em busca das suas metas pessoais, profissionais e conquistar o mundo.</div><div>&nbsp;</div><div>Acesse o link abaixo entenda cada passo final da concretiza&ccedil;&atilde;o de sua Afilia&ccedil;&atilde;o, muito</div><div>importante seu sucesso j&aacute; come&ccedil;ou a ser trilhado quando voc&ecirc; pensou como vender o produto</div><div>e estabeleceu sua Meta de venda nos pr&oacute;ximos 90 dias!</div><div>&nbsp;</div><div>Ent&atilde;o agora &eacute; somente clicar e percorrer os Passos e vamos em rumo de sua liberdade</div><div>financeira!!</div><div>&nbsp;</div><div>Link: <a href="https://www.fourweeks.com.br/afiliacao-conclusao/'.$LISTAS['id'].'" target="_blank">https://www.fourweeks.com.br/afiliacao-conclusao/'.$LISTAS['id'].'</a></div><div>&nbsp;</div><div>&nbsp;</div><div>Equipe Fourweeks</div><div>Venha pro lado de c&aacute; e conquiste o Mundo!</div>';

$R_E_E = enviar_email("attendance@fourweeks.com.br",$LISTAS['email'],"Afiliado FourWeeks!!!",$codigo_html_email);
if ($R_E_E == 'OK') {
echo 'OK: email enviado!!<br>';

if (mysqli_query($connect, "UPDATE `afiliados` SET `status`= 'aguardando_comprar_curso' WHERE id = '".$LISTAS['id']."'")) {
echo "OK: Usuario modifcado.<br>";
}else{
echo "ERRO: Usuario não modificado.<br>";
}

}else{
echo 'ERRO: '.$R_E_E.' !!<br>';
}

}
echo "<br><a href='https://www.fourweeks.com.br/painel/db_afiliados.php'>Voltar</a>";
return;
}else{
echo 'Lista vazia!!<br>';
echo "<br><a href='https://www.fourweeks.com.br/painel/db_afiliados.php'>Voltar</a>";
return;
}


}else{
    echo "<br><a href='https://www.fourweeks.com.br/painel/db_afiliados.php'>Voltar</a>";
}


?>