<!DOCTYPE html>
<html lang="pt-br">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Marcenaria Miqueas - Fale Conosco | Botucatu/SP</title>
        <meta name="description" content="Entre em contato | Marcenaria Miqueas é uma empresa que atua no setor de Móveis Planejados e Personalizados em Botucatu e região.">
        <meta name="viewport" content="width=device-width">
        <link rel=“canonical” href=”https://www.marcenariamiqueas.com.br/contato.php”/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>

        <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/responsivemobilemenu.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/responsive-nav.js"></script>
        <script src="js/picturefill.js"></script>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="js/slippry.min.js"></script>
        <link rel="stylesheet" href="css/slippry.css">
        <script type="text/javascript" src="js/MascaraValidacao.js"></script>

       
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
<script language="javascript" type="text/javascript">

function checa_formulario(email){

    if (form.nome.value == ""){ 
  alert("Por Favor não deixe o seu nome em branco!!!");
   form.nome.focus();
    return (false); 
}

    if (form.email_from.value == ""){ 
  alert("Por Favor não deixe o seu email em branco!!!");
   form.email_from.focus();
    return (false); 
}


    if (form.assunto.value == ""){ 
  alert("não deixe o assunto em branco!!!");
   form.assunto.focus();
    return (false); 
}

}
</script>

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
  <body onLoad="document.email.nome.focus();">

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <?php require_once "header.php"?>
    <div class="form-contato" >
            <article > 
                <div id="topico">   
                    
                
                    <div id="descritivo"> 
                        <div class="container">
                            <div class="grid_4 titulo2">  
                               <h1> Fale Conosco</h1>
                            </div>
                             <div class="grid_7" style="text-align:center;">   
                            </div>  
                            </div>
                         
                     </div>
                </div>         
            </article>
      <section>
        <div class="container">
            <div class="grid_5">            
          
              <form onsubmit="return checa_formulario(this)" action="envia.php" method="post" enctype="multipart/form-data" 
              name="email">
                    <div class="grid_10">
                      <label class="desc" id="nome" for="nome">Nome</label><br>
                      <input id="nome" name="nome" type="text"  value=""  tabindex="1">
                    </div> 
                    <div class="grid_10">
                      <label class="desc" for="email">Email</label><br>
                      <input id="Field3" name="email" type="email" spellcheck="false" value="" >
                    </div>
                    <div class="grid_10">
                      <label class="desc" id="telefone" for="telefone">Celular</label><br>
                      <input id="telefone" name="telefone" type="text" value="" onkeypress="MascaraTelefone(form.telefone);" maxlength="15" placeholder="(xx) x.xxxx.xxxx" maxlength="255" tabindex="3"> 
                    </div>
                    <div class="grid_10">
                      <label class="desc" id="assunto" for="Assunto">Assunto</label><br>
                        <select id="select" name="assunto"  tabindex="4"> 
                          <option value="Site | Sem assunto">Selecione</option>
                          <option value="Site | Solicitar visita">Solicitar visita</option>
                          <option value="Site | Quero um projeto 3D">Gostaria de um projeto 3D</option>
                          <option value="Site | Outros">Outros</option>
                        </select>
                    </div>
                    <div class="grid_10"><br>
                      <label class="desc" id="title4" for="Mensagem">Mensagem</label><br>
                      <textarea id="Field4" name="mensagem" spellcheck="true" rows="5" cols="50" tabindex="5" required></textarea>
                    </div>
                    <div class="grid_10"><br>
                      <label class="desc" id="title4" for="arquivo">Já tem seu projeto ? Envie para nós.</label><br>
                      <input name="arquivo" type="file"> 
                    </div>
                    <div>
                      <button id="bt-enviar" name="Submit" type="submit" value="Submit">> Enviar </button>
                    </div>
              </form>
      
         </div><!-- grid-5 -->
         
         <div class="grid_5">   <br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2581.328418460903!2d-48.466216843680975!3d-22.86899537600819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x0%3A0x5b21f72f3015d457!2sMarcenaria+Miqueas!3m2!1d-22.8691323!2d-48.465902799999995!4m5!1s0x94c720b971837e15%3A0x5b21f72f3015d457!2sMarcenaria+Miqueas+-+Av.+Dep.+Dante+Delmanto%2C+1895%2C+Botucatu+-+SP%2C+18608-393!3m2!1d-22.8691323!2d-48.465902799999995!5e0!3m2!1spt-BR!2sbr!4v1439044462433" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>    <ul class="contato2">
                        <li><img src="images/pin-icon.png" alt="Endereco"> Av. Dep. Dante Delmanto, 1895 | Botucatu - SP</li>
                        <li><img src="images/email-icon.png" alt="Email"> contato@marcenariamiqueas.com.br</li>
                        <li><img src="images/phone-icon.png" alt="Telefone"> 14 3815.1602</li>
            </ul><br>
        </div>
           
        </div><!-- container -->   </section>
    </div><!-- form-contato -->
    <?php require_once "footer.php"?>    
    <div class="autor" >
                <p class="insetType">desenvolvimento<a href="http://www.novaeraweb.com.br" target="_blank"><img class="heart pulse2" src="images/nova-era-web.png" alt="Logo Nova Era Web" ></a></p></div>
            </div>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/jquery.fittext.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script type="text/javascript">
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
