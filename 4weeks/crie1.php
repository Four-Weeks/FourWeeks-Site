<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
    <head>
        <title>Blimeyco</title>
        <meta name="description" content="Aprenda toda grámatica do inglês"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1"/>

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
        <script type="text/javascript">




        </script>
    </head>
    <body>
        <div class="menu cor1">
            <img  src="img/blimeyco4_1.png" border="0"> 

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
                    <div align="center" style="overflow: auto;"> <h3>Crie suas frases 1</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'crie.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Be verb</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">BE VERB</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Be verb" explicada crie suas próprias frases, como por exemplo:</p>
                                            <br>
                                            <p>I am a handsome guy./ Eu sou um cara bonito</p>
                                            <p>Are you fine?/ Você está bem?</p>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="1">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div></li>

                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Hours</a></div>

                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Hours - As Horas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>

                                            <br>
                                            <p> Com a matéria "Hours" explicada crie 5 frases usando as horas, como por exemplo:</p>
                                            <br>
                                            <p>It's seven o'clock a.m/ São 7:00 em ponto da manhã.</p>
                                            <p>It's six and four p.m/São 6:04 da tarde.</p>
                                            <p>It's eight and fifteen p.m/São 8:15 da noite.</p>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="2">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>

                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Personal Pronouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Personal Pronouns - Pronomes Pessoais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>

                                            <br>

                                            <br>
                                            <p> Com a matéria "Personal Pronouns" explicada crie 4 frases usando esses pronomes, como por exemplo:</p>
                                            <br>
                                            <p>He gave a car for her/ Ele deu um carro para ela.</p>
                                            <p>She loves him/ Ela o ama</p>
                                            <p>They let his money on the rack/Eles deixaram o seu dinheiro na estante.</p>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="3">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Simple Present</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SIMPLE PRESENT - Presente</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>

                                            <br>
                                            <p> Com a matéria "Simple Present" explicada crie 4 frases usando o presente simples, como por exemplo:</p>
                                            <br>
                                            <p>You like chocolate./ Você gosta de chocolate.</p>
                                            <p>You don't like chocolate./Você não gosta de chocolate.</p>
                                            <p>Do you like chocolate?/Você gosta de chocolate?</p>
                                            <p>Yes, I like/No, I don't like.</p>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="4">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Spelling</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Spelling/Thanking</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>

                                            <br>
                                            <p> Com a matéria "Spelling/Thanking" explicada crie frases  para você mesmo soletrar e agradecer a alguém, como exemplo:</p>
                                            <br>
                                            <p>Thanks Harry by your help./Obrigado Harry pela ajuda</p>
                                            <p>The name of your dog is T-O-B, tob?/O nome do seu cachorro é T-O-B, tob?</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="5">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>The (a/an)</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">The - (A/AN)</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <br>
                                            <p> Com a matéria "The - (A/ AN)" explicada crie frases usando os artigos, como por exemplo:</p>
                                            <br>
                                            <p>I ate an apple/ Eu comi uma maça</p>
                                            <p>He has a car on the garage./ Ele tem um carro na garagem.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="6">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>IN/ON/AT</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">IN/ON/AT</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Prepositions - in/on/at " explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>He is in the pool./ Ele está na piscina.</p>
                                            <p>The book is on the table./ O livro está sobre a mesa.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="7">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                            <div align="center"><button class="btn btn-primary">enviar</button></div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal May</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">The Modal Verbs</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <br>
                                            <p> Com a matéria "Modal Verbs" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>Tiago, may I help you?/ Tiago, eu posso te ajudar.</p>
                                            <p>I'm sorry about the last night./Me desculpe pela noite passada.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="8">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Why/Because</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">WHY / BECAUSE</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Why/Because" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>Why do you like pizza?/Por que você gosta de pizza?</p>
                                            <p>Because it's good./ Porque é bom.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="9">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Should</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Should - Recomendações</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Should" explicada crie frases, como por exemplo:</p>
                                            <br>
                                            <p>You should leave a umbrella./Você deveria levar um guarda-chuva</p>


                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="10">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking by Preferences</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Asking by Preferences</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Asking by Preferences" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>I prefer the summer instead the winter./Eu prefiro o verão ao invés do inverno.</p>


                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="11">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Would</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">WOULD – Condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <br>
                                            <p> Com a matéria "Would" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>Would you like to dinner with us?/Você gostaria de jantar conosco?</p>


                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="12">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Indirect Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> INDIRECT QUESTIONS – Perguntas indiretas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>

                                            <br>
                                            <br>
                                            <p> Com a matéria "Indirect Questions" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>I want to know what is your name./Eu quero saber qual é o seu nome.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="13">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>First Conditional</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FIRST CONDITIONAL – primeiro condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "First Conditional" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>If I have money, I'll buy a car.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="14">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Places</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PLACES IN A CITY – Lugares em uma cidade</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Places" explicada crie frases, como o exemplo:</p>
                                            <br>
                                            <p>I'll buy some clothes in the store./ Eu comprarei algumas roupas na loja.</p>


                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="15">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Be Verb - Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">BE VERB – Past</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Be verb - Past" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>I was fat./ Eu era gordo.</p>
                                            <p>You were in your home./Você estava na sua casa.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="16">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Certain Future</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CERTAIN FUTURE – Futuro certo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
<audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>
                                            <p> Com a matéria "Certain Future" explicada crie frases, como exemplo:</p>
                                            <br>
                                            <p>I am going to travel on this weekeend/ Eu irei viajar nesse final de semana.</p>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="17">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Plans</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE PLANS – Planos futuros</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie1.php';">x</button></div></div>
<audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>

                                            <br>
                                            <p> Com a matéria "Future Plans" explicada crie frases, como o exemplo:</p>
                                            <br>
                                            <p>What are you going to do on this weekend?/O que você fará nesse final de semana?</p>

                                            <br>



                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="18">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



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
            <p>© Company 2015 - Blimeyco</p>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  
    </body>
</html>

