<?php $link = mysql_connect('localhost', 'root', 'root'); ?><!DOCTYPE html>
<html lang="pt-br">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso de Responsive Web Design | UX.BLOG</title>
        <meta name="description" content="Você vai aprender a criar sites com layouts e conteúdos flexíveis e adaptáveis a uma ampla variedade de resoluções de tela e dispositivos.">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="rmm-css/responsivemobilemenu.css" type="text/css"/>

        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="rmm-js/responsivemobilemenu.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/responsive-nav.js"></script>
        <script src="js/picturefill.js"></script>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
       
        <noscript>
            <link rel="stylesheet" type="text/css" href="css/nojs.css" />
        </noscript>
<style>
    
        body > div {
            width: 100%;
            height: 100%;
        }
        
        .conteudo {
                background-image: url(images/low_contrast_linen.png);
        }
    </style>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=284745924885800&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        <!--[if lt IE 9]>
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <header>
    <div class="container">
                <div class="grid_4">
                    
                        <!--[if lte IE 8 ]-->
                          <a href="index.html"><img class="logo" src="images/logo-marcenaria-miqueas3.png" alt="Logo"></a>
                        <!--![endif]-->
                    
                </div><!--grid3-->             
                <div class="grid_7">
                    <nav>
                        <div class="rmm">
                            <ul>
                                <li><a href='index.html'>Home</a></li>
                                <li><a href='marcenaria-miqueas.html'>Empresa</a></li>
                                <li><a href='ambientes-personalizados.html'>Ambientes</a> </li>
                                <li><a href='contato.html'>Contato</a></li> 
                            </ul>
                        </div>
                    </nav>
                </div><!--grid7-->
    </div><!--container-->  
    </header> 
    <div class="form-contato" >
            <article > 
                <div id="topico">   
                    <div id="descritivo"> 
                        <div class="container">
                            <div class="grid_4">  
                                Fale conosco !
                            </div>
                             <div class="grid_7" style="text-align:center;">  
                             <button>Solicite uma visita !</button>  
                            </div>  
                            </div>
                            <div id="fundo1">
                        </div>     
                     </div>
                </div>         
            </article>
            <div class="container">
                <div class="grid_5" >
                        <form class="white-pink" method="post" action="">
                          <div class="field">
                              <label for="name">Nome:</label>
                              <input type="text" class="input" name="name" id="name" required/>
                              <p class="hint">Insira seu nome.</p>
                          </div>

                          <div class="field">
                              <label for="email">E-mail:</label>
                              <input type="email" class="input" name="mail" id="email" required/>
                              <p class="hint">Qual seu Email ?</p>
                          </div>
                          <div class="field">
                              <label for="email">Assunto</label>
                              <select type="text" name="assunto">
                                    <option value="Selecione"selected>Selecione </option> 
                                    <option value="Jantares Exclusivos" >Jantares Exclusivos</option>
                                    <option value="Reservas">Reservas</option>
                                    <option value="Sugestoes">Sugestões</option>
                              </select>
                                  <p class="hint">Qual assunto vamos conversar ?</p>
                        </div>
                        <div class="field">
                          <label for="message">Mensagem:</label>
                            <textarea class="input textarea" name="message" id="message" required></textarea>
                          <p class="hint">Fique a vontade.</p>
                        </div>
                        <input type="submit" name="Submit"  class="button" value="Enviar" />
                        </form>
                </div>        
                
                <div class="grid_5" >
                            <p>Conte com nossa equipe de Corretores</p>
                            <p> Ligue que vamos até você !</p>
                               
                                    <p>( 14 )3814.3776</p><hr>
                                    <p>Plantão de vendas</p>
                                    <p> 14 ) 9.9608.7473</p>

                </div>
            </div><!-- container -->
    </div><!-- ambientes -->
     <footer><br>
             <div class="container">   
                <div class="grid_5">
                    <h3>Ambientes Personalizados</h3>
                    <ul class="rectangle-list">
                        <li><a href='#home'>Dormitorios</a></li>
                        <li><a href='#home'>Home Offices</a></li>
                        <li><a href='#home'>Home Theater</a></li>
                        <li><a href='#home'>Cozinhas</a></li>
                        <li><a href='#home'>Salas</a></li>
                    </ul>
                    </div>

                <div class="highlight nophone">
                    <div class="grid_5">
                        <h3>Dicas de </h3><br>
          <div class="fb-like-box" data-href="https://www.facebook.com/marcenariamiqueas?ref=hl" data-width="550" data-height="430" data-colorscheme="light"
           data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div><div id="fb-root"></div>
                    </div><!--grid5-->
                </div><!--no-phone-->


                <div class="grid_8" id="atendimento">

                    <h3>Atendimento</h3>
                     <ul class="contato">
                    <li>Av. Dep. Dante Delmanto, 1889<br>Vila Paulista | Botucatu - SP<br> <span class="mapa">[mapa]</span></li>
                    <li>14 3815.1602</li>
                    <li>contato@miqueasplanejados.com.br</li>
                    </ul>
                </div>
               
            </div><!--container-->
        </footer>
            <div class="autor" >
                <p class="insetType">desenvolvimento<img class="heart pulse2" src="images/nova-era-web.png"></p></div>
             </div>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=284745924885800&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



        <script src="js/jquery.fittext.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script type="text/javascript">
            $("h1").fitText(0.62);
            $("h2").fitText(1.7);

            $(document).ready(function(){
                // Target your .container, .wrapper, .post, etc.
                $("#video").fitVids();
              });

            var navigation = responsiveNav("#nav", {customToggle: "#menu"});
        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/mobile.js"></script> 
    </body>
</html>
