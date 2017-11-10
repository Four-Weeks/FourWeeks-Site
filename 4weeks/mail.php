
<html> 
    <head>
              <title>Inglês em 4 semanas </title>
              <?php include("seguranca.php");
              
              protegePagina(); // Chama a função que protege a página
              ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Configurações"/>
        <meta name="author" content=""/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/4weeks.ico"/>
        <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" media="all">
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
            <img  src="img/icon4weeks.png" border="0"> 

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

        </div>
        <div class="container masthead">
              </div>

        <div class="row-fluid">
            <div class="span3">

                <div class="well sidebar-nav">
                    <div align="center"><?php echo '<img width="120" height="120" border="0" src="fotos/'. $_SESSION['usuarioFoto'] . '"/>';?></div>
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
                    <div align="center"> <h3>Situação de Atividade</h3></div>
                    <br>
                    
                    <div class="row-fluid" align="center">
                        
                           
<?php
$emailUsuario = $_SESSION['usuarioEmail'] ;
$nome = $_SESSION['usuarioNome'];
$email = 'suporte@fourweeks.esy.es';
$assunto= 'Lição Fourweeks(Resposta)';
$mensagem = $_POST['msg'];
$form= $_POST['b1'];


$email_remetente = "suporte@fourweeks.esy.es";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=utf-8\n"; // ou UTF-8, como queira
$headers .= "From: $email_remetente\n"; // remetente
$headers .= "Return-Path: $email_remetente\n"; // return-path
$envio = @mail("$emailUsuario", "$assunto", "$mensagem", $headers, "-f$email_remetente");

 
if($envio){
    echo 'Lição enviada para seu e-mail com sucesso!<br/>';
    AvancaProgresso();
  
    
}
else{
    echo 'Problemas ao enviar lição, tente mais tarde!';
}
function AvancaProgresso(){
   // $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

 $sql = "SELECT `progresso` FROM `contatos` WHERE  `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
    $query = mysql_query($sql);
    $resultado = mysql_fetch_assoc($query);
    $momento = $_SESSION['usuarioMomento'];
    $licao =$_resultado['usuarioLicao'];
    $sessaoID2 = $_SESSION['usuarioID'];
    $progresso = $resultado['progresso'];
    $form = $_POST['b1'];
    //colocar em ordem e não poder fazer uma lição qualquer.
    if(($form<= 100)&&($licao!= $form)){
        
        //if($form > (licao +2))
        if($form < $licao)// se licao enviada for maior de 2 na lição da sessão não permitir
        {
           echo 'lição já foi enviada';
        }
     else if(($form >($licao + 0.22))) {
         echo 'Lição ainda bloqueada!';
         
     }  
        //se o valor enviado da liçao     
    else{    
    $progresso2 = $progresso + 0.22;
    
    // if($licao == $form) essa lição já foi enviada
  
   if($progresso2 > $progresso) {
    $sql = "UPDATE contatos SET `progresso` ='" . $progresso2 . "' WHERE `id` = '" . $sessaoID2 . "' ";
    
    $query = mysql_query($sql);
    $licao2 = $licao + 0.22;
  //se o nome do botão for de 1 a 20 = 0,
  $sql2 = "UPDATE contatos SET `licao` ='" . $licao2 . "' WHERE `id` = '" . $sessaoID2 . "' ";
  $query2 = mysql_query($sql2);
   }
    } }
   else{
       echo "Você não subiu de nível.";
   }
  
  if($licao==$form){
      echo '<br/>Essa lição já foi enviada =(';
  }

}
?>
                        <div align="center">  <form  action='lista_aulas.php'>
                            <p>Avance para a próxima parte da lição.</p>
                        <button type="submit" class ="btn btn-primary">Continuar Lição</button>
                       </form>
                            </div>
                    </div>
                    
                   

                </div>
            </div>
        </div><!--/span-->
    

    <hr class="featurette-divider">
    <footer>
        <p>© Company 2016 - Fourweeks</p>
    </footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/bootstrap.js" ></script> 
    <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
    <script type="text/javascript" src="js/js.js" ></script>  

        
  </body>
</html>







