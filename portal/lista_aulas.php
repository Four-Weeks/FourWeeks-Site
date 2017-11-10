
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


           

        </div>
        
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
                    <h3>Veja suas aulas do curso</h3>
                   
                          
                    <br>

                    <div class="content list" style="background:white;"> 
                        
                       <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#tab1" style="color:#002a80" data-toggle="tab">Episódio 1</a></li>
                            <li role="presentation" class=""><a href="#tab2" style="color:#002a80" data-toggle="tab">Episódio 2</a></li>
                            <li role="presentation" class=""><a href="#tab3" style="color:#002a80" data-toggle="tab">Episódio 3</a></li>
                            <li role="presentation" class=""><a href="#tab4" style="color:#002a80" data-toggle="tab">Episódio 4</a></li>
                            <li role="presentation" class=""><a href="#tab5" style="color:#002a80" data-toggle="tab">Episódio 5</a></li>
                            <li role="presentation" class=""><a href="#tab6" style="color:#002a80" data-toggle="tab">Episódio 6</a></li>
                            
                        </ul>
                    </div>
<div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                
                                    
                                <h4>Aula 1</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6">  
                                        <a href="Filme_ep_1_aula1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</a>
                                        </div>
                                        <div class="span6">  
                                            <?php 
                                            $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=0.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                  



 
                                            ?>
                                          
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                         <div class="row">
                                         <div class="span6">  

                                        <a href="Filme_ep_1_aula1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>

                                        </div>
                                        <div class="span6">  
                                         <?php 

                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=0.44)
                                                
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>

                                        </div>

                                        </div>



                                    </div>
                                    <div style="margin-left:20px;">

                                         <div class="row">
                                         <div class="span6">  

                                        <a href="Filme_ep_1_aula1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
</div>
                                        <div class="span6">  
                                        
                                             <?php 
                                                

$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=0.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>

                                        </div>

                                        </div>


                                    </div>
                                    

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6">  

                                        <a href="Filme_ep_1_aula1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>

                                            </div>
                                        <div class="span6">  
                                           <?php 
$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=0.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>




                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6">  

                                        <a href="Filme_ep_1_aula1_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                                                                    </div>
                                        <div class="span6">  
                                         <?php 


                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=1.1)
 
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6">  

                                        <a href="Filme_ep_1_aula1_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                                             </div>
                                        <div class="span6">  
                                         <?php 


                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=1.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>

                                                             </div>
                                        <div class="span6">  
                                          <?php 


                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=1.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">
                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula1_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>

                                                             </div>
                                        <div class="span6">  
                                           <?php 


                                           $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=1.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
                                          <?php 


                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=1.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
                                          <?php 

                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=2.2)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
                                          <?php 

                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=2.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
                                         <?php 
                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=2.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>


                                    </div>

                                </div>
                                
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>

                                             </div>
                                        <div class="span6">  
                                         <?php 
                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=2.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                          </div>
                                        <div class="span6">  
                                           <?php 

                                           $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=3.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                         </div>
                                        <div class="span6">  
                                        <?php 

                                        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=3.3)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>


                                    </div>
                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula1_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                         </div>
                                        <div class="span6">  
                                           <?php

                                            $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=3.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula1_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>

                                        </div>
                                        <div class="span6">  
                                          <?php 
                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=3.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>



                                    </div>
                                    

                                </div>
                                <h4>Aula 2</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                         </div>
                                        <div class="span6">  
                                         <?php 

                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=3.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">
                                        
                                         <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                        </div>
                                        <div class="span6">  
                                         <?php 
                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=4.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    <div style="margin-left:20px;">
                                        
                                         <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                        </div>
                                        <div class="span6">  
                                          <?php 
                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=4.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                         <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                        </div>
                                        <div class="span6">  
                                         <?php 

                                         $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=4.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                 <div style="margin-left:20px;">
                                    <div class="row">
                                         <div class="span6"> 

                                    <a href="Filme_ep_1_aula2_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                    </div>
                                        <div class="span6">  
                                     <?php 
                                     $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=4.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                </div>
                                    <div style="margin-left:20px;">
                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                        </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=5.06)                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    <div style="margin-left:20px;">
                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                         </div>
                                        <div class="span6">  
                                          <?php 

                                          $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=5.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    <div style="margin-left:20px;">
                                        <div class="row">
                                         <div class="span6"> 
                                        <a href="Filme_ep_1_aula2_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                        </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=5.5)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=5.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=5.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=6.16)

                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=6.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>







                                    </div>
                                    


                                 
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                              <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=6.6)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 


 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=6.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=7.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=7.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>



                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula2_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=7.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    
                                </div>   

                                <h4>Aula 3</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                   
                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=7.7)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=7.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=8.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=8.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=8.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 


 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=8.8)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=9.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=9.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>
                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=9.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=9.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=9.9)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=10.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    


                                     </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 


 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=10.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=10.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=10.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=11)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula3_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=11.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    </div> 

                                    <h4>Aula 4</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=11.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=11.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=11.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=12.1)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=12.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=12.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=12.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=12.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                  


                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula4_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=13.2)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                </div>
                                
                                <h4>Aula 5</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=13.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=13.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=13.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=14.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 


 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=14.3)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=14.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 


 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=14.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=14.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=15.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=15.4)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=15.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=15.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=16.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_1_aula5_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=16.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane " id="tab2">

                                <h4>Aula 6</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=16.5)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=16.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=16.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=17.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=17.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=17.6)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=17.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=18.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                   
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=18.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=18.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=18.7)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=18.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>




                                </div>
                                
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=19.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=19.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=19.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=19.8)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>



                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula6_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=20.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                    

                                </div>
                                <h4>Aula 7</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=20.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=20.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=20.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=20.9)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=21.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=21.34)                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=21.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=21.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=22.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=22.44)

                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=22.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>



                                 </div>
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=22.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=23.1)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=23.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=23.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula7_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=23.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>
                                </div>   

                                <h4>Aula 8</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=23.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=24.2)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=24.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=24.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>
                                    </div>

                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=24.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=25.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=25.3)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=25.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>






                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=25.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=25.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=26.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=26.4)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>




                                     </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=26.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=26.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=27.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=27.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>


                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula8_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=27.5)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                    </div>   
                                    <h4>Aula 9</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=27.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=27.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=28.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=28.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=28.6)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=28.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=29.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=29.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula9_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=29.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                
                                <h4>Aula 10</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=29.7)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=29.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=30.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=30.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=30.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=30.8)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=31.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=31.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=31.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=31.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=31.9)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 

 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=32.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=32.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_2_aula10_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php 
 $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=32.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                               
                            </div>
                            <div class="tab-pane" id="tab3">
                                 
                                <h4>Aula 11</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                            <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=32.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=33)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=33.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=33.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=33.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>




                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=33.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=34.1)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=34.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=34.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=34.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=34.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=35.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                </div>
                                
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=35.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=35.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=35.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=36.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                       <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula11_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=36.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <h4>Aula 12</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=36.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=36.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                             <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=36.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=37.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>




                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                                                              <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=37.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=37.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=37.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=38.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=38.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=38.50)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=38.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=38.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                 </div>
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=39.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=39.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=39.60)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=39.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula12_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=40.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>   

                                <h4>Aula 13</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=40.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=40.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=40.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=40.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                                                          <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=41.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=41.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=41.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=41.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=42.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=42.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=42.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=42.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                       <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=42.90)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=43.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=43.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=43.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula13_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=43.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    </div>   
                                    <h4>Aula 14</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=44.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=44.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=44.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=44.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=45.10)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=45.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=45.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>


                                    
<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula14_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=45.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <h4>Aula 15</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>


<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                          
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=45.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=46.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=46.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                               <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=46.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=46.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=47.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=47.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=47.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=47.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                       <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=47.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=48.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=48.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                      <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=48.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


   <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_3_aula15_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=48.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane" id="tab4">


                                <h4>Aula 16</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                       <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=49.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=49.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=49.50)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=49.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=49.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=50.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=50.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=50.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=50.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=51.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=51.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>


                                        <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=51.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    </div>
                                
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>
<div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=51.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=51.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=52.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                 
                                   
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula16_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=52.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <h4>Aula 17</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                  <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=52.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=52.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=53.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=53.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                 <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=53.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=53.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div> <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=53.90)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                         <div style="margin-left:20px;">

                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=54.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>
 <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=54.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=54.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=54.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=55)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                 </div>
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=55.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=55.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


 <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=55.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                     

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula17_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=55.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>   

                                <h4>Aula 18</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=56.10)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=56.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=56.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=56.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=56.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=57.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=57.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=57.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=57.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                      <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=58.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                      <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=58.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                      <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=58.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                     </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=58.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=58.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=59.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=59.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula18_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=59.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    </div>   
                                    <h4>Aula 19</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                  <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=60.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=60.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=60.50)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=60.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=60.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=61.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=61.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>





                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula19_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=61.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                
                                <h4>Aula 20</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>



                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=62.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=62.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=62.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=62.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=62.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=63.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=63.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=63.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=63.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=64.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=64.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=64.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=64.90)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_4_aula20_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=65.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>





                                </div>

                                
                            </div>
                            <div class="tab-pane" id="tab5">

                                    <h4>Aula 21</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=65.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic1_part12.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=65.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=65.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>





                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=66.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=66.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=66.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=66.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=67.10)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=67.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=67.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=67.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=67.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=68.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=68.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=68.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>




                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula21_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=68.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <h4>Aula 22</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=69.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=69.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=69.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=69.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=69.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=70.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=70.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=70.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>






                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=70.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=71.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=71.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=71.5)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                 </div>
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=71.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=71.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=72.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=72.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula22_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=72.60)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>   

                                <h4>Aula 23</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=72.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=73.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=73.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=73.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=73.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=73.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=74.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=74.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    
                                         <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=74.8)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=75.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=75.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);


                                                if($resultado['progresso']>=75.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>





                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=75.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=75.90)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=76.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=76.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula23_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=76.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    </div>   
                                    <h4>Aula 24</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=76.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=77)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=77.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=77.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>


                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=77.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=77.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=78.10)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=78.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula24_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=78.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <h4>Aula 25</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>



                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=78.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=78.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=79.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=79.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=79.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=79.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=80.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=80.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=80.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=80.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=80.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=81.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>




                                 </div>
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=81.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_5_aula25_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=81.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>
                                
                            </div>
                            <div class="tab-pane" id="tab6">

                                  <h4>Aula 26</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=81.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=82.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=82.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=82.50)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=82.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=82.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=83.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=83.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 3</h5>

<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=83.60)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=83.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                            <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=84.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=84.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                   
                                </div>
                                
                                <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=84.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=84.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=84.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=85.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                   
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 5</h5>
 

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula26_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=85.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>
                                <h4>Aula 27</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=85.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=85.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=86.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=86.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=86.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=86.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=86.90)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=87.12)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=87.34)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=87.56)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=87.78)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                 </div>
                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=88.22)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=88.44)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=88.66)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=88.88)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                 <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                      <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula27_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=89.1)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                </div>   

                                <h4>Aula 28</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=89.32)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=89.54)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=89.76)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=89.98)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    </div>
                                   <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=90.20)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=90.42)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=90.64)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=90.86)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     </div>
                                    <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=91.08)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=91.30)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=91.52)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


<div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=91.74)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>





                                     </div>
                                   <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>




                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=91.96)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=92.18)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic4_part3.php" style="color:#002a80"><p>Lição 4 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=92.40)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic4_part4.php" style="color:#002a80"><p>Lição 4 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=92.62)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    </div>
                                    <div style="margin-left:20px;"> <h5>Lição 5</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula28_lic5_part1.php" style="color:#002a80"><p>Lição 5 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=92.84)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    </div>   
                                    <h4>Aula 29</h4>
                                <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=93.06)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=93.28)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=93.50)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=93.72)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>


                                   <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=93.94)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=94.16)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=94.38)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=94.60)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                 </div>
                               <div style="margin-left:20px;"> <h5>Lição 3</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula29_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=94.82)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                                <h4>Aula 30</h4>
                               <div style="margin-left:20px;"> <h5>Lição 1</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic1_part1.php" style="color:#002a80"><p>Lição 1 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=95.04)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic1_part2.php" style="color:#002a80"><p>Lição 1 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=95.26)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic1_part3.php" style="color:#002a80"><p>Lição 1 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=95.48)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic1_part4.php" style="color:#002a80"><p>Lição 1 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=95.70)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                   
                                </div>
                                <div style="margin-left:20px;"> <h5>Lição 2</h5>

                                     <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic2_part1.php" style="color:#002a80"><p>Lição 2 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=95.92)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic2_part2.php" style="color:#002a80"><p>Lição 2 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=96.14)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic2_part3.php" style="color:#002a80"><p>Lição 2 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=96.36)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                       <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic2_part4.php" style="color:#002a80"><p>Lição 2 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=96.58)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>



                                </div>


                                <div style="margin-left:20px;"> <h5>Lição 3</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic3_part1.php" style="color:#002a80"><p>Lição 3 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=96.80)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic3_part2.php" style="color:#002a80"><p>Lição 3 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=97.02)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic3_part3.php" style="color:#002a80"><p>Lição 3 - Parte 3</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=97.24)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic3_part4.php" style="color:#002a80"><p>Lição 3 - Parte 4</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=97.46)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>

                                 <div style="margin-left:20px;"> <h5>Lição 4</h5>


                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic4_part1.php" style="color:#002a80"><p>Lição 4 - Parte 1</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=97.68)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>

                                    <div style="margin-left:20px;">


                                        <div class="row">
                                         <div class="span6"> 

                                        <a href="Filme_ep_6_aula30_lic4_part2.php" style="color:#002a80"><p>Lição 4 - Parte 2</p></a>
                                            </div>
                                        <div class="span6">  
 <?php $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

                                         $sql = "SELECT `progresso` FROM `contatos` WHERE ".$cS." `id` = '".$_SESSION['usuarioID']."' LIMIT 1";
                                            $query = mysql_query($sql);
                                        $resultado = mysql_fetch_assoc($query);



                                                if($resultado['progresso']>=100)
                                                    echo "<font color='blue'><b>Concluído</b></font>";
                                                
                                                else
                                                    echo"<font color='green'>Disponível</font>";
                                            ?>
                                        </div>

                                        </div>

                                    </div>


                                </div>



                              
        

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script> 
        <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
        <script type="text/javascript" src="js/js.js" ></script>  

    </body>
</html>
