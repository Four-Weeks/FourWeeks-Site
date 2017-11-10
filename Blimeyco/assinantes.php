<html>
    <head>
        <?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
        <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Cadastre-se já pode mudar a sua vida"/>
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
                     <img  src="img/blimeyco4_1.png" border="0"> 
                      <form name="FormLogin" class="navbar-form pull-right" action="Login" method="POST">
                <a href='configuracoes.php'>Configurações </a>
                <a href='remover.php'> Sair</a>
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
         
 </div>
        <div align="center"><h2 style="color:#eb8f00">Seja Premium na Blimeyco!</h2></div>
        <br>
        <div align="center"><iframe width="700" height="481" src="https://www.youtube.com/embed/On57sH22lUA?controls=0&autoplay=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
       <br>
        <div class="container masthead">
            <div align="center"><p style="font-size:18px;"><b>Adquira acompanhamento de professor particular com um dos botões abaixo:</b></p></div>
            <div class="row">
                <div class="span6" align="right">  
        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="B1ECD210EBEBF0FCC4910F9B8D93A5AD" />
<input type="image" src="img/comprar_pagseguro.png"  onmouseover="this.src = 'img/comprar_pag_escuro.png'" onmouseout="this.src = 'img/comprar_pagseguro.png'" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                
                </div>
                <div>     
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M6WGDX2ASUWRC">
<input type="image" src="img/comprar_paypal.png"  onmouseover="this.src = 'img/comprar_pay_escuro.png'" onmouseout="this.src = 'img/comprar_paypal.png'"  name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>

                    <br> 
                </div>
                
               
            </div>
    
    
    </div>
       <div style="background:#a9dba9">
            <div class="container">
                <h3 style="color:#fff">O que você ganha:</h3>
                <div class="row">
                    <div class="span3">

                        <div align="center"> <img src="img/gramma.png"></div> 
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b>Mais de 70 arquivos auto-explicativos sobre TODA A GRAMÁTICA INGLESA!</b></p></div>
                    </div>
                    <div class="span3">    

                        <div align="center"> <img src="img/audio.png"></div>
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b>Aprenda a cantar as SUAS MÚSICAS em INGLÊS com o treinamento da Blimeyco!</b></p></div>
                  
                    </div>
                    <div class="span3">    

                        <div align="center"> <img src="img/lessons.png"></div>
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b> A cada matéria gramatical absorvida você coloca em prática o que aprendeu</b></p></div>
                  
                    </div>
                    <div class="span3">    

                        <div align="center"> <img src="img/dialogues.png"></div>
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b>Aprenda a criar diálogos totalmente necessários para sobreviver em um país de LINGUA INGLESA</b></p></div>
                  
                    </div>
                </div>  
                <div align="center"><img src="img/mais_1.png"></div>
                <div class="row">
                    <div class="span6">

                        <div align="center"> <img src="img/acomp_profe.png"></div> 
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b>Acompanhamento individualizado com professor com 1h 30 de aula semanal</b></p></div>
                    </div>
                    <div class="span6">

                        <div align="center"> <img src="img/filme_serie.png"></div> 
                        <div align="center"><p style="color:#fff; font-size: 19px;"><b>Treinar a conversação com séries e filmes de sua preferência!</b></p></div>
                    </div>
                </div>
            </div>
           <br>
       </div>
       <br>
        <div class="container masthead">
            <div align="center"><p style="font-size:18px;"><b>Adquira acompanhamento de professor particular com um dos botões abaixo:</b></p></div>
            <div class="row">
                <div class="span6" align="right">  
        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="B1ECD210EBEBF0FCC4910F9B8D93A5AD" />
<input type="image" src="img/comprar_pagseguro.png"  onmouseover="this.src = 'img/comprar_pag_escuro.png'" onmouseout="this.src = 'img/comprar_pagseguro.png'" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                
                </div>
                <div>     
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M6WGDX2ASUWRC">
<input type="image" src="img/comprar_paypal.png"  onmouseover="this.src = 'img/comprar_pay_escuro.png'" onmouseout="this.src = 'img/comprar_paypal.png'"  name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>

                    <br> 
                </div>
                
               
            </div>
    
    
    </div>
       <div class="container">
        <div class="row">
            <div class="span6">
                <div align="center"><p style="font-size:18px;">Formas de pagamento:</p></div>
        <div align="center"><img src="img/cartoes_2.png"> </div>
            </div>
            <div class="span6">
        <div align="center"> 
             <p style="font-size:18px;">Redes Socias</p>
            <br>
            <a href="https://www.facebook.com/pages/Blimeyco/1394255050896413?skip_nax_wizard=true&ref_type=bookmark"> <img src="img/ico_face.png"></a>
            <a href="https://www.youtube.com/channel/UCWIr-n68F4eVUK5OYcR_BGQ"> <img src="img/ico_you.png"></a>
        </div>
            </div></div></div>
        <hr class="featurette-divider">          
        <p><b>© Company 2015 - Blimeyco - All rights reserved</b></p>
       
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script>
    </body>
</html>
