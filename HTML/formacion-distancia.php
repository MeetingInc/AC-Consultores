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
                <li><a href="formacion.php">Ventajas</a></li>
                <li><a href="formacion-metodologias.php">Metodolog&iacute;a</a></li>
                <li><a href="formacion-distancia.php" class="current">Distancia</a></li>
                <li><a href="formacion-teleformacion.php">Teleformaci&oacute;n</a></li>
                <li><a href="formacion-presenciales.php">Presenciales</a></li>
            </ul>  
           
            <h3 class="bigTitle">Distancia</h3>

            <p>Ofrecemos m&aacute;s de 500 cursos, los cuales pueden ser abordados desde cualquier parte de Espa&ntilde;a, 
            siendo monitorizados "paso a paso" por tutores profesionales, con manuales y gu&iacute;as pr&aacute;cticas y con la posibilidad de contacto permanente.</p>

            <iframe src="http://www.aulasystem.com/lcursos/cursos_a_distancia.php" width="100%" height="350px" frameborder="0"></iframe>

            
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