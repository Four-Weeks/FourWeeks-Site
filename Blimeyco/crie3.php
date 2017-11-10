

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
                    <div align="center" style="overflow: auto;"> <h3>Crie suas Frases 3</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'crie.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>See Someone do something</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SEE SOMEONE DO SOMETHING – Ver alguém fazer algo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "See Someone do Something" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="48">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>How come? = Why?</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">HOW COME? = WHY?</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>


                                            <br>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "See Someone do Something" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="49">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Expressing Surprise</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">EXPRESSING SURPRISE – Expressando surpresa</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Expressing Surprise" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="50">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Prepositions + Verbs(ing)</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PREPOSITIONS + VERBS ( ING )</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Prepositions + Verbs(ing)" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="51">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Verb + Ment</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> VERB + MENT</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Verb + Ment" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="52">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Expressing Antipathy</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">EXPRESSING ANTIPATHY - Expressando antipatia</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Expressing Antipathy" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="53">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Anymore and Anylonger</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ANYMORE and ANYLONGER – Não mais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Anymore and Anylonger" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="54">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PASSIVE VOICE – Voz Passiva</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Passive Voice" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="55">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Nouns as Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> NOUNS AS ADJECTIVES – substantivos como adjetivos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Nouns as Adjectives" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="56">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice 2</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> PASSIVE VOICE – Voz Passiva</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>

                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Passive Voice" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="57">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PASSIVE VOICE QUESTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>




                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Passive Voice Questions" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="58">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Well + Participle of the verb</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> WELL + PARTICIPLE OF THE VERB</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Well + Participle of the verb" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="59">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> To Be Proud Of</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> TO BE PROUD OF  - TER ORGULHE DE</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>
                                            <br>


                                          <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "To be proud of" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="60">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Inviting/Agreeing/Disagreeing</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> INVITING – Convidando /AGREEING – Concordando / DISAGREEING - Discordando</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Inviting/agreeing/ Disagreeing" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="61">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> ASKING AND GIVING OPINIONS / ASKING AND GIVING OPINIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>




                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "asking" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="62">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking and Giving Recommendations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">  ASKING and GIVING RECOMMENDATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>





                                            <br>
                                            


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Asking and giving recommendations" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="63">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Simple Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> SIMPLE PAST – verbos regulares e irregulares</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>

                                          


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Simple Past" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="64">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>There to be</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">THERE TO BE - HAVER</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>




                                            <br>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "There to be" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="65">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Can</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CAN – Possibilidade</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>



                                          


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Can" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="66">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for directions / Giving Directions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR DIRECTIONS/ GIVING DIRECTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie3.php';">x</button></div></div>


                                            <br>

                                          


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Asking for directions/ Giving Directions" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="67">
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

