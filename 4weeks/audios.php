<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
    <head>
        <title>Blimeyco </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Diálogos em Inglês"/>
        <meta name="author" content=""/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/blimeyco.ico"/>
        <style>

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */
            #msg{ width: 400px; height: 200px; }
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


    </head>
    <body>
        <div class="menu cor1">
            <img  src="img/blimeyco4_1.png" border="0"> 

            <form name="FormLogin" class="navbar-form pull-right" action="Login" method="POST">
                <a href='configuracoes.php'>Configurações </a>
                <a href='remover.php'>Sair</a>
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
                    <div align="center" style="overflow: auto;"> <h3>Músicas</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'menu.php';">Voltar</button></div>

                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 1 - Happy / Pharrell williams </a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Música 1 - Happy</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/y6Sxv-sUYtM" frameborder="0" allowfullscreen></iframe>
                                            <br>


                                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                    <li><a href="#tab2" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">

                                                        <p>It might seem crazy what I'm about to say</p>
                                                        <p>Sunshine she's here, you can take a break</p>
                                                        <p>'m a hot air balloon that could go to space</p>
                                                        <p>With the air, like I don't care baby by the way</p>
                                                        <br>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like a room without a roof</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like happiness is the truth</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you know what happiness is to you</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like that's what you wanna do</p>
                                                        <br>
                                                        <p>Here come bad news talking this and that</p>
                                                        <p>Yeah, well, gimme all you got and don't hold back</p>
                                                        <p>Yeah, well I should probably warn you I'll be just fine</p>
                                                        <p>Yeah, no offense to you don't waste your time</p>
                                                        <p>Here's why</p>
                                                        <br>

                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like a room without a roof</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like happiness is the truth</p>

                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you know what happiness is to you</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like that's what you wanna do</p>
                                                        <br>
                                                        <p>(Happy) bring me down</p>
                                                        <p>Can't nothing (happy) bring me down</p>
                                                        <p>My level's too high (happy) to bring me down</p>
                                                        <p>Can't nothing (happy) bring me down</p>
                                                        <p>I said</p>
                                                        <p>(Happy, happy, happy) bring me down</p>
                                                        <p>Can't nothing bring me down</p>
                                                        <p>My level's too high (happy) to bring me down</p>
                                                        <p>Can't nothing bring me down</p>
                                                        <p>I said</p>
                                                        <br>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like a room without a roof</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like happiness is the truth</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you know what happiness is to you</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like that's what you wanna do (2x)</p>
                                                        <br>
                                                        <p>(Happy) bring me down</p>
                                                        <br>                                                        
                                                        <p>Can't nothing (happy) bring me down</p>
                                                        <p>My level's too high (happy) to bring me down</p>
                                                        <p>Can't nothing (happy) bring me down</p>
                                                        <p>I said</p>
                                                        <br>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like a room without a roof</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like happiness is the truth</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you know what happiness is to you</p>
                                                        <p>Because I'm happy</p>
                                                        <p>Clap along if you feel like that's what you wanna do (2x)</p>
                                                        <p>C'mon</p>



                                                    </div>
                                                    <div class="tab-pane" id="tab2">

                                                        <p>Pode parecer loucura o que estou prestes a dizer</p>
                                                        <p>A luz do sol, ela está aqui, você pode fazer uma pausa</p>
                                                        <p>Sou um balão de ar quente que poderia ir para o espaço</p>
                                                        <p>Com o ar, como se não me importasse, aliás</p>
                                                        <br>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se você se sente num quarto sem telhado</p>
                                                        <p>Bata palmas junto se sente que a felicidade é a verdade</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sabe o que a felicidade é para você</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que é isso que você quer fazer</p>
                                                        <br>
                                                        <p>Lá vêm más notícias, falando disso e daquilo</p>
                                                        <p>Bem, dê-me tudo o que tem e não se contenha</p>
                                                        <p>Eu provavelmente deveria lhe avisar que estarei bem</p>
                                                        <p>Sim, sem querer ofender, não perca o seu tempo</p>
                                                        <p>Eis o motivo</p>
                                                        <br>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se você se sente num quarto sem telhado</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que a felicidade é a verdade</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sabe o que a felicidade é para você</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que é isso que você quer fazer</p>
                                                        <br>
                                                        <p>(Feliz) me pôr para baixo</p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Meu nível é muito alto (feliz) para que me ponham para baixo</p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Eu disse</p>
                                                        <p>(Feliz, feliz, feliz) me pôr para baixo</p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Meu nível é muito alto (feliz) para que me ponham para baixo</p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Eu disse</p>

                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se você se sente num quarto sem telhado</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que a felicidade é a verdade</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sabe o que a felicidade é para você</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que é isso que você quer fazer(2x)</p>
                                                        <br>

                                                        <p>(Feliz) me pôr para </p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Meu nível é muito alto (feliz) para que me ponham para baixo</p>
                                                        <p>Nada pode me pôr para baixo</p>
                                                        <p>Eu disse</p>
                                                        <br>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se você se sente num quarto sem telhado</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que a felicidade é a verdade</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sabe o que a felicidade é para você</p>
                                                        <p>Porque estou feliz</p>
                                                        <p>Bata palmas junto se sente que é isso que você quer fazer(2x)</p>
                                                        <br>
                                                        <p>Vamos lá</p>




                                                    </div>
                                                </div>
                                            </div>




                                            </li>

                                            <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 2 - Love Never Felt So Good/ Michael Jackson, Justin Timberlake </a></div>
                                                <div class="hidden_div"><div class="caixa">
                                                        <div class="content"> 
                                                            <div class ="list">
                                                                <div class="title"><div align="center" style="color:red">Música 2 - Love Never Felt So Good</div> 
                                                                    <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/oG08ukJPtR8" frameborder="0" allowfullscreen></iframe>
                                                                <br>
                                                                <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active"><a href="#tab3" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                        <li><a href="#tab4" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                    </ul>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="tab3">

                                                                            <p>Dancin'</p>
                                                                            <p>Let me see you move, come on</p>
                                                                            <p>Dancin'</p>
                                                                            <p>Let me see you move</p>
                                                                            <br>
                                                                            <p>Baby, love never felt so good</p>
                                                                            <p>And I'd die if it ever could</p>
                                                                            <p>Not like you hold me, hold me</p>
                                                                            <p>Oh baby, love never felt so fine</p>
                                                                            <p>And I'd doubt if it's never mine</p>
                                                                            <p>Not like you hold me, hold me</p>
                                                                            <p>And the night's gonna be just fine</p>
                                                                            <p>Gotta fly, gotta see, can't believe</p>
                                                                            <p>I can't take it</p>
                                                                            <br>
                                                                            <p>'Cause baby, every time I love you</p>
                                                                            <p>In and out of my life, in out baby</p>
                                                                            <p>Tell me, if you really love me</p>
                                                                            <p>It's in and out of my life, in out baby</p>
                                                                            <p>'Cause baby, love never felt so good</p>
                                                                            <br>
                                                                            <p>Baby, love never felt so fine</p>
                                                                            <p>And I'd doubt if it was ever mine</p>
                                                                            <p>Not like you hold me, hold me</p>
                                                                            <p>Oh baby, love never felt so good</p>
                                                                            <p>And I'd doubt if it ever could</p>
                                                                            <p>Not like you hold me, hold me</p>
                                                                            <p>And the night through the thick and thin</p>
                                                                            <p>Gotta fly, gotta see, can't believe</p>
                                                                            <br>
                                                                            <p>Baby, every time I love you</p>
                                                                            <p>In and out of my life, in out baby</p>
                                                                            <p>Tell me, if you really love me</p>
                                                                            <p>It's in and out of my life, in out baby</p>
                                                                            <p>Baby, love never felt so good</p>
                                                                            <br>
                                                                            <p>Dancin'</p>
                                                                            <p>Let me see you move, come on</p>
                                                                            <p>Let me see you move</p>
                                                                            <p>Dancin'</p>
                                                                            <p>Let me see you move, come on</p>
                                                                            <p>I said let me see you move</p>
                                                                            <p>Michael</p>
                                                                            <br>
                                                                            <p>And the night, that is good</p>
                                                                            <p>Gotta fly, gotta see, can't believe</p>
                                                                            <p>I can't take it 'cause</p>
                                                                            <br>
                                                                            <p>Baby, every time I love you</p>
                                                                            <p>In and out of my life, in out baby</p>
                                                                            <p>Tell me, if you really love me</p>
                                                                            <p>It's in and out of my life, trying to be crazy</p>
                                                                            <p>'Cause Baby, love never felt so good</p>
                                                                            <br>
                                                                            <p>Baby, every time I love you</p>
                                                                            <p>It's in and out of my life, in out baby</p>
                                                                            <p>Tell me, if you really love me</p>
                                                                            <p>It's in and out of my life, trying to be crazy</p>
                                                                            <p>Cause baby, love never felt so good</p>
                                                                            <p>So good, oh feel good</p>
                                                                            <p>It never felt so good</p>
                                                                            <p>Love never felt so good</p>
                                                                            <p>It never felt so good(3x)</p>





                                                                        </div>
                                                                        <div class="tab-pane" id="tab4">


                                                                            <p>Dance</p>
                                                                            <p>Deixe-me ver o seu gingado, vamos lá</p>
                                                                            <p>Dance</p>
                                                                            <p>Deixe-me ver o seu gingado</p>
                                                                            <br>
                                                                            <p>Pois, querida, o amor nunca foi tão bom</p>
                                                                            <p>E eu morreria se não fosse</p>
                                                                            <p>Quando você me abraça, me abraça</p>
                                                                            <p>Oh querida, o amor nunca foi tão legal</p>
                                                                            <p>E eu duvido que nunca foi meu</p>
                                                                            <p>Quando você me abraça, me abraça</p>
                                                                            <p>E à noite vai ficar tudo bem</p>
                                                                            <p>Preciso voar, preciso ver, não consigo acreditar</p>
                                                                            <p>Não posso mais aguentar</p>
                                                                            <br>
                                                                            <p>Pois, querida, toda vez que eu te amo</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Me diga, se você realmente me ama</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Pois, querida, o amor nunca foi tão bom</p>
                                                                            <br>
                                                                            <p>Querida, o amor nunca foi tão bom</p>
                                                                            <p>E eu duvido que nunca foi meu</p>
                                                                            <p>Quando você me abraça, me abraça</p>
                                                                            <p>Oh querida, o amor nunca foi tão legal</p>
                                                                            <p>E eu duvidei se poderia ser</p>
                                                                            <p>Quando você me abraça, me abraça</p>
                                                                            <p>E à noite tem os seus altos e baixos</p>
                                                                            <p>Preciso voar, preciso ver, não consigo acreditar</p>
                                                                            <p>Não posso mais aguentar, pois</p>
                                                                            <br>
                                                                            <p>Pois, querida, toda vez que eu te amo</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Me diga, se você realmente me ama</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Pois, querida, o amor nunca foi tão bom</p>
                                                                            <br>
                                                                            <p>Dance</p>
                                                                            <p>Deixe-me ver o seu gingado, vamos lá</p>
                                                                            <p>Deixe-me ver o seu gingado</p>
                                                                            <p>Dance</p>
                                                                            <p>Deixe-me ver o seu gingado, vamos lá</p>
                                                                            <p>Eu disse deixe-me ver o seu gingado</p>
                                                                            <p>Michael</p>
                                                                            <br>
                                                                            <p>E à noite que é tão boa</p>
                                                                            <p>Preciso voar, preciso ver, não consigo acreditar</p>
                                                                            <p>Não posso mais aguentar, pois</p>
                                                                            <br>
                                                                            <p>Pois, querida, toda vez que eu te amo</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Me diga, se você realmente me ama</p>
                                                                            <p>Entrando e saindo da minha vida, tentando ser louca</p>
                                                                            <p>Pois, querida, o amor nunca foi tão bom</p>
                                                                            <br>
                                                                            <p>Pois, querida, toda vez que eu te amo</p>
                                                                            <p>Entrando e saindo da minha vida, entrando e saindo</p>
                                                                            <p>Me diga, se você realmente me ama</p>
                                                                            <p>Entrando e saindo da minha vida, tentando ser louca</p>
                                                                            <p>Pois, querida, o amor nunca foi tão bom</p>
                                                                            <p>Tão bom, oh tão bom</p>
                                                                            <p>Nunca foi tão bom</p>
                                                                            <p>O amor nunca foi tão bom</p>
                                                                            <p>Nunca foi tão bom (3x)</p>





                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                </li>

                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 3 - I believe I can Fly / R. Kelly </a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:red">Música 3  - I believe I can Fly</div> 
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GIQn8pab8Vc" frameborder="0" allowfullscreen></iframe>
                                                                                    <br>


                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab5" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab6" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab5">

                                                                                                <p>I used to think that I could not go on</p>
                                                                                                <p>And life was nothing but an awful song</p>
                                                                                                <p>But now I know the meaning of true love</p>
                                                                                                <p>I'm leaning on the everlasting arms</p>
                                                                                                <br>
                                                                                                <p>If I can see it, then I can do it</p>
                                                                                                <p>If I just believe it, there's nothing to it</p>
                                                                                                <br>                                          

                                                                                                <p>I believe I can fly</p>
                                                                                                <p>I believe I can touch the sky</p>
                                                                                                <p>I think about it every night and day</p>
                                                                                                <p>Spread my wings and fly away</p>
                                                                                                <p>I believe I can soar</p>
                                                                                                <p>I see me running through that open door</p>
                                                                                                <p>I believe I can fly</p>
                                                                                                <p>I believe I can fly</p>
                                                                                                <p>I believe I can fly</p>
                                                                                                <br>
                                                                                                <p>See I was on the verge of breaking down</p>
                                                                                                <p>Sometimes silence can seem so loud</p>
                                                                                                <p>There are miracles in life I must achieve</p>
                                                                                                <p>But first I know it starts inside of me, oh</p>
                                                                                                <br>
                                                                                                <p>If I can see it, then I can be it</p>
                                                                                                <p>If I just believe it, there's nothing to it</p>
                                                                                                <br>
                                                                                                <p>I believe I can fly</p>
                                                                                                <p>I believe I can touch the sky</p>
                                                                                                <p>I think about it every night and day</p>
                                                                                                <p>Spread my wings and fly away</p>
                                                                                                <p>I believe I can soar</p>
                                                                                                <p>I see me running through that open door</p>
                                                                                                <p>I believe I can fly</p>
                                                                                                <P>I believe I can fly</p>
                                                                                                <p>I believe I can fly</p>
                                                                                                <br>
                                                                                                <p>Hey, 'cause I believe in me, oh</p>
                                                                                                <br>
                                                                                                <p>If I can see it, then I can do it</p>
                                                                                                <p>If I just believe it, there's nothing to it</p>
                                                                                                <br>
                                                                                                <p>I believe I can fly</p>
                                                                                                <p>I believe I can touch the sky</p>
                                                                                                <p>I think about it every night and day</p>
                                                                                                <p>Spread my wings and fly away</p>
                                                                                                <p>I believe I can soar</p>
                                                                                                <p>I see me running through that open door</p>
                                                                                                <p>I believe I can fly(3x)</p>
                                                                                                <br>
                                                                                                <p>Hey, if I just spread my wings</p>
                                                                                                <p>I can fly(2x)</p>

                                                                                                <p>I can fly, hey</p>
                                                                                                <p>If I just spread my wings</p>
                                                                                                <p>I can fly</p>
                                                                                                <p>Fly-eye-eye</p>




                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab6">

                                                                                                <p>Eu acredito que posso voar</p> 
                                                                                                <p>Eu costumava pensar que eu não pudesse prosseguir</p>
                                                                                                <p>E a vida não era nada, além de uma terrível canção</p>
                                                                                                <p>Mas agora sei o significado do verdadeiro amor</p>
                                                                                                <p>Eu estou me apoiando nos braços do Eterno (Deus)</p>
                                                                                                <br>
                                                                                                <p>Se eu posso ver isto, então eu posso fazê-lo</p>
                                                                                                <p>E se eu acreditar, nada poderá me impedir</p>
                                                                                                <br>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que eu posso tocar o céu</p>
                                                                                                <p>Penso nisto dia e noite</p>
                                                                                                <p>Abrir minhas asas e voar</p>
                                                                                                <p>Eu acredito que eu posso elevar-me</p>
                                                                                                <p>Eu me vejo passando por aquela porta aberta</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <br>

                                                                                                <p>Veja, eu estive à beira da auto destruição</p>
                                                                                                <p>As vezes o silêncio pode parecer tão alto</p>
                                                                                                <p>Existem milagres da vida; eu preciso realiza-los</p>
                                                                                                <p>Mas primeiro eu sei que, começa dentro de mim</p>
                                                                                                <br>
                                                                                                <p>Se eu posso ver isto, então eu posso acreditar nisto</p>
                                                                                                <p>E se eu acreditar, nada poderá me impedir</p>
                                                                                                <br>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que eu posso tocar o céu</p>
                                                                                                <p>Penso nisto dia e noite</p>
                                                                                                <p>Abrir minhas asas e voar</p>
                                                                                                <p>Eu acredito que eu posso elevar-me</p>
                                                                                                <p>Eu me vejo passando por aquela porta aberta</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <br>
                                                                                                <p>Hey, porque eu acredito em mim, oh</p>
                                                                                                <br>
                                                                                                <p>Se eu posso ver isto, então eu posso fazê-lo</p>
                                                                                                <p>E se eu acreditar, nada poderá me impedir</p>
                                                                                                <br>
                                                                                                <p>Eu acredito que posso voar!</p>
                                                                                                <p>Eu acredito que eu posso tocar o céu</p>
                                                                                                <p>Penso nisto dia e noite</p>
                                                                                                <p>Abrir minhas asas e voar</p>
                                                                                                <p>Eu acredito que eu posso elevar-me</p>
                                                                                                <p>Eu me vejo passando por aquela porta aberta</p>
                                                                                                <p>Eu acredito que posso voar!(3x)</p>
                                                                                                <br>

                                                                                                <p>Ei, se eu simplesmente abrir minhas asas</p>
                                                                                                <p>Eu posso voar</p>
                                                                                                <p>Eu posso voar</p>
                                                                                                <p>Eu posso voar, hey</p>
                                                                                                <p>Se eu abrir minhas asas</p>
                                                                                                <p>Eu posso voar</p>
                                                                                                <p>Voar-Voar-Voar</p>





                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    </li>

                                                                                    <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 4 - Sugar/ Maroon 5</a></div>
                                                                                        <div class="hidden_div"><div class="caixa">
                                                                                                <div class="content"> 
                                                                                                    <div class ="list">
                                                                                                        <div class="title"><div align="center" style="color:red">Música 4 - Sugar </div> 
                                                                                                            <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                                                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/09R8_2nJtjg" frameborder="0" allowfullscreen></iframe>
                                                                                                        <br>


                                                                                                        <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                                            <ul class="nav nav-tabs">
                                                                                                                <li class="active"><a href="#tab7" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                                                <li><a href="#tab8" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                                                            </ul>
                                                                                                            <div class="tab-content">
                                                                                                                <div class="tab-pane active" id="tab7">

                                                                                                                    <p> I'm hurting baby, I'm broken down</p>
                                                                                                                    <p>I need your loving, loving</p>
                                                                                                                    <p>I need it now</p>
                                                                                                                    <P>When I'm without you</p>
                                                                                                                    <P>I'm something weak</p>
                                                                                                                    <p>You got me begging, begging</p>
                                                                                                                    <p>I'm on my knees</p>
                                                                                                                    <p>I don't wanna be needing your love</p>
                                                                                                                    <p>I just wanna be deep in your love</p>
                                                                                                                    <p>And it's killing me when you're away</p>
                                                                                                                    <p>Ooh baby, cause I really don't care where you are</p>
                                                                                                                    <p>I just wanna be there where you are</p>
                                                                                                                    <p>And I gotta get one little taste</p>
                                                                                                                    <br>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <br>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me</p>
                                                                                                                    <p>Oh right here, cause I need</p>
                                                                                                                    <p>Little love and little sympathy</p>
                                                                                                                    <p>Yeah you show me good loving</p>
                                                                                                                    <p>Make it alright</p>
                                                                                                                    <p>Need a little sweetness in my life</p>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me</p>
                                                                                                                    <br>
                                                                                                                    <p>My broken pieces</p>
                                                                                                                    <p>You pick'em up</p>
                                                                                                                    <p>Don't leave me hanging, hanging</p>
                                                                                                                    <p>When I'm without ya</p>
                                                                                                                    <p>So insecure</p>
                                                                                                                    <p>You are the one thing, one thing</p>
                                                                                                                    <p>I'm living for</p>
                                                                                                                    <p>I don't wanna be needing your love</p>
                                                                                                                    <p>I just wanna be deep in your love</p>
                                                                                                                    <p>And it's killing me when you're away</p>
                                                                                                                    <p>Ooh baby, cause I really don't care where you are</p>
                                                                                                                    <p>I just wanna be there where you are</p>
                                                                                                                    <p>And I gotta get one little taste</p>
                                                                                                                    <br>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <br>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me</p>
                                                                                                                    <p>Oh right here, cause I need</p>
                                                                                                                    <p>Little love and little sympathy</p>
                                                                                                                    <p>Yeah you show me good loving</p>
                                                                                                                    <p>Make it alright</p>
                                                                                                                    <p>Need a little sweetness in my life</p>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me</p>

                                                                                                                    <br>
                                                                                                                    <p>Yeah</p>
                                                                                                                    <p>I want that red velvet</p>
                                                                                                                    <p>I want that sugar sweet</p>
                                                                                                                    <p>Don't let nobody touch it</p>
                                                                                                                    <p>Unless that somebody is me</p>
                                                                                                                    <p>I gotta be a man</p>
                                                                                                                    <p>There ain't no other way</p>
                                                                                                                    <p>Cause girl you're hotter than southern california bay</p>
                                                                                                                    <p>I don't wanna play no games</p>
                                                                                                                    <p>I don't gotta be afraid</p>
                                                                                                                    <p>Don't give all that shy sh-t</p>
                                                                                                                    <p>No make up on</p>
                                                                                                                    <p>That's my</p>
                                                                                                                    <br>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me</p>
                                                                                                                    <p>Oh right here, cause I need</p>
                                                                                                                    <p>Little love and little sympathy</p>
                                                                                                                    <p>Yeah you show me good loving</p>
                                                                                                                    <p>Make it alright</p>
                                                                                                                    <p>Need a little a sweetness in my life</p>
                                                                                                                    <p>Sugar</p>
                                                                                                                    <p>Yes please</p>
                                                                                                                    <p>Won't you come and put it down on me (2x)</p>







                                                                                                                </div>
                                                                                                                <div class="tab-pane" id="tab8">

                                                                                                                    <p>O seu açúcar </p>
                                                                                                                    <p>Eu estou machucado baby, estou despedaçado</p>
                                                                                                                    <p>Eu preciso do seu amor, amor</p>
                                                                                                                    <p>Eu preciso disso agora</p>
                                                                                                                    <p>Quando estou sem você</p>
                                                                                                                    <p>Eu sou algo fraco</p>
                                                                                                                    <p>Você me faz implorar, implorar</p>
                                                                                                                    <p>Estou de joelhos</p>
                                                                                                                    <p>Eu não quero precisar do seu amor<p>
                                                                                                                    <p>Eu só quero me afundar no seu amor</p>
                                                                                                                    <p>E me mata quando você não está aqui</p>
                                                                                                                    <p>Ooh baby, pois realmente não me importo onde você está</p>
                                                                                                                    <p>Eu só quero estar onde você está</p>
                                                                                                                    <p>E eu tenho que provar um pedacinho</p>
                                                                                                                    <br>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim</p>
                                                                                                                    <p>Ah, bem aqui, pois eu preciso</p>
                                                                                                                    <p>Um pouco de amor e simpatia</p>
                                                                                                                    <p>Sim, me mostre um bom amor</p>
                                                                                                                    <p>Faça isso direito</p>
                                                                                                                    <p>Preciso de doçura em minha vida</p>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim</p>
                                                                                                                    <br>
                                                                                                                    <p>Minhas peças quebradas</p>
                                                                                                                    <p>Você as remendou</p>
                                                                                                                    <p>Não me deixe esperando, esperando</p>
                                                                                                                    <p>Vem ficar comigo um pouco</p>
                                                                                                                    <p>Quando estou sem você</p>
                                                                                                                    <p>Tão inseguro</p>
                                                                                                                    <p>Você é a única coisa, única coisa</p>
                                                                                                                    <p>Pela qual eu vivo</p>
                                                                                                                    <p>Eu não quero precisar do seu amor</p>
                                                                                                                    <p>Eu só quero me afundar no seu amor</p>
                                                                                                                    <p>E me mata quando você não está aqui</p>
                                                                                                                    <p>Ooh baby, pois realmente não me importo onde você está</p>
                                                                                                                    <p>Eu só quero estar onde você está</p>
                                                                                                                    <p>E eu tenho que provar um pedacinho</p>
                                                                                                                    <br>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim</p>
                                                                                                                    <p>Ah, bem aqui, pois eu preciso</p>
                                                                                                                    <p>Um pouco de amor e simpatia</p>
                                                                                                                    <p>Sim, me mostre um bom amor</p>
                                                                                                                    <p>Faça isso direito</p>
                                                                                                                    <p>Preciso de doçura em minha vida</p>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim</p>
                                                                                                                    <br>
                                                                                                                    <p>Sim</p>
                                                                                                                    <p>Eu quero esse veludo vermelho</p>
                                                                                                                    <p>Eu quero esse açúcar doce</p>
                                                                                                                    <p>Não deixe ninguém tocá-la</p>
                                                                                                                    <p>A não ser que esse alguém seja eu</p>
                                                                                                                    <p>Eu tenho que ser um homem</p>
                                                                                                                    <p>Não há nenhuma outra maneira</p>
                                                                                                                    <p>Garota, você é quente como a baía do sul da Califórnia</p>
                                                                                                                    <p>Eu não quero jogar nenhum jogo</p>
                                                                                                                    <p>Eu não tenho que ter medo</p>
                                                                                                                    <p>Não fique fazendo doce</p>
                                                                                                                    <p>Sem maquiagem</p>
                                                                                                                    <p>Essa é a minha</p>
                                                                                                                    <br>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim</p>
                                                                                                                    <p>Ah, bem aqui, pois eu preciso</p>
                                                                                                                    <p>Um pouco de amor e simpatia</p>
                                                                                                                    <p>Sim, me mostre um bom amor</p>
                                                                                                                    <p>Faça isso direito</p>
                                                                                                                    <p>Preciso de doçura em minha vida</p>
                                                                                                                    <p>O seu açúcar</p>
                                                                                                                    <p>Sim, por favor</p>
                                                                                                                    <p>Por que você não vem despejar para mim(2x)</p>






                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>


                                                                                                        </li>

                                                                                                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 5 - All of Me / John Legend</a></div>
                                                                                                            <div class="hidden_div"><div class="caixa">
                                                                                                                    <div class="content"> 
                                                                                                                        <div class ="list">
                                                                                                                            <div class="title"><div align="center" style="color:red">Música 5 -</div> 
                                                                                                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                                                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/450p7goxZqg" frameborder="0" allowfullscreen></iframe>
                                                                                                                            <br>


                                                                                                                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                                                                <ul class="nav nav-tabs">
                                                                                                                                    <li class="active"><a href="#tab9" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                                                                    <li><a href="#tab10" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                                                                                </ul>
                                                                                                                                <div class="tab-content">
                                                                                                                                    <div class="tab-pane active" id="tab9">

                                                                                                                                        <p>What would I do without your smart mouth</p>
                                                                                                                                        <p>Drawing me in and you kicking me out</p>
                                                                                                                                        <p>Got my head spinning, no kidding</p>
                                                                                                                                        <p>I can't pin you down</p>
                                                                                                                                        <p>What's going on in that beautiful mind</p>
                                                                                                                                        <p>I'm on your magical mystery ride</p>
                                                                                                                                        <p>And I'm so dizzy, don't know what hit me</p>
                                                                                                                                        <p>But I'll be alright</p>
                                                                                                                                        <br>
                                                                                                                                        <p>My head's under water</p>
                                                                                                                                        <p>But I'm breathing fine</p>
                                                                                                                                        <p>You're crazy and I'm out of my mind</p>
                                                                                                                                        <br>
                                                                                                                                        <p>'Cause all of me</p>
                                                                                                                                        <p>Loves all of you</p>
                                                                                                                                        <p>Love your curves and all your edges</p>
                                                                                                                                        <p>All your perfect imperfections</p>
                                                                                                                                        <p>Give your all to me</p>
                                                                                                                                        <p>I'll give my all to you</p>
                                                                                                                                        <p>You're my end and my beginning</p>
                                                                                                                                        <p>Even when I lose I'm winning</p>
                                                                                                                                        <p>'Cause I give you all of me</p>
                                                                                                                                        <p>And you give me all of you oh</p>
                                                                                                                                        <br>
                                                                                                                                        <p>How many times do I have to tell you</p>
                                                                                                                                        <p>Even when you're crying you're beautiful too</p>
                                                                                                                                        <p>The world is beating you down</p>
                                                                                                                                        <p>I'm around through every mood</p>
                                                                                                                                        <p>You're my downfall, you're my muse</p>
                                                                                                                                        <p>My worst distraction, my rhythm and blues</p>
                                                                                                                                        <p>I can't stop singing</p>
                                                                                                                                        <p>It's ringing, in my head for you</p>
                                                                                                                                        <br>
                                                                                                                                        <p>My head's under water</p>
                                                                                                                                        <p>But I'm breathing fine</p>
                                                                                                                                        <p>You're crazy and I'm out of my mind</p>
                                                                                                                                        <p>'Cause all of me</p>
                                                                                                                                        <p>Loves all of you</p>
                                                                                                                                        <p>Love your curves and all your edges</p>
                                                                                                                                        <p>All your perfect imperfections</p>
                                                                                                                                        <p>Give your all to me</p>
                                                                                                                                        <p>I'll give my all to you</p>
                                                                                                                                        <p>You're my end and my beginning</p>
                                                                                                                                        <p>Even when I lose I'm winning</p>
                                                                                                                                        <p>'Cause I give you all of me</p>
                                                                                                                                        <p>And you give me all of you </p>
                                                                                                                                        <p>Give me all of you</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Cards on the table, we're both showing hearts</p>
                                                                                                                                        <p>Risking it all, though it's hard</p>
                                                                                                                                        <br>
                                                                                                                                        <p>'Cause all of me</p>
                                                                                                                                        <p>Loves all of you</p>
                                                                                                                                        <p>Love your curves and all your edges</p>
                                                                                                                                        <p>All your perfect imperfections</p>
                                                                                                                                        <p>Give your all to me</p>
                                                                                                                                        <p>I'll give my all to you</p>
                                                                                                                                        <p>You're my end and my beginning</p>
                                                                                                                                        <p>Even when I lose I'm winning</p>
                                                                                                                                        <p>'Cause I give you all of me</p>
                                                                                                                                        <p>And you give me all of you </p>
                                                                                                                                        <br>
                                                                                                                                        <p>I give you all of me</p>
                                                                                                                                        <p>And you give me all of you oh</p>



                                                                                                                                    </div>
                                                                                                                                    <div class="tab-pane" id="tab10">


                                                                                                                                        <p>Tudo de mim</p>
                                                                                                                                        <br>
                                                                                                                                        <p>O que eu faria sem sua boca esperta</p>
                                                                                                                                        <p>Estou me arrastando e você me está me dispensando</p>
                                                                                                                                        <p>Estou com a cabeça a mil, sem brincadeira</p>
                                                                                                                                        <p>Não posso te forçar a nada</p>
                                                                                                                                        <p>O que está se passando nessa bela cabeça</p>
                                                                                                                                        <p>Estou passando pelo seu mistério mágico</p>
                                                                                                                                        <p>E estou tão confuso que não sei o que me atingiu</p>
                                                                                                                                        <p>Mas eu vou ficar bem</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Minha cabeça está embaixo da água</p>
                                                                                                                                        <p>Mas estou respirando bem</p>
                                                                                                                                        <p>Você é louca e eu estou fora de controle</p>
                                                                                                                                        <br>

                                                                                                                                        <p>Porque tudo de mim</p>
                                                                                                                                        <p>Ama tudo em você</p>
                                                                                                                                        <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                        <p>Todas as suas perfeitas imperfeições</p>
                                                                                                                                        <p>Dê tudo de você para mim</p>
                                                                                                                                        <p>Eu te darei meu tudo</p>
                                                                                                                                        <p>Você é o meu fim e meu começo</p>
                                                                                                                                        <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                        <p>Porque te dou tudo de mim</p>
                                                                                                                                        <p>E você me dá tudo de você oh</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Quantas vezes tenho que te dizer</p>
                                                                                                                                        <p>Que mesmo quando você está chorando você continua linda</p>
                                                                                                                                        <p>O mundo está te massacrando</p>
                                                                                                                                        <p>Estou por perto a todo o momento</p>
                                                                                                                                        <p>Você é minha ruína, você é minha musa</p>
                                                                                                                                        <p>Minha pior distração, meu ritmo e tristeza</p>
                                                                                                                                        <p>Não consigo parar de cantar</p>
                                                                                                                                        <p>Está tocando uma música em minha cabeça para você</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Minha cabeça está embaixo da água</p>
                                                                                                                                        <p>Mas estou respirando bem</p>
                                                                                                                                        <p>Você é louca e eu estou fora de controle</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Porque tudo de mim</p>
                                                                                                                                        <p>Ama tudo em você</p>
                                                                                                                                        <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                        <p>Dê tudo de você para mim</p>
                                                                                                                                        <p>Eu te darei meu tudo</p>
                                                                                                                                        <p>Você é o meu fim e meu começo</p>
                                                                                                                                        <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                        <p>Porque te dou tudo de mim</p>
                                                                                                                                        <p>E você me dá tudo de você oh</p>
                                                                                                                                        <p>Me dá tudo de você</p>
                                                                                                                                        <br>
                                                                                                                                        <p>As cartas na mesa, estamos mostrando os nossos corações</p>
                                                                                                                                        <p>Arriscando tudo, apesar de isso ser difícil</p>
                                                                                                                                        <br>
                                                                                                                                        <p>Porque tudo de mim</p>
                                                                                                                                        <p>Ama tudo em você</p>
                                                                                                                                        <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                        <p>Dê tudo de você para mim</p>
                                                                                                                                        <p>Eu te darei meu tudo</p>
                                                                                                                                        <p>Você é o meu fim e meu começo</p>
                                                                                                                                        <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                        <p>Porque te dou tudo de mim</p>
                                                                                                                                        <p>E você me dá tudo de você oh</p>

                                                                                                                                        <P>Te dou tudo de mim</p>
                                                                                                                                        <p>E você me dá tudo de você oh</p>






                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                            </li>

                                                                                                                            <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Música 6 - Photograph / Ed Sheeran</a></div>
                                                                                                                                <div class="hidden_div"><div class="caixa">
                                                                                                                                        <div class="content"> 
                                                                                                                                            <div class ="list">
                                                                                                                                                <div class="title"><div align="center" style="color:red">Música 6 -</div> 
                                                                                                                                                    <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'audios.php';">x</button></div></div>
                                                                                                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/nSDgHBxUbVQ" frameborder="0" allowfullscreen></iframe>
                                                                                                                                                <br>


                                                                                                                                                <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                                                                                    <ul class="nav nav-tabs">
                                                                                                                                                        <li class="active"><a href="#tab9" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                                                                                        <li><a href="#tab10" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                                                                                                    </ul>
                                                                                                                                                    <div class="tab-content">
                                                                                                                                                        <div class="tab-pane active" id="tab11">

                                                                                                                                                            <p> Loving can hurt</p>
                                                                                                                                                            <p>Loving can hurt sometimes</p>
                                                                                                                                                            <p>But it's the only thing that I know</p>
                                                                                                                                                            <p>And when it gets hard</p>
                                                                                                                                                            <p>You know it can get hard sometimes</p>
                                                                                                                                                            <p>It is the only thing that makes us feel alive</p>

                                                                                                                                                            <p>We keep this love in a photograph</p>
                                                                                                                                                            <p>We made these memories for ourselves</p>
                                                                                                                                                            <p>Where our eyes are never closing</p>
                                                                                                                                                            <p>Hearts were never broken</p>
                                                                                                                                                            <p>And time's forever frozen still</p>

                                                                                                                                                            <p>So you can keep me inside the pocket</p>
                                                                                                                                                            <p>Of your ripped jeans</p>
                                                                                                                                                            <p>Holding me close until our eyes meet</p>
                                                                                                                                                            <p>You won't ever be alone</p>
                                                                                                                                                            <p>Wait for me to come home</p>

                                                                                                                                                            <p>Loving can heal</p>
                                                                                                                                                            <p>Loving can mend your soul</p>
                                                                                                                                                            <p>And it's the only thing that I know</p>
                                                                                                                                                            <p>I swear it will get easier</p>
                                                                                                                                                            <p>Remember that with every piece of you</p>
                                                                                                                                                            <p>And it's the only thing we take with us when we die</p>

                                                                                                                                                            <p>We keep this love in a photograph</p>
                                                                                                                                                            <p>We made these memories for ourselves</p>
                                                                                                                                                            <p>Where our eyes are never closing</p>
                                                                                                                                                            <p>Our hearts were never broken</p>
                                                                                                                                                            <p>And time's forever frozen still</p>

                                                                                                                                                            <p>So you can keep me inside the pocket</p>
                                                                                                                                                            <p>Of your ripped jeans</p>
                                                                                                                                                            <p>Holding me close until our eyes meet</p>
                                                                                                                                                            <p>You won't ever be alone</p>
                                                                                                                                                            <p>And if you hurt me that's okay baby</p>
                                                                                                                                                            <p>Only words bleed</p>
                                                                                                                                                            <p>Inside these pages you just hold me</p>
                                                                                                                                                            <p>And I won't ever let you go</p>
                                                                                                                                                            <p>Wait for me to come home</p>

                                                                                                                                                            <p>Oh you can fit me</p>
                                                                                                                                                            <p>Inside the necklace you got</p>
                                                                                                                                                            <p>When you were sixteen</p>
                                                                                                                                                            <p>Next to your heartbeat where I should be</p>
                                                                                                                                                            <p>Keep it deep within your soul</p>

                                                                                                                                                            <p>And if you hurt me</p>
                                                                                                                                                            <p>Well that's okay baby</p>
                                                                                                                                                            <p>Only words bleed</p>
                                                                                                                                                            <p>Inside these pages you just hold me</p>
                                                                                                                                                            <p>And I won't ever let you go</p>

                                                                                                                                                            <p>When I'm away</p>
                                                                                                                                                            <p>I will remember how you kissed me</p>
                                                                                                                                                            <p>Under the lamppost back on 6th street</p>
                                                                                                                                                            <p>Hearing you whisper through the phone</p>
                                                                                                                                                            <p>Wait for me to come home</p>



                                                                                                                                                        </div>
                                                                                                                                                        <div class="tab-pane" id="tab12">


                                                                                                                                                            <p>Tudo de mim</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>O que eu faria sem sua boca esperta</p>
                                                                                                                                                            <p>Estou me arrastando e você me está me dispensando</p>
                                                                                                                                                            <p>Estou com a cabeça a mil, sem brincadeira</p>
                                                                                                                                                            <p>Não posso te forçar a nada</p>
                                                                                                                                                            <p>O que está se passando nessa bela cabeça</p>
                                                                                                                                                            <p>Estou passando pelo seu mistério mágico</p>
                                                                                                                                                            <p>E estou tão confuso que não sei o que me atingiu</p>
                                                                                                                                                            <p>Mas eu vou ficar bem</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>Minha cabeça está embaixo da água</p>
                                                                                                                                                            <p>Mas estou respirando bem</p>
                                                                                                                                                            <p>Você é louca e eu estou fora de controle</p>
                                                                                                                                                            <br>

                                                                                                                                                            <p>Porque tudo de mim</p>
                                                                                                                                                            <p>Ama tudo em você</p>
                                                                                                                                                            <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                                            <p>Todas as suas perfeitas imperfeições</p>
                                                                                                                                                            <p>Dê tudo de você para mim</p>
                                                                                                                                                            <p>Eu te darei meu tudo</p>
                                                                                                                                                            <p>Você é o meu fim e meu começo</p>
                                                                                                                                                            <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                                            <p>Porque te dou tudo de mim</p>
                                                                                                                                                            <p>E você me dá tudo de você oh</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>Quantas vezes tenho que te dizer</p>
                                                                                                                                                            <p>Que mesmo quando você está chorando você continua linda</p>
                                                                                                                                                            <p>O mundo está te massacrando</p>
                                                                                                                                                            <p>Estou por perto a todo o momento</p>
                                                                                                                                                            <p>Você é minha ruína, você é minha musa</p>
                                                                                                                                                            <p>Minha pior distração, meu ritmo e tristeza</p>
                                                                                                                                                            <p>Não consigo parar de cantar</p>
                                                                                                                                                            <p>Está tocando uma música em minha cabeça para você</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>Minha cabeça está embaixo da água</p>
                                                                                                                                                            <p>Mas estou respirando bem</p>
                                                                                                                                                            <p>Você é louca e eu estou fora de controle</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>Porque tudo de mim</p>
                                                                                                                                                            <p>Ama tudo em você</p>
                                                                                                                                                            <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                                            <p>Dê tudo de você para mim</p>
                                                                                                                                                            <p>Eu te darei meu tudo</p>
                                                                                                                                                            <p>Você é o meu fim e meu começo</p>
                                                                                                                                                            <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                                            <p>Porque te dou tudo de mim</p>
                                                                                                                                                            <p>E você me dá tudo de você oh</p>
                                                                                                                                                            <p>Me dá tudo de você</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>As cartas na mesa, estamos mostrando os nossos corações</p>
                                                                                                                                                            <p>Arriscando tudo, apesar de isso ser difícil</p>
                                                                                                                                                            <br>
                                                                                                                                                            <p>Porque tudo de mim</p>
                                                                                                                                                            <p>Ama tudo em você</p>
                                                                                                                                                            <p>Ama suas curvas e todos os seus limites</p>
                                                                                                                                                            <p>Dê tudo de você para mim</p>
                                                                                                                                                            <p>Eu te darei meu tudo</p>
                                                                                                                                                            <p>Você é o meu fim e meu começo</p>
                                                                                                                                                            <p>Mesmo quando perco estou ganhando</p>
                                                                                                                                                            <p>Porque te dou tudo de mim</p>
                                                                                                                                                            <p>E você me dá tudo de você oh</p>

                                                                                                                                                            <P>Te dou tudo de mim</p>
                                                                                                                                                            <p>E você me dá tudo de você oh</p>






                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                                </li>





                                                                                                                                                </ul>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>


                                                                                                                                    <hr class="featurette-divider">
                                                                                                                                    <footer>
                                                                                                                                        <p>© Company 2015 - Blimeyco</p>
                                                                                                                                    </footer>

                                                                                                                                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
                                                                                                                                    <script type="text/javascript" src="js/bootstrap.js" ></script> 
                                                                                                                                    <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
                                                                                                                                    <script type="text/javascript" src="js/js.js" ></script>  
                                                                                                                                    </body>
                                                                                                                                    </html>

