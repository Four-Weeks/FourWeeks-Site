
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

 ul { list-style: none; }
    #recordingslist audio { display: block; margin-bottom: 10px; }
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
                <!--<li><a href='gramatica.php'>Gramática</a></li>
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 2 - Aula 7 - Lição 3 - Parte 1</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_2_aula7_lic2_part4.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 3 - Parte 1 <a href="Filme_ep_2_aula7_lic3_part2.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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
                    <h2>Estúdio de Gravações</h2>
                    <h4>Contracene com os Atores de Hollywood</h4>
                    <div class="wrapper">

        

                    
        
        <!-- CONTEUDO -->
        <div class="container">
            <div class="centro">
                               
                                <div class="boxConteudo">
                    <div class="view_wrapper">
    <form method="post" enctype="multipart/form-data">
        <div class="view_centro">
            <input name="partes_licoes_id" type="hidden" value="1799">

            <div class="aplicativos" id="app_instrucao" style="padding: 0px; margin-bottom: 10px; width: 670px;">
    <div class="app_instrucao" style="height: 42px;">
    <div class="audio">
      <audio id="player_instrucao">
        <source src="https://videos.universidadedoingles.com.br/instrucao/al_1-lc_1-pt_1.mp3" type="audio/mpeg">
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
        <img style="margin-left: 15px;" src="https://portal.universidadedoingles.com.br/acesso/public/img/botao-intrucao.png">      </div>
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
<div class="aplicativos" id="aplicativos">
    <div class="app_video noselect">
    <div class="loading" style="display: none;">
      <img src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/loading.gif" alt="">
    </div>
    <div class="player" style="display: block; bottom: 0px; ">
      <div class="progress" style="margin-top:-280px;">
        <div class="maximize" style="display: none;">
          <img src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_maximize.png" alt="">
        </div>
        <div class="barra">
          <div class="progressbuffer" style="width: 30.8503%;"></div>
          <div class="progressbar" style="width: 22.3536%;"></div>
          <div class="icon" style="left: 22.3536%;"></div>
        </div>
      </div>
      <div class="buttons">
        <div class="button left">
          <div class="volume">
            <div class="barra">
              <div class="progress" style="width: 100%;"></div>
              <div class="icon" style="left: 100%;"></div>
            </div>
          </div>
        </div>
        <div class="button center">
          <div class="reset"></div>
          <div class="play" style="display: table-cell;"></div>
          <div class="pause" style="display: none;"></div>
          <div class="time">
            <span class="current">00:56</span>
            <span>/</span>
            <span class="all">04:08</span>
          </div>
        </div>

        <div class="button right">
          
          <div class="fullscreen">
            <img src="https://portal.universidadedoingles.com.br/acesso/public/img/html5/icon_fullscreen.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <video id="video" src="https://videos.universidadedoingles.com.br/agentes/videos/Ag_En_E2_P1.mp4" width="660" height="372"></video>
  </div>
</div>
<script>

  var timerupdatevideo = 0;
  var timerfade = 0;
  var isVolumeChange = false;
  var isSeekChange = false;
  $(document).ready(function(){

    // move
    $(document).on("mousemove", function(e){

      //
      if(isVolumeChange){
        console.log("Volume");
        var volume = 1/$(".app_video .volume .barra").width() * (e.pageX - $(".app_video .volume .barra").offset().left);
        $(".app_video #video").get(0).volume = volume;
      }

      //
      if(isSeekChange){
        console.log("Seek");
        var seek = $(".app_video #video").get(0).duration/$(".app_video .progress .barra").width() * (e.pageX - $(".app_video .progress .barra").offset().left);
        $(".app_video #video").get(0).currentTime = seek;

        //
        if($(".app_video .button .pause").css("display") == "none"){
          updatevideo();
        }
      }

      //
      var volumepercent = 100/1 * $(".app_video #video").get(0).volume;
      $(".app_video .volume .progress").css("width", volumepercent + "%");
      $(".app_video .volume .icon").css("left", volumepercent + "%");

      // fade
      clearInterval(timerfade);
      if(!isSeekChange && !isVolumeChange){
        if(!$(e.target).closest(".player").length){
          if($(e.target).closest(".app_video").length){
            showPlayer();
            timerfade = setTimeout(hidePlayer, 1000);
          }else{
            timerfade = setTimeout(hidePlayer, 50);
          }
        }
      }
    });
    $(document).trigger("mousemove");

    $(".app_video .buttons .button > .volume .barra").on("mousedown", function(){
      isVolumeChange = true;
    });

    $(".app_video .player > .progress .barra").on("mousedown", function(){
      isSeekChange = true;
    });

    $(document).on("mouseup", function(){
      isVolumeChange = false;
      isSeekChange = false;
    });

    // play
    $(".app_video .player .play, .app_video .player .pause").on("click", function(){
      if($(this).hasClass("play")){
        $(".app_video .player .play").hide();
        $(".app_video .player .pause").css("display", "table-cell");

        //
        $(".app_video #video").get(0).play();

        //
        timerupdatevideo = setInterval(updatevideo, 1);
      }
      else if($(this).hasClass("pause")){
        $(".app_video .player .pause").hide();
          $(".app_video .player .play").css("display", "table-cell");

          //
          $(".app_video #video").get(0).pause();

          //
          clearInterval(timerupdatevideo);
      }
    });

    $(".app_video video").on("play", function(){
      $(".app_video .buttons .button .play").hide();
      $(".app_video .buttons .button .pause").css("display", "table-cell");
    });

    $(".app_video video").on("pause", function(){
      $(".app_video .buttons .button .pause").hide();
      $(".app_video .buttons .button .play").css("display", "table-cell");
    });

    // reset
    $(".app_video .player .reset").on("click", function(){
      $(".app_video #video").get(0).currentTime = 0;
      if($(".app_video .player .pause").css("display") == "none"){
        $(".app_video .player .play").trigger("click");
      }
    });

    //
    $(document).on("click", function(e){
      if($(e.target).closest(".app_video").length){
        if(!$(e.target).closest(".player").length && !$(e.target).closest(".loading").length){
          if($(".app_video .player .play").css("display") == "none"){
            $(".app_video .player .pause").trigger("click");
          }else{
            $(".app_video .player .play").trigger("click");
          }
        }
      }
    });

    //
    function updatevideo(){

      //
      var progresspercent = 100/$(".app_video #video").get(0).duration * $(".app_video #video").get(0).currentTime;
      var bufferlen = $(".app_video #video").get(0).buffered.end($(".app_video #video").get(0).buffered.length - 1);
      $(".app_video .progress .barra .progressbar").css("width", progresspercent + "%");
      $(".app_video .progress .barra .progressbuffer").css("width", (100/$(".app_video #video").get(0).duration * bufferlen) + "%");
      $(".app_video .progress .barra .icon").css("left", progresspercent + "%");

      // times
      $(".app_video .player .time .current").html(addZero(Math.floor($(".app_video #video").get(0).currentTime/60)) + ":" + addZero(Math.round($(".app_video #video").get(0).currentTime - (Math.floor($(".app_video #video").get(0).currentTime/60) * 60))));
      $(".app_video .player .time .all").html(addZero(Math.floor($(".app_video #video").get(0).duration/60)) + ":" + addZero(Math.round($(".app_video #video").get(0).duration - (Math.floor($(".app_video #video").get(0).duration/60) * 60))));

      //
      if($(".app_video #video").get(0).currentTime >= $(".app_video #video").get(0).duration){
        $(".app_video .button .pause").trigger("click");
      }
    }

    // hide / show
    function hidePlayer(){
      if($(".app_video .player .buttons .button .play").css("display") == "none"){
        $(".app_video .player").fadeOut(100);
      }
    }
    function showPlayer(){
      if($(".app_video .loading").css("display") == "none"){
        $(".app_video .player").fadeIn(100);
      }
    }

    // Fullscreen
    $(".app_video .player .fullscreen").on("click", function(){
      var elem = document.getElementById("video");
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen();
      }
    });

    // minimize / maximize
    $(".app_video .player .minimize").on("click", function(){
      $(".app_video .player").animate({
        "bottom" : "-55px"
      }, 50, function(){
        $(".app_video .progress .maximize").show();
      });
    });

    $(".app_video .progress .maximize").on("click", function(){
      $(".app_video .player").animate({
        "bottom" : "0px"
      }, 50);
      $(".app_video .progress .maximize").hide();
    });
  });

  //
  window.addEventListener('load', function() {
    var video = document.querySelector('#video');
    function checkLoad() {
        if (video.readyState === 4) {

            // Video loaded, removo o loading
            $(".app_video .player .time .all").html(addZero(Math.floor($(".app_video #video").get(0).duration/60)) + ":" + addZero(Math.round($(".app_video #video").get(0).duration - (Math.floor($(".app_video #video").get(0).duration/60) * 60))));

            //
            $(".app_video .loading").hide();
            $(".app_video .player").show();
        } else {
          $(".app_video .loading").hide();
          $(".app_video .player").show();
        }
    }

    checkLoad();
}, false);
</script>
<div class="aplicativos" id="aplicativos" style="max-width: 660px;">
                    
            </div>
<script type="text/javascript">
  $(document).ready(function(){
    function fala(textoi,textop, voz, rate, pass){
      if(speechSynthesis.speaking){
        speechSynthesis.pause();
        speechSynthesis.cancel();
      }
      msg = new SpeechSynthesisUtterance(textoi);

      msg.voice = speechSynthesis.getVoices().filter(function(voice) { return voice.name == voz; })[0];
      msg.rate = rate; // 0.1 to 10
      msg.text = textoi;
      msg.volume = 1; // 0 to 1
      msg.pitch = 1; //0 to 2
      msg.onend = function(e) {
        if(pass == 1){
            fala(textop,'', 'Google português do Brasil', 1, 2);
        }
      };
      speechSynthesis.speak(msg);
    }
    fala('','', 'Google US English', 0.8, 2);
    $(".tts").each(function(){
      $(this).on("click", function(e){
        var texto = $(this).attr('data-tts');
        var textoi = texto.substring(0,texto.indexOf("."));
        textoi = textoi.trim();

        var textop = texto.substring(texto.indexOf("."));
        textop = textop.trim();

          fala(textoi,textop, 'Google US English', 0.8, 1);
          e.preventDefault();
      });
    });

    // Quando adiciono o Gravador e ja possui algum elemento secundario na tela eu reduzo o tamanho dele
    $(".view_centro").find("#app_instrucao").css("width", "670px");
    $(".view_centro").find("#app_instrucao").css("display", "");

    $(".app_alternativas_repostaBox input").click(function(){
        $(this).parent().parent().find('label').css('color', '#666');
        if($(this).attr('class') == 0){
           $(this).parent().find('label').css('color', 'red');
        } else {
           $(this).parent().find('label').css('color', 'green');
        }
    });

  });
</script>


          
        
    </form>
</div>

                </div>
            </div>
        </div>
    </div>
                    <br>
<div>
<script type="text/javascript">
function insereTexto()
{document.getElementById('divTeste').innerHTML = 'Gravando...';}

function TrocaTexto()
{document.getElementById('divTeste').innerHTML = 'Parado...';}
</script>
  <button onclick="startRecording(this);insereTexto()" style="margin-left:350px;" value='Inserir texto'><img src="img/gravador.jpg" style="width:40px;"></button>
  <button onclick="stopRecording(this);TrocaTexto()" disabled><img src="img/stop.png" style="width:40px;"></button>
  <div id="divTeste"> </div>
  <h2>Gravações</h2>
  <ul id="recordingslist"></ul>
  
  <!--<h2>Resultado </h2>-->
  <pre id="log" style="visibility:hidden;"></pre>


                


                    <form method="POST" action="mail_licao.php">
                    <INPUT TYPE="hidden" NAME="b1" value="">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 7 Lição 3 Parte 1)">
<div align="center"><button class="btn btn-primary" type="submit" name="1">AVANÇAR</button></div> 
</form>

                </div>
            </div><!--/span-->
        </div><!--/row-->

        

<script>
  function __log(e, data) {
    log.innerHTML += "\n" + e + " " + (data || '');
  }
  var audio_context;
  var recorder;
  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
    //__log('Media pronta.');
    // Uncomment if you want the audio to feedback directly
    //input.connect(audio_context.destination);
    //__log('Input connected to audio context destination.');
    
    recorder = new Recorder(input);
    __log('Gravador pronto.');
  }
  function startRecording(button) {
    recorder && recorder.record();
    button.disabled = true;
    button.nextElementSibling.disabled = false;
    __log('gravando...');
  }
  function stopRecording(button) {
    recorder && recorder.stop();
    button.disabled = true;
    button.previousElementSibling.disabled = false;
    __log('Parando a gravação...');
    
    // create WAV download link using audio data blob
    createDownloadLink();
    
    recorder.clear();
  }
  function createDownloadLink() {
    recorder && recorder.exportWAV(function(blob) {
      var url = URL.createObjectURL(blob);
      var li = document.createElement('li');
      var au = document.createElement('audio');
      var hf = document.createElement('a');
      
      au.controls = true;
      au.src = url;
      hf.href = url;
      hf.download = new Date().toISOString() + '.wav';
      hf.innerHTML = hf.download;
      li.appendChild(au);
      li.appendChild(hf);
      recordingslist.appendChild(li);
    });
  }
  window.onload = function init() {
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia;
      window.URL = window.URL || window.webkitURL;
      
      audio_context = new AudioContext;
      //__log('Audio Configurado.');
      //__log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
    } catch (e) {
      alert(' Browser não suporta este tipo de audio!');
    }
    
    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
      __log('No live audio input: ' + e);
    });
  };
  </script>
        <script src="dist/recorder.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  

<hr class="featurette-divider" style="margin-top:1100px;">
       
    </body>
</html>
