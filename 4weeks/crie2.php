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
                    <div align="center" style="overflow: auto;"> <h3>Crie suas Frases 2</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'crie.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>SOME/ANY/NO</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SOME/ANY/NO – algo, algum, nenhum</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Some/any/no" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="19">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Quantifiers</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">QUANTIFIERS – quantificadores</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Quantifiers" explicada crie suas próprias frases</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="20">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for Explanations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR EXPLANATIONS - Pedindo explicações</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Asking for Explanations" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="21">
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
                                            <div class="title"><div align="center" style="color:red">THERE TO BE - Haver</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


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
                                                    <INPUT TYPE="hidden" NAME="b1" value="22">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Second Conditional</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SECOND CONDITIONAL – segundo condicional</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Second Conditional" explicada crie suas próprias frases:</p>
                                            <br>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="23">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
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
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>





                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Greetings/Introducing" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="24">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Plural of Nouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Plural of Nouns - Plural dos Substantivos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Plural of Nouns" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="25">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT – Presente Perfeito</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <br>
                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Present Perfect" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="26">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>  </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT - Ações inacabadas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Present Perfect" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="27">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Present Perfect - Time Expressions </a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PRESENT PERFECT – TIME EXPRESSIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <br>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "present perfect" explicada crie suas próprias frases:</p>
                                            <br>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="28">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>FIND + OBJECT + ADJECTIVE</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"><p>FIND + OBJECT + ADJECTIVE</p><p> Verbo encontrar + objeto + adjetivo</p></div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Find + Object + Adjective"  explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="29">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>   </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Tag Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">TAG QUESTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Tag Questions" explicada crie suas próprias frases:</p>
                                            <br>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="30">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal Verbs - Might</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">MODAL VERBS – Verbos Modais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <br>                          
                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Might" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="31">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>           </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Checking/Reservations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CHECKING IN IN A HOTEL / MAKING RESERVATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <br>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Checking/Reservations" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="32">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Used to</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">USED TO – Verbo “costumava”</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Used to" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="33">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Comparative of the Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">COMPARATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <br>


                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Comparative of the Adjetives" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="34">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Comparing People and Things</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">COMPARING PEOPLE AND THINGS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Comparing People and Things" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="35">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>False Cognates</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FALSE COGNATES – Cognatos Falsos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "False Cognates" explicada crie suas próprias frases:</p>
                                            <br>
                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="36">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Superlative of the Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SUPERLATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Superlative of the Adjetives" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="37">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Special Verbs</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SPECIAL VERBS – Verbos especiais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Special Verbs" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="38">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Superlative of the adjetives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SUPERLATIVE OF THE ADJECTIVES</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>




                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Superlative of the adjetives" explicada crie suas próprias frases, como por exemplo:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="39">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for recommendations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR RECOMMENDATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>
                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Asking for recommendations" explicada crie suas próprias frases:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="40">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Modal Verbs</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">MODAL VERBS – Verbos  modais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Modal Verbs" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="41">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Talking about food</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">TALKING ABOUT FOOD – falando sobre comidas</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Talking about food" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="42">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future in the Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE IN THE PAST – futuro no passado</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Future in the Past" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="43">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Relative Pronouns</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">RELATIVE PRONOUNS – Pronomes relativos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>


                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Relative Pronouns" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="44">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Verb to be + Adjetive</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">VERB TO BE + ADJECTIVE  - Ser / Estar</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>




                                           <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Verb to be + Adjetive" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="45">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Continuous</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE CONTINUOUS – futuro contínuo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>




                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Future Continuos" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="46">
                                                    <textarea rows="3" cols="50" name="msg" id="msg">

                                            
                                                    </textarea>
                                                    <div align="center"><button class="btn btn-primary" type="submit" name="1">enviar</button></div> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Future Career Plans</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">FUTURE CAREER PLANS – planos futuros de carreira</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'crie2.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/crie_suas_frases.mp3" type="audio/mp3" />
                                            </audio>
                                            <br>


                                            <p> Com a matéria "Future Career Plans" explicada crie suas próprias frase:</p>
                                            <br>

                                            <br>
                                            <div align='center'>
                                                <form method="POST" action="mail.php">
                                                    <INPUT TYPE="hidden" NAME="b1" value="47">
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

