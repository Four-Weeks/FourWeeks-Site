
<html lang="pt-BR">
    <head>
        <title>Inglês em 4 semanas  </title>

        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="description" content="CuRSO bOOTSTRAP"/>
        <meta name="author" content=""/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="4weeks.ico"/>
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/normalize.css?v=20161222083052">
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/midias.css?v=20161222083052">
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/modal.css?v=20161222083052">
        
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/jquery.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/common.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/swfobject/swfobject.js"></script>

        <script src="https://portal.universidadedoingles.com.br/acesso/public/js/gravador/recordmp3.js?20161222083052"></script>

        <?php
        include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
        protegePagina(); // Chama a função que protege a página
        ?>
        <style>

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-bottom: 40px;
                color: #5a5a5a;
                background-color:#EFF1F7;
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
            div.span4 > div> a{
                color:black;
            }
            div.span4 > div> a:hover{
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
                .nav-list > li > a {
                    color: black;
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
                <a href='remover.php'>  Sair</a>
            </form> 

            <ul class= "nav">
                <li><a href='menu.php'>Home</a></li>
               <!-- <li><a href='gramatica.php'>Gramática</a></li>
                <li><a href='dialogos.php'>Diálogos</a>
                <li class="dropdown"><a href='conversacao.php'>Conversação</a>
                    <ul class="dropdown-menu">
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
        <div class="container masthead">




        </div>
        <div class="menu cor3">


            <ul class= "nav">
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 4 - Aula 17 - Lição 2 - Parte 4</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_4_aula17_lic2_part3.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 4 <a href="Filme_ep_4_aula17_lic3_part1.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

            </ul>

        </div>
        <br><br><br>
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
                    <h4>Ouça a trilha e acompanhe o Texto</h4>
                      <div class="wrapper">

       
        
        <!-- CONTEUDO -->
        <div class="container">
            <div class="centro">
                          
                                <div class="boxConteudo">
                    <div class="view_wrapper">
    <form method="post" enctype="multipart/form-data">
        <div class="view_centro">
            <input name="partes_licoes_id" type="hidden" value="1617">

            <div class="aplicativos" id="app_instrucao" style="padding: 0px; margin-bottom: 10px; width: 670px;">
    <div class="app_instrucao" style="height: 42px;">
    <div class="audio">
      <audio id="player_instrucao">
        <source src="audios/Trilha.m4a" type="audio/mpeg">
        <!-- <source src="horse.ogg" type="audio/ogg"> -->
      </audio>
      <div class="player">
        <div class="mute">
          <img class="on" src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_volume_on.png" alt="">
          <img class="off" style="display: none;" src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_volume_off.png" alt="">
        </div>
        <div class="conteudo">
          <div class="text">
            <span style="float: left;">Instrução</span>
            <span class="time" style="float: right;">00:12</span>
          </div>
          <div class="progress">
            <div class="progressbuffer"></div>
            <div class="progressbar"></div>
          </div>
        </div>
        <div class="buttons">
          <img class="play" src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_play.png" alt="">
          <img class="pause" style="display: none;" src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_pause.png" alt="">
        </div>
        <div class="volume">
          <div class="vol ativo" volume="1"></div>
          <div class="vol ativo" volume="0.8"></div>
          <div class="vol ativo" volume="0.6"></div>
          <div class="vol ativo" volume="0.5"></div>
          <div class="vol ativo" volume="0.3"></div>
          <div class="vol ativo" volume="0.1"></div>
        </div>
              </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var currentAudioPlayer = 0;
  $(document).ready(function(){

    //
    $(".app_instrucao .player .buttons").on("click", function(){
      if($(this).find(".pause").css("display") == "none"){
        $(this).find(".pause").show();
        $(this).find(".play").hide();

        $(".app_instrucao .player .conteudo").css("width", "0");
        $(".app_instrucao .player .conteudo").css("display", "table-cell");

        $(".app_instrucao .player .conteudo").animate({
          "width" : "160px"
        }, 250);

        // Play
        $("#player_instrucao").get(0).play();
        currentAudioPlayer = setInterval(updateAudioPlayer, 10);
      }else{
        $(this).find(".pause").hide();
        $(this).find(".play").show();

        $(".app_instrucao .player .conteudo").animate({
          "width" : "0"
        }, 150, function(){
          $(".app_instrucao .player .conteudo").hide();
        });

        // Pause
        $("#player_instrucao").get(0).pause();
        clearInterval(currentAudioPlayer);
      }
    });

    // Volume
    $(".app_instrucao .player .volume .vol").on("mouseover", function(e){
      $(".app_instrucao .player .volume .vol").each(function(index){
        if(index >= $(e.target).index()){
          $(this).addClass("ativo");
        }else{
          $(this).removeClass("ativo");
        }
      });
    });

    $(document).on("mousemove", function(e){
      if(!$(e.target).closest(".volume").length){
        var volumeok = false;
        $(".app_instrucao .player .volume .vol").each(function(){
          if($(this).attr("volume") == $("#player_instrucao").get(0).volume){volumeok = true;}
          if(volumeok){
            $(this).addClass("ativo");
          }else{
            $(this).removeClass("ativo");
          }
        });
      }
    });
    $(".app_instrucao .player").trigger("mousemove");

    // mute
    $(".app_instrucao .player .mute").on("click", function(){
      if($(this).find(".off").css("display") == "none"){
        $(this).find(".on").hide();
        $(this).find(".off").show();

        $("#player_instrucao").get(0).volume = 0;
        $(".app_instrucao .player").trigger("mousemove");
      }else{
        $(this).find(".off").hide();
        $(this).find(".on").show();

        $("#player_instrucao").get(0).volume = 1;
        $(".app_instrucao .player").trigger("mousemove");
      }
    });

    $(".app_instrucao .player .volume .vol").on("click", function(){
      if($(".app_instrucao .player .mute .on").css("display") == "none"){
        $(".app_instrucao .player .mute").trigger("click");
      }
      $("#player_instrucao").get(0).volume = $(this).attr("volume");
      $(".app_instrucao .player").trigger("mousemove");
    });

    //
    function updateAudioPlayer(){
      var current = $("#player_instrucao").get(0).currentTime;
      var total = $("#player_instrucao").get(0).duration;
      var bufferlen = $("#player_instrucao").get(0).buffered.end($("#player_instrucao").get(0).buffered.length - 1);

      $(".app_instrucao .player .conteudo .progressbar").css("width", (100/total * current) + "%");
      $(".app_instrucao .player .conteudo .progressbuffer").css("width", ((bufferlen/total) * 100) + "%");

      $(".app_instrucao .player .conteudo .text .time").html(addZero(Math.floor(current/60)) + ":" + addZero(Math.round(current - (Math.floor(current/60) * 60))));
      //
      if(current >= total){
        $(".app_instrucao .player .buttons").trigger("click");
      }
    }
  });

  function addZero(number){if(number < 10){return "0"+number;}else{return number;}}
</script>





            <!-- SUBMIT OU AVANCAR -->
                    </div>

        <!-- SUBMIT -->
                    
        
    </form>
</div>

                </div>
            </div>
        </div>
    </div>
                          
                    <br>

                    <div class="content list" style="background:white;"> 
                        
                        <div class="row " style="background:white;margin-left:40px;"> 
                            <div class="span6"> 
                        <div class ="list">
                            <div class="tabbable"> <!-- Only required for left/right tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab" style="color:#003bb3">Inglês</a></li>
                                    <li><a href="#tab2" data-toggle="tab" style="color:#57a957">Português</a></li>
                                </ul>
                                 
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">

                                   Thompson: Frustrating, isn't it?
Thompson: My name is Thompson.
David: Whatever happened to free will?
Thompson: We actually tried free will before.
Thompson: After taking you
from hunting and gathering
Thompson: to the height of the Roman Empire,
Thompson: we stepped back to see how
you would do on your own.
Thompson: You gave us the
Dark Ages for five centuries
Thompson: until finally we decided
we should come back in.
Thompson: The Chairman thought that maybe
we just needed to do a better job
Thompson: with teaching you how to
ride a bike
Thompson: before taking the training wheels off
again.
Thompson: So, we gave you
the Renaissance,
Thompson: the Enlightenment,
scientific revolution.
Thompson: For 600 years we taught you
Thompson: to control your impulses with reason.
Thompson: Then in 1910,
we stepped back again.
Thompson: Within 50 years, you had
brought us World War I,
Thompson: the Depression, Fascism,
the Holocaust,
Thompson: and capped it off by bringing the
entire planet to the brink of destruction
Thompson: in the Cuban missile crisis.
Thompson: At that point a decision was taken
to step back in again
Thompson: before you did something
that even we couldn't fix.
Thompson: You don't have free will, David.
Thompson: You have the appearance
of free will.
David: You expect me to believe that?
David: I make decisions every day.
Thompson: You have free will over
which toothpaste you use
Thompson: or which beverage to order at lunch.
Thompson: But humanity just
isn't mature enough
Thompson: to control the
important things.
David: So, you handle the important things?
David: The last time I checked,
the world is a pretty screwed-up place.
Thompson: It's still here.
Thompson: If we had left things
in your hands, it wouldn't be.
David: Tell me why I can't
be with Elise?
David: Because the last guy didn't know.
Thompson: Meeting Elise at the Waldorf
three years ago wasn't chance.
Thompson: That was us.
Thompson: We knew she would
inspire you to give that speech.
Thompson: That speech that brought you back
from the edge of oblivion
Thompson: and overnight made you the
frontrunner in this coming election.
David: What are you saying?
You want me to win the election?
Thompson: This one and four more after it.
Thompson: And I'm not just talking about
elections for Senate.
Thompson: You can matter, David.
Really matter.
Thompson: What your father wanted when he
took you to the Senate Gallery
when you were 10.
Thompson: What your brother wanted
when he made you promise
Thompson: the day before he
overdosed
Thompson: that you wouldn't be like him.
Thompson: Why do you think you have that
yearning to be in front of people?
Thompson: That terrible emptiness
when you're not.
David: Don't do that.
Thompson: David, you can change the world,
Thompson: but that doesn't happen
if you stay with her.
David: Why do you people care
who I love?
Thompson: It's not about her, it's about you.
Thompson: What being with her does to you.
David: What it does to me?
David: I'm better when I'm with her!
David: Even you said it.
The speech.
Thompson: In small doses,
Elise was the cure.
Thompson: But in large doses,
she rubs off on you.
David: Stop.
Thompson: David, the president
can't be a loose cannon.
David: Stop talking. It's not working.
Thompson: Why do you refuse to accept
what should be completely obvious by now?
Thompson: You've seen what we can do.
Thompson: You can't doubt
we are who we say we are.
David: Look, it's not about who you are,
it's about who I am.
Thompson: Can't outrun
your fate, David.
David: I just disagree with you
about what my fate is.
David: I know what I feel for her
and it's not gonna change.
David: All I have are
the choices that I make.
David: And I choose her
David: come what may.
Thompson: It's 6:20.
Thompson: If you leave now,
you can make Elise's show.




                                    </div>
                                    <div class="tab-pane " id="tab2">
                                    Thompson: Frustrante, não?
Thompson: Meu nome é Thompson.
David: O que houve com o livre arbítrio?
Thompson: Já tentamos o livre arbítrio antes.
Thompson: Depois de levá-los
da caça e coleta
Thompson: ao apogeu do Império Romano,
Thompson: nós nos afastamos para ver
como agiriam por conta própria.
Thompson: Vocês nos deram a
Idade das Trevas por 5 séculos
Thompson: até finalmente, nós decidirmos
que deveriamos voltar aqui.
Thompson: o Presidente achou que talvez
precisavamos fazer um trabalho melhor
Thompson: Ensinando-os como
andar de bicicleta
Thompson: antes de retirar as rodinhas
de novo.
Thompson: Então, nós lhes demos
o Renascimento,
Thompson: O Iluminismo,
revolução científica.
Thompson: Por 600 anos ensinamos vocês
Thompson: a controlar os impulsos com a razão.
Thompson: Então em 1910,
nos afastamos de novo.
Thompson: Em questão de 50 anos, vocês
nos deram a I Guerra Mundial,
Thompson: a Grande Depressão, o fascismo,
o Holocausto,
Thompson: levaram o mundo
à beira da destruição
Thompson: com a Crise dos Mísseis em Cuba.
Thompson: Àquela altura, decidimos
intervir de novo,
Thompson: antes que fizessem algo
que até nós não pudéssemos consertar.
Thompson: Vocês não têm livre arbítrio, David
Thompson: Vocês apenas
aparentam ter.
David: Você espera que eu acredite nisso?
David: Tomo decisões todos os dias.
Thompson: Há livre arbítrio para escolher
qual pasta de dente você usa
Thompson: ou qual bebida pedir no almoço.
Thompson: Mas a humanidade
não é madura o bastante
Thompson: para controlar
coisas importantes.
David: Por isso, vocês lidam com elas?
David: A última vez que chequei,
o mundo é um lugar bem caótico.
Thompson: Mas ele ainda está aqui.
Thompson: Se o deixássemos
nas mãos de vocês, não estaria.
David: Me diga, por que não posso
ficar com Elise?
David: Porque o outro cara não sabia.
Thompson: Encontrá-la
há 3 anos no Waldorf não foi acaso.
Thompson: Foi por nossa causa.
Thompson: Nós sabíamos que ela
o inspiraria a fazer aquele discurso.
Thompson: Aquele discurso que o livrou
da obscuridade,
Thompson: e da noite pro dia o pôs
na dianteira da eleição que viria.
David: O que está dizendo?
Que querem que eu ganhe a eleição?
Thompson: Esta aqui e as próximas quatro.
Thompson: E não falo apenas das
eleições para o Senado.
Thompson: Você pode fazer a diferença, David.
De verdade.
Thompson: O que seu pai queria quando
o levou ao Senado
aos 10 anos.
Thompson: O que seu irmão queria
quando te fez prometer
Thompson: no dia anterior
de morrer de overdose,
Thompson: que você não seria igual a ele.
Thompson: Por que acha que
tem o desejo de ficar diante das pessoas?
Thompson: Aquele terrível vazio
quando não está?
David: Não faça isso.
Thompson: David, você pode mudar o mundo,
Thompson: mas isso não acontecerá
se ficar com ela.
David: Por que vocês se importam
com quem eu amo?
Thompson: Não se trata dela, trata-se de você.
Thompson: O que estar com ela lhe causa.
David: O que me causa?
David: Sou melhor quando estou com ela.
David: Até você disse isso.
O discurso.
Thompson: Em pequenas doses,
Elise foi a cura.
Thompson: Mas em altas doses,
ela o afeta.
David: Pare.
Thompson: David, o presidente
não pode ser inconsequente.
David: Pare de falar. Não está funcionando.
Thompson: Por que se recusa a aceitar
o que agora deveria ser tão óbvio?
Thompson: Já viu o que nós podemos fazer.
Thompson: Você não pode duvidar,
Que somos quem somos.
David: Olhe, não é sobre quem vocês são,
é sobre quem eu sou.
Thompson: Não pode fugir
do seu destino, David.
David: Só discordo de você
sobre o que meu destino é.
David: Sei o que sinto por ela
e isso não vai mudar.
David: Tudo que tenho são
as escolhas que faço.
David: E eu a escolho
David: haja o que houver.
Thompson: São 18h20.
Thompson: Se sair agora
assistirá à apresentação de Elise.
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E4_P4.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                    <form method="POST" action="mail.php">
                    <INPUT TYPE="hidden" NAME="b1" value="69">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 17 Lição 2 Parte 4)">
<div align="center"><button class="btn btn-primary" type="submit" name="1">ENVIAR MINHA LIÇÃO</button></div> 
</form>

                </div>
            </div><!--/span-->
        </div><!--/row-->

        <hr class="featurette-divider">
        <footer>
            <p>© Company 2017 - 4weeks</p>
        </footer>


        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  

    </body>
</html>
