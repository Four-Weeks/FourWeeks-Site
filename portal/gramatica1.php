<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
    <head>
        <title>Inglês em 4 semanas</title>
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

    </head>
    <body>
        <div class="menu cor1">
            <img  src="img/icon4weeks.png" style="width:60px;" border="0"> 

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
                    <div align="center" style="overflow: auto;"> <h3>Gramática 1</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'gramatica.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Be verb</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">BE VERB</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>



                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <p>    Obs: onde estiver *  é o som da palavra para você pronunciar</p>

                                            <p>O verbo "to be" é o verbo que, em inglês, indica "ser" ou "estar".  A conjugação do verbo "to be“ no presente é:</p>

                                            <p align="center"> AFFIRMATIVES</p>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">I am / * Ai m</td>
                                                    <td align="center"> Eu sou / estou</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">You are / * iuo ar</td>
                                                    <td align="center"> Você é / está</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">He is/ *ri is </td>
                                                    <td align="center"> Ele é/ est</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">She/ *xi is </td>
                                                    <td align="center">Ela é/está</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">It is </td>
                                                    <td align="center">Ele é/ está para animais ou objetos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">We are/ * ui ar </td>
                                                    <td align="center">Nós somos / estamos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">We are/ * ui ar </td>
                                                    <td align="center">Nós somos / estamos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">You are/ * iuo ar </td>
                                                    <td align="center">Vocês são / estão</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">They are/ * dei ar  </td>
                                                    <td align="center"> Eles/Elas são / estão</td>
                                                </tr>

                                            </table>

                                            <p align="center"> NEGATIVES</p>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">

                                                <tr>
                                                    <td align="center">am not /   * m not     </td>
                                                    <td align="center">não é </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">isn´t     /   *izanti</td>
                                                    <td align="center">  não é / não está</td>
                                                </tr>
                                                <tr>
                                                    <td align="center"> aren’t / * arenti </td>
                                                    <td align="center"> não são / não estão</td>
                                                </tr>
                                            </table>





                                            <p align="center">INTERROGATIVES</p>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">Am I ….? / * m ai ….? </td>
                                                    <td align="center"> Eu sou/ estou?</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Is he ?   /  *Is ri…?</td>
                                                    <td align="center"> Você é / está</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Is she….?  / *Is xi…?</td>
                                                    <td align="center"> Ela é/ está? </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"> Is it …?	</td>
                                                    <td align="center">Ele é/ está?</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Are we…?  / *ar  ui?  </td>
                                                    <td align="center">Nós somos/estamos?</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Are they….?/ *Ar dei…?</td>
                                                    <td align="center">Eles são/ estão?</td>
                                                </tr>

                                            </table>


                                        </div>
                                    </div>
                                </div></div></li>

                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Hours</a></div>

                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Hours - As Horas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <p>What time is it?/&nbsp; Que horas são?</p>

                                            <p>9:00 – It´s 9 o´clock – São nove em ponto</p>
                                            <p>9:03 - It's nine oh three/It's nine and three</p>
                                            <p>9:05 – It´s five past nine / It´s nine oh five.</p>
                                            <p>9:15 – It´s a quarter past nine / It´s nine fifteen</p> 
                                            <p>9:30 – It´s half past nine / It´s nine thirty</p>
                                            <p>9:45 – It´s a quarter to ten / It´s nine forty five</p>
                                            <p>9:50 – It´s ten to ten / It´s nine fifty</p> 
                                            <p>9:55 – It´s five to ten / It´s nine fifty-five</p>









                                        </div>
                                    </div>
                                </div></div>

                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Personal Pronouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Personal Pronouns - Pronomes Pessoais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">Personal Pronouns</td>
                                                    <td align="center">Personal Pronouns</td>
                                                    <td align="center">Possesive Pronouns</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Pronomes Pessoais</td>
                                                    <td align="center">Pronomes Pessoais </td>
                                                    <td align="center">Pronomes Possessivos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Usado antes dos verbos</td>
                                                    <td align="center">Usado depois dos verbos</td>
                                                    <td align="center">Usado antes dos substantivos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">I - Eu</td>
                                                    <td align="center">Me - Eu</td>
                                                    <td align="center">My - Meu/Minha</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">You - Você </td>
                                                    <td align="center">You - Você</td>
                                                    <td align="center">your - Seu/Sua</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">He – Ele</td>
                                                    <td align="center">Him– Ele</td>
                                                    <td align="center">His – Dele</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">She – Ela</td>
                                                    <td align="center">Her– Ela</td>
                                                    <td align="center">Her – Dela</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">It – Ele/Ela – usado
                                                        para coisas, objetos
                                                        ou animais
                                                    </td>
                                                    <td align="center">It – Ele/Ela – usado
                                                        para coisas, objetos
                                                        ou animais
                                                    </td>
                                                    <td align="center">Its – Dele / Dela – usado
                                                        para coisas, objetos
                                                        ou animais
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">We – Nós</td>
                                                    <td align="center">Us– Nós</td>
                                                    <td align="center">Our – Nosso / Nossa</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">You – Vocês</td>
                                                    <td align="center">You – Vocês</td>
                                                    <td align="center">Your – Seus / Suas</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">They – Eles/Elas</td>
                                                    <td align="center">Them– Eles/Elas</td>
                                                    <td align="center">Their – Deles / Delas</td>
                                                </tr>


                                            </table>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Simple Present</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SIMPLE PRESENT - Presente</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos este tempo verbal para falar sobre ações de seu dia a dia.</p>

                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">Verbo Auxiliar</td>
                                                    <td align="center">PRONOME</td>
                                                    <td align="center">VERBO</td>
                                                    <td align="center">COMPLEMENTO</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Do</td>
                                                    <td align="center">I/we/you/they</td>
                                                    <td align="center">study</td>
                                                    <td align="center">English?</td>
                                                </tr>


                                            </table>
                                            <br>
                                            <p align="center">Yes, you / we / they study English.</p>
                                            <p align="center">No, you / we / they don´t study English.</p>
                                            <br>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">Verbo Auxiliar</td>
                                                    <td align="center">PRONOME</td>
                                                    <td align="center">VERBO</td>
                                                    <td align="center">COMPLEMENTO</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Does</td>
                                                    <td align="center">he/she/it</td>
                                                    <td align="center">play</td>
                                                    <td align="center">soccer?</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p align="center"> Yes, he / she / PLAYS soccer.</p>
                                            <p>Com HE / SHE / IT na afirmativa, acrescenta-se  S / ES / IES no verbo para a conjugação.</p>
                                            <br> 
                                            <p>No, he / she / it DOESN´T PLAY soccer.</p>
                                            <p>Na negativa, não há alteração no verbo.</p>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Spelling</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Spelling/Thanking</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p style="color:#0088cc">SPELLING – Soletrando</p>
                                            <br>
                                            <p>How do you spell your name?</p>
                                            <p>Como se soletra seu nome?</p>
                                            <p>Spell it, please.</p>
                                            <p>Soletre, por favor.</p>
                                            <br>
                                            <p style="color:#0088cc">THANKING – Agradecendo</p>
                                            <br>
                                            <p>Thank you – Obrigado</p>
                                            <p>Thank you very much – Muito Obrigado</p>
                                            <p>Thanks – Obrigado</p>
                                            <p>Thanks a lot – Muito Obrigado</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>The (a/an)</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">The - (A/AN)</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p align="center" style="color:#006dcc">A / AN -  um ou uma</p>
                                            <p align="center" style="color:#006dcc">Artigo Indefinido</p>
                                            <br>
                                            <p align="center" style="color:#08c">A –  USADO ANTES DE CONSOANTES</p>
                                            <br>
                                            <p align="center">I have a car.</p>
                                            <p align="center">Eu tenho um carro.</p>
                                            <br>
                                            <p align="center" style="color:#08c" >AN – USADO ANTES DE VOGAIS </p>
                                            <br>
                                            <p align="center">They play an instrument </p>
                                            <p align="center">Eles tocam um instrumento</p>
                                            <br>
                                            <p align="center" style="color:#006dcc">THE – o / a / os / as</p>
                                            <p align="center" style="color:#006dcc">Artigo Definido</p>
                                            <br>
                                            <p align="center" style="color:#08c">USADO ANTES DE VOGAIS OU CONSOANTES</p>
                                            <br>
                                            <P align="center">I want the book.</p>
                                            <p align="center">Eu quero o livro.</p>
                                            <p align="center">Please, give me the erasers </p>
                                            <p align="center">Por favor, me dê as borrachas.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>IN/ON/AT</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">IN/ON/AT</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>PREPOSITIONS – IN / ON / AT</p>
                                            <br>
                                            <p style="color:#006dcc">IN – no/na – Usado antes de:</p>
                                            <br>
                                            <p>Nomes de cidades / países / meses do ano / para dizer “dentro” </p>
                                            <p>In São Paulo / In Brazil / In October / In the box</p>
                                            <br>
                                            <p>I live in São Paulo and my birthday is in October.</p>
                                            <br>
                                            <p style="color:#006dcc">ON – no/na – Usado antes de:</p>
                                            <br>
                                            <p>Nomes de ruas / dias da semana / datas completas / sobre uma superfície</p>
                                            <p>On Dutra Avenue / On Friday / On October 26th / On the table </p>
                                            <p>The party is on Friday on Dutra Avenue.</p>
                                            <br>
                                            <p style="color:#006dcc">AT – no/na – Usado antes de:</p>
                                            <br>
                                            <p>Endereços completos ( rua, número e bairro ), lugares não específicos e horas</p>
                                            <p>At 1345 Cruzeiro Avenue / At school / At 7 o´clock</p>
                                            <p>I have a test at school at 9:45am.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal May</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">The Modal Verbs</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p align="center" style="color:#0044cc">MODAL VERBS – Verbos Modais</p>
                                            <p align="center">Verbo MAY – usado em perguntas para pedirmos permissão.</p>
                                            <p align="center">Geralmente usado com os pronomes  I  e  WE</p>
                                            <p align="center">May I open the door? Posso abrir a porta?</p>
                                            <p align="center">May we go out? Podemos sair?</p>
                                            <p align="center">May I use the telephone? Posso usar o telefone?</p>
                                            <p align="center">Yes, of course . Sim, claro.</p>
                                            <p align="center">No, you may not. Não, você não pode.</p>


                                            <p align="center" style="color:#0044cc">APOLOGIZING – Desculpando-se</p>

                                            <p align="center">I´m sorry – Me desculpe</p>
                                            <p align="center">My apologies – Minhas desculpas</p>
                                            <p align="center">I´d like to apologize – Gostaria de me desculpar</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Why/Because</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">WHY / BECAUSE</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <p align="center" style="color:#0044cc">WHY / BECAUSE – POR QUE para perguntas e respostas</p>

                                            <p align="center">Em perguntas, usamos WHY para saber motivos.</p>
                                            <br>
                                            <p align="center">WHY do you study English?</p>

                                            <p align="center">Por que você estuda Inglês?</p>



                                            <br>
                                            <p align="center">Nas respostas, usamos BECAUSE.</p>
                                            <p align="center">I study English BECAUSE I need to.</p>
                                            <p align="center">Eu estudo Inglês porque eu preciso.</p>
                                            <br>
                                            <p align="center">Why did she work late? Por que ela trabalhou até tarde?</p>
                                            <p align="center">Because she preferred to. Porque ela preferiu.</p>
                                            <p align="center">Na resposta, também podemos iniciar diretamente com o BECAUSE.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Should</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Should - Recomendações</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>

                                            <p align="center">MODAL VERBS – Verbos Modais</p>
                                            <br>

                                            <p align="center">SHOULD </p>
                                            <br>
                                            <p align="center">usado em perguntas e respostas para darmos sugestões e recomendações. </p>
                                            <p align="center">Should I go home earlier? - Eu deveria ir para casa mais cedo?</p>
                                            <p align="center">Yes, you should. / No, you shouldn´t. </p>
                                            <p align="center">I´m not feeling well. I think I should go to the doctor. </p>
                                            <p align="center">Não estou me sentindo bem. Acho que eu deveria ir ao médico. </p>
                                            <p align="center">I am thinking of going to the beach this weekend. </p>
                                            <p align="center">Estou pensando em ir para a praia neste final de semana.</p>
                                            <p align="center">You shouldn´t go. It´s raining. Você não deveria ir. Está chovendo.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking by Preferences</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Asking by Preferences</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p align="center" style="color:#0044cc">ASKING FOR PREFERENCES</p>
                                            <br>
                                            <p align="center">Perguntando sobre preferências</p>
                                            <br>
                                            <p align="center">What´s your favorite…?</p>
                                            <p align="center">Qual é o seu ... favorito?</p>
                                            <p align="center">Which one do you like best?</p>
                                            <p align="center">Qual você mais prefere?</p>
                                            <p align="center">Do you have a favorite....?</p>
                                            <p align="center">Você tem um(a) ..... favorito(a)</p>
                                            <br>
                                            <p align="center" style="color:#0044cc">GIVING AND EXPRESSING PREFERENCES</p>
                                            <br>
                                            <p align="center">Dando e expressando preferências</p>
                                            <p align="center">My favorite one is….</p>
                                            <p align="center">O meu favorito é….</p>
                                            <p align="center">I like HONDA best.</p>
                                            <p align="center">Eu prefiro mais a HONDA.</p>
                                            <p align="center">I really prefer ....</p>
                                            <p align="center">Eu realmente prefiro....</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Would</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">WOULD – Condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p align="center" style="color:#0044cc">MODAL VERBS – Verbos Modais</p>
                                            <br>
                                            <p align="center" style="color:#0044cc">WOULD </p>
                                            <p align="center">Usado em perguntas e respostas para falarmos sobre condições. </p>
                                            <p align="center">Pode ser usado com qualquer pronome.</p>
                                            <p align="center">(verbo termina em “IA” no português).</p>
                                            <br>
                                            <p align="center">Would you buy a car? -  Você compraria um carro? </p>
                                            <p align="center">Yes, I would. / No, I  wouldn´t . </p>
                                            <p align="center">Where would you like to go?  - Onde você gostaria de ir? </p>
                                            <p align="center">I´d like to go to the park. - Gostaria de ir ao parque. </p>
                                            <p align="center">I´d é a forma contraída de I would </p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Indirect Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> INDIRECT QUESTIONS – Perguntas indiretas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>
                                            <p align="center">I want to know… - Eu quero saber...</p>
                                            <p align="center">Can you tell me... – Você pode me dizer…</p>
                                            <p align="center">Please tell me... – Por favor me diga….</p>
                                            <p align="center">I´d like to know… - Gostaria de saber…. </p>
                                            <br>
                                            <p align="center">DIRECT: What time is it? – Que horas são?</p>
                                            <p align="center">INDIRECT: I want to know what time it is. - Quero saber que horas são.</p>
                                            <p align="center">Nas perguntas indiretas, usamos a estrutura da frase como em uma afirmação.</p>
                                            <p align="center">Tell me who she loves. – Diga-me quem ela ama.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>First Conditional</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FIRST CONDITIONAL – primeiro condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <p>Usamos esta estrutura para falarmos sobre situações que seriam realidade no 
                                                presente sob uma condição.</p> 
                                            <p style="color:#006dcc">IF + PRESENT = WILL / CAN / MAY</p>
                                            <br>
                                            <p>If I have money, I will travel to the beach.</p>
                                            <p>Se eu tiver dinheiro, viajarei para a praia.</p>
                                            <br>
                                            <p style="font-size:10px; color:red;">(É possível inverter a fórmula acima, sem o uso da virgula, conforme o 2° exemplo.)</p>
                                            <p>I can dance IF you teach me. </p>
                                            <br>
                                            <p>Eu posso dançar se você me ensinar</p>        
                                            <p>If Sally arrives, I may talk to her.</p>
                                            <p>Se a Sally chegar, eu posso falar com ela.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Places</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PLACES IN A CITY – Lugares em uma cidade</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <p align="center">Store – Loja</p>
                                            <p align="center">Gas Station – Posto de gasolina</p>
                                            <p align="center">Drugstore – Farmácia</p>
                                            <p align="center">Supermarket – Supermercado</p>
                                            <p align="center">Bakery – Padaria</p>
                                            <p align="center">Post Office – Correio</p>
                                            <p align="center">School – Escola</p>
                                            <p align="center">Bus / train / subway station – Estação de ônibus  / trem / metro</p>
                                            <p align="center">Shopping Mall – Shopping Center</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Be Verb - Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">BE VERB – Past</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <p>O verbo "to be" é o verbo que, em inglês, indica "ser" ou "estar".  A conjugação do verbo "to be“ no passado é:</p>

                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">I was </td>
                                                    <td align="center"> eu era/estava </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"> You were </td>
                                                    <td align="center"> Você era/estava</td>
                                                </tr>
                                                <tr>
                                                    <td align="center"> He was </td>
                                                    <td align="center"> Ele era/estava</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">She was </td>
                                                    <td align="center">Ela era/estava </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">It was</td>
                                                    <td align="center">Isso era/estava </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">We were</td>
                                                    <td align="center">Nós éramos/estavamos</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">You were</td>
                                                    <td align="center">Vocês eram/estavam</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">They were</td>
                                                    <td align="center">Eles eram/estavam</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p align="center">Negatives</p>
                                            <table align="center"  border=1 bgcolor='gray' width="500px">
                                                <tr>
                                                    <td align="center">Was</td>
                                                    <td align="center">Wasn't</td>
                                                </tr>
                                                <tr>
                                                    <td align="center">Were</td>
                                                    <td align="center">Weren't</td>
                                                </tr>
                                            </table>
                                            <br>



                                            <p>Para fazermos perguntas, basta inverter a posição do verbo em relação ao pronome.</p>
                                            <p>She was happy. – Ela estava feliz. </p>     
                                            <p>Was she happy? – Ela estava feliz?</p>









                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Certain Future</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CERTAIN FUTURE – Futuro certo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>Usamos a estrutura abaixo para falar sobre eventos futuros que temos grande certeza que vão ocorrer.</p>


                                            <p>TO BE (present) + GOING TO – Vai / Vou / Vamos</p>
                                            <br>
                                            <p>I am going to dance the samba.</p>
                                            <p>Eu vou dançar samba.</p>
                                            <p>Is she going to play the guitar?</p>
                                            <p>Ela vai tocar guitarra?</p>
                                            <br>
                                            <p>Yes, she is.</p>
                                            <p>No, she isn´t</p>
                                            <br>
                                            <p>They aren´t going to travel.</p>
                                            <p>Eles não vão viajar.</p>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Plans</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE PLANS – Planos futuros</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>
                                            <p>What are you going to do tonight?</p>
                                            <p>O que você vai fazer hoje à noite?</p>
                                            <p>I am going to the club.</p>
                                            <p>Eu vou para o clube.</p>
                                            <p>Where is Sue going next week?</p>
                                            <p>Onde a Sue vai semana que vem?</p>
                                            <p>She is going to travel to Fortaleza.</p>
                                            <p>Ela vai viajar para Fortaleza.</p>







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

