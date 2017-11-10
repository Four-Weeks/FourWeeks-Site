
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
              <!--  <li><a href='gramatica.php'>Gramática</a></li>
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 1 - Aula 1 - Lição 2 - Parte 1</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_1_aula1_part4.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 1 <a href="Filme_ep_1_aula1_lic2_part2.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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

                                        <p> Speaker: Let's welcome</p>
                                        <p>our favorite alumnus,</p>
                                        <p>Speaker: and the next senator</p>
                                        <p>from the state of New York,</p>
                                        <p>Speaker: David Norris!</p>
                                        <p>David: Thank you. Thank you.</p>
                                        <p>David: Well, hi, there.</p>
                                        <p>David: My name is David Norris,</p>
                                        <p>David: and I'd like to be the next senator</p>
                                        <p>from the great state of New York.</p>
                                        <p>David: Look at you.</p>
                                        <p>What's your name?</p>
                                        <p>David: I'm going to go through Yonkers,</p>
                                        <p>door to door</p>
                                        <p>David: and take the city that way.</p>
                                        <p>Man: We love you.</p>
                                        <p>Reporter: The recent endorsement</p>
                                        <p>by the fire fighter's union</p>
                                        <p>Reporter: is another boost to Norris</p>
                                        <p>Reporter: who already had a six-point lead</p>
                                        <p>Reporter: over his opponent, Roger Linfield.</p>
                                        <p>Reporter 2: Whenever I see you on C-Span,</p>
                                        <p>and you stand,</p>
                                        <p>Reporter 2: I always think you're</p>
                                        <p>about to go, "Chug!"</p>
                                        <p>Reporter 2: Congressman,</p>
                                        <p>you certainly started your career off,</p>
                                        <p>Reporter 2: eight years ago, with a bang</p>
                                        <p>or should I say, a bust.</p>
                                        <p>Speaker: For the last eight years,</p>
                                        <p>Speaker: David Norris has represented</p>
                                        <p>Brooklyn, NYC and America.</p>
                                        <p>David: This is my campaign chairman,</p>
                                        <p>Charlie Traynor.</p>
                                        <p>David: These are voters.</p>
                                        <p>Charlie: Latest polls have</p>
                                        <p>you up 10 points.</p>
                                        <p>David: We're 10 points up?</p>
                                        <p>David: This is not going to be easy </p>
                                        <p>getting there.</p>
                                        <p>David: I have some real opposition,</p>
                                        <p>David: and what they're saying about me</p>
                                        <p>David: is that I'm too young</p>
                                        <p>to hold this office.</p>
                                        <p>Man: Win big, but run</p>
                                        <p>like you're 20 down.</p>
                                        <p>David: Okay, you got it.</p>
                                        <p>David: Thank you, Gary.</p>
                                        <p>David: But that's okay because</p>
                                        <p>these are the same people</p>
                                        <p>David: who say that young</p>
                                        <p>people don't vote,</p>
                                        <p>David: young people don't</p>
                                        <p>care about politics,</p>
                                        <p>David: but I'm here to tell you,</p>
                                        <p>David: your future is about</p>
                                        <p>your choices, not theirs.</p>
                                        <p>David: So, today I'd like</p>
                                        <p>to put them on notice</p>
                                        <p>David: because come November,</p>
                                        <p>I want them to know</p>
                                        <p>David: that it was young people like you,</p>
                                        <p>David: who kicked their asses.</p>
                                        <p>Crowd: David! David!</p>
                                        <p>David: Thank you.</p>
                                        <p>Men: Charlie.</p>
                                        <p>Charlie: What's wrong?</p>
                                        <p>Harry: Yeah?</p>
                                        <p>Man: Any ideas?</p>
                                        <p>Harry: I'm working on it.</p>
                                        <p>Man: Keep me posted.</p>
                                        <p>Harry: Yeah.</p>
                                        <p>Man: David Norris,</p>
                                        <p>Man: until recently, he was way ahead in the polls.</p>
                                        <p>Man: Mary Matalin and James Carville are here.</p>
                                        <p>Man: Mary, this is a surprise still.</p>
                                        <p>Mary: It is a surprise.</p>
                                        <p>Such political promise.</p>
                                        <p>Mary: This compelling story, he grew up
                                            in a rough neighborhood in Brooklyn.</p>
                                        <p>Mary: He overcame the loss 
                                            of his entire family,</p>
                                        <p>Mary: his mom and his brother
                                            when he was 10,</p>

                                        <p>Mary: his father before he got to high school,
                                            he got over that.</p>
                                        <p>Mary: He had such promise.</p>
                                        <p>Man: And he was the youngest person</p>
                                        <p>Man: ever elected to the
                                            House of Representatives.</p>
                                        <p>Man: Yeah,
                                            he was elected when he was actually 24</p>
                                        <p>Man: but he gets in a bar room fight
                                            the night that he's elected.</p>
                                        <p>Man: I kind of liked it, all right</p>
                                        <p>Man: Then you have this photo
                                            coming out of the New York Post.</p>
                                        <p>Man: I think the accretion of this stuff</p>
                                        <p>Man: was just too much for the voters.</p>
                                        <p>Man: It reeked of some level 
                                            of immaturity here,</p>
                                        <p>Mary: of impulsiveness.</p>
                                        <p>Man: People want maturity,
                                            they want adults in Congress.</p>




                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p> Locutor: Vamos receber
                                            nosso aluno predileto</p>
                                        <p>Locutor: e o próximo senador
                                            do Estado de Nova Iorque,</p>
                                        <p>Locutor: David Norris!</p>
                                        <p>David: Obrigado. Obrigado.</p>
                                        <p>David: Olá.</p>
                                        <p>David: Meu nome é David Norris,</p>
                                        <p>David: e gostaria de ser o próximo senador
                                            do grande Estado de NY</p>
                                        <p>David: Olha para você.
                                            Qual é o seu nome?</p>
                                        <p>David: Vou passar por todo o Yonkers,
                                            de porta em porta</p>
                                        <p>David: E conquistar a cidade dessa forma.
                                            Homem: Nós amamos vocês.</p>
                                        <p>Repórter: O apoio recente do
                                            sindicato dos bombeiros</p>
                                        <p>Repórter: Que já está 6 pontos à frente</p>
                                        <p>Repórter: de seu adversário, Roger Linfield.</p>
                                        <p>Repórter 2: Quando vejo você na TV Câmara,
                                            e você se levanta,</p>
                                        <p>Repórter 2: Sempre penso
                                            que vai agredir alguém.</p>
                                        <p>Repórter 2: Congressista,
                                            começou sua carreira</p>
                                        <p>Repórter 2: há 8 anos, com estardalhaço,
                                            ou deveria dizer, sendo preso?</p>
                                        <p>Locutor: Durante os últimos 8 anos,
                                        <p>Locutor: David Norris representou</p>
                                        o Brooklyn, Nova Iorque e os EUA.</p>
                                        <p>David: Eis meu chefe de campanha,
                                        Charlie Traynor.</p>
                                        <p>David: Esses são os eleitores
                                        Charlie Traynor: As pesquisas mais recentes
                                        mostram que você lidera por 10 pontos.</p>
                                        <p>David: Estamos 10 pontos à frente?</p>
                                        <p>David: Não vai ser fácil
                                            chegar lá.</p>
                                        <p> David: Tenho forte concorrência</p>
                                        <p>David: E o que estão dizendo sobre mim</p>
                                        <p>David: É que sou muito jovem
                                            para ocupar o cargo.</p>
                                        <p> Homem: Grande vitória, mas corra como
                                            se estivesse 20 pontos atrás.</p>
                                        <p> David: Certo, deixa comigo.</p>
                                        <p>David: Obrigado, Gary.</p>
                                        <p>David: Mas não tem problema
                                            pois são os mesmos</p>
                                        <p>David: que dizem que
                                            os jovens não votam,</p>
                                        <p>David: que não ligam
                                            para a política.</p>
                                        <p>David: Mas vim aqui para lhes dizer</p>
                                        <p>David: que o seu futuro são
                                        suas opções e não as deles.</p>
                                        <p> David: Então, hoje gostaria de dar
                                            um recado a eles</p>
                                        <p>David: porque em novembro próximo
                                            quero que saibam</p>
                                        <p>David: que foram jovens como vocês</p>
                                        <p>David: que os derrotaram.</p>
                                        <p>Multidão: David! David!</p>
                                        <p>David: Obrigado.</p>
                                        <p>Homem: Charlie.</p>
                                        <p>Charlie: O que há de errado?</p>
                                        <p>Harry: Sim?</p>
                                        <p>Homem: Alguma ideia?</p>
                                        <p>Harry: Estou trabalhando nisso.</p>
                                        <p>Homem: Mantenha-me informado.</p>
                                        <p>Harry: Certo.</p>
                                        <p>Homem: David Norris,</p>
                                        <p>Homem: até pouco tempo
                                        estava à frente nas pesquisas,</p>
                                        <p>Homem: Mary Matalin e James Carville
                                        estão conosco.</p>
                                        <p>Homem: Mary, isso é uma surpresa.
                                        Mary: É uma surpresa.
                                        Uma promessa política</p>
                                        <p>Mary: Essa história atrativa, ele cresceu
                                            em um bairro duro no Brooklin</p>
                                        <p>Mary: Ele superou a perda
                                            de toda sua família,</p>
                                        <p>Mary: A mãe e o irmão
                                            aos 10 anos,</p>
                                        <p>Mary: o pai antes de entrar no 2º grau.
                                            Ele superou isso.</p>
                                        <p>Mary: Era uma grande promessa.</p>
                                        <p>Homem: E foi a pessoa mais jovem</p>
                                        <p>Homem: A ser eleita
                                            para a Câmara dos Deputados</p>
                                        <p>Homem: Sim,
                                            Ele foi eleito aos 24 anos,</p>
                                        <p>Homem: Mas entrou numa briga de bar
                                        na noite em que foi eleito.</p>
                                        <p>Homem: Eu até gostei disso, tudo bem.</p>
                                        <p>Homem: Depois, veio a foto
                                        que saiu no NY Post,</p>
                                        <p> Homem: acho que o acréscimo de tudo isso</p>
                                        <p>Homem: foi demais para os eleitores.</p>
                                        <p>Homem: Deixou transparecer um pouco
                                            de imaturidade,</p>
                                        <p>Homem: de impulsividade.</p>
                                        <p>Mary: O povo deseja maturidade,
                                            quer adultos no Congresso.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E1_P1.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                   <form method="POST" action="mail_licao.php">
                    <INPUT TYPE="hidden" NAME="b1" value="">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 1 Lição 2 Parte 1)">

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
