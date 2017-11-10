<?php

require_once("../API/Conexao_MYSQL.php");

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

if ($_GET['s'] == "OK"){

$get_id = mysqli_fetch_array(mysqli_query($connect, "SELECT MAX(id) +1 FROM afiliados"));
if ($get_id[0] == null){$get_id = 1;}else{$get_id = $get_id[0];}
$primeiroNome = explode(" ", $_POST['nome']);
$cupom_cod = tirarAcentos(strtoupper($primeiroNome[0])."_".$get_id);

if ($_POST['senha'] == null){$senha = null;}else{$senha = hash('sha256', $_POST['senha']);}

if (mysqli_query($connect, "INSERT INTO `afiliados`(`cupom_cod`, `nome`, `email`, `senha`, `status`, `email_aprovacao`) VALUES ('".$cupom_cod."','".anti_inje($_POST['nome'])."','".anti_inje($_POST['email'])."','".$senha."','".anti_inje($_POST['status'])."','".anti_inje($_POST['email_aprovacao'])."')")) {
echo '<h2 class="fadeInDown animated" style="text-align: center;color: #5cb85c;">OK: dados salvos !</h2><br><p align="center">LINK GERADO: <a href="https://www.fourweeks.com.br/afiliacao-conclusao/'.$get_id.'" target="_blank">https://www.fourweeks.com.br/afiliacao-conclusao/'.$get_id.'</a> <br> e-mail enviado!!!</p><center><br><a href="https://www.fourweeks.com.br/painel/CadastroAfiliadoProvisorio.php">Adicionar outro</a></center>';
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script>
        var codigo_html_email = '<div style="text-align: center;"><strong><span style="font-size:20px;"><?php echo anti_inje($_POST['nome']); ?>, PARAB&Eacute;NS!!!</span></strong></div><div>&nbsp;</div><div>Voc&ecirc; esta a poucos passos de se tornar um Afiliado do Produto mais desejado na atualidade,</div><div>FALAR INGL&Ecirc;S!!!.</div><div>&nbsp;</div><div>Por favor, acompanhe com aten&ccedil;&atilde;o os passos descritos no link, para concluirmos sua afilia&ccedil;&atilde;o</div><div>e voc&ecirc; come&ccedil;ar a ir em busca das suas metas pessoais, profissionais e conquistar o mundo.</div><div>&nbsp;</div><div>Acesse o link abaixo entenda cada passo final da concretiza&ccedil;&atilde;o de sua Afilia&ccedil;&atilde;o, muito</div><div>importante seu sucesso j&aacute; come&ccedil;ou a ser trilhado quando voc&ecirc; pensou como vender o produto</div><div>e estabeleceu sua Meta de venda nos pr&oacute;ximos 90 dias!</div><div>&nbsp;</div><div>Ent&atilde;o agora &eacute; somente clicar e percorrer os Passos e vamos em rumo de sua liberdade</div><div>financeira!!</div><div>&nbsp;</div><div>Link: <a href="https://www.fourweeks.com.br/afiliacao-conclusao/<?php echo $get_id; ?>" target="_blank">https://www.fourweeks.com.br/afiliacao-conclusao/<?php echo $get_id; ?></a></div><div>&nbsp;</div><div>&nbsp;</div><div>Equipe Fourweeks</div><div>Venha pro lado de c&aacute; e conquiste o Mundo!</div>';

            $.get("../API/enviar_email.php", { eu: "attendance@fourweeks.com.br", para: "<?php echo $_POST['email']; ?>", assunto: "Afiliado FourWeeks!!!", html: codigo_html_email }).done(function (data) {
                if (data == "OK") {
                    console.log("OK");
                    }else{
                        console.log(data);
                    }
            });
</script>
<?
return;
} else {
echo '<h2 class="fadeInDown animated" style="text-align: center;color: #d9534f;">ERRO: não conseguimos salvar os dados, tente novamente mais tarde.</h2>';
return;
}

}else

?>

<form action="?s=OK"  method="post" align="center">

<input name="nome" id="nome" placeholder="Nome completo" required type="text">
<br><br>
<input name="email" id="email" placeholder="Email" required type="email">
<br><br>
<input name="senha" id="senha" placeholder="Senha (Apenas para as pessoas que já compro o curso)" type="text">
<br><br>
<select name="status" id="status" required>
  <option value="aguardando_aprovacao_form">aguardando_aprovacao_form</option>
  <option value="aguardando_comprar_curso" selected>aguardando_comprar_curso</option>
  <option value="aprovado_trabalhando">aprovado_trabalhando</option>
  <option value="cancelando_afiliacao">cancelando_afiliacao</option>
  <option value="cancelado">cancelado</option>
</select>
<br><br>
<textarea required name="email_aprovacao" id="email_aprovacao" rows="15" placeholder="E-mail dos dados que ele prencheu."></textarea>
<br><br>
<input type="submit" value="OK">
</form>