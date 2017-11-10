<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina3(); // Chama a função que protege a página
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blimeyco</title>
        <meta name="description" content="Aprenda inglês rápido e barato!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     
        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi"/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap-modal.css" rel="stylesheet"/>
        <link href="css/bootstrap-modal-bs3patch.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/blimeyco.ico"/>
       
        <style>
               a:link{
        text-decoration:none;
    }
            .span1{
                
                margin-top:17px;
                height:70px;
            }
            row:hover{
                background:#006dcc;
            }
            .span3{
                margin-top:17px;
                
            }
            .well2{
                background:#B8C8BF;
                width: 970px;
                height: 350px;
            }
            .bordaBranca{

border-top-width: 1px;

border-top-style: solid;

border-top-color: #fff;

}
            .margright{
                margin-top: -20px;
                
            }
            .marg{
               
                margin-left: 150px;
                
            }
            .margleft{
                margin-top:-5px;
                margin-left: 700px;
            }
            
            .margleft{
                margin-top:-4px;
                margin-left: 150px;
            }
            .center{
                margin-left: 100px;
            }
            .right{
                
                margin-left:650px;
                
            }
            .bordaAzul{

border-top-width: 2px;

border-top-style: solid;

border-top-color: #002a80;

}
          
            .navbar-form{
                position:relative;
                margin-left: 220px;
                margin-top: -12px;
            }
            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-bottom: 40px;
                color: #5a5a5a;
                background-color:#fff;
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
               .center{
                margin-left: 50px;
            }
                 .right{
                    
                    padding-left: 130px;
                }
                .dropdown-menu{
                    margin-left: -140px;
                    
                }
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
                    font-size: 13px;
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
                    font-size: 40px;
                }

                .masthead p {
                    font-size: 20px;
                    font-weight: 200;
                    line-height: 1.25;
                }
                .menu .nav> li> a{
                  padding:3px 20px;
                  margin-left:-100px;   
                  
                }
                .nav{
                    margin-left:8px;
                }
                .nav > li > a{
                  margin-right: 17px;
                }
          
                
                .navbar-form{
                visibility: hidden;
                margin-top: -80px;
                margin-left: -300px;
              }
               .left2{
                    margin-left: -22px;
                    width: 400px;
            }
            .left3{
                    margin-left: -20px;
                    width: 355px;
            }
            }
         

        </style>
        
      
        
    </head>
    <body>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>

        <script src="js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"  ></script>
        <script src="js/bootbox.min.js" type="text/javascript"></script>
        
        <div class="menu" style="background:#002a80">
            <div class="marg">
                
                <img  src="img/blimeyco4_1.png" width="150">
                
            </div>
            <ul class="nav margleft">
                <li> <h5 style="color:#fff"><i>#ingles12meses</i></h5></li> 
                
            </ul>
             <ul class="nav right">
             
                 <li style="color:#fff" class="margright"><b>VIDEO 3 | SUAS PERGUNTAS RESPONDIDAS</b></li>
                
            </ul>
             
        </div>
         <br>
         <div class="well2 container">
         <div class="row">
             <div class="span6">
        <iframe src="https://www.youtube.com/embed/Z2hW4U-W6-0" width="600" height="350" frameborder="0"></iframe>
             </div>
             <div class="span4" style="color:#fff">
                
                     
                 <div class="row">
                     <div class="span1">
                         <div><img src="img/blimeyco2.png" width="100"></div>
                     </div>
                     <div class="span3">
                         <h4><a href="lance.php"><font color="yellow">1.</font>O que é a blimeyco?</a></h4>
                         
                     </div>
                     
                 </div>
                 <div class="bordaBranca"></div>
                     <div class="row">
                     <div class="span1">
                         <div align="center">DISPONÍVEL EM 5/05/2015</div>
                     </div>
                     <div class="span3">
                         <h4><a href="lance2.php"><font color="yellow"> 2.</font>Como falar inglês em um curto espaço de tempo?</a></h4>
                   
                         
                     </div>
                     
                 </div>
                 <div class="bordaBranca"></div>    
                         <div class="row">
                     <div class="span1">
                         <div align="center">DISPONÍVEL EM 8/05/2015</div>
                     </div>
                     <div class="span3">
                         <h4><a href="lance3.php"><font color="yellow"> 3.</font>Suas perguntas Respondidas</a></h4>
                     </div>
                     
                 </div>
                 <div class="bordaBranca"></div>  
                 <div class="row">
                     <div class="span1">
                        <div align="center">DISPONÍVEL EM 10/05/2015</div>
                     </div>
                     <div class="span3">
                         <h4><a href="lance4.php"><font color="yellow">4.</font>Inscrição</a></h4>
                     </div>
                     
                 </div>
                 <div class="bordaBranca"></div>         
                         
                        
                         
                         
                         
                     
                 </div>
                 
             
             </div>
            
         </div>
    </body>
</html>
