<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<html>
    <head>
        <title>Inglês em 4 semanas </title>
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
            <img  src="img/icon4weeks.png"  style="width:60px;" border="0"> 

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
                    <div align="center" style="overflow: auto;"> <h3>Diálogos</h3></div>
                    <div> <button class=" bt_menu btn btn-primary"  onclick="window.location.href = 'menu.php';">Voltar</button></div>

                    <ul class="nav nav-list">


                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Geography and Directions - Geografia e Direções</a></div>
                            <div class="hidden_div"><div class="caixa">
                                    <div class="content"> 
                                        <div class ="list">
                                            <div class="title"><div align="center" style="color:red">Geography and Directions</div> 
                                                <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div></div>
                                         
                                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                    <li><a href="#tab2" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">

                                                        <p> A- Professor, where's Canada?</p>

                                                        <p>B- Canada is north of here.</p>

                                                        <p>A - Can you show me on the map?</p>

                                                        <p>B - Sure. Look here. Canada is north of the United States.</p>

                                                        <p>B- Oh, I see. Where's Mexico?</p>

                                                        <p>A -Mexico is south of the United States.</p>

                                                        <p>B- How about Connecticut? Where's that?</p>

                                                        <p>A- Connecticut is east of New York.</p>

                                                        <p>B- What state is west of Pennsylvania?</p>

                                                        <p>A- Ohio.</p>

                                                        <p>B- OK, Where's Los Angeles?</p>

                                                        <p>A- Los Angeles is in California. It's southeast of San Francisco.</p>

                                                        <p>B- Where's Boston.</p>

                                                        <p>A- Boston is in the northeast part of the country.</p>

                                                        <p>B- Where is Las Vegas?<p></p>

                                                        <p>A- Las Vegas is in the southwest.</p>


                                                    </div>
                                                    <div class="tab-pane" id="tab2">


                                                        <p> A- Professor, onde é o Canadá?</p>

                                                        <p>B - O Canadá esta ao norte daqui.</p>

                                                        <p>A - Você pode me mostrar no mapa?</p>

                                                        <p>B -Com certeza.Olhe aqui.O Canadá está no norte dos EUA.</p>

                                                        <p>B- Ah, Eu estou vendo. Onde é o México?</p>

                                                        <p>A -Mexico é o sul dos EUA.</p>

                                                        <p>B- E Connecticut?Onde está?</p>

                                                        <p>A- Connecticut está no leste de Nova York.</p>

                                                        <p>B- Qual estado é o oeste da Pensilvânia?</p>

                                                        <p>A- Ohio.</p>

                                                        <p>B- OK, Onde está Los Angeles?</p>

                                                        <p>A- Los Angeles está na Califórnia.É o sudeste de San Francisco.</p>

                                                        <p>B- Onde é Boston?</p>

                                                        <p>A- Boston está no nordeste do país.</p>

                                                        <p>B- Onde está Las Vegas?<p></p>

                                                        <p>A- Las Vegas está no Sudoeste.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            </li>
                                            <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>I ate in the Hotel - Eu comi no hotel</a></div>
                                                <div class="hidden_div"><div class="caixa">
                                                        <div class="content"> 
                                                            <div class ="list">
                                                                <div class="title"><div align="center" style="color:red">I ate in the Hotel</div> 
                                                                    <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div></div>
                                                                <audio controls="controls">
                                                                    <source src="audios/Comi No Hotel.m4a" type="audio/mp3" />
                                                                  </audio>
                                                                <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active"><a href="#tab3" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                        <li><a href="#tab4" data-toggle="tab" style="color:#57a957">Português</a></li>
                                                                    </ul>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="tab3">
                                                                            <p>A - Hi Maria, did you have breakfast yet?</p>

                                                                            <p>B- Yes, I ate at the hotel with my son and my husband.</p>

                                                                            <p>A - Oh, they have good food there. What did you have?</p>


                                                                            <p>B -I had some cereal, fried eggs and orange juice.</p>


                                                                            <p>A - How was it?</p>

                                                                            <p>B - The food didn't taste very good, and actually I don't feel very well now.</p>


                                                                            <p>A - That's too bad. Do you want to take a break.</p>


                                                                            <p>B - No, I'm going to go back to the hotel at lunch time to lie down.</p>


                                                                            <p>A - OK. I'm going to the drug store later. Is there anything I can get for you?</p>

                                                                            <p>B -No, that's OK. I think if I rest for a little while I'll feel better.</p>



                                                                        </div>
                                                                        <div class="tab-pane" id="tab4">


                                                                            <p>A -Oi Maria, você já tomou café da manhã?</p>

                                                                            <p>B- Sim, eu comi no hotel com meu filho e marido.</p>

                                                                            <p>A -Ah,Eles tem uma boa comida lá. O que vocês tomaram de café?</p>


                                                                            <p>B - Eu comi alguns cereais, ovos fritos e suco de laranja.</p>


                                                                            <p>A -Como estava?</p>

                                                                            <p>B - A comida não estava muito boa, na verdade eu não estou me sentindo muito bem agora.</p>


                                                                            <p>A - Isso e muito ruim.Você quer tomar um ar.</p>


                                                                            <p>B - Não, Eu vou voltar para o hotel na hora do almoço para deitar.</p>


                                                                            <p>A - OK. Eu vou passar na farmácia mais tarde.Há alguma coisa que eu possa pegar pra você?</p>

                                                                            <p>B -Não, tudo bem. Eu acho que se eu descansar o resto do dia me sentirei melhor.</p> 

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> Going to the cinema - Indo ao Cinema</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> Going to the cinema</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Indo Ao Cinema.m4a" type="audio/mp3" />
                                                                                  </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab5" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab6" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab5">


                                                                                                <p>A - Ann what do you want to do tonight?</p>

                                                                                                <p>B-I'd like to go see a movie.</p>

                                                                                                <p>A -I heard Titanic is playing at the movie theater.</p>

                                                                                                <p>B- Oh, I've heard that's a good movie. What time does it start?</p>


                                                                                                <p>A- 6:30PM. It's a long movie. I think it lasts for about 3 hours.</p>

                                                                                                <p>B - Will you come and pick me up?</p>

                                                                                                <p>A -What time?</p>

                                                                                                <p>B -I think we should get there early because they might be sold out.
                                                                                                    Is 5:00PM OK?</p>


                                                                                                <p>A -Yes, that'll be fine. I'll meet you at your house at 5:00PM.</p>



                                                                                                <p>B - Do you want to get something to eat before the movie?</p>


                                                                                                <p>A -I'm not sure there will be enough time for that. We can have popcorn and hot dogs at the theater if you want.</p>


                                                                                                <p>B -I don't like the popcorn they have there. I think they put too much salt on it.</p>


                                                                                                <p>A -OK then, I'll pick you up a little earlier and we can go to the Thai restaurant 
                                                                                                    next to the theater, is that OK?</p>

                                                                                                <p>B -Yes, I like that place.</p>



                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab6">
                                                                                                <p>A - Ann o que você quer fazer hoje a noite?</p>

                                                                                                <p>B - Eu gostaria de ver um filme.</p>

                                                                                                <p>A -Eu ouvi dizer que o Titanic está passando no cinema.</p>

                                                                                                <p>B- Ah, ouvi falar que é um bom filme.Que horas começa?</p>


                                                                                                <p>A- Às 18:30 hs. É um filme grande. Eu acho que leva cerca de 3 horas de filme.</p>

                                                                                                <p>B - Você virá me pegar?</p>

                                                                                                <p>A - Que horas?</p>

                                                                                                <p>B - Eu acho que nós devemos chegar lá cedo porque eles deverão ter vendido tudo.
                                                                                                    As 17:00 hs. está bom?</p>


                                                                                                <p>A -Sim, está ótimo.Eu te encontrarei na sua casa as 17:00 hs.</p>



                                                                                                <p>B - Você quer pegar alguma coisa pra comer antes do filme?</p>


                                                                                                <p>A -Eu não tenho certeza que haverá tempo suficiente para isso.Nós podemos pegar pipoca e cachorro-quente no cinema se você quiser.</p>


                                                                                                <p>B - Eu não gosto da pipoca que eles tem lá. Eu acho que eles colocam muito sal nisso.</p>


                                                                                                <p>A - OK então, eu pego você mais cedo e nós vamos a um restaurante Tailandês prôximo do cinema, está bem?</p>

                                                                                                <p>B - Sim, eu gosto desse lugar.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>The food is perfect - A comida está perfeita</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> THE FOOD IS PERFECT</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Comida Ta Perfeita.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab7" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab8" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab7">



                                                                                                <p>A - How do you like the food?</p>


                                                                                                <p>B- It tastes really great. Did you cook it?</p>


                                                                                                <p>A - Yes. I made it this afternoon. Would you like some more?</p>


                                                                                                <p>B - OK, just a little though. I'm really full.</p>


                                                                                                <p>A - Oh. Would you like some soup instead?</p>


                                                                                                <p>B - What kind is it?</p>


                                                                                                <p>A - Tomato and rice. Have you had that before?</p>
                                                                                                <p>B - No. This is my first time. How does it taste?</p>

                                                                                                <p>A- It's good, try it. What do you think?</p>

                                                                                                <p>B- Wow. It is good. Did you make that also?</p>

                                                                                                <p>A- Yes.</p>

                                                                                                <p>B - You're a really good cook.</p>

                                                                                                <p>A - Thanks, next time I'll make chicken soup for us.</p>

                                                                                                <p>B - That sounds good. Did you study cooking in school?</p>

                                                                                                <p>A  - No, I learned by myself. I have a good cook book that I read when I have time.</p>


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab8">

                                                                                                <p>A - Como está a comida?</p>


                                                                                                <p>B- Está com um gosto ótimo. Você que cozinhou?</p>


                                                                                                <p>A - Sim.Eu fiz essa tarde. Você gostaria de mais?</p>


                                                                                                <p>B - OK,  apenas um pouco.Eu estou realmente cheio.</p>


                                                                                                <p>A - Ah.Você prefere uma sopa ao invés disso?</p>


                                                                                                <p>B - Qual é o sabor?</p>


                                                                                                <p>A - Tomate e arroz.Você já experimentou?</p>
                                                                                                <p>B - Não.é a primeira vez. Como está?</p>

                                                                                                <p>A- Está bom, experimente. O que acha?</p>

                                                                                                <p>B- Hum.Isso está bom. Você também fez isso?</p>

                                                                                                <p>A- Sim.</p>

                                                                                                <p>B - Você é realmente uma boa cozinheira.</p>

                                                                                                <p>A - Obrigado, na próxima vez eu irei fazer uma sopa de galinha para nós.</p>

                                                                                                <p>B - Parece ser bom.Você estuda culinária na escola?</p>

                                                                                                <p>A  - Não , aprendi por mim mesmo.Eu tenho um bom livro de receitas que eu leio quando tenho tempo.</p>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Helping on the friend’s Changes - Ajudando o amigo na Mudança</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> Helping on the friend’s Changes</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Ajudando Amigo.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab9" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab10" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab9">


                                                                                                <p>A- Kelly, will you help me take these things to the car?</p>


                                                                                                <p>B - OK, which car do you want me to put them in?</p>


                                                                                                <p>A - Bring them to my wife's car.</p>


                                                                                                <p>B - Which one is hers'?</p>

                                                                                                <p>A - The blue SUV in front of the Honda.</p>


                                                                                                <p>B - What should I take first?</p>


                                                                                                <p>A - That chair over there, but please be careful with it. It was a gift from my mother-in-law.</p>


                                                                                                <p>B - Don't worry, I won't drop it. Wow, it's really heavy. I don't think I can move it by myself.</p>

                                                                                                <p>A - Let me help you with that. I don't want you to hurt your back.</p>


                                                                                                <p>B - Where are you taking all this stuff?</p>

                                                                                                <p>A - Didn't I tell you? We're moving to Florida?</p>


                                                                                                <p>B - You're moving now? I knew you were moving, but I thought you said you were moving next month.</p>


                                                                                                <p>A - Yes, that's true, but my wife found a new apartment on the Internet the other day and she wants to move right away.</p>


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab10">
                                                                                                <p>A- Kelly, você irá me ajudar a pegar essas coisas e levar pro carro?</p>


                                                                                                <p>B - OK, Qual carro você quer que eu coloque essas coisas?</p>


                                                                                                <p>A - Traga para o carro da minha esposa.</p>


                                                                                                <p>B -Qual é o carro dela?</p>

                                                                                                <p>A -A SUV azul na frente do Honda.</p>


                                                                                                <p>B - O que tenho que colocar primeiro?</p>


                                                                                                <p>A -Aquela cadeira bem ali, mas por favor seja cuidadoso com isso.Foi um presente da minha sogra.</p>


                                                                                                <p>B -  Não se preocupe,Eu não derrubarei isso.Nossa, é realmente pesado.Eu não acho que consigo levar sozinho isso.</p>

                                                                                                <p>A - Deixe-me te ajudar com isso. Eu não quero machucar suas costas.</p>


                                                                                                <p>B - Pra onde você está levando todas essas coisas?</p>

                                                                                                <p>A - Eu não te disse? que nós estamos nos mudando para a Florida?</p>


                                                                                                <p>B - Vocês estão se mudando agora? Eu sabia que vocês iriam estar se mudando, mas eu pensei que vocês fossem se mudar no próximo mês.</p>


                                                                                                <p>A - Sim, isso é verdade, mas minha mulher achou um novo apartamento na internet outro dia e ela quer se mudar agora.</p>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> Visiting the family - Visitando a Família</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">Visiting the family</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                   <audio controls="controls">
                                                                                       <source src="audios/Visitando A Familia.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab11" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab12" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab11">


                                                                                                <p>A - Judy, your husband has a really nice car.</p>


                                                                                                <p>B - Thanks. It's a lot better than mine, and it's new.</p>

                                                                                                <p>A - Where are you going?</p>

                                                                                                <p>B -  We're going to visit my sister in the city.</p>

                                                                                                <p>A - I didn't know your sister lives in the city, when did she move there?</p>

                                                                                                <p>B - About a year ago. She lives in an apartment on 3rd street, across from the 
                                                                                                    public library.</p>

                                                                                                <p>A - I see. It's almost 5:00 PM now, don't you think there will be a lot of traffic?</p>

                                                                                                <p>B - Oh, we're not driving. We're going to take the subway. 
                                                                                                    The subway only takes about 20 minutes.</p>

                                                                                                <p>A - Yes, but it can be very crowded around this time. I always feel uncomfortable taking the subway.</p>

                                                                                                <p>B - I take the subway to work every day, so I'm used to it now.</p>

                                                                                                <p>A - Doesn't your mother live in the city?</p>

                                                                                                <p>B - Yes, she's lived there for about ten years.</p>

                                                                                                <p>A - I remember when she moved there. Apartments were a lot cheaper then.</p>

                                                                                                <p>B - I know what you mean. It's hard to find anything that's reasonable now.</p>

                                                                                                <p>A -Have a good time. Next time you're free, give me a call and 
                                                                                                    we'll go play poker.</p>

                                                                                                <p>B - See you later.</p>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab12">

                                                                                                <p>A - Judy, o seu marido tem um carro realmente bonito.</p>


                                                                                                <p>B - Obrigado. É bem maior que o meu, e é novo.</p>

                                                                                                <p>A - Onde você está indo?</p>

                                                                                                <p>B -  Nós estamos indo visitar minha irmã na cidade.</p>

                                                                                                <p>A - Eu não sabia que a sua irmã vivia na cidade, quando ela se mudou pra lá?</p>

                                                                                                <p>B - Cerca de 1 ano atrás.Ela mora em um apartamento na terceira rua atravessando a biblioteca pública.</p>

                                                                                                <p>A - Entendo. São quase 17:00 hs. agora, você não acha que estará muito transito?</p>

                                                                                                <p>B - Oh, nós não vamos dirigindo.Nós iremos pegar o metrô.Leva apenas 20 minutos.</p> 
                                                                                                    
                                                                                                <p>A - Sim, mas pode estar cheio de gente nesse horário.Eu sempre me sinto desconfortável pegando o metrô.</p>

                                                                                                <p>B - Eu pego o metrô para trabalhar todos os dias, então eu estou acostumado agora.</p>

                                                                                                <p>A - Sua mãe não mora na cidade?</p>

                                                                                                <p>B - Sim, ela mora lá cerca de 10 anos.Yes, she's lived there for about ten years.</p>

                                                                                                <p>A - Eu lembro quando ela se mudou para lá.Apartamentos são muito baratos então.</p>

                                                                                                <p>B - Eu sei o que quer dizer.É difícil encontrar algo razoável agora.</p>

                                                                                                <p>A - Tenha um ótimo dia.Na próxima vez que estiver livre, me ligue e nós jogamos poker.</p>

                                                                                                <p>B - Te vejo mais tarde.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Seeing travel’s photo - Vendo fotos de Viagem</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">Seeing travel’s photo </div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Vendo Foto De Viagem.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab13" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab14" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab13">


                                                                                                <p>A - Jim, I heard you took a trip to San Diego. Is that right?</p>

                                                                                                <p>B – Yeah, I just got back this morning.</p>

                                                                                                <p>A – That sounds really nice. What did you do there?</p>

                                                                                                <p>B - Well, we were only there for three days, so we didn't do too much.
                                                                                                    We went shopping and went out to dinner a few times. At night we walked around the city with some friends.</p>

                                                                                                <p>A – Did you take any pictures?</p>

                                                                                                <p>B –  Yes, I have them with me. Do you want to look at them?</p>

                                                                                                <p>A –  Sure, I love looking at photos.</p>

                                                                                                <p>B –  This one is of my wife and me on the beach, and this one is our daughter Emily standing next to my wife.</p>

                                                                                                <p>A - Your daughter looks like her mother.</p>

                                                                                                <p>B - I know, they look very similar.</p>

                                                                                                <p>A - Where was this picture taken?</p>

                                                                                                <p>B -  That was taken at the train station before we left.</p>

                                                                                                <p>A - Did you have time to go to the zoo?</p>

                                                                                                <p>B – No, not this time. We went there last time.</p>

                                                                                                <p>A - It looks like you all had a nice time.</p>

                                                                                                <p>B - Yeah, it was a lot of fun.</p>



                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab14">
                                                                                                <p>A - Jim, Eu ouvi dizer que você fez uma viagem para São Diego.Isso é verdade?</p>

                                                                                                <p>B – Sim,Eu voltei hoje nesta manhã.</p>

                                                                                                <p>A – Isso parece realmente legal.O que você fez lá?</p>

                                                                                                <p>B - Bem, nós estivemos lá apenas 3 dias, entao não fizemos muita coisa.
                                                                                                   Nós fomos ao shopping e fomos jantar algumas vezes. A noite nós andamos por volta da cidade  com alguns amigos.</p>

                                                                                                <p>A – Vocês tiraram alguma foto?</p>

                                                                                                <p>B –  Sim, tenho elas comigo.Você quer olhar elas?</p>

                                                                                                <p>A –  Claro, Eu amo ver fotos.</p>

                                                                                                <p>B – Essa daqui é minha esposa e eu na praia, e essa é a nossa filha Emily de pé próxima a minha esposa.</p>

                                                                                                <p>A - Sua filha parece com a mãe.</p>

                                                                                                <p>B - Eu sei, elasse parecem muito.</p>

                                                                                                <p>A - Onde essa foto foi tirada?</p>

                                                                                                <p>B - Essa foi tirada na estação do trêm depois de nós a deixarmos.</p>

                                                                                                <p>A - Você teve tempo de ir ao zoológico?</p>

                                                                                                <p>B –Não, não dessa vez. Nós fomos lá da última vez.</p>

                                                                                                <p>A - Parece que vocês tiveram bons momentos.</p>

                                                                                                <p>B - Sim, foi muito divertido.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> Let a message - Deixar uma mensagem</a></div> <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> Let a message</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Deixando Msg.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab15" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab16" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab15">


                                                                                                <p>A –  Hello?</p>
                                                                                                <p>B – Hi, is Heather there please?</p>
                                                                                                <p>A – Sorry, I think you have the wrong number.</p>
                                                                                                <p>B – Is this 617-228-2289?</p>
                                                                                                <p>A – Yes. Who are you looking for again?</p>
                                                                                                <p>B – Heather Johnson.</p>
                                                                                                <p>A – Oh, I thought you said Laura. Sorry about that. This is the right number, but Heather's not here right now.</p>
                                                                                                <p>B – Do you know where she went?</p>
                                                                                                <p>A – She went to the store to buy some groceries. Would you like to leave a 
                                                                                                    message?</p>
                                                                                                <p>B – Yes, would you please tell her Eric Martin called?</p>
                                                                                                <p>A – Hi Eric, this is her roommate Kathy. I met you a couple months a goat the Christmas party.</p>
                                                                                                <p>B – Oh, yes. How are you?</p>
                                                                                                <p>A – Good. Heather will be back in about 20 minutes. I'll tell her you called.</p>
                                                                                                <p>B – OK. Thanks.</p>
                                                                                                <p>A – Bye bye.</p>


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab16">
                                                                                                <p>A –  Oi?</p>
                                                                                                <p>B –Olá, a Heather está por favor?</p>
                                                                                                <p>A – Desculpe, eu acho que você tem o número errado.</p>
                                                                                                <p>B – é o número 617-228-2289?</p>
                                                                                                <p>A – Sim.Quem você está procurando mesmo?</p>
                                                                                                <p>B – Johnson Heather.</p>
                                                                                                <p>A – Ah,Eu pensei que você tivesse dito Laura.Me desculpe.Esse é o número certo, mas a Heather não está aqui agora.</p>
                                                                                                <p>B – Você sabe para onde ela foi?</p>
                                                                                                <p>A – Ela foi em uma loja para comprar algumas guloseimas.Você gostaria de deixar uma mensagem?</p>
                                                                                                <p>B – Sim, você poderia por favor dizer que o Eric Martin ligou?</p>
                                                                                                <p>A – Oi Eric, é a colega de quarto dela a Kathy.Eu o conheci a alguns meses atrás na festa de Natal.</p>
                                                                                                <p>B – Ah, sim. Como você está?</p>
                                                                                                <p>A –  Bom. Heather  vai voltar por volta de 20 minutos. Eu direi a ela que você ligou.</p>
                                                                                                <p>B – OK. Obrigado.</p>
                                                                                                <p>A – tchau.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Doing Plans - Fazendo Planos</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> Doing Plans</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Fazendo Planos.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab17" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab18" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab17">
                                                                                                <p>  A - It's almost Christmas. What are you doing this weekend?</p>

                                                                                                <p>B - Nothing special, just working. Why do you ask?</p>
                                                                                                <p>A - Well, I still haven't finished my Christmas shopping. Do you want to go shopping with me this weekend?</p>

                                                                                                <p>B - I'd like to, but I'm not sure if I can. Work has been really busy lately. </p>
                                                                                                <p>Why don't we go on Friday instead?</p>

                                                                                                <p>A - Friday's not good. I think the stores will be very crowded and I have to work.</p>

                                                                                                <p>B -  OK, then let's try to go this weekend. I should know if I can go by Friday. Is it OK if I call you then?</p>

                                                                                                <p>A - Yeah, that's fine.</p>

                                                                                                <p>B - What's your number?</p>

                                                                                                <p>A - 233-331-8828. Let me give you my email address too. It's sara@gmail.com</p>

                                                                                                <p>B - OK, I'll talk to you soon.</p>

                                                                                                <p>A - OK</p>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab18">


                                                                                                <p>  A - É quase natal. O que você estará fazendo nesse final de semana?</p>

                                                                                                <p>B - Nada de especial, apenas trabalhando. Por que a pergunta?</p>
                                                                                                <p>A - Bem, eu ainda não acabei minhas compras de Natal. Você quer ir ashopping comigo nesse final de semana?</p>

                                                                                                <p>B - Eu gostaria, mas não tenho certeza se posso.O trabalho tem sido realmente muito cheio ultimamente. </p>
                                                                                                <p>Por que nós não vamos na sexta ao invés disso?</p>

                                                                                                <p>A - Sexta não é tão bom.Eu acho que as lojas vão estar cheias de pessoas e tenho que trabalhar.</p>

                                                                                                <p>B - OK,então vamos tentar ir nesse final de semana. Eu deveria saber se eu posso ir na sexta. Tudo bem se eu chamar voc~e então?</p>

                                                                                                <p>A - Sim, tudo bem.</p>

                                                                                                <p>B - Qual o seu número?</p>

                                                                                                <p>A - 233-331-8828. Deixa eu te dar meu e-mail também. É sara@gmail.com</p>

                                                                                                <p>B - OK, Eu falarei com você em breve.</p>

                                                                                                <p>A - OK</p>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>  Marking a medical consultation - Marcando Consulta Médica</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">Marking a medical consultation</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Marcando Consulta Medica.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab19" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab20" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab19">


                                                                                                <p>A - Hi, I'd like to see the doctor, please.</p>
                                                                                                <p>B - Do you have an appointment?</p>
                                                                                                <p>A - No.</p>
                                                                                                <p>B - When would you like an appointment?</p>
                                                                                                <p>A - Is today possible?</p>
                                                                                                <p>B - Yes. Today is fine. What time would you like?</p>
                                                                                                <p>A - As soon as possible. My stomach really hurts.</p>
                                                                                                <p>B - Please wait a moment. I'll see if the doctor is available.</p>
                                                                                                <p>A - OK.</p>
                                                                                                <p>B - Sorry, he's with a patient right now. It's probably going to be  about another 30 minutes. Would you mind waiting a little longer?</p>
                                                                                                <p>A - No problem.</p>
                                                                                                <p>B - May I see your insurance card please.</p>
                                                                                                <p>A - Here you are.</p>
                                                                                                <p>B - Thanks. That's going to be 25 dollars for today's visit.</p>
                                                                                                <p>A - Really? I didn't think it would be that much.</p>
                                                                                                <p>B - I know how you feel.</p>
                                                                                                <p>A - I'll pay with cash.</p>
                                                                                                <p>B - Thank you.</p>
                                                                                                <p>A -Would you please turn on the heat? It's really cold in here.</p>


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab20">
                                                                                                <p>A - Oi, eu gostaria de ver o doutor, por favor.</p>
                                                                                                <p>B - Você tem uma consulta marcada?</p>
                                                                                                <p>A - Não.</p>
                                                                                                <p>B - Pra quando você gostaria de marcar uma consulta?</p>
                                                                                                <p>A - Hoje é possível?</p>
                                                                                                <p>B - Sim. Hoje está bem. Que horas você gostaria?</p>
                                                                                                <p>A - Assim que possível. Meu estômago está doendo.</p>
                                                                                                <p>B - Por favor aguarde um momento.Eu vou ver se o doutor está disponível.</p>
                                                                                                <p>A - OK.</p>
                                                                                                <p>B - Desculpe, ele está com um paciente agora. E provavelmente irá tomar os seus próximos 30 minutos.Você se importaria de aguardar mais um tempo?</p>
                                                                                                <p>A - Sem problemas</p>
                                                                                                <p>B - Posso ver seu cartao do plano médico por favor.</p>
                                                                                                <p>A - Aqui está.</p>
                                                                                                <p>B - Obrigado. Vai custar 25 dólares pela consulta de hoje.</p>
                                                                                                <p>A - Sério?Eu não achei que seria tanto.</p>
                                                                                                <p>B - Eu sei como se sente.</p>
                                                                                                <p>A - Eu vou pagar em dinheiro.</p>
                                                                                                <p>B - Obrigado.</p>
                                                                                                <p>A -Você poderia ligar o aquecedor? Está realmente frio aqui.</p>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Post Office - Caixa de Correio</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00"> Post Office</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Caixa De Correio.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab21" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab22" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab21">


                                                                                                <p>A - Hey Jane, did you get the mail yet?</p>
                                                                                                <p>B - Yes. I picked it up this morning. There were a few bills and a letter from my 
                                                                                                    mother. There was also a lot of junk mail.</p>
                                                                                                <p>A - Was there anything for me?</p>
                                                                                                <p>B - I don't remember, let me check. Yes, it looks like there's
                                                                                                    something here for you.</p>
                                                                                                <p>A - Who's it from?</p>
                                                                                                <p>B - The American Embassy.</p>
                                                                                                <p>A - My hands are dirty. Will you open it for me?</p>
                                                                                                <p>B - Sure.</p>
                                                                                                <p>A -What does it say?</p>
                                                                                                <p>B - It says your passport is ready. You can pick it up anytime.</p>
                                                                                                <p>A -Do you think you can drive me there?</p>
                                                                                                <p>B - Sure, when?</p>
                                                                                                <p>A - I think we should go get it now. I'm going to wash my hands and then we'll go. Is that OK?</p>
                                                                                                <p>B - That's fine.</p>



                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab22">
                                                                                                <p>A - Oi Jane,você já abriu a caixa de correio?</p>
                                                                                                <p>B - Sim.Eu abri essa manhã. Havia algumas contas e uma carta para minha mãe. Havia também um monte de lixos.</p>
                                                                                                <p>A - Havia alguma coisa pra mim?</p>
                                                                                                <p>B - Eu não me lembro, deixa eu checar.Sim, parece que tinha alguma coisa pra você.</p>
                                                                                                <p>A - De onde é?</p>
                                                                                                <p>B - Embaixada America</p>
                                                                                                <p>A - Minhas mãos estão sujas. Você abre para mim?</p>
                                                                                                <p>B - Claro.</p>
                                                                                                <p>A - O que diz?</p>
                                                                                                <p>B - Diz que o seu passaporte está pronto.Você pode pegá-lo a qualquer momento.</p>
                                                                                                <p>A - Você acha que poderia me levar lá?</p>
                                                                                                <p>B - Claro, quando?</p>
                                                                                                <p>A - Eu acho que nós deveríamos ir agora.Eu vou lavar as minhas mãos e nós vamos. tudo bem?</p>
                                                                                                <p>B - Tudo bem.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a> Invite for dinner - Convite para Jantar</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">Invite for dinner</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Comvito Para Jantar.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab23" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab24" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab23">


                                                                                                <p>A - Hi James, it's good to see you again.</p>
                                                                                                <p>B - Hi Barbara.</p>
                                                                                                <p>A - Are you here for work?</p>
                                                                                                <p>B - Yes.	</p>
                                                                                                <p>A - Is Steve with you?</p>
                                                                                                <p>B - No I'm here alone. Steve couldn't come this time.</p>
                                                                                                <p>A - How long will you be staying?</p>
                                                                                                <p>B - 4 days. I'm going back on Friday.</p>
                                                                                                <p>A -My brother and I are getting together for dinner. Do you want to come with us?</p>
                                                                                                <p>B - Yeah, that would be nice. I have a meeting in an hour. I can meet
                                                                                                    you afterwards, if that's OK. The meeting shouldn't last long.</p>
                                                                                                <p>A -That's fine. Who is your meeting with?</p>
                                                                                                <p>B -The Boston Insurance Company. I'll call you when it's over.</p>
                                                                                                <p>A -OK.</p>
                                                                                                <p>B -Can I use your phone? I left mine in the car and I want to call them to get directions.	</p>
                                                                                                <p>A -Sure, here you go.</p>	


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab24">
                                                                                                <p>A - Oi James, é bom vê-la novamente.</p>
                                                                                                <p>B - Oi Barbara.</p>
                                                                                                <p>A - Você está aqui a trabalho?</p>
                                                                                                <p>B - Sim.	</p>
                                                                                                <p>A - O Steve está com você?</p>
                                                                                                <p>B - Não, eu estou sozinha. Steve não pôde vir dessa vez.</p>
                                                                                                <p>A - Quanto tempo você estará aqui?</p>
                                                                                                <p>B - 4 dias. Eu vou voltar na sexta.</p>
                                                                                                <p>A - Meu irmão e eu vamos jantar juntos. Você quer ir conosco?</p>
                                                                                                <p>B - Sim, seria legal. Eu tenho uma reunião em 1 hora. Eu posso encontrar vocês depois, se estiver tudo bem. A reunião não será longa.</p>
                                                                                                <p>A - Tudo bem. Com quem será a reunião?</p>
                                                                                                <p>B - A companhia de seguros de Boston. Eu te ligo quando acabar.</p>
                                                                                                <p>A -OK.</p>
                                                                                                <p>B -Posso usar o seu telefone?Eu deixei o meu no carro eu quero ligar para eles para pegar o endereço.	</p>
                                                                                                <p>A -Claro, por aqui que você vai.</p>	
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Give me the directions - Dê-me as direções</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">Give me the directions</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Dando Direçoes.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab25" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab26" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab25">


                                                                                                <p>A -Hello?</p>
                                                                                                <p>B - Hi Frank, it's Pam.</p>
                                                                                                <p>A - Hey Pam, what's up?</p>
                                                                                                <p>B - Not much. Where are you?</p>
                                                                                                <p>A - I'm in the car driving home.</p>
                                                                                                <p>B - When you get home will you send me an email with directions to the party tonight?</p>		
                                                                                                <p>A - Sure, no problem.</p>
                                                                                                <p>B - When do you think you'll get home?</p>
                                                                                                <p>A - I don't know, maybe in about 30 minutes or so. There's a lot of traffic.</p>
                                                                                                <p>B - I have to go out soon. Can you just send me a text message with the address instead.</p>
                                                                                                <p>A - OK, I'll do that as soon as I get home.</p>
                                                                                                <p>B - Thanks a lot. Drive carefully.</p>
                                                                                                <p>A - OK, I'll see you tonight.</p>
                                                                                                <p>B -Bye.</p>

                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab26">
                                                                                                <p>A - Oi?</p>
                                                                                                <p>B - Oi Frank, é a Pam.</p>
                                                                                                <p>A - E ai Pam, beleza?</p>
                                                                                                <p>B - Não mais. Onde você está?</p>
                                                                                                <p>A - Eu estou no carro dirigindo para casa.</p>
                                                                                                <p>B - Quando você chegar em casa você me envia um e-mail com as direções da festa e hoje a noite?</p>		
                                                                                                <p>A - Claro, sem problemas.</p>
                                                                                                <p>B - Quando você acha que estará em casa?</p>
                                                                                                <p>A - Eu não sei, por volta de 30 minutos ou mais. Está muito trânsito.</p>
                                                                                                <p>B - Eu tenho que sair daqui a pouco. Você pode me enviar uma mensagem pelo celular ao invés do e-mail.</p>
                                                                                                <p>A - OK, Eu irei fazer assim que chegar em casa.</p>
                                                                                                <p>B - Muito obrigado.Dirija com cuidado.</p>
                                                                                                <p>A - OK, te vejo de noite.</p>
                                                                                                <p>B -tchau.</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Taking a Taxi - Pegando um Taxi</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">TAKING A TAXI</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Pegando Taxi.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab27" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab28" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab27">


                                                                                                <p>A - Hello Miss, do you need a taxi?</p>
                                                                                                <p>B - Yes</p>
                                                                                                <p>A - Do you have any luggage?</p>
                                                                                                <p>B -Just these two suitcases.</p>
                                                                                                <p>A - OK, I'll put them in the back for you. Where are you going?</p>
                                                                                                <p>B- The Comfort Inn.</p>
                                                                                                <p>A - I think there are two in Boston. Which one are you going to?</p>
                                                                                                <p>B - The one downtown.</p>
                                                                                                <p>A - Is this your first time in Boston?</p>
                                                                                                <p>B - No. I've been here many times. I come here for work all the time.Do you know how long it'll take?</p>
                                                                                                <p>A - It shouldn't take long. Probably about 15 minutes.</p>
                                                                                                <p>B - Wow, it looks like the traffic is really bad.</p>
                                                                                                <p>A - Yeah, there might be an accident up ahead.</p>
                                                                                                <p>B - OK, then stop at the next intersection. I'm gonna get out there and take the subway.</p>


                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab28">
                                                                                                <p>A - Olá senhorita, você precisa de um taxi?</p>
                                                                                                <p>B - Sim</p>
                                                                                                <p>A - Você tem alguma bagagem?</p>
                                                                                                <p>B -  Apenas essas duas malas.</p>
                                                                                                <p>A - OK, Eu coloco no porta-malas para você. Para onde você está indo?</p>
                                                                                                <p>B-  Ao Comfort Inn.</p>
                                                                                                <p>A - Eu acho que tem duas em Boston. Para qual você quer ir?</p>
                                                                                                <p>B - A do centro da cidade.</p>
                                                                                                <p>A - é a sua primeira vez em Boston?</p>
                                                                                                <p>B - Não. Eu já estive aqui muitas vezes.Eu venho aqui pelo trabalho todas as vezes. Você sabe quanto tempo vai demorar?</p>
                                                                                                <p>A - Não deverá demorar.Provavelmente uns 15 minutos.</p>
                                                                                                <p>B - Nossa, parece que o trânsito está meio ruim.</p>
                                                                                                <p>A - Sim, deve ter algum acidente a nossa frente.</p>
                                                                                                <p>B - OK, então para na próxima intersecção. Eu vou sair e pegar o metrô.</p>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div></div>
                                                                </li>
                                                                <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="open_div"><a>Buying Clothes for a friend - Comprando roupas para o Amigo</a></div>
                                                                    <div class="hidden_div"><div class="caixa">
                                                                            <div class="content"> 
                                                                                <div class ="list">
                                                                                    <div class="title"><div align="center" style="color:#eb8f00">BUYING CLOTHES FOR A FRIEND</div>
                                                                                        <div> <button class=" bt_menu_2 btn btn-primary"  onclick="window.location.href = 'dialogos.php';">x</button></div>
                                                                                    </div>
                                                                                    <audio controls="controls">
                                                                                        <source src="audios/Comprando Roupas Pro Amigo.m4a" type="audio/mp3" />
                                            </audio>
                                                                                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                                                                                        <ul class="nav nav-tabs">
                                                                                            <li class="active"><a href="#tab29" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                                                                            <li><a href="#tab30" data-toggle="tab" style="color:#5eb95e">Português</a></li>
                                                                                        </ul>
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane active" id="tab29">


                                                                                                <p>A - I'm going shopping. Do you want to come?</p>
                                                                                                <p>B - I thought you went shopping yesterday.</p>
                                                                                                <p>A - I did, but an old friend called me last night and invited me to his birthday party. I need to buy a gift for him.</p>
                                                                                                <p>B - I see. What are you going to get him?</p>
                                                                                                <p>A - I really have no idea what he likes. I haven't seen him in a longtime. What do you think?</p>
                                                                                                <p>B - Maybe a cake?</p>
                                                                                                <p>A - Well, that's a good idea, but I think I should probably get him something else, like something he can wear.</p>
                                                                                                <p>B - How about a sweater? I saw a really nice one in the mall the other day. Maybe we can go there and take a look.</p>
                                                                                                <p>A - OK, what store was it in?</p>
                                                                                                <p>B - It was at Macy's. I think they're having a sale this weekend.</p>
                                                                                                <p>A - Oh, that's a really nice store. I like the clothes there.</p>



                                                                                            </div>
                                                                                            <div class="tab-pane" id="tab30">
                                                                                                <p>A - Eu vou fazer compras. Você quer vir?</p>
                                                                                                <p>B - Eu pensei que você tinha feito compras ontem.</p>
                                                                                                <p>A - Eu fiz, mas um velho amigo me chamou na noite passada para uma festa de aniversário. Eu preciso comprar um presente para ele.</p>
                                                                                                <p>B - Entendi.O que voc~e vai pegar para ele?</p>
                                                                                                <p>A - Eu realmente não tenho ideia do que ele gosta.Eu não tenho visto a um bom tempo. O quê você acha?</p>
                                                                                                <p>B - Talvez um bolo?</p>
                                                                                                <p>A - Bem, uma ótima ideia, mas eu realmente acho que deveria comprar algo para ele,  com algo que ele possa usar.</p>
                                                                                                <p>B - Que tal um sweater? Eu vi um realmente legal no shopping outro dia. Talvez nós podemos ir lá e dar uma olhada.</p>
                                                                                                <p>A - OK, Qual era a loja?</p>
                                                                                                <p>B - Era a Macy's. Eu acho que eles estão de liquidação nesse final de semana.</p>
                                                                                                <p>A - Ah, é uma boa loja.Eu gosto das roupas de lá.</p>

                                                                                            </div>
                                                                                        </div>
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
                                                        <p>© Company 2017 - FourWeeks</p>
                                                    </footer>

                                                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
                                                    <script type="text/javascript" src="js/bootstrap.js" ></script> 
                                                    <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
                                                    <script type="text/javascript" src="js/js.js" ></script>  
                                                    </body>
                                                    </html>

