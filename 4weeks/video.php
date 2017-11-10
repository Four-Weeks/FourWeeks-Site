<html>
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <title>Inglês em 4 semanas</title>
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/normalize.css?v=20170224112734">
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/portal.css?v=20170224112734">
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/midias.css?v=20170224112734">
        <link rel="stylesheet" type="text/css" href="https://portal.universidadedoingles.com.br/acesso/public/css/modal.css?v=20170224112734">
         <link rel="shortcut icon" href="4weeks.ico"/>
         <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
      
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/jquery.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/common.js"></script>
        <script type="text/javascript" src="https://portal.universidadedoingles.com.br/acesso/public/js/swfobject/swfobject.js"></script>

        <script src="https://portal.universidadedoingles.com.br/acesso/public/js/gravador/recordmp3.js?20170224112734"></script>

                <!-- begin olark code -->


   
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
    <video id="video" src="https://videos.universidadedoingles.com.br/agentes/videos/Ag_E1_P1.mp4" width="660" height="372"></video>
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

   </html>
