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
                <li><a href="formacion-metodologias.php">Metodolog&iacute;a</a></li>
                <li><a href="formacion-distancia.php">Distancia</a></li>
                <li><a href="formacion-teleformacion.php">Teleformaci&oacute;n</a></li>
                <li><a href="formacion-presenciales.php" class="current">Presenciales</a></li>
            </ul>  

            <h3 class="bigTitle">Presenciales</h3>

            <p>Ofrecemos m&aacute;s de 500 cursos. Dise&ntilde;amos planes de formaci&oacute;n específicos para cada necesidad, en cualquier &aacute;rea y en cualquier parte de Espa&ntilde;a. </p>

            <h4 class="secondTitle">Destacamos</h4>

            <p><b>Empresariales (2012-2013):</b></p>

            <ul class="lopd">
                <li>Coaching Corporativo</li> 
                <li>Negociaci&oacute;n: El Arte de Negociar</li>
                <li>Seguimiento, Desarrollo y Motivación de Personas</li> 
                <li>Habilidades Inform&aacute;ticas y de Gesti&oacute;n</li>
                <li>T&eacute;cnicas Profesionales de Comunicaci&oacute;n y Ventas</li>
                <li>Marketing en el Punto de Venta</li>
                <li>Marketing Relacional</li>
                <li>Marketing Estrat&eacute;gico</li>  
            </ul> 

            <p><b>Jur&iacute;dicos:</b></p>

            <ul class="lopd">
                <li>LOPD 15/1999, de 13 de diciembre, nociones generales sobre la LEY</li> 
                <li>Formaci&oacute;n del Responsable de Seguridad en la Empresa</li>  
            </ul> 

            <p><b>PRL- Prevenci&oacute;n de Riesgos Laborales:</b></p>

            <p>Tarjeta Profesional de la Construcció&oacute;n, Metal y Madera (Todos los cursos)
                De 8 horas, 20 horas Oficios, 10 horas Directivos y Gerentes, 60 horas B&aacute;sicos en Prevenci&oacute;n de Riesgos Laborales, Carn&eacute; de Carretillas Elevadoras, entre otros.</p>

            <p>Contamos con un amplio Staff de profesionales en el &aacute;rea de Proyectos (Management Profesional), Coaching  Corporativo, 
            Psicolog&iacute;a Aplicada a la Empresa y a la Formaci&oacute;n de Profesionales y Marketing como Herramienta para Potenciar Ventas y Proyectos. </p>


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