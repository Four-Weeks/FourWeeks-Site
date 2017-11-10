<html><head>
        <meta charset="UTF-8">
        <title>Fale inglês em 4 semanas</title>
        <meta name="description" content="Venha para o lado de cá e conquiste o mundo!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/bootstrap-modal.css" rel="stylesheet">
        <link href="css/bootstrap-modal-bs3patch.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="4weeks.ico">


    </head>
    <body style="background:white;">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>

        <script src="js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootbox.min.js" type="text/javascript"></script>


         <div align="center"> <img src="img/4weeks.png" width="200"></div>
            <br></br>

         <div align="center"> <h1>SIM EU VOU FALAR INGLÊS EM 4 SEMANAS!</h1></div>
         <br></br>
            <div align="center"> <img src="img/preco3.png"></div>

        <div class="menu" style="background:white;">
            <div style="margin-left:250px;">

                <br>
          

            <br><br>
            
        </div>
        <br>
<div align="center">
    <h4>

<?php

// Pegar dados digitados
$Email_Digitado = $_POST['emailCliente'];
$Cupom_Digitado = $_POST['cupomCliente'];

// Info para os botoes
$Email_Vendedor = "financial@fourweeks.com.br";
$Moeda = "BRL";
$Preco_Produto = "799.97";
$Nome_Produto = $Cupom_Digitado." - Portal de Ensino FourWeeks";
$ID_Produto = $Cupom_Digitado."PE_FW";
$Codigo_referencia = "Email: ".$Email_Digitado." | Cupom: ".$Cupom_Digitado;

if(($Email_Digitado != null) && ($Cupom_Digitado != null)){
echo '<h2>Código validado com sucesso!</h2><br/>';
}else{
echo '<h2>Erro ao validar Código!</h2><br/>';
}

// api.planetsweb.com.br/publicas/email/enviar_email.php
?>

</h4>

</div>
 </div>

<br></br>

<?php 
if(($Email_Digitado != null) && ($Cupom_Digitado != null)){
?>
<div id="StatusEmail"></div>

       <div class="container masthead">
            <div align="center"><p style="font-size:18px;"><b>Adquira o seu acesso ao curso por um dos botões abaixo:</b></p></div>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="col-md-6" align="center">

<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="<?php echo $Email_Vendedor; ?>">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="<?php echo $Moeda; ?>">
<input type="hidden" name="item_id_1" value="<?php echo $ID_Produto; ?>">
<input type="hidden" name="item_descr_1" value="<?php echo $Nome_Produto; ?>">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_valor_1" value="<?php echo $Preco_Produto; ?>">
<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="<?php echo $Codigo_referencia; ?>">
<input type="image" onclick="javascript:Click_Botao('PagSeguro');" src="img/comprar_pagseguro.png" onmouseover="this.src = 'img/comprar_pag_escuro.png'" onmouseout="this.src = 'img/comprar_pagseguro.png'" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
</form>
                
                </div>
                <div class="col-md-6" align="center">     

<form target="paypal" name="_xclick" action="https://www.paypal.com/uk/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo $Email_Vendedor; ?>">
<input type="hidden" name="currency_code" value="<?php echo $Moeda; ?>">
<input type="hidden" name="item_name" value="<?php echo $Nome_Produto; ?>">
<input type="hidden" name="amount" value="<?php echo $Preco_Produto; ?>">
<input type="hidden" name="custom" value="<?php echo $Codigo_referencia; ?>">
<input type="image" onclick="javascript:Click_Botao('PayPal');" src="img/comprar_paypal.png" onmouseover="this.src = 'img/comprar_pay_escuro.png'" onmouseout="this.src = 'img/comprar_paypal.png'" name="submit" alt="Pague com PayPal - é rápido, grátis e seguro!">
</form>

<br> <br> <br> <br> <br> <br> <br> 
                </div>
              </div>
            </div>
<?php
}else{

    echo '<div align="center" style="padding-bottom: 50px;"><a href="comprar" class="btn btn-danger btn-lg" style="font-weight: bold;">Voltar</a></div>';

}
?>
    
    </div>



    <script>

function Click_Botao(forma_pagamento){
var codigo_html_email = '<!DOCTYPE html><html><body> <h3>Dados do comprador:</h3> <p>E-mail: <?php echo $Email_Digitado; ?></p> <p>Cupom: <?php echo $Cupom_Digitado; ?></p> <h3>Dados da compra:</h3> <p>ID: <?php echo $ID_Produto; ?></p> <p>Produto: <?php echo $Nome_Produto; ?></p> <p>Forma: '+forma_pagamento+'</p> <p>Moeda: <?php echo $Moeda; ?></p> <p>Preço: <?php echo $Preco_Produto; ?></p> <p>Codigo de referencia: <?php echo $Codigo_referencia; ?></p> </body></html>';

$.get( "API/enviar_email.php", { eu: "<?php echo $Email_Digitado; ?>", para: "<?php echo $Email_Vendedor; ?>", assunto: "FourWeeks - Comprar em processo no(a) "+forma_pagamento, html: codigo_html_email } ).done(function( data ) {
if (data == "OK"){$("#StatusEmail").html("<center><h5>Janela abertar para continaur o processo de compra no "+forma_pagamento+" !</h5></center>");}
});

}

</script>


<h3>Depoimentos dos nossos Alunos</h3>
            <div id="depoimento" class="container">
<div class="row">
<blockquote>
<p class="col-md-2 col-sx-2 column depoimento"><img alt="Mandelovers" src="https://llbr.blob.core.windows.net/machine-user-images/img-19861-20141023175821.jpg" class="img-circle img-responsive" style="width:100px;"></p>
<p class="depoimento2">Simplismente Fantástico, aprendi inglês em 4 semanas usando este método natural de aprendizagem</p>
<small>Diogo</small><cite> | Minas Gerais - MG</cite>
</blockquote>
</div>

<div class="row">
<blockquote>
<p class="col-md-2 col-sx-2 column depoimento"><img alt="Mandelovers" src="img/mulher.png" class="img-circle img-responsive" style="width:150px;"></p>
<p class="depoimento2">Eu tinha grandes dificuldades de aprender inglês, não entrava na minha cabeça, quando um amigo me falou do FourWeeks como solução, duvidei, mas hoje posso te dizer que o fourweeks abriu as portas do mundo para mim, hoje eu falo inglês.</p>
<small>Thamires</small><cite> | São Paulo -SP</cite>
</blockquote>
</div>
</div>
        <div align="center">
        <img src="https://so-pizza-brasil.herokuapp.com/img/siteblindado.png">
        <img src="https://so-pizza-brasil.herokuapp.com/img/siteblindado2.png">
        </div>
        <br><br><br>  <br>
        <footer style="background:#000099; color:white; ">
            <br>
            <div align="center"><p><b> ©2017 FourWeeks - Todos os direitos reservados</b></p>
                <p><b>Contato: attendance@fourweeks.com.br<font color="orange"></font></b></p> 
            </div>
        </footer>
    

</body></html>