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
    	<h2>Desarrollo de Proyectos Empresariales</h2>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft productos desarrollo">
        	<h2>Desarrollo de Proyectos Empresariales (PMI)</h2>
            <div class="cImageInterior"><img src="images/desarrolloProyectos.jpg" width="585" height="107" alt="Desarrollo de Proyectos Empresariales"/> </div>           
            <h3 class="marco">Marco:</h3>
            <p>
            Ponemos a su disposición proyectos a medida. A partir de un profundo análisis del mercado y sus condicionantes, elaboramos
             el proyecto solicitado. Le aseguramos estricto cumplimiento de
             alcance, costes, calidad y tiempo. Mantenemos la confidencialidad, acerca de ideas e innovaciones.</p>
             <h3>Abarcamos:</h3>
             <ul>
             	<li><b>Nuevos emprendimientos</b>, le damos forma y viabilidad a su imaginación.</li>
                <li><b>Nuevos productos</b>, a partir de un análisis de mercado que exprese la necesidad de contar con un nuevo producto o servicio.</li>
                <li><b>Mejoramos emprendimientos actuales</b>, a partir de un diagnóstico detallado, determinamos las fortalezas y las debilidades, las amenazas 
                y las oportunidades del actual proyecto. Proponemos un plan que contemple cambios a partir de los recursos existentes. Que valide la experiencia 
                de logros anteriores y que paute medidas y estrategias para el aseguramiento de la calidad, mientras se transita hacia los objetivos del éxito.</li>
                <li><b>Los proyectos se basan hoy día en procesos</b>, los procesos son: ENTRADAS  (HERRAMIENTAS Y TÉCNICAS) SALIDAS. Es decir a partir de una 
                información, aplicar conocimiento o juicio experto, para lograr un resultado determinado. Analizaremos los procesos y la gestión global 
                de su negocio, aportándole información valiosa para realizar la reingeniería correspondiente, corrigiendo aspectos debilitados, eliminando 
                los deficitarios y optimizando aspectos positivos.</li>
                <li><b>Gestión Financiera</b>: A través de expertos agentes financieros concretamos acciones de compra o venta de empresas, gestión financiera, y gestión de préstamos.</li>
             </ul>
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