
<!doctype html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8" />
    <title>Blimeyco</title>
    <meta name="description" content="Aprenda inglês rápido e barato!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     
        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi"/>
        
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="js/bootbox.min.js" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/blimeyco.ico"/>
    <style>
    body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, Tahoma, sans-serif;
}
 
#fundo-externo {
    overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
    width: 100%;
    height: 100%;
    position: relative; /* criamos um contexto para posicionamento */
}
 
#fundo {
    position: fixed; /* posição fixa para que a possível rolagem da tela não revele espaços em branco */
    width: 100%;
    height: 100%;
}
 
#fundo img {
    width: 100%; /* com isso imagem ocupará toda a largura da tela. Se colocarmos height: 100% também, a imagem irá distorcer */
    position: absolute;
}
 
#site {
    position: absolute;
    top: 70px;
    left: 50%;
    width: 560px;
    padding: 20px;
    margin-left: -300px; /* por causa do posicionamento absoluto temos que usar margem negativa para centralizar o site */
    background:#0480be; /* fundo branco para navegadores que não suportam rgba */
    background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
}
 
p {
    margin-bottom: 1.5em;
}
@media (max-width: 767px) {
   #fundo-externo {
    overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
    width: 400px;
    height: 600px;
    position: relative; /* criamos um contexto para posicionamento */
    margin-left:-20px;
    
}

 #site {
    position: absolute;
    top: 70px;
    left: 90%;
    width: 290px;
    height: 400px;
    padding: 20px;
    margin-left: -300px; /* por causa do posicionamento absoluto temos que usar margem negativa para centralizar o site */
    background:#0480be; /* fundo branco para navegadores que não suportam rgba */
    background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
}
#fundo img {
    width: 400px;
    height: 1100px;/* com isso imagem ocupará toda a largura da tela. Se colocarmos height: 100% também, a imagem irá distorcer */
    position: absolute;
}
p{
    color:#1b1b1b;
}
iframe{
                    width:300px;
                    height: 200px;
                    
                }
            
                div>p> b{
                    color:black;
                }
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 
</head>
<body>

<div id="fundo-externo">
    <div id="fundo">
        <img src="img/turismo-em-nova-iorque.jpg" alt="" />
    </div>
</div>
   
<div id="site" align="center">
    <iframe width="420" height="315" src="https://www.youtube.com/embed/JsxlIYY7op4?controls=0&autoplay=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
    <p class="lead" style="color:#003bb3">Descubra como a maior COMUNIDADE DE PROFESSORES E ALUNOS DO BRASIL
      tem feito para milhares de Brasileiros falar inglês através de 4 videos!</p>
      <br>
      <p class="lead" style="color:#1a1a1a"><b>Além de receber as MAIORES SACADAS que irão aperfeiçoar o seu inglês!</b></p>


                        <form action="adicionaContato2.php" method="POST">
                            <input class="span4"  type="text" name="nome" placeholder="Nome"/><br/>
                            <input class="span4"   type="text" name="email" placeholder="E-mail"/><br/>
                            
                            <button class="btn btn-large btn-primary" type="submit">Cadastre-se</button>

                        </form>
       <p><b>© Company 2015 - Blimeyco - All rights reserved</b></p>


</div>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>