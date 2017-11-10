
<html> 
    <head>
              <title>Inglês em 4 semanas</title>
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
        <link rel="shortcut icon" href="4weeks.ico"/>
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

        <div class="row-fluid">
            <div class="span3">

                <div class="well sidebar-nav">
                    <div align="center"><?php echo '<img width="120" height="120" border="0" src="fotos/'. $_SESSION['usuarioFoto'] . '"/>';?></div>
                    <ul class="nav nav-list">

                        <li class="nav-header">Dados</li>
                        <li style="border-top: 2px white solid; margin-top: 0px; margin-bottom: 0px;">Nome: <?php echo "" . $_SESSION['usuarioNome']; ?></li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;">Email: <?php echo "" . $_SESSION['usuarioEmail']; ?></li>
                        <li style="border-top: 1px white solid; margin-top: 0px; margin-bottom: 0px;">Profissão: <?php echo "" . $_SESSION['usuarioProfissao']; ?></li><li class="nav-header">Progresso</li>
                        <li style="border-top: 2px white solid; margin-top: 0px; margin-bottom: 0px;"><div class="progress">
                                <div class="bar" style="color:#000;width: <?php echo "" . $_SESSION['usuarioProgresso']; ?>;%"><?php echo "" . $_SESSION['usuarioProgresso']; ?>%</div></li>
                 
                  </ul>
                </div><!--/.well -->
            </div><!--/span-->

            <div class="span8">



                <div class="hero-unit">
                    <div align="center"> <h3>Configurações de Conta</h3></div>
                    <br>
                    
                    <div class="row-fluid" align="center">
                        
                           
<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
switch (get_post_action('alteraNome', 'alteraSenha', 'alteraProfissao', 'altera', 'alteraTudo')) {
    case 'alteraNome':
        $sessaoID = $_SESSION['usuarioID'];
        global $_SG;


        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

        $Nnome = addslashes($_POST['nome']);

        $sql = "UPDATE contatos SET `nome` ='" . $Nnome . "' WHERE `id` = '" . $sessaoID . "' ";
        $query = mysql_query($sql);
        if ($query == true) {
            echo "Nome alterado com sucesso!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        } else {
            echo "Erro ao atualizar nome!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        }
        break;

    case 'alteraSenha':
        $sessaoID = $_SESSION['usuarioID'];
        global $_SG;


        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

        $Nsenha = addslashes($_POST['senha']);

        $sql = "UPDATE contatos SET `password` ='" . $Nsenha . "' WHERE `id` = '" . $sessaoID . "' ";
        $query = mysql_query($sql);
        if ($query == true) {
            echo "Senha alterada com sucesso!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        } else {
            echo "<br/>Erro ao atualizar senha!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        }
        break;

    case 'alteraProfissao':
        $sessaoID = $_SESSION['usuarioID'];
        global $_SG;


        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

        $Nprofissao = addslashes($_POST['profissao']);

        $sql = "UPDATE contatos SET `profissao` ='" . $Nprofissao . "' WHERE `id` = '" . $sessaoID . "' ";
        $query = mysql_query($sql);
        if ($query == true) {
            echo "Profissao alterada com sucesso!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        } else {
            echo "<br/>Erro ao atualizar profissao!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        }
        break;
    case 'altera':
        $tiposPermitidos = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
        $tamanhoPermitido = 2024 * 2024;


        $sessaoEmail = $_SESSION['usuarioEmail'];

// O nome original do arquivo no computador do usuário
        $arqName = $_FILES['foto']['name'];
        // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
        $arqType = $_FILES['foto']['type'];
        // O tamanho, em bytes, do arquivo
        $arqSize = $_FILES['foto']['size'];
        // O nome temporário do arquivo, como foi guardado no servidor
        $arqTemp = $_FILES['foto']['tmp_name'];
        // O código de erro associado a este upload de arquivo
        $arqError = $_FILES['foto']['error'];

        if ($arqError == 0) {
            // Verifica o tipo de arquivo enviado
            if (array_search($arqType, $tiposPermitidos) === false) {
                echo 'O tipo de arquivo enviado é inválido!';
                // Verifica o tamanho do arquivo enviado
            } else if ($arqSize > $tamanhoPermitido) {
                echo 'O tamanho do arquivo enviado é maior que o limite!';
                // Não houveram erros, move o arquivo
            } else {
                $arquivo = '/home/u445734061/public_html/fotos/' . $_SESSION['usuarioFoto'] . '';
                if($arquivo == '/home/u445734061/public_html/fotos/usuario.jpg')
                {
                  //  !unlink(arquivo);
                    
                    
                }
                if ($arquivo != '/home/u445734061/public_html/fotos/usuario.jpg'){
                    unlink($arquivo);
        
                } else {
                  //  echo ("Deletado $arquivo com sucesso!<br/>");
                }
            
                $pasta = '/home/u445734061/public_html/fotos/';
                // Pega a extensão do arquivo enviado
                $extensao = @strtolower(end(explode('.', $arqName)));
                // Define o novo nome do arquivo usando um UNIX TIMESTAMP
                $nome = time() . '.' . $extensao;

                // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
                $nomeMySQL = mysql_real_escape_string($_POST['nome']);

                $upload = move_uploaded_file($arqTemp, $pasta . $nome);

                // Verifica se o arquivo foi movido com sucesso
                if ($upload == true) {
                    // Cria uma query MySQL
                    $sql = "UPDATE contatos SET `foto` ='" . $nome . "' WHERE `email` = '" . $sessaoEmail . "' ";
                    // Executa a consulta
                    $query = mysql_query($sql);



                    if ($query == true) {
                        echo "Imagem alterada com sucesso!" . "<br/>";


                        echo "" . $_SESSION['usuarioNome'];
                    }
                }
            }
        } else {
            echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
        }
        break;
    case 'alteraTudo':
        //altera nome
        $sessaoID = $_SESSION['usuarioID'];
        global $_SG;


        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

        $Nnome = addslashes($_POST['nome']);

        $sql = "UPDATE contatos SET `nome` ='" . $Nnome . "' WHERE `id` = '" . $sessaoID . "' ";
        $queryn = mysql_query($sql);
        if ($queryn == true) {
            echo "Nome alterado com sucesso!" . "<br/>";
           
        } else {
            echo "Erro ao atualizar nome!" . "<br/>";
           
        }
//altera Senha

        $Nsenha = addslashes($_POST['senha']);

        $sql = "UPDATE contatos SET `password` ='" . $Nsenha . "' WHERE `id` = '" . $sessaoID . "' ";
        $querys = mysql_query($sql);
        if ($querys == true) {
            echo "Senha alterada com sucesso!" . "<br/>";
           
        } else {
            echo "<br/>Erro ao atualizar senha!" . "<br/>";
            echo "\n\n" . $_SESSION['usuarioNome'];
        }
//altera Profissao
     

        $Nprofissao = addslashes($_POST['profissao']);

        $sql = "UPDATE contatos SET `profissao` ='" . $Nprofissao . "' WHERE `id` = '" . $sessaoID . "' ";
        $queryp = mysql_query($sql);
        if ($queryp == true) {
            echo "Profissao alterada com sucesso!" . "<br/>";
        } else {
            echo "<br/>Erro ao atualizar profissao!" . "<br/>";
           
        }
//altera imagem
        $tiposPermitidos = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
        $tamanhoPermitido = 1024 * 1024;


        $sessaoEmail = $_SESSION['usuarioEmail'];

// O nome original do arquivo no computador do usuário
        $arqName = $_FILES['foto']['name'];
        // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
        $arqType = $_FILES['foto']['type'];
        // O tamanho, em bytes, do arquivo
        $arqSize = $_FILES['foto']['size'];
        // O nome temporário do arquivo, como foi guardado no servidor
        $arqTemp = $_FILES['foto']['tmp_name'];
        // O código de erro associado a este upload de arquivo
        $arqError = $_FILES['foto']['error'];

        if ($arqError == 0) {
            // Verifica o tipo de arquivo enviado
            if (array_search($arqType, $tiposPermitidos) === false) {
                echo 'O tipo de arquivo enviado é inválido!';
                // Verifica o tamanho do arquivo enviado
            } else if ($arqSize > $tamanhoPermitido) {
                echo 'O tamanho do arquivo enviado é maior que o limite!';
                // Não houveram erros, move o arquivo
            } else {
                $arquivo = 'http:/fourweeks.com.br/fotos/' . $_SESSION['usuarioFoto'] . '';
                if($arquivo == 'http:/fourweeks.com.br/fotos/usuario.jpg')
                {
                  //  !unlink(arquivo);
                    
                    
                }
                if ($arquivo != 'http:/fourweeks.com.br/fotos/usuario.jpg'){
                    @unlink($arquivo);
        
                }
                else {
                    //echo ("Deletado $arquivo com sucesso!<br/>");
                }

                $pasta = 'http://fourweeks.com.br/fotos/';
                // Pega a extensão do arquivo enviado
                $extensao = @strtolower(end(explode('.', $arqName)));
                // Define o novo nome do arquivo usando um UNIX TIMESTAMP
                $nome = time() . '.' . $extensao;

                // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
                $nomeMySQL = mysql_real_escape_string($_POST['nome']);

                $upload = @move_uploaded_file($arqTemp, $pasta . $nome);

                // Verifica se o arquivo foi movido com sucesso
                if ($upload == true) {
                    // Cria uma query MySQL
                    $sql = "UPDATE contatos SET `foto` ='" . $nome . "' WHERE `email` = '" . $sessaoEmail . "' ";
                    // Executa a consulta
                    $queryi = mysql_query($sql);



                    if ($queryi == true) {
                        echo "Imagem alterada com sucesso!" . "<br/>";


                        echo "\n\n" . $_SESSION['usuarioNome'];
                    }
                }
            }
        } else {
            echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
        }
        break;
    default:
    //no action sent
}

?>
                        <div align="center">  <form  action='remover.php'>
                        <button type="submit" class ="btn btn-primary">Atualizar sessão</button>
                        </form>
                            </div>
                    </div>
                    
                   

                </div>
            </div>
        </div><!--/span-->
    

    <hr class="featurette-divider">
    <footer>
        <p>© Company 2017 - 4Weeks</p>
    </footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/bootstrap.js" ></script> 
    <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
    <script type="text/javascript" src="js/js.js" ></script>  

        
  </body>
</html>


