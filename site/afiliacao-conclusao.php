<?php

require_once("../API/Conexao_MYSQL.php");

// Pegar dados
$ID = anti_inje($_GET['id']);

$afiliado = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM afiliados WHERE id = '".anti_inje($ID)."'"));

$Nome_Email = strtolower(str_replace(" ", "", $afiliado['nome']));

$Email_Digitado = $afiliado['email'];
$Cupom_Digitado = $afiliado['cupom_cod'];



// Info para os botoes
$Email_Vendedor = "financial@fourweeks.com.br";
$Moeda = "BRL";
$Preco_Produto = "500.00";
$Nome_Produto = $Cupom_Digitado." - Portal de Ensino FourWeeks (AFILIADOS)";
$ID_Produto = $Cupom_Digitado."PE_FW_AF";
$Codigo_referencia = "Email: ".$Email_Digitado." | Cupom: ".$Cupom_Digitado;

// api.planetsweb.com.br/publicas/email/enviar_email.php


if ($afiliado['status'] != "aguardando_comprar_curso"){
header("Location: http://www.fourweeks.com.br/afiliacao-redirecionado_conclusao_erro");
return;
}


// atualiza banco de dados mostrando quantas vezes abriu a pagina

$abriu_pg_conclusao = $afiliado['abriu_pg_conclusao']+1;
if (mysqli_query($connect, "UPDATE `afiliados` SET `abriu_pg_conclusao`= '".$abriu_pg_conclusao."' WHERE id = '".$afiliado['id']."'")) {
}
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Afiliação FourWeeks</title>
        <meta name="description" content="Venha para o lado de cá e conquiste o mundo!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi">
        <link href="../css/estilo.css" rel="stylesheet">
        <link href="../css/bootstrap-modal.css" rel="stylesheet">
        <link href="../css/bootstrap-modal-bs3patch.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="../4weeks.ico">
        <link href="../css/font-awesome.min.css" rel="stylesheet">


    </head>

    <body style="background:white;">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>

        <script src="../js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="../js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootbox.min.js" type="text/javascript"></script>
        <style>
            .tab-pane p {
                font-size: 25px;
                font-weight: bold;
            }

            .tab-pane h1 {
                font-weight: bold!important;
            }

            .tab-pane h3 {
                font-weight: bold!important;
            }

            .PagamentoBanco p {
                font-size: 15px!important;
                font-weight: normal!important;
            }
        </style>


        <div align="center">
            <img src="../img/4weeks.png" width="200">
        </div>
        <br></br>

        <div align="center">
            <h1 style="font-weight: bold;">
                <?php echo $afiliado['nome'];?>, PARABÉNS POR SUA ATITUDE!</h1>
            <p style="font-weight: bold;font-size:20px;">Siga os Passos abaixo e concretize sua afiliação:</p>
        </div>
        <br></br>
        <br></br>
        <br></br>

        <div class="row">
            <div class="container">

                <script>
                    function ProcessarFichaCadastral() {
                        $("input[type=submit]").fadeToggle();
                        var formData = new FormData();
                        formData.append('arquivo', $('input[type=file]')[0].files[0]);
                        formData.append('id', "<?php echo $afiliado['id'];?>");
                        $.ajax({
                            type: 'POST',
                            dataType: 'html',
                            url: "../API/upload_ficha_cadastral.php",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (data) {

                                if (data.includes("OK:")) {
                                    $('#btn_2').toggle();
                                    $('#R_FORM').html(data);
                                } else {
                                    $('#R_FORM').html(data);
                                    $("input[type=submit]").fadeToggle();
                                }

                            }
                        });

                    }

                </script>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="border-bottom: 0px solid #ddd;">
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" style="font-size: 18px;">

                    <div role="tabpanel" class="tab-pane active" id="1">
                        <h3>1º Passo:</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-download fa-5x" aria-hidden="true"></i>
                        </center>
                        <br>
                        <center>
                            <p>
                                <span style="color:#B22222">Queremos conhecer você melhor</span>, porque você vai ser nosso(a)
                                <span style="color:#B22222">parceiro(a).</span>
                            </p>
                            <p>A partir desse momento você vai se
                                <span style="color:#B22222">comunicar em nosso NOME, vai falar do nosso PRODUTO, da nossa MARCA
                                    <span>
                            </p>
                            <p>
                                <span style="color:#B22222">Você será um de nós da FourWeeks!!!</span>
                            </p>
                            <br>
                            <p>
                                <span style="color:#B22222">Baixe a Ficha Cadastral</span>, preencha e envie novamente, apertando no botão escolher arquivo,
                                selecione o arquivo em seu computador e
                                <span style="color:#B22222">envie a ficha preenchida</span>.</p>
                            <br>
                            <?php

                            if ($afiliado['ficha_cadastral'] == null){
                                $OK_F = 'display: none;';
                            ?>
                                <a href="https://www.fourweeks.com.br/API/downloads/Ficha_Cadastral_Afiliados_Fourweeks.docx" download class="btn btn-default">Baixar Ficha Cadastral
                                    <i class="fa fa-file-word-o" aria-hidden="true"></i>
                                </a>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div id="R_FORM"></div>
                                        <form role="form" method="post" enctype="multipart/form-data" action="javascript:ProcessarFichaCadastral();" id="form_ProcessarFichaCadastral"
                                            name="form_ProcessarFichaCadastral">
                                            <input name="arquivo" id="arquivo" class="form-control" type="file" accept=".doc, .docm, .docx, .dot, .dotm, .dotx">
                                            <input class="btn btn-primary btn-lg" type="submit" value="Enviar ficha">
                                        </form>
                                    </div>
                                </div>
                                <?php
                            }else{
                                echo '<br><h2 class="fadeInDown animated" style="text-align: center;color: #5cb85c;">Você já nos enviou sua ficha, pode continuar !</h2>';
                                $OK_F = '';
                            }
                            ?>

                        </center>
                        <br>
                        <br>
                        <br>
                        <a id="btn_2" href="#2" aria-controls="2" onclick="javascript:window.scrollTo(0, 150);" class="btn btn-success btn-lg pull-right"
                            role="tab" data-toggle="tab" style="font-weight: bold;<?php echo $OK_F;?>">Próximo passo >></a>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="2">
                        <h3>2º Passo:</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                            <br>
                            <br>
                            <p>
                                <span style="color:#B22222">Estamos felizes em tê-lo(a) conosco</span>, vamos te enviar um link com um
                                <span style="color:#B22222">treinamento</span> detalhado sobre a
                                <span style="color:#B22222">metodologia espetacular do curso,</span> você vai
                                <span style="color:#B22222">aprender</span> sobre o produto, vai ver dicas de
                                <span style="color:#B22222">marketing, dicas comerciais</span>, e vamos abordar o assunto de você ter sua
                                <span style="color:#B22222">Rede de Vendedores</span>.
                            </p>
                            <p>Nosso intuito com esse treinamento online é dar condições para você superar suas
                                <span style="color:#B22222">expectativas</span> e aumentar seus
                                <span style="color:#B22222">ganhos</span>.</p>
                            <br>
                        </center>
                        <br>
                        <br>
                        <a id="btn_3" href="#3" aria-controls="3" onclick="javascript:window.scrollTo(0, 150);" class="btn btn-success btn-lg pull-right"
                            role="tab" data-toggle="tab" style="font-weight: bold;">Próximo passo >></a>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="3">
                        <h3>3º Passo:</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
                            <br>
                            <br>
                            <p>Agora você já conheçe nossa plataforma, nosso método,
                                <a href="https://www.fourweeks.com.br" target="_blank">www.fourweeks.com.br</a>, aliados a suas
                                <span style="color:#B22222">Competências e Habilidades</span>, seu sucesso está
                                <span style="color:#B22222">muito próximo!!!</span>
                            </p>
                            <p>Nos tornaremos
                                <span style="color:#B22222">parceiros</span>, Sócios nesta missão.</p>
                            <p>Procuramos ser muito claros no que vamos te proporcionar, por este motivo disponibilizamos nosso
                                contrato para saber detalhes e suas vantagens.</p>
                            <p>
                                <span style="color:#B22222">Neste momento selamos nossa parceria de Sucesso!!!</span>
                            </p>
                        </center>
                        <br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" onclick="javascript:$('#btn_4').toggle();"> Concordo que eu preenchi minha ficha com os dados certos e que li o
                                <a href="https://www.fourweeks.com.br/contrato_afiliados" target="_blank">contrato</a> .
                            </label>
                        </div>
                        <br>
                        <br>
                        <br>
                        <a id="btn_4" href="#4" aria-controls="4" onclick="javascript:window.scrollTo(0, 150);" class="btn btn-success btn-lg pull-right"
                            role="tab" data-toggle="tab" style="font-weight: bold;display: none;">Próximo passo >></a>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="4">
                        <h3>4º Passo:</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                            <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
                            <i class="fa fa-credit-card-alt fa-3x" aria-hidden="true"></i>
                            <br>
                            <br>
                            <p>Após o acordo de seu contrato, neste momento já está sendo gerado seu
                                <span style="color:#B22222">código de afiliado</span>, para que toda
                                <span style="color:#B22222">comercialização</span> que ocorrer em seu código você seja remunerado e alimente dia a dia
                                seu sonho de
                                <span style="color:#B22222">independência financeira.</span>
                            </p>
                            <p>Vamos te contemplar com um e-mail corporativo, isso mesmo,
                                <span style="color:#B22222">você terá seu email </span>
                                "
                                <?php echo $Nome_Email;?>@fourweeks.com.br"</p>
                            <p>Para que em suas comercializações com seus clientes você
                                <span style="color:#B22222">tenha autoridade e confiança deles.</span>
                            </p>
                            <p>Auxiliando você em suas comunicações entendemos a importância de um
                                <span style="color:#B22222">cartão de visita</span>, portanto, criamos o seu cartão de visitas
                                <span style="color:#B22222">digital</span>, com ele você se apresentará na internet e mídias sociais.</p>
                            <p>
                                <span style="color:#B22222">E mais</span>, vamos ativar toda sua
                                <span style="color:#B22222">criatividade e competência</span>, te enviaremos alguns modelos de
                                <span style="color:#B22222">peças de publicidade</span> para auxiliar sua comunicação com o seu cliente.</p>
                            <br>
                        </center>
                        <br>
                        <br>
                        <a id="btn_5" href="#5" aria-controls="5" onclick="javascript:window.scrollTo(0, 150);" class="btn btn-success btn-lg pull-right"
                            role="tab" data-toggle="tab" style="font-weight: bold;">Ultimo passo >></a>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="5">
                        <h3>5º Passo:</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-street-view fa-5x" aria-hidden="true"></i>
                        </center>
                        <br>
                        <br>
                        <center>
                            <p>No nosso momento atual o sucesso de vendas,
                                <span style="color:#B22222">vem muito mais pelo ajudar!</span>
                            </p>
                            <p>O mercado, os especialistas deixam claro a importância de o vendedor "comprar", comprar é
                                <span style="color:#B22222">aceitar, viver o produto!</span>
                            </p>
                            <p>Ser o
                                <span style="color:#B22222">fiel escudeiro FourWeeks.</span>
                            </p>
                            <p>Então nós da FourWeeks
                                <span style="color:#B22222">vamos investir em você!!!</span>
                            </p>
                            <p>Vamos pagar quase 50% da sua licença de uso do produto.</p>
                            <p>E mais, você terá sua licença de uso por tempo
                                <span style="color:#B22222">indeterminado</span>, isso mesmo, você vai ter acesso
                                <span style="color:#B22222">sempre</span> à plataforma, podendo assim em qualquer momento
                                <span style="color:#B22222">acessar e dialogar com seus clientes!!!</span>
                            </p>

                            <br>

                            <span style="text-align: center;">de
                                <strong>
                                    <span style="font-size:26px">
                                        <s>R$</s>
                                    </span>
                                    <span style="font-size:28px">
                                        <s> </s>
                                        <s>779,97</s>
                                    </span>
                                </strong>
                            </span>
                            <br>
                            <span style="text-align: center;">por</span>
                            <br>
                            <span style="text-align: center;">
                                <strong>
                                    <span style="font-size:35px">R$ </span>
                                    <span style="font-size:40px">400,00</span>
                                </strong> a vista</span>
                            <br>
                            <span style="text-align: center;">ou</span>
                            <br>
                            <span style="text-align: center;">2x sem juros de
                                <span style="font-size:35px">
                                    <strong>R$</strong>
                                </span>
                                <span style="font-size:40px">
                                    <strong> 250,00</strong>
                                </span> no boleto.</span>
                            <br>
                            <br>
                            <br>
                            <p>
                                <span style="color:#B22222">Seu sucesso começa agora!!!</span>
                            </p>
                            <br>
                            <br>
                            <br>


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
                                            <input type="image" onclick="javascript:Click_Botao('PagSeguro');" src="../img/comprar_pagseguro.png" onmouseover="this.src = '../img/comprar_pag_escuro.png'"
                                                onmouseout="this.src = '../img/comprar_pagseguro.png'" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
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
                                            <input type="image" onclick="javascript:Click_Botao('PayPal');" src="../img/comprar_paypal.png" onmouseover="this.src = '../img/comprar_pay_escuro.png'"
                                                onmouseout="this.src = '../img/comprar_paypal.png'" name="submit" alt="Pague com PayPal - é rápido, grátis e seguro!">
                                        </form>

                                        <br>
                                        <br>
                                        <br>
                                    </div>

                                    <br><br><br><br>

                                    <h1 align="center">
                                        <span style="color:#B22222">Pagar em 2x sem juros</span>
                                    </h1>
                                    <p align="center">
                                        <strong>Para pagar em 2x sem juros no boleto clique no botão abaixo.</strong>
                                    </p>
                                    <br>
                                    <div align="center" style="padding-bottom: 100px;">
                                        <a id="btn_6" href="#6" aria-controls="6" onclick="javascript:Email_Emicao_Boleto();" role="tab" data-toggle="tab" class="btn btn-primary btn-lg"
                                            style="font-size: 40px;font-weight: bold;">Emitir boleto</a>
                                    </div>
                                    <br>

                                    <div class="PagamentoBanco" align="left">
                                        <h1 align="center">
                                            <span style="color:#B22222">Pagar a vista com desconto</span>
                                        </h1>
                                        <p align="center">
                                            <strong>Para ganhar o desconto de pagamento a vista, você deve comprar atraves de depósito.</strong>
                                        </p>
                                        <br>
                                        <div class="checkbox" align="center">
                                            <label align="center">
                                                <input align="center" type="checkbox" onclick="javascript:$('#DadosBancoVendedor').toggle();"> Entendi quero comprar por depósito!!!
                                            </label>
                                        </div>
                                        <br>

                                        <div id="DadosBancoVendedor" style="display: none;">
                                            <p>
                                                <strong>Banco:</strong> Caixa econômica federal - 104</p>
                                            <p>
                                                <strong>Agência:</strong> 0262</p>
                                            <p>
                                                <strong>Conta:</strong> Conta Corrente - 003 00001899-6</p>
                                            <p>
                                                <strong>Identificação:</strong> Instituto Acelerado</p>
                                            <p>
                                                <strong>CNPJ:</strong> 28.516.108/0001-50</p>
                                            <br>
                                            <p>
                                                <strong>O depósito deve ser identificado.</strong>
                                            </p>
                                            <br>
                                            <h2 align="center">
                                                <span style="color:#B22222">Após depositar nos envie o comprovante por e-mail</span>
                                            </h2>
                                            <p>
                                                <strong>Assunto:</strong> FourWeeks - Compra de afiliado comprovante de deposito.</p>
                                            <p>
                                                <strong>E-mail:</strong>
                                                <?php echo $Email_Vendedor; ?>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </center>
                        <br>
                        <br>
                        <br>
                        <a id="btn_5" href="#5" aria-controls="5" onclick="javascript:window.scrollTo(0, 150);" class="btn btn-success btn-lg pull-right"
                            role="tab" data-toggle="tab" style="font-weight: bold;display: none;">Ultimo passo >></a>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="6">
                        <h3>Emitir Boleto em 2x sem juros</h3>
                        <br>
                        <br>
                        <center>
                            <i class="fa fa-check-square-o fa-5x" aria-hidden="true"></i>
                            <br>
                            <br>
                            <p>Tudo pronto, em até
                                <span style="color:#B22222">24 horas</span> você receberá um
                                <span style="color:#B22222">email</span> com o
                                <span style="color:#B22222">boleto para pagamento</span>!!!
                            </p>
                            <br>
                        </center>
                        <br>
                        <br>
                    </div>

                </div>

            </div>
        </div>
        <br></br>

        </div>
        <script>
            function Click_Botao(forma_pagamento) {
                var codigo_html_email = '<!DOCTYPE html><html><body> <h3>Dados do comprador:</h3> <p>ID do afiliado: <?php echo $afiliado['id']; ?></p> <p>Nome: <?php echo $afiliado['nome']; ?></p> <p>E-mail: <?php echo $Email_Digitado; ?></p> <p>Cupom: <?php echo $Cupom_Digitado; ?></p> <h3>Dados da compra:</h3> <p>ID: <?php echo $ID_Produto; ?></p> <p>Produto: <?php echo $Nome_Produto; ?></p> <p>Forma: ' + forma_pagamento + '</p> <p>Moeda: <?php echo $Moeda; ?></p> <p>Preço: <?php echo $Preco_Produto; ?></p> <p>Codigo de referencia: <?php echo $Codigo_referencia; ?></p> </body></html>';

                $.get("../API/enviar_email.php", { eu: "<?php echo $Email_Digitado; ?>", para: "<?php echo $Email_Vendedor; ?>", assunto: "FourWeeks - Compra de afiliado em processo no(a) " + forma_pagamento, html: codigo_html_email }).done(function (data) {
                    if (data == "OK") { console.log("<center><h5>Janela abertar para continaur o processo de compra no " + forma_pagamento + " !</h5></center>"); } else { console.log(data); }
                });

            }

            function Email_Emicao_Boleto() {
                var codigo_html_email = '<!DOCTYPE html><html><body> <h3>Dados do comprador:</h3> <p>ID do afiliado: <?php echo $afiliado['id']; ?></p> <p>Nome: <?php echo $afiliado['nome']; ?></p> <p>E-mail: <?php echo $Email_Digitado; ?></p> <p>Cupom: <?php echo $Cupom_Digitado; ?></p> <h3>Dados da compra:</h3> <p>ID: <?php echo $ID_Produto; ?></p> <p>Produto: <?php echo $Nome_Produto; ?></p> <p>Forma: Boleto 2x sem juros</p> <p>Moeda: <?php echo $Moeda; ?></p> <p>Preço: <?php echo $Preco_Produto; ?></p> <p>Codigo de referencia: <?php echo $Codigo_referencia; ?></p> </body></html>';

                $.get("../API/enviar_email.php", { eu: "<?php echo $Email_Digitado; ?>", para: "<?php echo $Email_Vendedor; ?>", assunto: "FourWeeks - Afiliado pediu a emição do boleto ", html: codigo_html_email }).done(function (data) {
                    if (data == "OK") { window.scrollTo(0, 150); console.log("<center><h5>Foi email de amição do boleto !</h5></center>"); } else { console.log(data); }
                });

            }

        </script>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer style="background:#000099; color:white; ">
            <br>
            <div align="center">
                <p>
                    <b> ©2017 FourWeeks - Todos os direitos reservados</b>
                </p>
                <p>
                    <b>Contato: attendance@fourweeks.com.br
                        <font color="orange"></font>
                    </b>
                </p>
            </div>
        </footer>


    </body>

    </html>