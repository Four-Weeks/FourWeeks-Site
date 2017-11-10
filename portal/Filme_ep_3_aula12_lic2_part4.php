
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
                <li><a href='lista_aulas.php' style="color:#002a80"><h4>Episodio 3 - Aula 12 - Lição 2 - Parte 4</h4></a></li>
                <li style="margin-left:400px;"><h4><a href="Filme_ep_3_aula12_lic2_part3.php"><img  src="img/back.png" style="width:20px;" border="0"></a>Lição 2 - Parte 4 <a href="Filme_ep_3_aula12_lic3_part1.php"> <img  src="img/next-1.png" style="width:20px;" border="0"></a> </h4></li>

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

                                    <p> David: Why do you want to keep us apart?</p>
Richardson: Because the plan says so.</p>
David: Then you misread the plan.</p>
Richardson: There is no misreading the plan</p>
when it comes to you and Elise.</p>
David: Then the plan is wrong.</p>
Richardson: Do you know who wrote it?</p>
David: I don't care.</p>
Richardson: You should.</p>
You should really show a little respect.</p>
David: If I'm not supposed to be with her,</p>
David: how come I feel like this?</p>
Richardson: It doesn't matter how you feel.</p>
Richardson: What matters is what is in</p>
black and white.</p>
David: You don't know why</p>
I'm not supposed to be with her, do you?</p>
David: That's why you can't tell me.</p>
You don't know.</p>
Richardson: Who is this guy?</p>
Richardson: Uh-oh.</p>
David: Excuse me, everyone.</p>
David: Sorry to disturb your lunch.</p>
It's an emergency.</p>
David: Has anyone here ever seen a</p>
performance at the</p>
Cedar Lake Ballet Company?</p>
David: The Cedar Lake Ballet Company?</p>
Man: Yeah, I have.</p>
David: Where is it?</p>
Richardson: Son of a bitch.</p>
David: Hey, taxi. Hey!</p>
David: Taxi! Hey!</p>
David: Taxi!</p>
Richardson: Maybe you should</p>
try the subway.</p>
David: Don't all these taxies you're diverting</p>
have plans, too?</p>
David: How long you going to keep</p>
that up?</p>
Twenty minutes? An hour?</p>
David: Wow, the ripples must just be endless.</p>
David: I don't care what you put</p>
in my way, I'm not giving up.</p>
David: Hey! Hey! Hey!</p>
David: Taxi!</p>
David: Hey!</p>
David: You all right?</p>
David: You okay?</p>
Taxi driver: What happened?</p>
David: You got hit.</p>
Are you okay?</p>
Taxi driver: I think so.</p>
David: Don't move.</p>
David: You all right?</p>
David: Hello, I just witnessed an accident</p>
David: on the corner of Water and Dover Street.</p>
Officer: Unfortunately, you're the only witness,</p>
Congressman.</p>
David: But we did this three times already.</p>
Officer: I just need a few more details.</p>
David: Oh, I see.</p>
David: You're not even a cop, are you?</p>
You're one of them.</p>
Officer: Calm down.</p>
David: Okay.</p>
David: Someone could have been killed.</p>
Officer: Sir, if you would just calm down.</p>
David: Hey, Sergeant.</p>
David: Hi. Sorry, excuse me,</p>
I know you need a statement from me,</p>
David: but do I need to stay here</p>
or can I do it over the phone?</p>
Sergeant: No, sir,</p>
we know how to get in touch with you.</p>
David: Okay. Now, is this man</p>
under your command?</p>
David: Never mind. Thank you.</p>
David: Hey, hey, hey!</p>
David: You want to make</p>
a quick 100 bucks?</p>
David: You're going to have to break a couple</p>
of traffic laws.</p>
David: All right, 26th and 10th.</p>
It's a ballet company called Cedar Lake.</p>
David: Go through that.</p>
Man: Look out!</p>
David: Watch it.</p>
David: This is going to keep happening,</p>
just go through.</p>
Richardson: Son of a bitch!</p>
Richardson: Set a traffic jam</p>
on Broadway.</p>
Agent: Too many ripples.</p>
Richardson: He's getting out of range.</p>
Agent: I don't know what to do with this.</p>
You're reaching your limit.</p>
Woman: Hey!</p>
Woman: Excuse me.</p>
Richardson: Two down. Two down.</p>
Richardson: Oh, shit!</p>
Richardson: Next one.</p>
Richardson: I hate downtown.</p>
Richardson: Sorry.</p>




                                    </div>
                                    <div class="tab-pane " id="tab2">
                                    <p> David: Por que quer nos manter separados?</p>
Richardson: Porque o plano quer assim.</p>
David: Então você interpretou mal o plano.</p>
Richardson: Não há má interpretação do plano</p>
quando se trata de você e Elise.</p>
David: Então o plano está errado.</p>
Richardson: Você sabe quem o escreveu?</p>
David: Não me importo.</p>
Richardson: Você deveria.</p>
Deveria mostrar um pouco de respeito.</p>
David: Se não devo ficar com ela,</p>
David: por que me sinto assim?</p>
Richardson: Não importa como se sente.</p>
Richardson: O que importa é o</p>
preto no branco.</p>
David: Você não sabe o porquê</p>
de eu não poder ficar com ela, sabe?</p>
David: É por isso que não pode me dizer.</p>
Você não sabe.</p>
Richardson: Quem é esse cara?</p>
Agente: Uh-oh.</p>
David: Com licença, pessoal.</p>
David: Desculpem por atrapalhar seu almoço.</p>
É uma emergência</p>
David: Alguém viu uma</p>
apresentação na</p>
Cia. de Ballet Cedar Lake?</p>
David: Companhia de Ballet Cedar Lake?</p>
Homem: Sim, eu vi.</p>
David: Onde fica?</p>
Richardson: Filho da mãe.</p>
David: Ei, taxi. Ei!</p>
David: Taxi! Ei!</p>
David: Taxi!</p>
Richardson: Talvez devesse</p>
tentar usar o metrô.</p>
David: Esses táxis que estão desviando</p>
também não têm planos?</p>
David: Por quanto tempo vai continuar</p>
com isso?</p>
20 minutos? 1 hora?</p>
David: Uau, as ondas devem ser infinitas.</p>
David: Não importa o que vocês colocam</p>
no meu caminho, não vou desistir.</p>
David: Ei! Ei! Ei!</p>
David: Taxi!</p>
David: Ei!</p>
David: Você está bem?</p>
David: Está bem?</p>
Taxista: O que aconteceu?</p>
David: Você foi atingido.</p>
Você está bem?</p>
Taxista: Acho que sim.</p>
David: Não se mova.</p>
David: Está bem?</p>
David: Alô, acabei de testemunhar um acidente</p>
David: Na esquina da Water com a Dover.</p>
Policial: Infelizmente é a única testemunha,</p>
deputado.</p>
David: Mas já fizemos isso 3 vezes.</p>
Policial: Só preciso de mais alguns detalhes.</p>
David: Ah, entendi.</p>
David: Você não é nem mesmo policial, é?</p>
Você é um deles.</p>
Policial: Tenha calma.</p>
David: Ok.</p>
David: Alguém poderia ter morrido.</p>
Policial: Senhor, pode se acalmar?</p>
David: Ei, sargenta.</p>
David: Oi. Desculpe, com licença,</p>
sei que precisa de um depoimento meu,</p>
David: mas eu preciso ficar aqui</p>
ou posso fazer por telefone?</p>
Sargenta: Não, senhor,</p>
sabemos como entrar em contato.</p>
David: Certo. Agora, aquele homem</p>
está sob seu comando?</p>
David: Esqueça. Obrigado.</p>
David: Ei, ei, ei!</p>
David: Quer ganhar</p>
$100 rápido?</p>
David: Vai ter que infringir</p>
umas leis de trânsito.</p>
David: Muito bem, na 26 com a 10</p>
fica a Cia. de ballet chamada Cedar Lake.</p>
David: Não pare, continue.</p>
Homem: Cuidado!</p>
David: Siga em frente.</p>
David: Isso vai continuar acontecendo,</p>
apenas atravesse.</p>
Richardson: Filho da mãe!</p>
Richardson: Ponha congestionamento</p>
na Broadway.</p>
Agente: Há muitas ondas.</p>
Richardson: Está saindo do alcance!</p>
Agente: Não sei o que fazer.</p>
Está atingindo seu limite.</p>
Mulher: Ei!</p>
Mulher: Com licença.</p>
Richardson: Duas já foram, duas já foram.</p>
Richardson: Oh, droga!</p>
Richardson: Próxima.</p>
Richardson: Odeio o centro.</p>
Richardson: Desculpe.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            <div class="span2">
                                
                                 <audio controls="controls">
                       
                        <source src="https://videos.universidadedoingles.com.br/yesman/audios/mp3/Ag_Mp_E3_P4.mp3" type="audio/mpeg">
                    </audio>
                            </div>
                        </div>
                    </div>



                    
                                  <form method="POST" action="mail.php">
                         <INPUT TYPE="hidden" NAME="b1" step="any" value="38.06">


                                                 <INPUT TYPE="hidden" NAME="msg" value="Parabéns por mais essa etapa (Aula 12 Lição 2 Parte 4)">
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
