<?php $mi_pagina="quienes-somos"; ?>
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
    	<h2>Ventajas competitivas</h2>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft ventajas">
        	<h2>Ventajas Competitivas</h2>
            <div class="cImageInterior"><img src="images/ventajas.jpg" width="585" height="107" alt="Ventajas Competitivas"/> </div>           
			<p>Nuestras ventajas competitivas con respecto a otras empresas de la comarca específicamente son:</p>
            <ul class="lopd">
                <li>Ser percibidos por los clientes como CONSULTORÍA DE CALIDAD.</li> 
                <li>Analizar y viabilizar PLANES a medida para cada cliente.</li>
                <li>Ser una empresa de reciente creación pero estar integrada por profesionales con amplia trayectoria y reconocido prestigio.</li>
                <li>Contar con una amplia oferta de productos y servicios de alta cualificación.</li>
                <li>Revalorizar y destacar el concepto del Marketing y de los Proyectos. </li>
                <li>Promover actuando con equidad, valores, compromiso y respeto por las personas, las empresas y los competidores.</li>
                <li>Contar con capital humano cualificado.</li>
                <li>Gozar de prestigio y confianza a nivel empresarial.</li>
                <li>Impulsar una política comercial tendiente a la satisfacción del cliente.</li>
                <li>Solvencia.</li>
                <li>Disponer de recursos materiales y medios para la más eficiente comunicación empresarial.</li>
                <li>Tener el soporte de consultores externos que aseguran el proceso de eficiencia y calidad.</li>
                <li>Disponer de Plataformas para el desarrollo de diferentes proyectos.</li>
            </ul> 
            <a href="contacto.php" class="masInfo">Solicite m&aacute;s informaci&iacute;n</a>
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
</body>
</html>