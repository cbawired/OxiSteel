<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="autor" content="Cristian Roldan"> 
    <meta name="keywords" content="">
    <link rel="favicon" href="img/logo_oxisteel_ico.png" sizes="50x32">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!--Importar la fuente de los íconos de Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importar la hojas de estilos de materialize css-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Barlow+Semi+Condensed|Rajdhani|Text+Me+One|Tinos" rel="stylesheet">
    <title>Oxisteel</title>

    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
    .alfrente:hover{
        z-index: 1;
    }
    nav
    {
        background-color: rgb(0,0,0,0);
    }

    body
        {
        /*font-family: 'Text Me One', sans-serif;*/
        /*font-family: 'Rajdhani', sans-serif;*/
        /*font-family: 'Tinos', serif;*/
        font-family: 'Barlow Semi Condensed', sans-serif;
        /*font-family: 'Arbutus Slab', serif;*/
        /*background-image: linear-gradient(to right,black , white);*/
        background-color: black;
        
        background-image: url(img/TEXTURAS_METALICAS/seleccion/8.jpg);
        background-repeat:repeat;
        background-size: 100%;
        
        }
    h1, h2, h3, h4, h5
        {
        /*font-family: 'Text Me One', sans-serif;*/
        /*font-family: 'Rajdhani', sans-serif;*/
        /*font-family: 'Tinos', serif;*/
        font-family: 'Barlow Semi Condensed', sans-serif;*/
        /*font-family: 'Arbutus Slab', serif;*/
        }
   
    a:hover
        {   
        color: aliceblue;
        
        
        }   
    .formulario
    {
        background-color: rgb(0,0,0,0.6);
        border: none;
        
    }
    .grad
        {
        
        }
    .top
        {
        z-index: 10000;
        }
    .fondo
        {
        
        background-image: linear-gradient(to right,black , grey)
        /*
        background-image: url(img/TEXTURAS_METALICAS/seleccion/3.jpg) ;
        */
        }
    .margen-bottom
        {
            margin-bottom: 10%;
        }
    .miboton
        {
            background-color: rgb(0, 0, 0, 0.7)
        }


    </style>
    
    
</head>
<body class="white-text" style="background-color: white">
<!--Animacion        
    <div class="logo-container hide-on-med-and-down">
        <img class="oxisteel fixed" src="img/logo_oxisteel.png" style="" alt="">
    </div>
-->
    <div class="fixed-action-btn" style="bottom:50px; right:50px">
        <a  class="btn-floating  btn-large red z-depth-3 pulse"><i class="large material-icons">accessibility</i> </i></a>
        <ul>
            <li><a href="" class="btn-floating btn-large white z-depth-3 valign-wrapper "><img class="" src="img/iconos/1/instagram.png" alt=""></a></li>
            <li><a href="" class="btn-floating btn-large white z-depth-3 valign-wrapper"><img class="" src="img/iconos/1/facebook.png" alt=""></a></li>
            <li><a href="" class="btn-floating btn-large white z-depth-3 valign-wrapper"><img src="img/iconos/1/googlePlus.png"  alt=""></a></li>
            <li><a href="https://wa.me/5493512349524" class="btn-floating btn-large white z-depth-3 valign-wrapper"><img class="" src="img/iconos/1/whatsapp.png" /></a></li>
        </ul>
    </div>      
<!--navbar content here--> 
    <nav class=" grey darcken-3  hide-on-med-and-down " style="padding:1%; height: 14vh; margin-bottom: "> 
        <ul class="right" style="margin-top: 1%">
            <li class="">
                <a class="circle valign-wrapper" href="https://www.facebook.com/oxisteel.metalurgica/"  target="_blank" style="height: 50px; width: 50px;">
                    <img class="circle" src="img/iconos/1/facebook_white.png" alt="" width="50px" height="50px">
                </a>
            </li>
            <li>
                <a class="circle valign-wrapper" href="https://www.linkedin.com/in/gonzalo-cazorla-3a6ab5b4/"  target="_blank" style="height: 50px; width: 50px;">
                    <img src="img/iconos/1/linkedIn_white.png" alt="" width="50px" height="50px">
                </a>
            </li>
            <li>
                <a class="circle valign-wrapper" href="https://wa.me/5493513641399"  target="_blank" style="height: 50px; width: 50px;">
                    <img src="img/iconos/1/whatsapp_white.png" alt="" width="50px" height="50px">
                </a>
            </li>
            
            <li>
                <a class="circle valign-wrapper" href="https://plus.google.com/101139424251508964384" target="_blank"  style="height: 50px; width: 50px;">
                    <img src="img/iconos/1/googlePlus_white.png" alt="" width="50px" height="50px">
                </a>
            </li>
            <li>
                <a class="circle valign-wrapper" href="https://www.instagram.com/oxisteel.metalurgica/" target="_blank" style="height: 50px; width: 50px;">
                    <img src="img/iconos/1/instagram_white.png" alt="" width="50px" height="50px">
                </a>
            </li>
        </ul>
    </nav>
        
    <ul id="slide-out" class="sidenav sidenav-fixed resalto" style="background-color: rgb(66, 66, 66, 0.5)">
        <li><img class="responsive-img" alt="" src="img/logo_oxisteel_blanco.png" alt="" style="margin-top: 5%; padding:1%; margin-bottom: 5%;"></li>
        <div class="divider"></div>
        <li class="center"><a class="white-text" href="#"><i class="material-icons white-text">home</i>Home</a></li>
        <li class="center"><a class="white-text"  href="#trabajos"><i class="material-icons white-text">build</i>Trabajos</a></li>
        <li class="center"><a class="white-text"  href="#clientes"><i class="material-icons white-text">group</i>Clientes</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="center">
                    <a class="collapsible-header white-text">Servicios<i class="material-icons white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="ingenieriaMecanica.html">Ingenieria Mecanica</a></li>
                            <li><a href="oxicorteYCortePlasma.html">Oxicorte y Corte Plasma</a></li>
                            <li><a href="fabricacionDeEstructurasSoldadas.html">Fabricacion de Estructuras Soldadas</a></li>
                            <li><a href="pinturaDeEstructurasMetalicas.html">Pintura de Estructuras Metalicas</a></li>
                            <li><a href="mecanizado.html">Mecanizado</a></li>
                            <li><a href="armadoDeMaquinasHerramienta.html">Armado de Maquinas Herramienta</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="center">
                    <a class="collapsible-header white-text">Productos<i class="large material-icons white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="mobiliario.html">Mobiliario</a></li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="center">
                                        <a class="collapsible-header">Otros<i class="material-icons">arrow_drop_down</i></a>
                                        <div class="collapsible-body">
                                            <ul class="">
                                                <li><a href="estructurasMetalicas.html">Estructuras Metalicas</a></li>
                                                <li><a href="cerramientosIndustriales.html">Cerramientos Industriales</a></li>
                                                <li><a href="carrosIndustriales.html">Carros Industriales</a></li>
                                                <li><a href="portonesAutomaticos.html">Portones Automaticos</a></li>
                                                <li><a href="pergolas.html">Pergolas</a></li>
                                                <li><a href="panelesDeRejas.html">Paneles de Rejas</a></li>
                                                <li><a href="cerramientosConChapaCalada.html">Cerramientos con Chapa Calada</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        
        <li class="center"><div class="divider"></div></li>
        
    </ul>
    <div class="hide-on-large-only grey darcken-3" style="position: fixed; width: 100%; z-index: 1;">
        <a href="#" data-target="slide-out" class="sidenav-trigger pulse btn grey darcken-4" style="position:; margin: 2%; z-index: 2;"><i class="material-icons">menu</i></a>
        <img class="right" src="img/logo_oxisteel.png" style="width: 50%; padding-top: 1%; padding-bottom: 1%" alt="">
    </div>
      
 

<!--Contacto-->
<section id="contacto">
    <div class="row">
        <div class="col s12 l9 offset-l3">
            <div class="container">
                <h1>Contacto</h1>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 white-text">
                        <div class="card formulario z-depth-3 white-text" style="padding: 3%; border-radius: 10px; margin-top: 10%;">  
                            <h1   class="left-align white-text" >Envianos tu Consulta</h1>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="nombre" type="text" class="validate">
                                    <label class="white-text" for="nombre">Nombre y Apellido</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input type="email" id="email" class="validate">
                                    <label class="white-text" for="email" data-success="Correcto" data-error="Debes completar este campo">E-Mail</label>
                                </div>
                                <div class="input-field col s12">
                                        <i class="material-icons prefix">phone</i>
                                        <input type="tel" id="cel" class="validate">
                                        <label class="white-text" for="cel" data-success="Correcto" data-error="Debes completar este campo">Telefono de contacto</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">format_color_text</i>
                                    <textarea id="texto" class="materialize-textarea validate"></textarea>
                                    <label class="white-text" for="texto">Mensaje:</label>
                                </div>
                                <div class="col s12">
                                <div class="input-field">
                                    <input class="btn right" type="submit" value="Enviar" >
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col s12 white-text">
                        <div class="card formulario z-depth-0" style="padding: 3%; border-radius: 10px;">
                            <h2  class="left-align white-text">Seguinos en:</h2>
                            <div class="row">
                                <div class="col l2">
                                    <a class="circle valign-wrapper " href="https://www.facebook.com/oxisteel.metalurgica/" target="_blank"  style="height: 75px; width: 75px;">
                                        <img class="circle " src="img/iconos/1/facebook_white.png" alt="" width="75px" height="75px">
                                    </a>
                                </div>
                                <div class="col l2">
                                    <a class="circle valign-wrapper " href="https://www.linkedin.com/in/gonzalo-cazorla-3a6ab5b4/" target="_blank"  style="height: 75px; width: 75px;">
                                        <img src="img/iconos/1/linkedIn_white.png" alt="" width="50px" height="50px">
                                    </a>
                                </div>           
                                <div class="col l2">
                                    <a class="circle valign-wrapper " href="https://www.linkedin.com/in/gonzalo-cazorla-3a6ab5b4/" target="_blank"  style="height: 75px; width: 75px;">
                                        <img src="img/iconos/1/linkedIn_white.png" alt="" width="50px" height="50px">
                                    </a>
                                </div>               
                                <div class="col l2"> 
                                    <a class="circle valign-wrapper " href="https://wa.me/5493513641399" target="_blank"  style="height: 75px; width: 75px;">
                                        <img src="img/iconos/1/whatsapp_white.png" alt="" width="50px" height="50px">
                                    </a>
                                </div>        
                                <div class="col l2">
                                    <a class="circle valign-wrapper  " href="https://plus.google.com/101139424251508964384" target="_blank"  style="height: 75px; width: 75px;">
                                        <img src="img/iconos/1/googlePlus_white.png" alt="" width="50px" height="50px">
                                    </a>
                                </div>           
                                                
                                <div class="col l2">
                                    <a class="circle valign-wrapper " href="https://www.instagram.com/oxisteel.metalurgica/" target="_blank" style="height: 75px; width: 75px;">
                                        <img src="img/iconos/1/instagram_white.png" alt="" width="50px" height="50px">
                                    </a>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mapa-->
    <div class="row">
        <div class="col s12" style="height: 25rem; margin-top: 3%; margin-bottom: 5%;">
            <iframe class="center-align" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108977.39913212997!2d-64.26438434120668!3d-31.399142384070565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432a150e03fbba5%3A0x6fc687a03d0a7b16!2sOXISTEEL+METALURGICA+CORDOBA!5e0!3m2!1ses-419!2sar!4v1539752034308"  frameborder="0" style="border:0; width: 100%; height: 27rem;" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!--Paralax-->
<div class="row">
    <div class="parallax-container hide-on-small-only" style="height: 35vh; margin-top: 5%; margin-bottom: 2%;">
        <div class="parallax"><img src="img/PARALAX/4.jpg" ></div>
    </div>
</div>
<!--Footer-->
<footer class="page-footer z-depth-5 grey darcken-3" style="margin-top: 3%;">
    <div class="container">
        <div class="row">
        <div class="col l5 offset-l3 s12">
            <h5 class="white-text">Oxisteel</h5>
            <p class="grey-text text-lighten-4">
            INGENIERIA MECANICA | OXICORTE Y CORTE PLASMA | FABRICACION DE ESTRUCTURAS SOLDADAS | PINTURA DE ESTRUCTURAS METALICAS | MECANIZADO | ARMADO DE MAQUINAS HERRAMIENTAS | ESTRUCTURAS METALICAS | CERRAMIENTOS INDUSTRIALES | CARROS INDUSTRIALES | PORTONES AUTOMATICOS | PERGOLAS | PANELES DE REJAS Y CERRAMIENTOS CON CHAPA CALADA
            </p>
        </div>
        <div class="col l4  s12 center">
            <h5 class="white-text">Links</h5>
            <ul>
            <li><a class="grey-text text-lighten-3" href="https://plus.google.com/101139424251508964384">Google Plus</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/oxisteel.metalurgica/">Facebook</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/oxisteel.metalurgica/">Instagram</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/gonzalo-cazorla-3a6ab5b4/">Linked In</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/gonzalo-cazorla-3a6ab5b4/">WhatsApp</a></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5 class="right">© 2018 Copyright Oxisteel</h5>
                    
                </div>
            </div>
        
        
        </div>
    </div>
</footer>

<!--scripts-->
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--carousel-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems,{indicators: true, fullWidth:false});
        instance.next();
    });
</script>
<!--fixed action button-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {});
    });
</script>
<!--paralax-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>

<!--materialboxed-->
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>
<!--Side Nav-->
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
<!--Dropdown-->
<script>
    $('.dropdown-trigger').dropdown();
</script>
<!--Collapsible-->
<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
</script>
<!--collapsible-->
<script>
    var elem = document.querySelector('.collapsible.expandable');
    var instance = M.Collapsible.init(elem, {accordion: false});
</script>

    
    
        
</body>
</html>