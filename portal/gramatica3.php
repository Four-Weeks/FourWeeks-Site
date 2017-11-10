

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
                    <div align="center" style="overflow: auto;"> <h3>Gramática 3</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'gramatica.php';">Voltar</button></div>
                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>See Someone do something</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">SEE SOMEONE DO SOMETHING – Ver alguém fazer algo</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p>Usamos esta estrutura para dizer que vimos uma ação completa.</p>
                                            <br>
                                            <p>I saw George wash his car.</p>
                                            <p>Eu vi o George lavar o carro dele.</p>
                                            <br>
                                            <p>Did you see Mary talk to Paul?</p>
                                            <p>Você viu a Mary falar com o Paul?</p>
                                            <br>
                                            <p>SEE SOMEONE DOING SOMETHING – Ver alguém fazendo algo</p>
                                            <p>Usamos esta estrutura para dizer que vimos parte de uma ação.</p>
                                            <br>
                                            <p>I saw a man smoking.</p>
                                            <p>Eu vi um homem fumando.</p>
                                            <br>
                                            <p>He saw Kimberly painting her house.</p>
                                            <p>Ele viu a Kimberly pintando a casa dela.</p>



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

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>


                                            <p>Ambos tem o mesmo significado, mas usamos WHY em situações
                                                mais formais e com uso das regras de gramática e HOW COME em
                                                situações mais informais, sem necessidade de uso de auxiliares.</p>
                                            <br>
                                            <p>Why did you go home earlier?</p>
                                            <p>Por que você foi pra casa mais cedo?</p>
                                            <br>
                                            <p>How come you went home earlier?</p>
                                            <p>Mesma tradução da frase acima</p>
                                            <br>
                                            <p>HOW COME pode, também, ser usado para expressar surpresa.</p>
                                            <br>
                                            <p>- I didn´t go out with that girl.</p>
                                            <p>Eu não sai com aquela garota.</p>
                                            <br>
                                            <p>- How come you didn´t?</p>
                                            <p>Por que não?</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Expressing Surprise</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">EXPRESSING SURPRISE – Expressando surpresa</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p>HOW COME pode, também, ser usado para expressar surpresa.</p>
                                            <br>
                                            <p>I didn´t go out with that girl. </p>
                                            <p>Eu não saí com aquela garota.</p>
                                            <br>
                                            <p>How come you didn´t!? - Por que não!?</p>
                                            <p>EXPRESSING SYMPATHY – Expressando simpatia</p>
                                            <p>That sounds good! - Parece muito bom!</p>
                                            <p>How nice! - Que legal! ( mais formal )</p>
                                            <p>Cool! - Legal! ( mais informal )</p>
                                            <p>  Well done! - Bem feito!</p>
                                            <p>Congratulations! - Parabéns!</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Prepositions + Verbs(ing)</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PREPOSITIONS + VERBS ( ING )</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>

                                            <p>Após as preposições, todos os verbos que vêm a seguir devem ser usados com o ING. Não há mudança de significado.</p>
                                            <br>
                                            <p>I am tired of studying.</p>
                                            <p>Estou cansado de estudar.</p>
                                            <br>
                                            <p>Sally can´t live without drinking coffee.</p>
                                            <p>A Sally não pode viver sem beber café.</p>
                                            <br>
                                            <p>Do you dream of getting rich?</p>
                                            <p>Você sonha em ficar rico?</p>
                                            <br>
                                            <p>You can´t go to Paris without visiting the Eiffel Tower.</p>
                                            <p>Você não pode ir para Paris sem visitar a Torre Eiffel.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Verb + Ment</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> VERB + MENT</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p>Acrescentamos o sufixo MENT  em verbos para formarmos substantivos.</p>
                                            <br>
                                            <p>VERB – develop – NOUN  – development</p>
                                            <p>Verbo – Desenvolver / Substantivo –Desenvolvimento</p>
                                            <br>
                                            <p>VERB – judge – NOUN  – judgement</p>
                                            <p>Verbo – julgar / Substantivo –julgamento</p>
                                            <br>
                                            <p>VERB – improve – NOUN  – improvement</p>
                                            <p>Verbo – melhorar / Substantivo –melhoria</p>
                                            <br>
                                            <p>VERB – assist – NOUN  – assistance</p>
                                            <p>Verbo – ajudar / Substantivo –ajuda</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Expressing Antipathy</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">EXPRESSING ANTIPATHY - Expressando antipatia</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>


                                            <p>That´s not good!</p>
                                            <p>Isso não é legal!</p>
                                            <br>
                                            <p>That´s bad!</p>
                                            <p>Que chato!</p>
                                            <br>
                                            <p>I don´t like it!</p>
                                            <p>Eu não gosto disso!</p>
                                            <br>
                                            <p>I don´t think it´s a good idea.</p>
                                            <p>Não acho que seja uma boa ideia.</p>
                                            <br>
                                            <p>Wow, it ain´t good!</p>
                                            <p>Uau, isso não é bom!</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Anymore and Anylonger</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ANYMORE and ANYLONGER – Não mais</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p>Usamos estas palavras para falar de ações que não acontecem mais.</p>
                                            <p>Usamos esta estrutura sempre em frases negativas.</p>
                                            <p>I don´t go to that club anymore.</p>
                                            <p>Eu não vou mais naquele clube.</p>
                                            <p>Peter doesn´t love Sue anylonger</p>
                                            <p>O Peter não ama mais a Sue.</p>
                                            <p>I won´t travel to the beach anymore. It´s raining.</p>
                                            <p>Eu não viajarei mais para a praia. Está chovendo.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PASSIVE VOICE – Voz Passiva</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>


                                            <p>A principal função desta estrutura é enfatizar o fato ou a ação que aconteceu, e não o executor da ação.</p>
                                            <br>
                                            <p>VERB TO BE + VERB (PAST PARTICIPLE)</p>
                                            <br>
                                            <p>A book was bought last week.</p>
                                            <p>Um livro foi comprado semana passada</p>
                                            <br>
                                            <p>PETER bought a book. (ACTIVE VOICE)</p>
                                            <p>A book was bought BY PETER last week.</p>
                                            <br>
                                            <p>O mesmo exemplo pode ser usado com BY para mostrar quem fez a ação.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Nouns as Adjectives</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> NOUNS AS ADJECTIVES – substantivos como adjetivos</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>


                                            <p>Substantivos funcionando como adjetivos</p>
                                            <br>
                                            <p>I took a trip of two weeks.</p>
                                            <p>Eu fiz uma viagem de duas semanas</p>
                                            <br>
                                            <p>I took a two-week trip</p>
                                            <p>Eu fiz uma viagem de duas semanas</p>
                                            <br>
                                            <p>Na estrutura acima, o substantivo week passa a funcionar como adjetivo dando qualidade à palavra viagem. Adjetivos em Inglês não são
                                                usados no plural, logo, não acrescentamos o “s” na palavra.</p>
                                            <br>
                                            <p>I bought a three-chip cell phone .</p>
                                            <p>Eu comprei um celular com 3 chips.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice 2</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> PASSIVE VOICE – Voz Passiva</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>



                                            <p>Uma outra forma de uso da voz passiva, totalmente diferente do português, é da seguinte forma:</p>
                                            <br>
                                            <p>I was given a CD yesterday.</p>
                                            <p>Me deram um CD ontem.</p>
                                            <br>
                                            <p>No exemplo acima, não importa quem deu o CD, apenas importa o que aconteceu, a ação por si só.</p>
                                            <br>
                                            <p>The kids were taught the lesson.</p>
                                            <p>Ensinaram a lição para as crianças.</p>
                                            <br>
                                            <p>The team will be given the instructions.</p>
                                            <p>Darão as instruções para o time.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Passive Voice Questions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">PASSIVE VOICE QUESTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>



                                            <p>Were you given a gift on your birthday?</p>
                                            <p>Te deram um presente em seu aniversário?</p>
                                            <br>
                                            <p>Yes, Paul gave me a new cell phone.</p>
                                            <p>Sim, o Paul me deu um novo celular.</p>
                                            <br>
                                            <p>Was the email answered on time?</p>
                                            <p>O email foi respondido a tempo?</p>
                                            <br>
                                            <p>No, Mary forgot to answer it.</p>
                                            <p>Não, a Mary esqueceu de respondê-lo.</p>
                                            <br>
                                            <p>Nas perguntas acima, não importa quem fez a ação, mas sim a ação!</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Well + Participle of the verb</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> WELL + PARTICIPLE OF THE VERB</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>





                                            <p>Usamos esta estrutura para dizer que algo foi bem feito, usando a palavra WELL seguida do particípio passado do verbo principal.</p>
                                            <br>
                                            <p>The lesson was well done.</p>
                                            <p>A lição foi bem feita.</p>
                                            <br>
                                            <P>My house was well cleaned last week.</p>
                                            <p>Minha casa foi bem limpa semana passada.</p>
                                            <br>
                                            <P>Unfortunately the restroom was not well built.</p>
                                            <p>Infelizmente o banheiro não foi bem construído.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> To Be Proud Of</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> TO BE PROUD OF  - TER ORGULHE DE</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>




                                            <p>Usamos esta estrutura para dizer que temos orgulho de algo.</p>
                                            <br>
                                            <p>I am proud of my parents.</p>
                                            <P>Eu tenho orgulho de meus pais.</p>
                                            <br>
                                            <p>Peter is proud of his new job.</p>
                                            <P>Peter está orgulhoso de seu novo trabalho.</p>
                                            <br>
                                            <P>Jenny is proud of herself. She got an “A” in history.</p>
                                            <p>Jenny está orgulhosa de si mesma. Ela tirou “A” em história.</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Inviting/Agreeing/Disagreeing</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> INVITING – Convidando /AGREEING – Concordando / DISAGREEING - Discordando</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>





                                            <p>Let´s? – Vamos?</p>
                                            <p>Let´s  go out tonight? – Vamos sair hoje a noite?</p>

                                            <p>Of course. – Claro</p>
                                            <p>I´m sorry, I can´t – Perdão, mas não posso.</p>

                                            <p>Would you like to dance with me? – Você gostaria de dançar comigo?</p>
                                            <p>Yes, sure. – Sim, claro.</p>
                                            <p>I´m afraid I can´t. – Eu acho que não posso.</p>

                                            <p>Why don´t we go to the beach? - Por que não vamos para a praia?</p>
                                            <P>Good idea! - Boa ideia!</p>
                                            <P>Sorry, it´s not possible. Desculpe, não é possível.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> ASKING AND GIVING OPINIONS / ASKING AND GIVING OPINIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>






                                            <p style="color:#0044cc">Pedindo e dando opiniões</p>
                                            <br>
                                            <p>What´s your opinion about…?</p>
                                            <p>Qual a sua opinião sobre…?</p>
                                            <br>
                                            <p>What  do you think of ....?</p>
                                            <p>O que pensa a respeito…. ?</p>
                                            <br>
                                            <p>In my opinion...</p>
                                            <p>Na minha opinião….</p>
                                            <br>
                                            <p>I think that ….</p>
                                            <p>Eu acho que…</p>
                                            <br>
                                            <p>I think you should...</p>
                                            <p>Eu acho que você deveria...</p>
                                            <br>
                                            <p style="color:#0044cc">Pedindo e dando opiniões</p>
                                            <br>
                                            <p>I´d like to know your opinion about…</p>
                                            <p>Gostaria de saber sua opinião sobre…</p>
                                            <br>
                                            <p>Can you tell me your opinion about…</p>
                                            <p>Pode me dizer sua opinião sobre…</p>
                                            <br>
                                            <p>I guess...</p>
                                            <p>Eu acho….</p>
                                            <br>
                                            <p>Why don´t you ... ?</p>
                                            <p>Por que você não... ?</p>







                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking and Giving Recommendations</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">  ASKING and GIVING RECOMMENDATIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>






                                            <p style="color:#006dcc">Pedindo e dando recomendações</p>
                                            <br>
                                            <p>Where should I go next vacations?</p>
                                            <p>Onde eu deveria ir nas próximas férias?</p>
                                            <br>
                                            <p>I think you should go to the beach.</p>
                                            <p>Acho que deveria ir para a praia.</p>
                                            <br>
                                            <p>When should we deliver the report?</p>
                                            <p>Quando deveríamos entregar o relatório?</p>
                                            <br>
                                            <p>You should deliver it by Friday, before the deadline.</p>
                                            <p>Vocês deveriam entregar até Sexta, antes do prazo.</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Simple Past</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red"> SIMPLE PAST – verbos regulares e irregulares</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>





                                            <p>Para perguntas no passado, usamos a palavra chave (verbo auxiliar) “DID” para todos os pronomes.</p>
                                            <br>
                                            <p>Did you play soccer? Você jogou futebol?</p>
                                            <br>
                                            <p>Yes, I playED soccer./No, I didn´t PLAY soccer.</p>
                                            <br>
                                            <p>Na resposta afirmativa, não usamos o DID e acrescentamos o ED no final 		      
                                                do verbo regular. </p>
                                            <br>
                                            <p>Na resposta negativa, usamos DIDN’T e não alteramos o verbo.</p>
                                            <br>
                                            <p>Did you go home? / Você foi para casa?</p>
                                            <br>
                                            <p>Yes, I WENT home. / No, I didn´t GO  home.</p>
                                            <br>
                                            <p>Na resposta afirmativa, não usamos o DID e conjugamos o verbo irregular.</p> 	
                                            <br>
                                            <p>Na negativa, usamos o DIDN´T e não alteramos o verbo.</p>












                                        </div>
                                    </div>
                                </div></div>
                        </li>


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>There to be</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">THERE TO BE - HAVER</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>

                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>
                                            <br>




                                            <p>THERE IS e THERE ARE representam o nosso há ou existe(m). 
                                                A diferença é que usamos there is para uma só coisa, pessoa ou situação.
                                                Quando dizemos que há mais de uma coisa ou pessoa, usa-se a forma plural there are.<p/>
                                            <br>
                                            <p>There is a girl in front of school.</p>
                                            <p>Há uma garota em frente a escola.</p>
                                            <br>
                                            <p>There aren´t exercises for homework.</p>
                                            <p>Não há exercícios para casa.</p>
                                            <br>
                                            <p>Devemos dedicar atenção especial para os exemplos abaixo.</p> 
                                            <br>
                                            <p>There is a man in the car. E não,  Have a man in the car. </p>
                                            <p>Tem um homem no carro.</p>
                                            <br>
                                            <p>There are 40 employees in my job. E não, Have 40 employees in my job. </p>
                                            <p>Tem 40 empregados no meu trabalho.</p>








                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Can</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">CAN – Possibilidade</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>




                                            <p>Usado em perguntas e respostas para falarmos sobre possibilidades, com Todos os pronomes.</p>
                                            <p>Where is Peter? – Onde está o Peter?</p>
                                            <p>I don´t know. He can be at home. - Não sei. Ele pode estar em casa.</p>
                                            <p>Who can play chess with you? - Quem pode jogar xadrez com você?</p>
                                            <p>Maybe Paul can play with me. - Talvez o Paul possa jogar comigo</p>






                                        </div>
                                    </div>
                                </div></div>
                        </li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Asking for directions / Giving Directions</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">ASKING FOR DIRECTIONS/ GIVING DIRECTIONS</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'gramatica3.php';">x</button></div></div>
                                            <audio controls="controls">
                                                <source src="audios/materia.mp3" type="audio/mp3" />
                                            </audio>
                                            <a href="https://translate.google.com/" target="new">Tradutor</a>

                                            <br>

                                            <p style="color:#08c">Pedindo direções</p>
                                            <br>
                                            <p>How can I get to the Museum?</p>
                                            <p>Como posso chegar ao Museu?</p>
                                            <p>Where is the Museum?</p>
                                            <p>Onde é o museu?</p>
                                            <p>Help me, I’m lost.</p>
                                            <P>Ajude-me, estou perdido!</p>
                                            <p>I want to go to the club.</p>
                                            <p>Eu quero ir para o clube.</p>
                                            <p>Can you help me?</p>
                                            <p>Pode me ajudar?</p>
                                            <br>

                                            <p style="color:#08c">Dando direções</p>
                                            <br>
                                            <p>Go straight ahead on…  - Vá em frente na …</p>
                                            <p>Turn left on… – Vire  a esquerda na …</p>
                                            <p>Turn right on… – Vire a direita na ….</p>
                                            <p>Go to the corner of… - Vá até a esquina da …</p>
                                            <p>Go up on … – Suba na …</p>
                                            <p>Go down on … - Desça na …</p>
                                            <p>Go past… - Passe por ( pelo ) …</p>







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

