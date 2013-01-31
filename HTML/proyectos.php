<?php $mi_pagina="productos"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AC - Análisis y Consultorías</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content=" “Para obtener resultados diferentes, debemos pensar y actuar diferente”. Albert Einstein ... Mejoramos sus ventas, potenciamos su negocio, desarrollamos un proyecto para cada necesidad. Empresas, mercado, publicidad, web, consultorías jurídicas. Somos una empresa dedicada  a fortalecer otras empresas...  AC- "El valor de cambiar"">
<meta name="keywords" content="analisis, consultorias, analisis y consultorias, web, lopd, proyectos, comerciales, formación, formación empresarial, proyectos comerciales, proyectos empresariales, marketing, mercado, publicidad, radio, anuncios, radio surco, loca fm, lanzamientos de productos, campañas, eventos, cuñas, vallas, roll up, folletos, brochures, diseño web, diseño." >
<meta name="author" content="AC Consultores">	

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/colorbox.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">	

<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/ac.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
                //Examples of how to assign the ColorBox event to elements
                $(".group1").colorbox({rel:'group1', transition:"elastic"});
                $(".callbacks").colorbox({
                    onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                    onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                    onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                    onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                    onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
                });
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
</script>
</head>
<body class="interior">
<?php include_once("analyticstracking.php") ?>
<div class="main">
  <!--Header-->
  <?php include ('inc/header.php') ?>
    <div class="intTitle">
    	<h2>&Uacute;ltimos proyectos</h2>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft productos activos">
        	<h2>&Uacute;ltimos proyectos desarrollados</h2>
			<p class="intro">Su imagen lo hará tan poderoso y exitoso como Usted quiera.</p>
            <!--Tabs-->
            <ul class="tabs">
            	<li><a href="activos-en-internet.php">Caracter&iacute;sticas del Servicio</a></li>
            	<li><a class="current" href="javascript:;">Proyectos Desarrollados</a></li>
            </ul>
            <div class="cTabs">
                <!--Proyectos-->
                <div class="proyectos">
                    <h3>&Uacute;ltimos proyectos desarrollados</h3>
                     <div class="proyect">
                        <a class="group1" href="images/proyectos/romeraLopez.jpg" title="Sitio web para Romera L&oacute;pez"><img src="images/proyectos/thumb/romeraLopez.jpg"></a>
                        <h3 class="small">Romera L&oacute;pez</h3><br>
                        <a class="linkProyect" href="http://clinicadentalromeralopez.com/" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/teresaCampo.jpg" title="Sitio web para Teresa Campo"><img src="images/proyectos/thumb/teresaCampo.jpg"></a>
                        <h3 class="small">Teresa Campo</h3><br>
                        <a class="linkProyect" href="http://www.teresacamponovias.es" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/imantuber.jpg" title="Sitio web para Imantuber"><img src="images/proyectos/thumb/imantuber.jpg"></a>
                        <h3 class="small">Imantuber</h3><br>
                        <a class="linkProyect" href="http://www.imantuber.es" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="clear"></div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/talleresCamacho.jpg" title="Sitio web para Talleres Camacho"><img src="images/proyectos/thumb/talleresCamacho.jpg"></a>
                        <h3 class="small">Talleres Camacho</h3><br>
                        <a class="linkProyect" href="http://www.tallerescamachoyvillarrobledo.es/" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/caleroCastillo.jpg" title="Sitio web para Calero Castillo"><img src="images/proyectos/thumb/caleroCastillo.jpg"></a>
                        <h3 class="small">Calero Castillo</h3><br>
                        <a class="linkProyect" href="http://www.calerocastillo.com/" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/seprevilla.jpg" title="Sitio web para Seprevilla"><img src="images/proyectos/thumb/seprevilla.jpg"></a>
                        <h3 class="small">Seprevilla</h3><br>
                        <a class="linkProyect" href="http://seprevilla.com/" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="clear"></div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/gruasVillarrobledo.jpg" title="Sitio web para Gruas Villarrobledo"><img src="images/proyectos/thumb/gruasVillarrobledo.jpg"></a>
                        <h3 class="small">Gruas Villarrobledo</h3><br>
                        <a class="linkProyect" href="http://www.gruasvillarrobledo.es/" target="_blank">Ver sitio online</a>
                    </div>
                    <div class="proyect">
                        <a class="group1" href="images/proyectos/losPoceros.jpg" title="Sitio web para Los Poceros &amp; Serviagro Villarrobledo"><img src="images/proyectos/thumb/losPoceros.jpg"></a>
                        <h3 class="small">Los Poceros</h3><br>
                        <a class="linkProyect" href="http://www.lospocerosyserviagro.es/" target="_blank">Ver sitio online</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end left-->
        
        <!--cRIGHT-->
        <div class="cRight">
        	<!--Diferencias competitivas-->
            <?php include ('inc/diferencias.php')?>
            <?php include ('inc/testimonios.php')?>
        	<!--Datos de contacto-->
            <?php include ('inc/contactenos.php')?>
        	<!--Datos de Twitter-->
            <?php include ('inc/twitter.php')?>
        	<!--Datos de Share-->
            <?php include ('inc/share.php')?>
        </div>
    </div>
    <!--end right-->     
</div>
<!--end main-->
<!--footer-->
	<?php include('inc/footer.php') ?>
</body>
</html>