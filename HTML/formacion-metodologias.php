<?php $mi_pagina="formacion"; ?>
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
    	<h2>Formaci&oacute;n</h2>
        <span class="int"></span>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft">
        	<h2>Formaci&oacute;n</h2>
            <div class="cImageInterior"><img src="images/formacion.jpg" width="585" height="107" alt="Consultor&iacute;a de LOPD"/> </div>
            <?php include ('inc/formacionLogin.php') ?>
            <ul class="tabs">
                <li><a href="formacion-bonificada.php">Formaci&oacute;n</a></li>
                <li><a href="formacion.php">Ventajas</a></li>
                <li><a href="formacion-metodologias.php" class="current">Metodolog&iacute;a</a></li>
                <li><a href="formacion-distancia.php">Distancia</a></li>
                <li><a href="formacion-teleformacion.php">Teleformaci&oacute;n</a></li>
                <li><a href="formacion-presenciales.php">Presenciales</a></li>
            </ul>  
            
            <h3 class="bigTitle">Metodolog&iacute;a</h3>
            <p>Para el desarrollo de nuestros cursos online, partimos de un principio pedag&oacute;gico: la formaci&oacute;n “paso a paso”. 
            Gracias a esta estructura con la que presentamos nuestra oferta de cursos online, nuestros alumnos y usuarios asimilan con eficacia los 
            conocimientos que se transmiten. A esto, unimos m&uacute;tiples herramientas multimedia y de comunicaci&oacute;n que facilitan la comprensi&oacute;n.</p>

            <h4 class="secondTitle">Herramientas de comunicaci&oacute;n y servicios</h4>

            <p>El manejo de los cursos online en nuestra plataforma de formaci&oacute;n es muy sencillo. 
            Siempre desde el mismo entorno o PANTALLA PRINCIPAL podr&aacute; acceder tanto al contenido de los cursos online 
            como a todas las herramientas de comunicaci&oacute;n necesarias para su realizaci&oacute;n:</p>

            <ul class="lopd">
                <li>&Iacute;ndice</li>
                <li>Ayuda</li>
                <li>Correo Electr&oacute;nico</li>
                <li>Foro</li>
                <li>Chat</li>
                <li>Biblioteca de estad&iacute;sticas</li>
                <li>Buscador de t&eacute;rminos</li>
            </ul>

            <h4 class="secondTitle">Herramientas pedag&oacute;gicas y multimedia</h4>

            <p>Dependiendo de cada &aacute;rea de formaci&oacute;n y de la propia tem&aacute;tica de cada curso online 
            se utilizan diferentes recursos pedag&oacute;gicos y multimedia. A continuaci&oacute;n exponemos aquellos que puedes 
            encontrar una vez que accedas a los contenidos de los cursos online:</p>
            <div class="center">
                <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="535" height="291">
                <param name="src" value="swf/metodo2.swf" />
                <embed src="swf/metodo2.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="535" height="291"></embed>
                </object>
            </div>
        </div>
        <!--end left-->
        
        <!--cRIGHT-->
        <div class="cRight">
        	<!--Diferencias competitivas-->
            <?php include ('inc/diferencias.php')?>
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
    <script type="text/javascript">
        $("button").click(function(){
        $("p:first").addClass("intro");
    });
    </script>
</body>
</html>