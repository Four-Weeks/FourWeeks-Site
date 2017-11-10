<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
    <head>
        <title>Inglês em 4 Semanas</title>
        <meta name="description" content="Aprenda toda grámatica do inglês"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <meta name="author" content=""/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="4weeks.ico"/>
        <style>

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-bottom: 40px;
                color: #5a5a5a;
                background-color:#EFF1F7;
            }
            .pagination ul > li > a,
            .pagination ul > li > span {

                border-left-width: 1px;
            }


            /* CUSTOMIZE THE NAVBAR
            -------------------------------------------------- */

            /* Special class on .container surrounding .navbar, used for positioning it into place. */
            .navbar-wrapper {
                position: relative;
                z-index: 10;
                margin-top: 20px;
                margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
            }

            /* Remove border and change up box shadow for more contrast */
            .navbar .navbar-inner {
                border: 0;
                -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                box-shadow: 0 2px 10px rgba(0,0,0,.25);
            }

            /* Downsize the brand/project name a bit */
            .navbar .brand {
                padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
                font-size: 16px;
                font-weight: bold;
                text-shadow: 0 -1px 0 rgba(0,0,0,.5);
            }

            /* Navbar links: increase padding for taller navbar */
            .navbar .nav > li > a {
                padding: 15px 20px;
            }
            .navbar .nav > li > a:hover {
                color:black;
                background-color: none;
            }
            ul.nav.nav-list > li> a{
                color:black;
            }
            ul.nav.nav-list > li> div > a{
                color:black;
            }
            ul.nav.nav-list > li> div > a:hover{
                color:gray;
            }
            ul.nav.nav-list > li> a:hover{
                color:gray;
            }
            /* Offset the responsive button for proper vertical alignment */
            .navbar .btn-navbar {
                margin-top: 10px;
            }



            /* CUSTOMIZE THE NAVBAR
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: 60px;
            }

            .carousel .container {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
            }

            .carousel-control {
                background-color: transparent;
                border: 0;
                font-size: 120px;
                margin-top: 0;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
            }

            .carousel .item {
                height: 500px;
            }
            .carousel img {
                min-width: 100%;
                height: 500px;
            }

            .carousel-caption {
                background-color: transparent;
                position: static;
                max-width: 550px;
                padding: 0 20px;
                margin-bottom: 100px;
            }
            .carousel-caption h1,
            .carousel-caption .lead {
                margin: 0;
                line-height: 1.25;
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
            }
            .carousel-caption .btn {
                margin-top: 10px;
            }



            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .span4 {
                text-align: center;
            }
            .marketing h2 {
                font-weight: normal;
            }
            .marketing .span4 p {
                margin-left: 10px;
                margin-right: 10px;
            }


            /* Featurettes
            ------------------------- */

            .featurette-divider {
                margin: 80px 0; /* Space out the Bootstrap <hr> more */
            }
            .featurette {
                padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
                overflow: hidden; /* Vertically center images part 2: clear their floats. */
            }
            .featurette-image {
                margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
            }

            /* Give some space on the sides of the floated elements so text doesn't run right into it. */
            .featurette-image.pull-left {
                margin-right: 40px;
            }
            .featurette-image.pull-right {
                margin-left: 40px;
            }

            /* Thin out the marketing headings */
            .featurette-heading {
                font-size: 50px;
                font-weight: 300;
                line-height: 1;
                letter-spacing: -1px;
            }



            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (max-width: 979px) {

                .container.navbar-wrapper {
                    margin-bottom: 0;
                    width: auto;
                }
                .navbar-inner {
                    border-radius: 0;
                    margin: -20px 0;
                }

                .carousel .item {
                    height: 500px;
                }
                .carousel img {
                    width: auto;
                    height: 500px;
                }

                .featurette {
                    height: auto;
                    padding: 0;
                }
                .featurette-image.pull-left,
                .featurette-image.pull-right {
                    display: block;
                    float: none;
                    max-width: 40%;
                    margin: 0 auto 20px;
                }
            }
            .hero-unit{
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
            }

            @media (max-width: 767px) {

                .navbar-inner {
                    margin: -20px;
                }

                .carousel {
                    margin-left: -20px;
                    margin-right: -20px;
                }
                .carousel .container {

                }
                .carousel .item {
                    height: 300px;
                }
                .carousel img {
                    height: 300px;
                }
                .carousel-caption {
                    width: 65%;
                    padding: 0 70px;
                    margin-bottom: 40px;
                }
                .carousel-caption h1 {
                    font-size: 30px;
                }
                .carousel-caption .lead,
                .carousel-caption .btn {
                    font-size: 18px;
                }

                .marketing .span4 + .span4 {
                    margin-top: 40px;
                }
                .well{
                    background-color: white;
                }
                ul.nav.nav-list{
                    color: rgb(118, 55, 55);
                }

                .featurette-heading {
                    font-size: 30px;
                }
                .featurette .lead {
                    font-size: 18px;
                    line-height: 1.5;
                }
                .masthead h1 {
                    font-size: 120px;
                }

                .masthead p {
                    font-size: 40px;
                    font-weight: 200;
                    line-height: 1.25;
                }


            }
        </style>
        <script type="text/javascript">
            function validarLogin() {
                if (document.FormLogin.login.value == "") {
                    alert("Campo Usuário Não Informado");
                    return false;
                }
                else if (document.FormLogin.senha.value == "") {
                    alert("Campo Senha não informado");
                    return false;
                }
                document.Formlogin.submit();
            }



        </script>
    </head>
    <body>
        <div class="menu cor1">
            <img  src="img/icon4weeks.png"  style="width:60px;" border="0"> 

            <form name="FormLogin" class="navbar-form pull-right" action="Login" method="POST">
                <a href='configuracoes.php'>Configurações </a>
                <a href='remover.php'> Sair</a>
            </form> 

            <ul class= "nav">
                <li><a href='menu.php'>Home</a></li>
                <li><a href='gramatica.php'>Gramática</a></li>
                <li><a href='dialogos.php'>Diálogos</a>
                <li class="dropdown"><a href='conversacao.php'>Conversação</a>
                    <!--<ul class="dropdown-menu">
                      <li><a href='conversacao.php'>Dicas</a></li>
                      <li><a href='conversacao.php'>Vídeos</a></li>
                      <li><a href='conversacao.php'>Gramática</a></li>
                     <li><a href='conversacao.php'>Tudo sobre conversação</a></li>
                    </ul>
                    -->
                </li>
                <li class="dropdown"><a href='duvidas.php' class="dropdown-toggle" data-toggle="dropdown">Dúvidas<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href='instrucao.php'>Vídeo de Instrução</a></li>
                        <li><a href='duvidas.php'>Suporte</a></li>
                        <li><a href='frequentes.php'>Dúvidas Frequentes</a></li>

                    </ul>

                </li>
            </ul>

        </div>

        <div class="row-fluid">

            <div class="span3">

                <div class="well sidebar-nav">
                    <div align="center"><?php echo '<img width="120" height="120" border="0" src="fotos/' . $_SESSION['usuarioFoto'] . '"/>'; ?></div>
                    <ul class="nav nav-list">

                        <li class="nav-header">Dados</li>
                        <li style="border-top: 2px white solid; margin-top: 0px; margin-bottom: 0px;">Nome: <?php echo "" . $_SESSION['usuarioNome']; ?></li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;">Email: <?php echo "" . $_SESSION['usuarioEmail']; ?></li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;">Profissão: <?php echo "" . $_SESSION['usuarioProfissao']; ?></li>
                        <li class="nav-header">Progresso</li>
                        <li style="border-top: 2px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="progress">
                                <div class="bar" style="color:#000;width: <?php echo "" . $_SESSION['usuarioProgresso']; ?>;%"><?php echo "" . $_SESSION['usuarioProgresso']; ?>%</div></li>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->

            <div class="span8">



                <div class="hero-unit">
                    <div align="center" style="overflow: auto;"> <h3>Gramática 2</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'gramatica.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>SOME/ANY/NO</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SOME/ANY/NO – algo, algum, nenhum</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>



                                            <p style='color:#0088cc'>ANY – algum/ ANYBODY – alguém /	 ANYTHING – alguma coisa</p>
                                            <br>
                                            <p>Usados em perguntas e respostas negativas com o verbo negativo</p>
                                            <p>Do you have any money? – Você tem algum dinheiro?</p>
                                            <p>No, I don´t have any money – Não, não tenho dinheiro algum.</p>
                                            <br>
                                            <p style="color:#cd0a0a">SOME – algum/ 	SOMEBODY – alguém /	SOMETHING – alguma coisa</p>
                                            <p>Usados em frases </p>
                                            <p>I have something to do. – Eu tenho alguma coisa para fazer.</p>
                                            <br>
                                            <p style="color:#fbb450">NO – nenhum /	NOBODY – ninguém /	NOTHING – nada</p>
                                            <p>Usados em frases negativas com o verbo na forma afirmativa</p>
                                            <p>Peter knows nobody at school – Peter conhece ninguém na escola.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Quantifiers</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">QUANTIFIERS – quantificadores</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>

                                            <p align='center' style='color:#003bb3'>HOW MANY – quantos / quantas (usado para objetos contáveis)</p>
                                            <br>
                                            <p align='center'>How many pens do you have?</p>
                                            <p align='center'>Quantas canetas você tem?</p>
                                            <br>
                                            <p align='center' style="color:#cd0a0a">FEW / A FEW – algumas / alguns</p>
                                            <br>
                                            <p align='center'>I have a few pens</p>
                                            <p align='center'>Tenho algumas canetas.</p>
                                            <br>
                                            <p align='center' style="color:#51a351">HOW MUCH – quanto / quanta (usado para coisas incontáveis e líquidas)</p>
                                            <p align='center'>How much water would you like?</p>
                                            <br>
                                            <p align='center' style="color:#cd0a0a">LITTLE / A LITTLE – pouco / um pouco</p>
                                            <br>
                                            <p align='center'>Just a little water, please .</p>
                                            <p align='center'>Só um pouco, por favor.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for Explanations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR EXPLANATIONS - Pedindo explicações</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>What happened? - O que aconteceu?</p>
                                            <p>Please, tell me what happened. - Por favor, me diga o que aconteceu.</p>
                                            <br>
                                            <p style="color:#0088cc">Expressões informais</p>
                                            <br>
                                            <p>What´s cooking? - O que está acontecendo?</p>
                                            <p>What´s going on? - O que está rolando?</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>There to be</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">THERE TO BE - Haver</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p>THERE WAS e THERE WERE representam o nosso há ou existe(m) no passado. </p>
                                            <p> A diferença é que usamos THERE WAS no singular, para uma só coisa, pessoa ou situação.</p>
                                            <p>Quando dizemos que há mais de uma coisa ou pessoa, usa-se a forma plural THERE WERE.</p>
                                            <br>
                                            <p style="color:#006dcc">There was - Havia/ Existia - SINGULAR</p>
                                            <p style="color:#006dcc">There were - Havia/Existiam - PLURAL</p>
                                            <br>                                
                                            <p>Were there cars in front of school?</p>
                                            <p>Havia carros em frente da escola?</p>
                                            <p>There was a plan.</p>
                                            <p>Havia um plano.</p>
                                            <p>There wasn´t a piece of cake on the table.</p>
                                            <p>Não havia um pedaço de bolo na mesa.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Second Conditional</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SECOND CONDITIONAL – segundo condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos esta estrutura para falarmos sobre situações que seriam realidade no
                                                Passado sob uma condição.</p>
                                            <br>



                                            <p style='color:#006dcc'> IF + PAST= WOULD/ COULD/ MIGHT</p>

                                            <br>
                                            <p>If I had money, I would travel to the beach.</p>
                                            <p>Se eu tivesse dinheiro, viajaria para a praia.</p>
                                            <p style='font-size:13px;color:red;'>(É possível inverter a fórmula acima, sem o uso da vírgula, conforme o 2° exemplo.)</p>
                                            <p>I could dance IF you taught me.</p>
                                            <p>Eu poderia dançar se você me ensinasse.</p>
                                            <p>If Sally arrived, I might talk to her.</p>
                                            <p>Se a Sally chegasse, eu poderia falar com ela.</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Greetings/Introducing Yourself</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"><p>GREETINGS/ Cumprimentos</p><p>
                                                    </p></div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Hi / Hello – Olá</p>
                                            <p>Good morning – Bom dia</p>
                                            <p>Good afternoon – Boa tarde</p>
                                            <p>Good evening – Boa noite ( ao chegar )</p>
                                            <p>Good afternoon – Boa tarde</p>
                                            <p>Good night – Boa noite ( ao sair )</p>
                                            <p>Good afternoon – Boa tarde</p>
                                            <p>Bye / Goodbye / Bye bye – Tchau</p>
                                            <p>See you later – Te vejo mais tarde</p>
                                            <p>What´s up? – E aí?</p>
                                            <br>


                                            <p>Hi, my name is .... </p>
                                            <p>Oi, meu nome é ....</p>
                                            <p>Good afternoon – Boa tarde</p>
                                            <p>Hello, I´m .... </p>
                                            <p>Oi, sou o (a ) .....</p>
                                            <p>I live in ....</p> 
                                            <p>Eu moro em ......</p>
                                            <p>I´m ___ years old</p>
                                            <p>Eu tenho ___ anos de idade</p>













                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Plural of Nouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Plural of Nouns - Plural dos Substantivos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Para a formação do plural dos substantivos acrescentamos:</p>
                                            <br>
                                            <p>“S” para a maioria das palavras:</p>
                                            <p>CAR - CARS</p>
                                            <p>BOY - BOYS</p>
                                            <p>PEN - PENS</p>
                                            <br>
                                            <p>“IES”</p>
                                            <p>para palavras terminadas</p>
                                            <p>em Y precedidas</p> 
                                            <br>
                                            <p>BABY – BABIES</p>
                                            <p>STUDY – STUDIES</p>
                                            <p>WORRY - WORRIES</p>

                                            <br>
                                            <p>“ES”</p>
                                            <p>para palavras terminadas</p>
                                            <p>em SS, CH, SH, O, X, </p>

                                            <br>
                                            <p>KISS– KISSES</p>
                                            <p>DISH – DISHES</p>
                                            <p>HERO - HEROES</p>
                                            <br>
                                            <p>“VES”  para terminações em F ou FE</p>
                                            <br>
                                            <p>KNIFE – KNIVES</p>
                                            <p>WIFE - WIVES</p>
                                            <br>
                                            <p>Há palavras que o plural é irregular, de forma. </p>
                                            <br>
                                            <p>CHILD - CHILDREN</p>
                                            <p>MAN - MEN</p>
                                            <p>TOOTH - TEETH</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT – Presente Perfeito</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos este tempo verbal para falar sobre ações que iniciaram no passado, mas
                                                que podem, ou não, terminar no futuro.</p>
                                            <br>
                                            <p style='color:#0044cc'>HAVE/HAS + past participle</p>
                                            <br>
                                            <p style='color:#fbb450'>PAST PARTICIPLE – terceira coluna dos verbos</p>
                                            <br>
                                            <table  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">1a.</td>
                                                    <td align="center">2a.</td>
                                                    <td align="center">3a.</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Work</td>
                                                    <td align="center">Worked</td>
                                                    <td align="center">Worked</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Go</td>
                                                    <td align="center">Went</td>
                                                    <td align="center">Gone</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p>Have you ever driven a truck? - Você já dirigiu um caminhão?</p>
                                            <p>No, I´ve never driven one. - Não, nunca dirigi um caminhão.</p>
                                            <p>No, not yet. - Não, ainda não.</p>
                                            <p>Yes, I´ve already driven one. - Sim, já dirigi um.</p>
                                            <p>EVER – Já alguma vez na vida (usado em perguntas) / NEVER– Nunca</p>
                                            <p>ALREADY – Já (usado em perguntas e respostas afirmativas) / YET - Ainda</p>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT - Ações inacabadas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos este tempo verbal para falar de ações que começaram no passado e ainda continuam em progresso.
                                            </p>
                                            <br>
                                            <p>HOW LONG – Há quanto tempo</p>
                                            <p>FOR – há / SINCE - desde</p>
                                            <p>How long have you studied here?</p>
                                            <p>Há quanto tempo você estuda aqui?</p>
                                            <p>Estudo aqui há um ano.</p>
                                            <p>I have studied here since 2011.</p>
                                            <p>Estudo aqui desde 2011.</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect - Time Expressions </a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT – TIME EXPRESSIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>As expressões de tempo abaixo são geralmente usadas com o Presente Perfeito.</p>
                                            <p>São expressões que não indicam um tempo específico, e sim inacabado.</p>
                                            <br>
                                            <p>LATELY – ultimamente</p>
                                            <p>RECENTLY – recentemente</p>
                                            <P>THIS WEEK – esta semana</p>
                                            <P>THIS MONTH – este mês</p>
                                            <p>THIS YEAR – este ano</p>
                                            <p>TODAY – hoje</p>
                                            <p>IN MY LIFE... – Em minha vida…</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>FIND + OBJECT + ADJECTIVE</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"><p>FIND + OBJECT + ADJECTIVE</p><p> Verbo encontrar + objeto + adjetivo</p></div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>
                                            <p>Usamos esta estrutura para expressar nossa opinião sobre qualquer tipo de atividade.</p>
                                            <br>
                                            <p>I find soccer very difficult to play – Eu  acho futebol muito difícil de jogar.</p>
                                            <br>
                                            <p>Peter finds Marcie a nice girl.</p>
                                            <p>Peter acha a Marcie uma garota legal.</p>
                                            <br>
                                            <P>Did you find the test difficult?</p>
                                            <p>Você achou a prova difícil?</p>
                                            <br>
                                            <p>Marion didn´t find that game interesting.</p>
                                            <p>A Marion não achou aquele jogo interessante.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Tag Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">TAG QUESTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos esta estrutura para fazer uma confirmação do que acabamos de dizer.</p>
                                            <br>
                                            <p>You study English, don´t you? – Você estuda Inglês, não estuda?</p>
                                            <p>Yes, I study English. / No, I don´t study English.</p>
                                            <br>
                                            <p>You don´t have money, do you? – Você não tem dinheiro, tem?</p>
                                            <p>Yes, I have money. / No, I don´t have money.</p>
                                            <br>
                                            <p>Repare que quando a frase é afirmativa, a TAG é negativa</p>
                                            <p>Quando a frase é negativa, a TAG é afirmativa</p>
                                            <br>
                                            <p>Podemos utilizar com qualquer tempo verbal.</p>
                                            <br>
                                            <p>Peter has worked a lot, hasn´t he?</p>
                                            <p>Peter tem trabalhado muito, não tem?</p>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal Verbs - Might</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">MODAL VERBS – Verbos Modais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>                          
                                            <p>MIGHT – Possibilidade</p>
                                            <br>
                                            <p>MIGHT– usado em perguntas e respostas para falarmos sobre possibilidades</P>
                                            <P>Where is Denis? - Onde está o Denis?</P>
                                            <P>I don´t know. He might be at home. - Não sei. Ele deve estar em casa.</P>
                                            <p>Who can play chess with you? - Quem pode jogar xadrez com você?</p>
                                            <p>Paul might play with me. - Paul deve jogar comigo.</P>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Checking/Reservations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CHECKING IN IN A HOTEL / MAKING RESERVATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Fazendo reservas e check in em um hotel</p>
                                            <br>
                                            <p>I´d like to book a double room for two days.</p>
                                            <p>Eu gostaria de reservar um quarto duplo por dois dias.</p>
                                            <br>
                                            <p>What facilities does the hotel offer?</p>
                                            <p>Quais instalações o hotel oferece?</p>
                                            <br>
                                            <p>Good morning. I have a reservation on my name.</p>
                                            <p>Bom dia. Eu tenho reserva em meu nome.</p>
                                            <br>
                                            <p>Are pets allowed?</p>
                                            <p>Animais de estimação são permitidos?</p>
                                            <br>
                                            <p>INDOOR POOL – piscina coberta / OUTDOOR POOL – piscina descoberta<p>
                                            <p>GYM – academia / WI-FI –rede sem fio / SAUNA - sauna</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Used to</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">USED TO – Verbo “costumava”</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <p>USED TO + VERB</p>
                                            <br>
                                            <p>Usamos esta estrutura para falar de hábitos passados.</p>
                                            <br>
                                            <p>Did you use to dance with your friends?</p>
                                            <p>Você costumava dançar com seus amigos?</p>
                                            <br>
                                            <p>Yes, I used to dance Love songs.</p>
                                            <p>Sim, eu costumava dançar canções românticas.</p>
                                            <br>
                                            <p>No, I didn´t use to dance at all.</p>
                                            <p>Não, eu não costumava dançar.</p>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Comparative of the Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">COMPARATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <br>
                                            <p style="color:#0088cc">LONG  ADJECTIVES – adjetivos longos</p>
                                            <br>
                                            <p>Para os adjetivos longos, usamos três graus de comparação</p>
                                            <br>
                                            <p>Superioridade – Inferioridade – Igualdade</p>
                                            <br>
                                            <p style="color:#0088cc">MORE + ADJECTIVE + THAN = superioridade ( mais .... do que )</p>
                                            <br>
                                            <p style="color:#0088cc">MORE HANDSOME – mais bonito</p>
                                            <br>
                                            <p>English is more interesting than German – Inglês é mais interessante do que Alemão</p>
                                            <br>
                                            <p style="color:#0088cc">LESS + ADJECTIVE + THAN = inferioridade ( menos ... do que )</p>
                                            <br>
                                            <p style="color:#0088cc">LESS IMPORTANT – menos importante</p>
                                            <br>
                                            <p>Paul is less handsome than Leo. – O Paul é menos bonito que o Leo.</p>
                                            <br>
                                            <p style="color:#0088cc">AS .... AS – tão ... quanto = igualdade</p>
                                            <p style="color:#0088cc">AS INTERESTING AS – tão interessante quanto</p>
                                            <p>Jane is as beautiful as Kate. – Jane é tão bonita quanto Kate.</p>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Comparing People and Things</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">COMPARING PEOPLE AND THINGS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>  

                                            <p>Comparando pessoas e coisas</p>
                                            <br>
                                            <p>Is your house bigger than mine?</p>
                                            <p>Sua casa é maior do que a minha?</p>
                                            <br>
                                            <p>São Paulo is more crowded than Ceará.</p>
                                            <p>São Paulo é mais populoso do que o Ceará.</p>
                                            <br>
                                            <p>Paul is as handsome as Peter.</p>
                                            <p>O Paulo é tão bonito quanto o Peter.</p>
                                            <br>
                                            <p>Danny was more intelligent than Sue.	</p>
                                            <p>O Danny era mais inteligente do que a Sue.</p>
                                            <br>
                                            <p>Are those pens more useful than thesepencils?</p>

                                            <p>Aquelas canetas são mais úteis do que estes lápis?</p>


                                            <p style="color:blue">Answers(Respostas)</p>
                                            <p>Yes, it is / No, it isn´t bigger.</p>
                                            <p>Sim, é. / Não, não é maior.</p>
                                            <br>
                                            <p>Of course it is more crowded.</p>
                                            <p>Claro que é mais populoso.</P>
                                            <br>
                                            <p>Much more handsome.</p>
                                            <p>Muito mais bonito.</p>]
                                            <br>
                                            <p>Now Sue is intelligent.</p>
                                            <p>Agora a Sue é inteligente.</p>
                                            <br>
                                            <p>Yes, they are.</p>
                                            <p>Sim , são.</p>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>False Cognates</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FALSE COGNATES – Cognatos Falsos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>
                                            <p>Algumas palavras são semelhantes na forma de escrever, mas possuem um significado totalmente diferente.</p>




                                            <p>Sensitive – sensível</p>
                                            <p>Sensible – sensato</p>
                                            <p>Nowadays – atualmente</p>
                                            <p>Actually – na verdade</p>
                                            <p>Coffee shop – cafeteria</p>
                                            <p>Cafeteria – refeitório</p>
                                            <p>Factory – fábrica</p>
                                            <p>Fabric – tecido</p>
                                            <p>Snack – lanche</p>
                                            <p>Lunch – almoço</p>
                                            <p>To stand – suportar</p>
                                            <p>To support – ajudar</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Superlative of the Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SUPERLATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>SHORT ADJECTIVES – adjetivos curtos</p>
                                            <p>Acrescentamos THE antes do adjetivo e o prefixo EST no final do adjetivo de SUPERIORIDADE.</p>
                                            <p>TALL – alto</p>
                                            <p>THE TALLEST – o mais alto de todos</p>
                                            <p>RICH – rico</p>
                                            <p>THE RICHEST – o mais rico de todos</p>
                                            <p>HAPPY – feliz</p>
                                            <p>THE HAPPIEST – o mais feliz de todos</p>
                                            <p>I am the happiest man in the world</p>
                                            <p>Eu sou o homem mais feliz do mundo.</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Special Verbs</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SPECIAL VERBS – Verbos especiais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>A regra geral é que entre dois verbos, devemos usar o TO.</p>
                                            <p>Há exceções. Alguns verbos devem seguir o modelo abaixo.</p>
                                            <p>FINISH – terminar  		
                                            <p>  START – começar</p>
                                            <p>STOP – parar </p>		
                                            <p>  ENJOY – aproveitar</p>
                                            <p>MIND – considerar 	</p>	
                                            <p>  BEGIN – iniciar</p>
                                            <p>Geralmente após estes verbos, usamos o próximo verbo com o ING,
                                                não mudando o significado.</p>
                                            <p>I am going to start studying next  week.</p>
                                            <p>Vou começar a estudar semana que vem.</p>
                                            <p>Let´s start talking about love.</p>
                                            <p>Vamos começar a falar de amor.</p>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Superlative of the adjetives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SUPERLATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>


                                            <p>LONG  ADJECTIVES – adjetivos longos</p>
                                            <p>Para adjetivos longos, acrescentamos</p>
                                            <p>THE MOST (o mais de todos) ou THE LEAST ( o menos de todos ) antes dos adjetivos</p>
                                            <p>THE MOST + ADJECTIVE  - o mais de todos</p>
                                            <p>THE LEAST + ADJECTIVE - o menos de todos<p>
                                            <p>THE MOST HANDSOME - o mais bonito de todos</p>
                                            <p>Rodrigo is the most handsome man in the office.</p>
                                            <p>Rodrigo é o homem mais bonito no escritório.</p>
                                            <p>THE LEAST IMPORTANT - o menos importante de todos</p>
                                            <p>Math is the least important subject at school.</p>
                                            <p>Matemática é a matéria menos importante na escola.</p>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for recommendations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR RECOMMENDATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>

                                            <p>Pedindo recomendações</p>
                                            <p>Where should I go next vacations?</p>
                                            <p>Onde eu deveria ir nas próximas férias?</p>
                                            <p>What time should my sister arrive at the office?</p>
                                            <p>A que horas minha irmã deveria chegar no escritório?</p>
                                            <p>When should we deliver the report?</p>
                                            <p>Quando deveríamos entregar o relatório?</p>
                                            <p>Should we finish this report earlier?</p>
                                            <p>Deveríamos terminar esse relatório mais cedo?</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal Verbs</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">MODAL VERBS – Verbos  modais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>





                                            <br>
                                            <p>HAD BETTER = SHOULD – Recomendação</p>
                                            <p>Uma outra forma de darmos recomendações e sugestões para as pessoas é usando HAD BETTER.</p>
                                            <p>Had she better go to school early?</p>
                                            <p>Ela deveria ir para a escola cedo?</p>
                                            <p>I´d better not go home now. I´d better wait.</p>
                                            <p>Eu não deveria ir pra casa agora. Eu deveria esperar</p>
                                            <p>Paula had better not travel this weekend.</p>
                                            <p>A Paula não deveria viajar este final de semana.</p>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Talking about food</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">TALKING ABOUT FOOD – falando sobre comidas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>What´s your favorite kind of food?</p>
                                            <p>Qual o seu tipo favorito de comida?</p>
                                            <br>
                                            <p>I like pasta better than meat.</p>
                                            <p>Eu gosto mais de massa do que carne.</p>
                                            <br>
                                            <p>How often do you eat out?</p>
                                            <p>Com que frequência você come fora</p>
                                            <br>
                                            <p>I generally eat out. I love restaurants.</p>
                                            <p>Eu geralmente como fora. Eu amo restaurantes.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future in the Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE IN THE PAST – futuro no passado</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>
                                            <p>Indica uma ação que ia acontecer no passado, mas por algum motivo, não aconteceu.</p>
                                            <br>
                                            <p>TO BE (PAST) + GOING TO + VERB – ia, íamos, iam</p>
                                            <br>
                                            <p>I was going to dance with my friends.</p>
                                            <p>Eu ia dançar com meus amigos.</p>
                                            <br>
                                            <p>Wasn´t  Sally going to come to the party?</p>
                                            <p>A Sally não ia vir para a festa?</p>
                                            <br>
                                            <p>They weren´t going to invite Jenny, but they did.</p>
                                            <p>Eles não iam convidar a Jenny para a festa, mas convidaram.</p>
                                            <br>
                                            <p>Weren´t you going to buy a new bike?</p>
                                            <p>Você não ia comprar uma bicicleta nova?</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Relative Pronouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">RELATIVE PRONOUNS – Pronomes relativos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>WHO – usado para pessoas / WHICH – usado para objetos / WHOSE – indica posse</p>
                                            <br>
                                            <p>Sally is a nice girl. She has blue eyes.</p>
                                            <p>Sally é uma garota legal. Ela tem olhos azuis.<p>
                                                <br>
                                            <p>Sally is a girl WHO has blue eyes.</p>
                                            <p>Sally é uma garota legal que tem olhos azuis.</p>
                                            <br>
                                            <p>Corolla is a good car. It works on alcohol and gasoline.</p>
                                            <p>O Corolla é um bom carro. Funciona no álcool e na gasolina.</p>
                                            <br>
                                            <p>Corolla is a good car WHICH works on alcohol and gasoline.</p>
                                            <p>O Corolla é um bom carro que funciona a álcool e a gasolina.</p>
                                            <br>
                                            <p>Peter works part time. He has a nice job.</p>
                                            <p>Peter, WHOSE job is nice, works part time.</p>
                                            <p>Peter, cujo trabalho é legal, trabalha meio período.</p>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Verb to be + Adjetive</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">VERB TO BE + ADJECTIVE  - Ser / Estar</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>
                                            <p>Jennifer is happy. – Jennifer está feliz.</p>
                                            <p>Paula is pretty. – Paula é bonita.</p>
                                            <p>Lindsey is nice. – Lindsey é legal.</p>
                                            <br>
                                            <p>VERB GET + ADJECTIVE - Ficar</p>
                                            <br>
                                            <p>I get happy when I see her. - Eu fico feliz quando a vejo.</p>
                                            <p>Do you get tired after work? - Você fica cansado depois do trabalho?</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Continuous</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE CONTINUOUS – futuro contínuo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Indica uma ação estará em progresso no futuro</p>
                                            <br>
                                            <p>WILL + TO BE ( PRESENT ) + VERB(ING)</p>
                                            <br>
                                            <p>I will be traveling to Rio de Janeiro next week</p>
                                            <p>Eu estarei viajando para o Rio de Janeiro semana que vem.</p>
                                            <br>
                                            <p>Will they be playing soccer at the club his afternoon?</p>
                                            <p>Eles estarão jogando futebol no clube esta tarde?</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Career Plans</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE CAREER PLANS – planos futuros de carreira</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>What do you plan to be in the future?</p>
                                            <p>O que você planeja ser no futuro?</p>
                                            <br>
                                            <p>I plan to be an engineer.</p>
                                            <p>Penso em ser um engenheiro.</p>
                                            <br>
                                            <p>Do you have plans for the future?</p>
                                            <p>Você tem planos para o futuro?</p>
                                            <br>
                                            <p>Sure I do. I intend to study Law and open my business.</p>
                                            <p>Claro que sim, Pretendo estudar direito e abrir meu negócio.</p>
                                            <br>
                                            <p>Have you got intentions to live abroad?</p>
                                            <p>Você tem intenção de morar no exterior?</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">
        <footer>
            <p>© Company 2017 - Fourweeks</p>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  
    </body>
</html>

