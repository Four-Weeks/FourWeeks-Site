
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 3 - Aula 11 - Lição 2 - Parte 1</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_3_aula11_lic1_part4.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 1 <a href="Filme_ep_3_aula11_lic2_part2.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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

                                   <p> David: No, he knew the number </p>
I was thinking of, the color.</p>
Harry: Because he set it up as a choice.</p>
Harry: Choose a color,</p>
choose a number.</p>
Harry: We can't read your mind</p>
or hear your thoughts.</p>
Harry: When you make a decision,</p>
your mind weighs options.</p>
Harry: We can perceive them.</p>
Harry: We know when you're going to go off</p>
the plan or not because</p>
Harry: if we're</p>
close enough,</p>
Harry: we can sense</p>
when it's going to happen.</p>
Harry: We're just here to</p>
keep you on plan.</p>
Harry: That's all we're</p>
authorized to do.</p>
David: Are you allowed to be</p>
telling me this stuff?</p>
David: Are they following me now?</p>
Harry: We have to monitor</p>
the entire world.</p>
Harry: We don't have the manpower</p>
to follow everyone all the time.</p>
Harry: And there is something about water.</p>
Harry: It blocks our ability</p>
to read your decision tree.</p>
David: Are you an angel?</p>
Harry: We've been called that.</p>
Harry: We're more like case officers</p>
Harry: who live a lot longer than humans.</p>
David: Why are you helping me?</p>
Harry: I have my reasons.</p>
David: And why won't they</p>
let me be with Elise?</p>
Harry: All I know is the</p>
amount of resources they've used</p>
Harry: keeping you from her</p>
is pretty damn important to them.</p>
Harry: You're going to look for her, aren't you?</p>
Harry: You won't find her.</p>
Harry: They'll make sure of it.</p>
Harry: Even if they weren't</p>
trying to stop you,</p>
Harry: there are nine million people</p>
in this city.</p>
Harry: You'll never find her.</p>
Harry: Forget about her.</p>
Harry: Move on with your life.</p>
David: Stop!</p>
Stop the bus!</p>
David: Elise? Elise, hi.</p>
Elise: David.</p>
David: You know, I rode the M6</p>
to work every day for three years</p>
David: hoping that I'd bump into you.</p>
David: Listen, is there a place we could go and</p>
talk?</p>
Elise: Don't you have to get to work</p>
or something?</p>
David: I just got sick.</p>
Elise: "I haven't seen you in three years,</p>
you make me sick."</p>
Elise: That's not an ideal come-on,</p>
just so you know.</p>
Elise: What are you looking for?</p>
David: I felt like someone was watching us.</p>
David: Hey, Charlie, I'm going to have</p>
to skip breakfast,</p>
David: and I probably have to postpone</p>
the speech, too.</p>
I just bumped into Elise.</p>
Elise: You just hung up</p>
on your friend.</p>
David: We've known each other since</p>
we were kids.</p>
Elise: What speech?</p>
David: It doesn't matter.</p>
David: You want to take a walk?</p>
Elise: No.</p>
David: We have a lot to catch up on.</p>
Elise: I don't think you should</p>
cancel your speech.</p>
Elise: What if I don't like you</p>
at the end of our walk?</p>
David: I'll take my chances.</p>
Elise: Seriously, my number hasn't changed,</p>
Elise: just call me like</p>
you didn't last time.</p>
David: Look, if you take a walk with me,</p>
I'll explain why.</p>
Elise: It's been years. How do you know</p>
I don't have a nice boyfriend?</p>
David: Do you have a nice boyfriend?</p>
Elise: Would it matter if I did?</p>
David: Yeah.</p>
Elise: So you don't have any</p>
real conviction then?</p>
David: Okay, it wouldn't matter at all.</p>



                                    </div>
                                    <div class="tab-pane " id="tab2">
                                    <p>David: Não, ele sabia o número</p>
que eu estava pensando, a cor…</p>
Harry: Porque ele definiu como escolha.</p>
Harry: Escolha uma cor,</p>
escolha um número.</p>
Harry: Não podemos ler sua mente</p>
ou ouvir seus pensamentos.</p>
Harry: Quando toma uma decisão,</p>
sua mente analisa opções.</p>
Harry: Podemos perceber isso.</p>
Harry: Sabemos se você vai se desviar</p>
ou não do plano, porque</p>
Harry: se estivermos</p>
suficientemente perto,</p>
Harry: podemos pressentir</p>
quando vai acontecer.</p>
Harry: Só estamos aqui para</p>
te manter no plano.</p>
Harry: Isto é tudo o que estamos</p>
autorizados a fazer.</p>
David: Você está permitido à</p>
me contar essas coisas?</p>
David: Estão me seguindo agora?</p>
Harry: Temos que monitorar</p>
o mundo inteiro.</p>
Harry: Não temos gente suficiente</p>
para seguir todos o tempo todo.</p>
Harry: E há algo quanto à água.</p>
Harry: Ela bloqueia nossa habilidade</p>
de ler sua árvore de decisões.</p>
David: Você é um anjo?</p>
Harry: Já fomos chamados disso.</p>
Harry: Estamos mais para agentes.</p>
Harry: que vivem mais que os humanos.</p>
David: Por que você está me ajudando?</p>
Harry: Tenho meus motivos.</p>
David: E por que não querem</p>
me deixar ficar com Elise?</p>
Harry: Tudo o que sei é que com a</p>
quantidade de recursos que usaram,</p>
Harry: mantê-lo longe dela</p>
é muito importante para eles.</p>
Harry: Vai procurar por ela, não vai?</p>
Harry: Não vai encontrá-la.</p>
Harry: Irão se assegurar disso.</p>
Harry: Mesmo que não estivessem</p>
tentando detê-lo,</p>
Harry: existem 9 milhões de pessoas</p>
nesta cidade.</p>
Harry: Nunca vai encontrá-la.</p>
Harry: Esqueça ela.</p>
Harry: Siga a sua vida.</p>
David: Pare!</p>
Pare o ônibus!</p>
David: Elise? Elise, oi.</p>
Elise: David.</p>
David: Sabe, pego o mesmo ônibus</p>
para trabalhar todos os dias, há três anos</p>
David: esperando te encontrar.</p>
David: Ouça, podemos ir a algum lugar para</p>
conversar?</p>
Elise: Você não tem que trabalhar</p>
ou algo assim?</p>
David: Acabei de ficar doente.</p>
Elise: "Não te vejo há 3 anos,</p>
você me deixa doente."</p>
Elise: Esse não é um convite ideal,</p>
só para que saiba.</p>
Elise: O que está procurando?</p>
David: Senti como se alguém nos vigiasse.</p>
David: Charlie, vou ter</p>
que faltar ao café da manhã,</p>
David: e talvez adiar</p>
o discurso.</p>
Acabei de encontrar Elise.</p>
Elise: Acabou de desligar na cara do seu</p>
amigo.</p>
David: Somos amigos desde</p>
crianças.</p>
Elise: Que discurso?</p>
David: Não importa.</p>
David: Quer dar uma volta?</p>
Elise: Não.</p>
David: Temos muitas coisas para por em dia.</p>
Elise: Eu não acho que você deva</p>
cancelar seu discurso.</p>
Elise: E se eu não gostar de você</p>
depois do passeio?</p>
David: Vou correr o risco.</p>
Elise: É sério, meu número não mudou,</p>
Elise: me ligue, como</p>
não fez da última vez.</p>
David: Olha , se passear comigo,</p>
explico por quê.</p>
Elise: Passaram-se anos, como sabe</p>
que não tenho um bom namorado?</p>
David: Você tem um bom namorado?</p>
Elise: Importaria se eu tivesse?</p>
David: Sim.</p>
Elise: Certo, não teria nenhuma</p>
real convicção então?</p>
David: Ok , não teria importância alguma.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E3_P1.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                   <form method="POST" action="mail_licao.php">
                    <INPUT TYPE="hidden" NAME="b1" value="">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 11 Lição 2 Parte 1)">

<div align="center"><button class="btn btn-primary" type="submit" name="1">AVANÇAR</button></div> 
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
