
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 2 - Aula 6 - Lição 2 - Parte 3</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_2_aula6_lic2_part2.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 3 <a href="Filme_ep_2_aula6_lic2_part4.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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
                                <div class="bar" style="color:#000;width: <?php echo "" . $_SESSION['usuarioProgresso']; ?>;%"><?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);
                                echo "" . $resultado['progresso']; ?>%</div></li>
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
 <p> Richardson: You really think I couldn't</p>
see that coming?</p>
Richardson: I can read your mind.</p>
Richardson: Yeah, really.</p>
Richardson: Pick a color.</p>
Richardson: Blue.</p>
Richardson: Pick a number.</p>
Seventeen.</p>
Richardson: Now, why are you still</p>
thinking about running?</p>
David: I don't really know</p>
what's going on here.</p>
Richardson: You've just seen behind</p>
a curtain</p>
Richardson: that you weren't supposed to know</p>
existed.</p>
Richardson: Must be jarring.</p>
Richardson: It's not your fault.</p>
Richardson: Your path through the world this</p>
morning</p>
Richardson: was supposed to have been</p>
adjusted.</p>
Richardson: You were supposed to spill</p>
your coffee</p>
Richardson: as you entered the park this</p>
morning.</p>
Richardson: You would have gone</p>
upstairs to change,</p>
Richardson: you would have missed the bus,</p>
Richardson: and you would have arrived at work</p>
Richardson: 10 minutes later than you did,</p>
Richardson: and we would have been gone.</p>
David: I was supposed to spill</p>
my coffee?</p>
Richardson: We call that an adjustment.</p>
Richardson: See, sometimes, when</p>
people spill their coffee</p>
Richardson: or their Internet goes out</p>
Richardson: or they misplaced their keys,</p>
they think it's chance.</p>
Richardson: And sometimes it is.</p>
Richardson: Sometimes it's us…</p>
Richardson: …nudging people</p>
back on plan.</p>
Richardson: Sometimes when</p>
nudging isn't enough,</p>
Richardson: management authorizes</p>
a recalibration.</p>
Richardson: We deploy our</p>
Intervention Team</p>
Richardson: and they change your mind</p>
for you,</p>
Richardson: like we did with</p>
your friend Charlie.</p>
Richardson: He's fine, by the way.</p>
Richardson: You don't need to worry about him.</p>
Richardson: Now…</p>
Richardson: There is something I need you to</p>
understand if I'm going to let you go.</p>
David: Okay.</p>
Richardson: Very few humans have seen</p>
what you've seen today,</p>
Richardson: and we're determined to keep it that</p>
way.</p>
Richardson: So, if you ever</p>
reveal our existence,</p>
Richardson: we'll erase your brain.</p>
Richardson: The Intervention Team will</p>
reset you.</p>
Richardson: Your emotions, your memories,</p>
Richardson: your entire personality</p>
will be expunged.</p>
Richardson: Your friends and family will</p>
think you've gone crazy.</p>
Richardson: You won't think anything.</p>
Richardson: You understand?</p>
Richardson: Not one word about us.</p>
Richardson: Okay.</p>
Richardson: Oh, one more thing, you bumped</p>
into a woman this morning on the bus.</p>
Richardson: Elise?</p>
David: What does that have to do with anything?</p>
Richardson: You were never supposed to see</p>
her again.</p>
David: What does that matter?</p>
Richardson: Because it matters.</p>
Man: It's in his wallet.</p>
David: Hey, hey. God! Hey!</p>
David: What's with you guys?</p>
Jesus!</p>
David: Oh, come on. No! No!</p>
David: What the hell?</p>
David: Really?</p>
David: What the hell?</p>
Richardson: Okay.</p>
David: Okay.</p>
Richardson: Take him back.</p>
Richardson: Enjoy the rest of your day.</p>
David: I can walk.</p>
I'm capable of walking.</p>
Charlie: Dude, what are you doing</p>
on my floor?</p>
Charlie: You know, I called you like 10 times,</p>
you could have picked up.</p>
Charlie: Christine, I found him.</p>
He's in my office.</p>
Charlie: What the hell are you doing?</p>
Charlie: Round up the guys,</p>
we're going to do the meeting now.</p>
David: You have a headache?</p>
Charlie: What is wrong with you?</p>
Charlie: Hey, we're in the big conference room</p>
on 17. Let's go.</p>
Recepcionist: Morning, Congressman.</p>
Charlie: You sure you're okay?</p>
David: Yeah, you?</p>
Charlie: I'm great, why?</p>
David: You don't have</p>
a headache or anything?</p>
Charlie: No, I feel fantastic, man.</p>
Charlie: Is it me or this</p>
an odd conversation?</p>
Woman: On David's solar panel deal,</p>
our tech guy</p>
has serious doubts,</p>
                                     


                                    </div>
                                    <div class="tab-pane " id="tab2">
                                    <p> Richardson: Você realmente acha que eu não</p>
poderia prever isso?</p>
Richardson: Consigo ler seu pensamento.</p>
Richardson: Sim, é verdade.</p>
Richardson: Escolha uma cor.</p>
Richardson: Azul.</p>
Richardson: Escolha um número.</p>
17.</p>
Richardson: Agora, por que ainda</p>
está pensando em fugir?</p>
David: Não sei</p>
o que está acontecendo aqui.</p>
Richardson: Você acabou de ver por trás de</p>
uma cortina</p>
Richardson: que era nem para você saber que</p>
existia.</p>
Richardson: Deve ser complicado.</p>
Richardson: A culpa não é sua.</p>
Richardson: Seu caminho pelo mundo nessa</p>
manhã</p>
Richardson: devia ter sido</p>
ajustado.</p>
Richardson: Devia ter derramado</p>
seu café</p>
Richardson: ao entrar</p>
no parque.</p>
Richardson: Você deveria ter voltado</p>
para cima para se trocar</p>
Richardson: e perdido o ônibus,</p>
Richardson: e teria chegado ao trabalho</p>
Richardson: 10 minutos depois do que chegou.</p>
Richardson: e nós já teríamos ido embora.</p>
David: Eu devia ter derramado</p>
meu café?</p>
Richardson: Chamamos isso de ajuste.</p>
Richardson: Veja, às vezes quando as pessoas</p>
derramam o café,</p>
Richardson: ficam sem internet</p>
Richardson: ou perdem as chaves,</p>
acham que é o acaso.</p>
Richardson: Às vezes até é.</p>
Richardson: Às vezes, somos nós…</p>
Richardson: … pondo as pessoas</p>
de volta ao plano.</p>
Richardson: Às vezes, quando isso</p>
não é suficiente,</p>
Richardson: a Administração autoriza</p>
uma recalibração.</p>
Richardson: Nós acionamos nossa</p>
equipe de intervenção</p>
Richardson: e eles alteram sua mente</p>
para você,</p>
Richardson: como a que fizemos</p>
com seu amigo Charlie.</p>
Richardson: A propósito, ele está bem.</p>
Richardson: Não precisa se preocupar com ele.</p>
Richardson: Agora…</p>
Richardson: Há algo que eu preciso que você</p>
entenda se eu vou te soltar.</p>
David: Ok.</p>
Richardson: Pouquíssimos humanos viram</p>
o que você viu hoje.</p>
Richardson: e nós determinamos que continue</p>
assim.</p>
Richardson: Então, se alguma vez</p>
revelar nossa existência,</p>
Richardson: apagaremos seu cérebro.</p>
Richardson: A equipe de intervenção irá</p>
reiniciá-lo.</p>
Richardson: Suas emoções, suas memórias</p>
Richardson: e toda a sua personalidade</p>
serão expurgadas.</p>
Richardson: Seus amigos e familiares</p>
acharão que enlouqueceu.</p>
Richardson: Você não irá pensar em nada.</p>
Richardson: Entendeu?</p>
Richardson: Nenhuma palavra sobre nós.</p>
Richardson: Muito bem.</p>
Richardson: Só mais uma coisa, você encontrou</p>
uma mulher no ônibus hoje de manhã.</p>
Richardson: Elise?</p>
David: O que isso tem a ver?</p>
Richardson: Você não deve</p>
vê-la de novo.</p>
David: Por que é que isso importa?</p>
Richardson: Porque sim.</p>
Homem: Está na carteira dele.</p>
David: Meu Deus. Ei!</p>
David: O que deu em vocês?</p>
Jesus!</p>
David: Qual é. Não, não!</p>
David: Que diabos?</p>
David: Sério?</p>
David: Que diabos?</p>
Richardson: Muito bem.</p>
David: Tudo bem.</p>
Richardson: Leve o de volta.</p>
Richardson: Aproveite o resto do seu dia.</p>
David: Eu sei andar.</p>
Eu sou capaz de andar</p>
Charlie: Cara, o que está fazendo</p>
no meu chão?</p>
Charlie: Sabe, eu liguei umas 10 vezes.</p>
Devia ter atendido.</p>
Charlie: Christine, eu o achei.</p>
Está na minha sala.</p>
Charlie: O que diabos está fazendo?</p>
Charlie: Convoque o pessoal,</p>
faremos a reunião agora.</p>
David: Você está com dor de cabeça?</p>
Charlie: O que há de errado com você?</p>
Charlie: Ei, estamos na sala grande de reuniões</p>
às 17. Vamos!</p>
Recepcionista: Bom dia, deputado.</p>
Charlie: Você tem certeza de que está bem?</p>
David: Sim, e você?</p>
Charlie: Estou ótimo, por quê?</p>
David: Você não está</p>
com dor de cabeça ou outra coisa?</p>
Charlie: Estou me sentindo fantástico, cara.</p>
Charlie: Sou eu, ou essa conversa</p>
está estranha?</p>
Mulher: Sobre o acordo do painel solar do</p>
David, nossos homens de tecnologia</p>
têm dúvidas,</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E2_P3.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



         <form method="POST" action="mail.php">
                         <INPUT TYPE="hidden" NAME="b1" step="any" value="17.82">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 6 Lição 2 Parte 3)">
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
