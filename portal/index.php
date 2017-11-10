<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>4 weeks</title>
 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="user-scalable=no, initial-scale=1,maximum-scale=1, minimum-scale=1, width=device-width,height=device-height,target-densitydpi=device-dpi"/>
        <link href="css/estilo.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>


        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>

        <link rel="shortcut icon" href="4weeks.ico"/>
        
        
        
         
       
        <style>
.fundo{
    background-color:#000066;
}
        </style>
       
        
    </head>
    <body class="fundo">




   
        <br><br>
        <div class="container" align="center">
        
           
        

            <div class="fundo2">
                <br>
            <img src="img/4weeks.png" style="width:100px;" alt="">
            <br><br><br>
            
            <h5>Faça seu Login:</h5>
            
            <form action="valida.php" method="POST">
                
               <div class="col-xs-7">
                <input  class="form-control" type="text" name="usuario" placeholder="login" required=""/><br/>
                <input   class="form-control" type="password" name="senha" placeholder="password" required=""/><br/>
                <br>
                <button class="b1" id="btnEnviar" type="submit" onclick="valida();">&nbsp;Login&nbsp;</button>
                
              <p><b>© Company 2017 - 4weeks - All rights reserved</b></p>
               </div>
                
                
            </form>
            
            
            </div>


        </div>

    </body>
</html>
