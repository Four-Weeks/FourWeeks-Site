
<html lang="pt-BR">
    <head>
        <title>Blimeyco </title>
        
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="description" content="CuRSO bOOTSTRAP"/>
        <meta name="author" content=""/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/blimeyco.ico"/>
  
        <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */
.bordaAzul{

border-top-width: 2px;

border-top-style: solid;

border-top-color: #002a80;

}
    .hero-unit{
        
    background:#0480be; /* fundo branco para navegadores que não suportam rgba */
    background: rgba(255,255,255,0.8);
    }
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
#table{
    
    
 background: #f5f5f5

    }
    </style>

    </head>
  <body>
      
          
      <br>
      <div class="container">
      <div class="hero-unit">
          <h4>Consulta</h4>
          <div class="bordaAzul"></div>
          <button class=" btn btn-primary"  onclick="window.location.href = 'busca.php';">Buscar</button>
          <button class=" btn btn-primary"  onclick="window.location.href = 'main.php';">Voltar</button>
          <button class=" btn btn-primary"  onclick="window.location.href = 'remover2.php';">Sair</button>
          <div class="content"> 
                                        <div class ="list">
<?php
include("seguranca.php");
protegePagina2(); // Chama a função que protege a página

$_SG['tabela'] = 'usuarios';
$sql = "SELECT `id`, `nome`,`profissao`,`email` FROM `".$_SG['tabela']."` ";
  

  // Verifica se encontrou algum registro
  $rs = mysql_query($sql);
	
$num_fields = mysql_num_fields($rs);//Obtém o número de campos do resultado

for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
	$fields[] = mysql_field_name($rs,$i);
}

//Montando o cabeçalho da tabela
$table = '<table align="center" width="40%" border="2" cellspacing="10px" cellpadding="4px"> Tabela<tr>';

for($i = 0;$i < $num_fields; $i++){
	$table .= '<th>'.$fields[$i].'</th>';
}

//Montando o corpo da tabela
$table .= '<tbody>';
while($r = mysql_fetch_array($rs)){
	$table .= '<tr>';
	for($i = 0;$i < $num_fields; $i++){
		$table .= '<td>'.$r[$fields[$i]].'</td>';
	}
	$table .= '</tr>';
}

//Finalizando a tabela
$table .= '</tbody></table>';

//Imprimindo a tabela
echo $table;

?>
                                        </div></div>
      </div> 
      </div>     
        
      <div align="center"> 
             <p style="font-size:18px;">Redes Socias</p>
            <br>
            <a href="https://www.facebook.com/pages/Blimeyco/1394255050896413?skip_nax_wizard=true&ref_type=bookmark"> <img src="img/ico_face.png"></a>
            <a href="https://www.youtube.com/channel/UCWIr-n68F4eVUK5OYcR_BGQ"> <img src="img/ico_you.png"></a>
        </div>
            
        <hr class="featurette-divider">          
        <p><b>© Company 2015 - Blimeyco - All rights reserved</b></p>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script> 
      <script type="text/javascript" src="js/jquery-1.11.2.min.js" ></script> 
      <script type="text/javascript" src="js/js.js" ></script>  
      
  </body>
</html>
