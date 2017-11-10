<?php
require_once("Conexao_MYSQL.php");

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}

$get_id = mysqli_fetch_array(mysqli_query($connect, "SELECT MAX(id) +1 FROM afiliados"));
if ($get_id[0] == null){$get_id = 1;}else{$get_id = $get_id[0];}
$primeiroNome = explode(" ", $_POST['nome']);
$cupom_cod = tirarAcentos(strtoupper($primeiroNome[0])."_".$get_id);

$email_aprovacao = '
Dados digitados:

Nome: '.anti_inje($_POST['nome']).'

E-mail: '.anti_inje($_POST['email']).'

Texto: 
'.anti_inje($_POST['texto']).'
Vendas por dias: 
1º dia ao 30º = '.anti_inje($_POST['venda1']).'
31º dia ao 60º = '.anti_inje($_POST['venda2']).'
61º dia ao 90º = '.anti_inje($_POST['venda3']).'
';

if (mysqli_query($connect, "INSERT INTO `afiliados`(`cupom_cod`, `nome`, `email`, `status`, `email_aprovacao`, `veio_por`) VALUES ('".$cupom_cod."','".anti_inje($_POST['nome'])."','".anti_inje($_POST['email'])."','aguardando_aprovacao_form','".$email_aprovacao."','".anti_inje($_POST['veio_por'])."')")) {
echo "<center><h1 style='color:#00b21d;'>OK: Recebemos seu interesse em ser nosso afiliado vamos avaliar sua proposta e retornaremos no seu e-mail<br>EM BREVE<br>obrigado e boa sorte !</h1></center>";
} else {
echo "<center><h1 style='color:#b20000;'>Aconteceu um erro, tente novamente.</h1></center>";
return;
}


?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script>
            var codigo_html_email = '<!DOCTYPE html><html><body> <h3>Dados digitados:</h3> <p>Nome: <?php echo anti_inje($_POST['nome']);?></p> <p>E-mail: <?php echo anti_inje($_POST['email']);?></p> <p>Texto: <br><?php echo anti_inje($_POST['texto']);?></p> <p>Vendas por dias: <br> 1º dia ao 30º = <?php echo anti_inje($_POST['venda1']);?><br> 31º dia ao 60º = <?php echo anti_inje($_POST['venda2']);?><br> 61º dia ao 90º = <?php echo anti_inje($_POST['venda3']);?></p> </body></html>';

            $.get("API/enviar_email.php", { eu: $("#email").val(), para: "attendance@fourweeks.com.br", assunto: "FourWeeks - <?php echo anti_inje($_POST['nome']);?> quer ser afialiado.", html: codigo_html_email }).done(function (data) {
                if (data == "OK") {
                    console.log("Recebemos seu interesse em ser nosso afiliado vamos avaliar sua proposta e retornaremos no seu e-mail EM BREVE obrigado e boa sorte !");
                    }else{
                        console.log("Aconteceu um erro, tente novamente.");
                    }
            });
</script>