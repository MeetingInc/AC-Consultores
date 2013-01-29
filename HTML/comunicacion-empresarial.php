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
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/ac.js"></script>

</head>
<body class="interior">
<?php include_once("analyticstracking.php") ?>
<div class="main">
  <!--Header-->
  <?php include ('inc/header.php') ?>
    <div class="intTitle">
    	<h2>Comunicaci&oacute;n Empresarial</h2>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft productos">
        	<h2>Comunicaci&oacute;n Empresarial</h2>
			<p class="intro">En épocas de crisis, la publicidad es el combustible de los negocios.</p>
            <h3>Marco:</h3>
            <p>
            El mercado es un aspecto a tener en cuenta seriamente, cuando desarrollamos una actividad comercial. 
            Ya no es tiempo de abrir una empresa, fabricar un producto o generar un servicio, de espaldas a la necesidad del mercado. 
            Primero y ante todo, hay que analizar el mercado y sus requerimientos, sus tendencias y exigencias y en función de ellas, 
            generar la propuesta, en todos los casos respondiendo a una demanda real y verificada. La comunicación en ese contexto, a 
            partir de una correcta segmentación, puede tener alta efectividad, si además de un mensaje claro y atractivo, hemos 
            realizado una correcta selección del medio.<br />
            En resumen <b>Mercado</b>, <b>Comunicación</b> y <b>Medios</b> tienen que ir de la mano para asegurarnos el éxito en nuestra gestión.</p>
            <!--Tabs-->
            <ul class="tabs tabsF">
            	<li><a class="current" href="javascript:;">Mercado</a></li>
            	<li><a href="javascript:;">Posicionamiento</a></li>
            	<li><a href="javascript:;">Marca</a></li>
            	<li><a href="javascript:;">Medios de Comunicaci&oacute;n</a></li>
            	<li><a href="javascript:;">Lanzamientos</a></li>
            </ul>
            <!--Ctabs-->
            <div class="cTabs">
            	<!--Mercado-->
                <div class="mercado">
                	<h3>Mercado:</h3>
                    <p>Ponemos a su disposición estudios de mercado, los que permitirán la más adecuada toma de decisiones.
                    Aportarán una visión local y global con relación a su empresa y sus productos en el entorno cambiante de la actual economía.</p>
                </div>
                <!--Posicionamiento-->
                <div class="posicionamiento" style="display:none">
                	<h3>Posicionamiento:</h3>
                    <p>Trabajamos específicamente para lograr un mejor posicionamiento y una mejor imagen empresarial.</p>                
                </div>
                <!--Marca-->
                <div class="marca" style="display:none">
                	<h3>Marca:</h3>
                    <p>Mejorar y potenciar la idea de marca, generar beneficios y prestigio.<br />
                    Incentivar la investigación y la innovación, lograr la diferenciación en el mercado.</p>
                </div>
                <!--Medios-->
                <div class="medios" style="display:none">
                	<h3>Los medios de comunicación:</h3>
                    <p>Son una herramienta muy importante para la difusión de la empresa moderna. La selección del 
                    medio adecuado a veces resulta clave para el proyecto. También la elaboración de la pieza publicitaria o 
                    del mensaje comercial es crucial, de cara al resultado esperado. Por último el producto juega su papel 
                    en la comunicación, existiendo productos de comunicación más efectiva, conforme al medio empleado.</p>
                </div>
                <!--Lanzamientos-->
                <div class="lanzamientos" style="display:none">
                	<h3>Lanzamientos:</h3>
                    <p>Organizamos lanzamientos de campañas, productos o emprendimientos, articulamos medios, 
                    información y recursos, para la creación del escenario más adecuado, desde donde proyectar 
                    la idea comercial o empresarial necesaria.</p>
                </div>
            </div>
            <!--end cTabs-->
            <a href="contacto.php" class="masInfo">Solicite m&aacute;s informaci&iacute;n</a>
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