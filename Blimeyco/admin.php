
<!doctype html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8" />
    <title>Inglês em 4 semanas</title>
    <meta name="description" content="Aprenda inglês rápido e barato!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     
        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi"/>
        
        <link href="css/estilo.css" rel="stylesheet"/>
        
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/4weeks.ico"/>
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
    top: 100px;
    left: 52%;
    width: 500px;
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
    width: 100%;
    margin-left:-20px;
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
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
        //Javascript (em um site real colocar em arquivo externo)
    </script>
</head>
<body>
 
<div id="fundo-externo">
    <div id="fundo">
        <img src="img/fundo.png" alt="" />
    </div>
</div>
   
<div id="site" align="center">
    <img src="img/blimeyco4_1.png">
    <h5>Faça seu Login:</h5>
    <form action="valida2.php" method="POST">
                            <input class="span4"  type="text" name="usuario" placeholder="login"/><br/>
                            <input class="span4"   type="password" name="senha" placeholder="password"/><br/>
                            
                            <button class="btn  btn-primary" type="submit">Login</button>

                        </form>
       <p><b>© Company 2015 - Blimeyco - All rights reserved</b></p>


</div>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>