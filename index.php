<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter clone</title>
        <!-- jquery - link cdn -->
        <script scr="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="css/index.css" />
       
            
    </head>
       
    <body>
       
        <nav class = "navbar navbar-default navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon bar"></span>
                 <span class="icon bar"></span>
                 <span class="icon bar"></span>
                </button>
                <img scr="imagens/icone_twitter.png"/>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="inscrevase.php">Inscrever-se</a></li>
                <li class="">
                <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspoup="true"
                 aria-expanded="dalse">Entrar</a>
                <ul class="dropsown-menu" aria-labelledby="entrar">
                <div class="col-md-12">
                <p> Você possui uma conta?</p>
                <br />
                     </div>
                <form method="post" action="" id="formLogin">               
                <div class="from-group">
                <input type="texte" class="form-control red" id="campo_usuario" name="usuario" placeholder="Usuário" />
                </div> 
                <div class="form-group">
                <input type="buttom" class="form-control red" id="campo_senha" name="senha" placeholder="Senha"/>
                     </div>
                      <button type="button" class="btn btn-primary" id="btn_login">Entrar</button> 
                    </form>

                          
                <br/><br />
              </ul>
                </li>
                </ul>
                </div>
                </div> 
                
            
                </nav>
               
                
                
                <div class="container">
                <div class="jumbtorn">
                <h1>Bem vinto ao twitter clone</h1>
                <p>Veja o que está acontecendo agora...</p>
                </div>
                <div class="clearfix"></div>
                </div>
                
                </div>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
       
    </body>
</html>
