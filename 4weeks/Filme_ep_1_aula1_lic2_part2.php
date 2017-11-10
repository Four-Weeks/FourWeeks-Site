
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 1 - Aula 1 - Lição 2 - Parte 2</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_1_aula1_lic2_part1.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 2 <a href="Filme_ep_1_aula1_lic2_part3.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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

                                       <p> Richardson: Big night</p>
<p>for us, gentlemen.</p>
<p>Richardson: Everybody ready?</p>
<p>Richardson: You look exhausted.</p>
<p>Richardson: You should take a vacation</p>
<p>when all this is finished.</p>
<p>Richardson: You've earned it.</p>
<p>Harry: I'm not sure the kind</p>
<p>of tired I am</p>
<p>Harry: can be fixed by a vacation.</p>
<p>Richardson: Everybody needs a vacation,</p>
<p>Richardson: even us.</p>
<p>Richardson: All right, let's get</p>
<p>him back on track.</p>
<p>TV: Mary, over the past couple of weeks</p>
<p>TV: since the photo came out,</p>
<p>they thought people</p>
<p>Charlie: Why are you still</p>
<p>watching CNN?</p>
<p>TV: That it wasn't such a big deal,</p>
<p>but clearly it was.</p>
<p>Charlie: They called this way</p>
<p>too early. Come on.</p>
<p>Charlie: Put on your pretty</p>
<p>little tie and let's go.</p>
<p>Man: Suffolk County numbers,</p>
<p>Man: Linfield, 415. 120.</p>
<p>And Norris…</p>
<p>Man: 370. 233.</p>
<p>Charlie: Well…</p>
<p>Charlie: I really thought</p>
<p>we'd win Suffolk.</p>
<p>Woman: Kings County</p>
<p>just came in, too.</p>
<p>Charlie: Well…</p>
<p>David: I didn't win Brooklyn.</p>
<p>David: It's going to be a blow out.</p>
<p>Woman: NBC has us up next.</p>
<p>David: I'm going to go work on my speech.</p>
<p>Charlie: David…</p>
<p>Charlie: David. Hey!</p>
<p>David: I'm sorry I wasted</p>
<p>your time, Charlie.</p>
<p>Reporter: NBC news is now calling the</p>
<p>election for Roger Linfield.</p>
<p>Reporter: After a shockingly poor showing</p>
<p>at both Suffolk County,</p>
<p>Reporter: and his home county,</p>
<p>Kings,</p>
<p>Reporter: it now appears David Norris</p>
<p>will lose this election badly.</p>
<p>David: Hello?</p>
<p>David: Hello?</p>
<p>David: I grew up in Red Hook,</p>
<p>David: and I don't want to surprise anybody,</p>
<p>David: but I got into a few fistfights</p>
<p>along the way.</p>
<p>David: It's not whether or not</p>
<p>you get knocked down,</p>
<p>David: it's what you do</p>
when you get back up.</p>
David: Ladies and gentlemen,</p>
I'm here tonight to tell you</p>
David: I will get back up.</p>
David: But tonight is not about me.</p>
David: It is about coming together</p>
David: and welcoming the newest senator</p>
David: for the great state of New York,</p>
David: Roger Linfield.</p>
Elise: Shit!</p>
Elise: Shit, shit, shit.</p>
David: Hello?</p>
David: It's the men's. Yep.</p>
Elise: Sorry about that.</p>
I didn't mean to eavesdrop.</p>
Elise: I just didn't know what to do.</p>
Elise: I heard you come in and say,</p>
Hello,</p>
Elise: and I probably should have said,</p>
hi,</p>
Elise: but then I thought that</p>
would be weird</p>
Elise: because it's the men's.</p>
Elise: Then you started talking</p>
to yourself</p>
Elise: and it was obviously very personal.</p>
Elise: So I was stuck in no man's land,</p>
Elise: and then it all got to be too much,</p>
so I came out.</p>
David: What are you doing in here?</p>
Elise: Just…</p>
Elise: I'm hiding from security.</p>
David: Why?</p>
Elise: I crashed</p>
a wedding upstairs.</p>
David: People still do that?</p>
Elise: It was a dare.</p>
David: Who dared you</p>
to crash a wedding?</p>
Elise: Me.</p>
David: Oh.</p>
David: I crashed a wedding once.</p>
Elise: Did you?</p>
David: Yeah, in high school.</p>
Elise: Oh.</p>
David: But I got caught.</p>
I spent the night in jail.</p>
Elise: I think that happened more</p>
than once from what I heard.</p>
Elise: You're that guy running for Senate,</p>
aren't you?</p>
David: Yeah, I am that guy.</p>
Elise: And judging from your speech,</p>
you're not winning?</p>
David: No.</p>
Elise: Oh. That's too bad,</p>
the other guy is such a tool.</p>
David: He is a tool.</p>
David: I wish I could have made that</p>
clearer in the campaign ads.</p>
Elise: Personally, I think</p>
mooning your friends</p>
Elise: at a college reunion</p>
is no big deal.</p>
David: The Post did not have</p>
to run the photo.</p>
Elise: At least not a full page.</p>
<p>David: God, no.</p>




                                    </div>
                                    <div class="tab-pane " id="tab2">
                                        <p>Richardson: É uma grande noite</p>
para nós, senhores.</p>
Richardson: Estão todos prontos?</p>
Richardson: Parece exausto.</p>
Richardson: Devia tirar férias</p>
quando tudo isso acabar.</p>
Richardson: Você merece.</p>
Harry: Não sei se o tipo</p>
de cansaço que tenho</p>
Harry: pode ser resolvido com férias.</p>
Richardson: Todos precisam de férias,</p>
Richardson: até nós.</p>
Richardson: Certo, vamos colocá-lo</p>
de volta no trilho.</p>
TV: Mary, nas 2 últimas semanas,</p>
TV: desde que a foto saiu,</p>
eles pensaram que as pessoas…</p>
Charlie: Por que ainda</p>
está assistindo à CNN?</p>
TV: não era importante,</p>
mas obviamente era.</p>
Charlie: Chegaram cedo.</p>
Vamos.</p>
Charlie: Ponha sua linda gravatinha</p>
e vamos lá.</p>
Homem: Os números de de Suffolk County,</p>
Homem: Linfield, 415. 120.</p>
E Norris…</p>
Homem: 370. 233.</p>
Charlie: Bem…</p>
Charlie: Realmente pensei que</p>
ganharíamos em Suffolk.</p>
Mulher: Kings County também</p>
acabou de chegar e…</p>
Charlie: Bem…</p>
David: Eu não ganhei no Brooklyn</p>
David: Vai ser uma explosão.</p>
Mulher: A NBC é a próxima</p>
David: Eu vou trabalhar no meu discurso</p>
Charlie: David…</p>
Charlie: David. Ei!</p>
David: Lamento tê-lo feito</p>
perder tempo, Charlie.</p>
Repórter: A NBC prevê a vitória</p>
de Roger Linfield.</p>
Repórter: Depois de um chocante e pobre</p>
desempenho tanto em Suffolk County,</p>
Repórter: quanto no seu</p>
município de origem, Kings,</p>
Repórter: parece que David Norris</p>
sofrerá derrota pesada.</p>
David: Olá?</p>
David: Olá?</p>
David: Eu cresci no Red Hook,</p>
David: E eu não quero surpreender ninguém,</p>
David: mas eu entrei em algumas brigas</p>
pelo caminho</p>
David: Isso não é sobre</p>
apanhar ou não.</p>
David: É sobre o que você faz</p>
quando se levanta.</p>
David: Senhoras e senhores,</p>
vim aqui esta noite para lhes dizer</p>
David: que vou me reerguer.</p>
David: Mas esta noite não é sobre mim</p>
David: É sobre nos unirmos</p>
David: E dar as boas vindas ao novo senador</p>
David: do grande Estado de Nova York</p>
David: Roger Linfield.</p>
Elise: Droga!</p>
Elise: Droga, droga…</p>
David: Olá?</p>
David: Esse banheiro é masculino</p>
Elise: Desculpe,</p>
não foi minha intenção escutar.</p>
Elise: Apenas não sabia o que fazer.</p>
Elise: Ouvi você entrar e dizer</p>
“Olá",</p>
Elise: provavelmente eu deveria ter dito</p>
“olá”,</p>
Elise: mas, depois eu pensei que isso</p>
seria estranho</p>
Elise: pois este é o banheiro masculino</p>
Elise: Depois, você começou a falar</p>
sozinho,</p>
Elise: E era obviamente muito pessoal</p>
Elise: Fiquei em um beco sem saída,</p>
Elise: achei que era demais,</p>
então resolvi sair.</p>
David: O que está fazendo aqui?</p>
Elise: Apenas…</p>
Elise: me escondendo da segurança.</p>
David: Por quê?</p>
Elise: Entrei de penetra num casamento</p>
no andar de cima.</p>
David: Ainda fazem isso?</p>
Elise: Foi um desafio.</p>
David: Quem a desafiou a invadir</p>
um casamento?</p>
Elise: Eu.</p>
David: Oh.</p>
David: Já entrei de penetra num casamento.</p>
Elise: Você fez isso?</p>
David: Sim, no colegial.</p>
Elise: Oh.</p>
David: Mas me pegaram</p>
e passei a noite na cadeia.</p>
Elise: Pelo que ouvi, eu acho que isso</p>
já aconteceu mais de uma vez.</p>
Elise: Você é aquele cara candidato</p>
a senador, não é?</p>
David: Sim, sou.</p>
Elise: A julgar pelo seu discurso,</p>
você não está ganhando?</p>
David: Não.</p>
Elise: Oh. Isso é péssimo,</p>
o outro cara é um idiota.</p>
David: Ele é um idiota.</p>
David: Gostaria de ter deixado isso mais</p>
claro nos anúncios da campanha.</p>
Elise: Pessoalmente acho que</p>
curtir com amigos</p>
Elise: em uma reunião da faculdade</p>
não é grande coisa</p>
David: O jornal não precisava</p>
ter publicado a foto.</p>
Elise: Pelo menos não uma página inteira</p>
David: Deus, não.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E1_P2.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                   <form method="POST" action="mail_licao.php">
                    <INPUT TYPE="hidden" NAME="b1" value="">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 1 Lição 2 Parte 2)">
<div align="center"><button class="btn btn-primary" type="submit" name="1">AVANÇAR</button></div> 
</form>

                </div>
            </div><!--/span-->
        </div><!--/row-->

        <hr class="featurette-divider">
        <footer>
            <p>© Company 2016 - 4weeks</p>
        </footer>


        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  

    </body>
</html>
