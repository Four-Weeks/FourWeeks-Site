<html>
    <head>
        <?php @require_once("seguranca.php");?>
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
    <script type="text/javascript">
        function validarLogin(){
          if(document.FormLogin.login.value=="") {
              alert("Campo Usuário Não Informado");
              return false;
          } 
         else if(document.FormLogin.senha.value=="") {
              alert("Campo Senha não informado");
              return false;
          } 
          document.Formlogin.submit();
        }
    </script>
    <script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6027484932718', {'value':'0.00','currency':'BRL'}]);
</script>
<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6027484932718&amp;cd[value]=0.00&amp;cd[currency]=BRL&amp;noscript=1" /></noscript>
  
    </head>
    <body>
          <div class="menu cor1">
                     <img  src="img/blimeyco4_1.png" border="0"> 
                     
                     <form   class="navbar-form pull-right" action="valida.php" method="POST" >
                         <a href='cadastro.php'>Faça seu cadastro</a>
                         <input class="span2" style="padding: 14px 6px; " type="text" name="usuario" placeholder="Email">
                         <input class="span2"  style="padding: 14px 6px; " type="password" name="senha" placeholder="Password">
                         <button type="submit" class ="btn btn-primary" onclick="validarLogin()" >log in</button>
                  </form> 
                 
       <ul class= "nav">
                <li><a href='index.php'>Home</a></li>
                <li><a href='sobre.php'>Sobre Nós</a></li>
                <li><a href='contatos.php'>Contatos</a>
               <!-- <li class="dropdown"><a href='index.php' class="dropdown-toggle" data-toggle="dropdown">Materiais<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href='index.php'>Dicas</a></li>
                        <li><a href='index.php'>Vídeos</a></li>
                        <li><a href='index.php'>Gramática</a></li>
                        <li><a href='index.php'>Tudo sobre conversação></a></li>
                    </ul>
                </li>-->
            </ul>
         
 </div>
        <div class="container masthead">
    <h1>Cadastre-se</h1>
   <div class="row">
       <div class="span6">
       
        <p class="lead">Esse é o caminho que pode mudar sua vida!</p>
        <p style="font-size:19px;"> 
          <?php



$nome=$_POST['nome'];
$email=$_POST['email'];
$profissao=$_POST['profissao'];

$sql = "INSERT INTO `usuarios` ( `nome`, `email` ,`profissao`) VALUES ('".$nome."','".$email."','".$profissao."' )";

$query = @mysql_query($sql);
        if ($query == true) {
            echo"<br/>";
            echo"<br/>";
            echo "Seja bem-vindo!" . "<br/>";
            echo "Now is just wait to receive knowlegde!( Agora é só aguardar para receber conhecimento!)";
            
        } else {
            echo "Não inserido" . "<br/>";
            
        }
        
        ?>  
        </p>
       
        </div>
            <div class="span6">    
          <img  src="img/Dream-Life.jpg" border="0">   
            </div>
     </div>        
    </div>
       <hr class="featurette-divider">
      <footer>
        <p>© Company 2015 - Blimeyco</p>
      </footer>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script>
    </body>
</html>
