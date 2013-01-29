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
                <li><a href="formacion-bonificada.php" class="current">Formaci&oacute;n</a></li>
                <li><a href="formacion.php">Ventajas</a></li>
                <li><a href="formacion-metodologias.php">Metodolog&iacute;a</a></li>
                <li><a href="formacion-distancia.php">Distancia</a></li>
                <li><a href="formacion-teleformacion.php">Teleformaci&oacute;n</a></li>
                <li><a href="formacion-presenciales.php">Presenciales</a></li>
            </ul>  
            

            <h3 class="bigTitle">Formaci&oacute;n Bonificada</h3>

            <p>Las empresas disponen de una cantidad econ&oacute;mica o "CR&Eacute;DITO" para financiar el Plan de Formaci&oacute;n de sus Trabajadores. 
            &Eacute;ste cr&eacute;dito hay que utilizarlo dentro del mismo a&ntilde;o, ya que no es acumulable y por tanto si no se utiliza en un per&iacute;odo anual se pierde. </p>

            <p>El cr&eacute;dito que una empresa dispone para invertir en la formaci&oacute;n de su personal se calcula aplicando un porcentaje sobre la 
            cuant&iacute;a ingresada por la empresa a la Seguridad Social en concepto de cuota de formaci&oacute;n 
            profesional y su plantilla media de trabajadores del a&ntilde;o anterior". </p>

            <p style="color:#85012e">En este sentido como Entidad Organizadora de Formaci&oacute;n ofrecemos los siguientes servicios:</p>

            <ul class="lopd">
                <li>Asesoramiento sobre la selecci&oacute;n de cursos y/o desarrollo de planes formativos</li> 
                <li>Documentaci&oacute;n necesaria para el inicio y desarrollo de la formaci&oacute;n </li>
                <li>Convenio de Agrupaci&oacute;n y Solicitud de Formaci&oacute;n</li> 
                <li>Impartici&oacute;n y tutor&iacute;as de cursos</li>
                <li>Seguimiento y evaluaci&oacute;n del alumno/trabajador</li>
                <li>Cierre y bonificaci&oacute;n de la acci&oacute;n formativa</li>
                <li>Cierre documental y entrega de memoria a la empresa</li>
                <li style="color:#85012e">Ofrecemos servicios como Entidad Organizadora de formaci&oacute;n /gestión frente a la Tripartita/ para centros de formaci&oacute;n</li>
            </ul>           
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