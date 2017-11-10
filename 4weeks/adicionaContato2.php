
<!doctype html>
<html lang="pt-br">
<head>
    <?php @require_once("seguranca.php");?>
    <meta charset="UTF-8" />
    <title>Blimeyco</title>
    <meta name="description" content="Aprenda inglês rápido e barato!">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi"/>
        
        <link href="css/estilo.css" rel="stylesheet"/>
        
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
    width: 300px;
    height: 500px;
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
        visibility: hidden;
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
        <img src="img/Dream-Life_1.jpg" alt="" />
    </div>
</div>
   
<div id="site" align="center">
    <img src="img/blimeyco4_1.png">
      <p class="lead" style="color:#003bb3"></p>
   


      <div align="center">    
          <h4>
 <?php 



$nome= $_POST['nome'];
$email= $_POST['email'];

$sql = "INSERT INTO `usuarios` ( `nome`, `email` ) VALUES ('".$nome."','".$email."' )";
$query = @mysql_query($sql);
if ($query == true) {
            echo"<br/>";
            echo"<br/>";
            echo"<img src='img/pessoas-felizes21.jpg' width='250'>"."<br/>";
            echo"<br/>";
            echo "Seja bem-vindo a Blimeyco!" . "<br/>";
            echo"<br/>";
            echo "Em breve você receberá no seu e-mail a serie de 4 videos que irão te mostrar as maiores Sacadas que as escolas não vão te contar"."<br/>";
            echo"<br/>";
            echo"<br/>";
            
        } else {
            echo "Ouve um erro, você não foi cadastrado!" . "<br/>";
            
        }
?> 
              </h4>    </div>                 
       <p><b>© Company 2015 - Blimeyco - All rights reserved</b></p>
   

</div>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>