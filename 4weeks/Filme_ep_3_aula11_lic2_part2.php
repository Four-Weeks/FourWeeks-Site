
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 3 - Aula 11 - Lição 2 - Parte 2</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_3_aula11_lic2_part1.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 2 <a href="Filme_ep_3_aula11_lic2_part3.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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

<p>Elise: So, you don't mind</p>
being a home-wrecker?</p>
Man: Congressman!</p>
Man: How are you doing, man?</p>
I'm from Red Hook.</p>
You're the best.</p>
David: Thank you.</p>
Good to see you.</p>
David: If you were married,</p>
then it would bother me.</p>
Elise: But now you're just saying what</p>
you think I wanna hear.</p>
Elise: I'm single.</p>
Elise: Now let's hear your bullshit excuse</p>
for not calling me.</p>
David: I didn't have your number.</p>
Elise: I gave it you on the bus.</p>
Handed it to you.</p>
David: I was mugged. It was taken from me.</p>
Elise: No, come on.</p>
David: My wallet was taken.</p>
Elise: Come on.</p>
David: Why else would I fawn</p>
all over you on a bus</p>
David: three years ago and then never call you?</p>
Elise: Because, I don't know!</p>
You have a girlfriend and you felt terrible.</p>
David: Listen, I swear to you that</p>
I did not have your number.</p>
Elise: All right.</p>
David: No. On my parents' graves.</p>
Elise: That's heavy.</p>
David: That's too heavy, I know, but it's true.</p>
David: I didn't have your number.</p>
David: And I didn't even have a last name</p>
to go by.</p>
David: If you google</p>
just "Elise",</p>
David: you get 757,000 hits.</p>
Elise: You did not.</p>
David: And none of them are you.</p>
Man: We have a problem.</p>
Richardson: What?</p>
Man: David Norris is off plan.</p>
Richardson: Son of a bitch.</p>
How did he find her?</p>
Man: Chance. Just spotted her on the street.</p>
Richardson: We never should have let him</p>
meet her in the first place.</p>
Man: We followed protocol to the letter.</p>
Richardson: Guy rides the same bus</p>
every day for three years.</p>
Richardson: Who does that?</p>
Richardson: Three years later, I'm still</p>
cleaning up your mess.</p>
Richardson: Let's cut the power at her</p>
dance studio.</p>
Elise: I'm a dancer.</p>
David: Oh.</p>
Elise: Not like that, you pervert.</p>
Elise: I'm in a contemporary</p>
ballet company.</p>
David: I think you have the wrong idea</p>
about me.</p>
Elise: No, I think that was the first thing that</p>
crossed your mind, actually.</p>
David: I think you should invite me</p>
to one of your performances.</p>
Elise: The company is called</p>
Cedar Lake,</p>
Elise: and there is actually a show</p>
tomorrow night, if you want.</p>
David: Is that an invitation?</p>
Elise: No, it's information.</p>
Agent: We're covering the girl's</p>
artistic director</p>
Agent: and we're still working</p>
on Charlie Traynor.</p>
Richardson: This whole thing will be over</p>
in an hour.</p>
Elise: Hi, how are you?</p>
David: Paul, right?</p>
Paul (waiter): How did you remember that?</p>
David: I'm a politician, I'm good with names.</p>
Agent: Her decision tree is diverging</p>
from our models.</p>
Paul (waiter): It's just the two of you?</p>
David: Yes.</p>
Richardson: Thirty-six hours without contact,</p>
Richardson: she'll never speak to him again.</p>
Richardson: Look at her file.</p>
Richardson: It's the last thing in the world</p>
she'll put up with.</p>
Agent: No, something's wrong.</p>
I'm already seeing inflection points.</p>
Elise: You okay?</p>
David: Yeah.</p>
Agent: We're in motion on changing</p>
the location of her rehearsal.</p>
Elise: You have to be born with the right body</p>
Elise: like very flexible hips and shoulders</p>
and long neck.</p>
David: And you weren't?</p>
Elise: No, I was.</p>
I was lucky.</p>
Elise: But after 15 years</p>
of that precision and the training…</p>
Waitress: How is everything over here?</p>
David: It's great. Thank you.</p>
Elise: It's good, thank you.</p>
Elise: So, I wanted to try something else</p>
just on my own,</p>
Elise: open-ended and human, I guess.</p>
Woman: What do you mean?</p>
Agent: Look.</p>
Richardson: What's this?</p>
Agent: If they kiss.</p>
Richardson: A kiss? That's all it takes?</p>
Agent: A real kiss.</p>
Agent: If that happens,</p>
every possible adjustment</p>
Agent: strong enough</p>
to break them up</p>
Agent: will cause ripples over your limit.</p>
Elise: I think that everything you</p>
go through in life</p>
Elise: should come out in</p>
the way that you dance.</p>
David: I haven't found that to be the case</p>
with my dancing.</p>
Elise: It's a shame.</p>
Charlie: David, hate to interrupt.</p>
Elise: Hi.</p>
Charlie: Hi, nice to see you again, Elise.</p>
David: How did you find me?</p>
Charlie: Does it matter?</p>
Richardson: Nice work.</p>
Charlie: David, there's a crowd of people</p>
waiting for your announcement speech</p>
Charlie: at the Brooklyn Bridge right now</p>
Elise: You're announcing today?</p>
You can't skip this for me.</p>
David: I know. I told you I'm not going to let</p>
you out of my sight.</p>
Charlie: David, what the hell?</p>
Do you wanna come?</p>
David: You wanna watch?</p>
Elise: No. I can't,</p>
I have to go and rehearse.</p>
Elise: Actually, I just heard</p>
that they're moving my rehearsal</p>
Elise: to Pier 17, right next to the bridge.</p>
David: Why don't we just postpone it?</p>
We'll do the speech another time.</p>
Elise: No, David, come on,</p>
you can't do that.</p>
Charlie: Thank you.</p>
Elise: You have to go.</p>
Charlie: Check.</p>


                                    </div>
                                    <div class="tab-pane " id="tab2">
                                      <p>Elise: Então, não se importaria</p>
em ser um destruidor de lares?</p>
Homem: Deputado!</p>
Homem: Como está?</p>
Sou de Red Hook!</p>
Você é o melhor.</p>
David: Obrigado.</p>
Bom te ver.</p>
David: Se fosse casada,</p>
aí ficaria incomodado.</p>
Elise: Agora está dizendo o que</p>
acha que eu queria ouvir.</p>
Elise: Estou solteira.</p>
Elise: Agora vamos ouvir a sua desculpa</p>
para não me ligar.</p>
David: Eu não tinha o seu número.</p>
Elise: Lhe dei no ônibus.</p>
Entreguei a você.</p>
David: Fui roubado e o levaram.</p>
Elise: Não, qual é.</p>
David: Minha carteira foi roubada.</p>
Elise: Qual é!</p>
David: Por que mais eu daria em cima</p>
de você em um ônibus</p>
David: há 3 anos e não te ligaria?</p>
Elise: Porque… eu não sei.</p>
Você tem namorada, se sentiu mal.</p>
David: Ouça, juro que</p>
não tinha seu número.</p>
Elise: Tudo bem.</p>
David: Não. Sobre o túmulo dos meus pais.</p>
Elise: Isto é pesado.</p>
David: É muito pesado, mas é verdade.</p>
David: Não tinha seu número.</p>
David: E não tinha seu sobrenome</p>
para procurar.</p>
David: Se você colocar</p>
apenas "Elise" no Google,"</p>
David: você vai ter 757 mil resultados.</p>
Elise: Você não fez isto.</p>
David: E nenhuma delas era você.</p>
Homem: Temos um problema.</p>
Richardson: O quê?</p>
Homem: David Norris está fora do plano.</p>
Richardson: Filho da mãe!</p>
Como ele a encontrou?</p>
Homem: Por acaso, encontrou-a na rua.</p>
Richardson: Nunca deveríamos tê-lo deixado</p>
encontrá-la na primeira vez.</p>
Homem: Seguimos o protocolo à risca.</p>
Richardson: O cara pega o mesmo ônibus,</p>
todo dia, há 3 anos.</p>
Richardson: Quem faz isso?</p>
Richardson: 3 anos depois e ainda estou</p>
limpando sua bagunça.</p>
Richardson: Corte a energia no</p>
estúdio de dança.</p>
Elise: Sou dançarina.</p>
David: Oh.</p>
Elise: Não desse jeito, seu pervertido!</p>
Elise: Sou de uma companhia</p>
de balé contemporâneo.</p>
David: Acho que teve uma má ideia</p>
a meu respeito.</p>
Elise: Não, na verdade acho que foi</p>
a primeira coisa que passou pela sua cabeça.</p>
David: Acho que devia me convidar</p>
para uma de suas apresentações.</p>
Elise: A Companhia se chama</p>
Cedar Lake</p>
Elise: e haverá um espetáculo</p>
amanhã à noite, caso queira.</p>
David: É um convite?</p>
Elise: Não, é uma informação.</p>
Agente: Estamos cobrindo</p>
o diretor de arte da garota</p>
Agente: ainda estamos cuidando</p>
do Charlie Traynor.</p>
Richardson: Tudo isto estará acabado</p>
em 1 hora.</p>
Elise: Olá, como vai?</p>
David: Paul, certo?</p>
Paul (garçom): Como se lembra disto?</p>
David: Sou político, sou bom com nomes.</p>
Agente: As decisões dela estão divergindo</p>
dos modelos.</p>
Paul (garçom): São apenas vocês 2?</p>
David: Sim.</p>
Richardson: Depois de 36 horas sem contato,</p>
Richardson: ela nunca mais falará com ele.</p>
Richardson: Olhe a ficha dela.</p>
Richardson: É a última coisa no mundo</p>
que ela aguentaria.</p>
Agente: Não, há algo errado.</p>
Já estou vendo pontos de desvio.</p>
Elise: Você está bem?</p>
David: Sim.</p>
Agente: Estamos em curso para mudar</p>
o local do ensaio.</p>
Elise: Tem que nascer com o corpo certo,</p>
Elise: Ombros e quadris bem flexíveis</p>
e pescoço longo.</p>
David: E você não era assim?</p>
Elise: Não, eu era.</p>
Tive sorte.</p>
Elise: Mas depois de 15 anos de</p>
precisão e treinamento…</p>
Garçonete: Como estão as coisas por aqui?</p>
David: Estão ótimas. Obrigado</p>
Elise: Estão bem, obrigado.</p>
Mulher: Então, queria tentar algo</p>
por mim mesmo</p>
Mulher: mais aberto e humano, eu acho.</p>
Mulher: O que quer dizer?</p>
Agente: Olhe.</p>
Richardson: O que é isso?</p>
Agente: Se eles se beijarem.</p>
Richardson: Um beijo? É tudo o que precisam?</p>
Agente: Um beijo de verdade.</p>
Agente: Se isso acontecer,</p>
qualquer possível ajuste</p>
Agente: que seja forte o suficiente</p>
para separá-los</p>
Agente: causará ondas fora do alcance.</p>
Elise: Acho que o que se</p>
passa na vida</p>
Elise: deveria ser exposta na forma</p>
como se dança.</p>
David: Não acho que esse seja o caso</p>
com minha dança.</p>
Elise: É uma pena.</p>
Charlie: David, odeio interromper.</p>
Elise: Oi.</p>
Charlie: Oi, é bom vê-la novamente, Elise.</p>
David: Como você me encontrou?</p>
Charlie: Isso importa?</p>
Richardson: Bom trabalho.</p>
Charlie: David, há uma multidão</p>
esperando por seu discurso</p>
Charlie: na Ponte do Brooklyn, agora.</p>
Elise: Vai discursar hoje?</p>
Não pode ignorar isto por minha causa.</p>
David: Eu sei. Já disse que não vou perdê-la</p>
de vista.</p>
Charlie: David, que diabo?</p>
David: Você quer vir?</p>
David: Quer vir assistir?</p>
Elise: Não. Não posso.</p>
Tenho que ir ensaiar.</p>
Elise: Na verdade, acabei de saber</p>
que transferiram meu ensaio</p>
Elise: para o Píer 17, perto da ponte.</p>
David: Por que não o adiamos?</p>
Faremos o discurso outra hora.</p>
Elise: Não, David, qual é,</p>
Você não pode fazer isto.</p>
Charlie: Obrigado.</p>
Elise: Você tem que ir.</p>
Charlie: A conta.</p>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E3_P2.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                   <form method="POST" action="mail_licao.php">
                    <INPUT TYPE="hidden" NAME="b1" value="">
                        <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 11 Lição 2 Parte 2)">
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
