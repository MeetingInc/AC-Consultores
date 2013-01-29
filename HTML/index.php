<?php $mi_pagina="home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AC - Análisis y Consultorías</title>
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
<body>
<?php include_once("analyticstracking.php") ?>
<div class="main">
  <!--Header-->
  <?php include ('inc/header.php') ?>
  <!--slider-->
  <?php include ('inc/slider-home.php') ?>
	<div class="clear"></div>
    <ul class="services">
    	<li class="dp">
        	<a href="desarrollo-proyectos.php">Desarrollo<br /> de Proyectos.</a>
        </li>
    	<li class="pp">
        	<a href="comunicacion-empresarial.php">Comunicación<br /> Empresarial.</a>
        </li>
        <li class="ai">
        	<a href="activos-en-internet.php">Diseño<br /> y Desarrollo Web.</a>
        </li>
        <li class="fn">
        	<a href="formacion-bonificada.php">Formación<br /> Bonificada.</a>
        </li>
        <li class="lopd">
        	<a href="consultoriaLOPD.php">LOPD Ley Orgánica<br /> de Protección de Datos.</a>        
        </li>
    </ul>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft">
        	<h2>Bienvenidos a nuestro sitio web</h2>
            <p>Nos complace darle la bienvenida a la página web de <b>ANÁLISIS Y CONSULTORÍAS</b>. En este sitio podrá acceder a información sobre nuestras 
            consultorías Empresariales, Formación, Proyectos Comerciales y Jurídicas (LOPD).
			<p>
            Queremos destacar las diversas soluciones con las que contamos, para resolver los problemas del 
            día a día de las empresas. En épocas de crisis LA INFORMACIÓN ES PODER, LA CREATIVIDAD 
            ES EL COMBUSTIBLE Y EL CONOCIMIENTO PROFESIONAL; LA FUERZA PARA OBRAR LOS CAMBIOS NECESARIOS. 
            Ya lo decía Einstein <b>“SI HACEMOS SIEMPRE LO MISMO, NO PODEMOS ESPERAR CAMBIOS”</b>.
            </p>
            <p>
            Estudiamos el mercado de forma integral, analizamos su negocio y sus trabajadores, luego le presentamos un plan para 
            mejorar, pautamos publicidad en medios, organizamos campañas y lanzamientos de productos, 
            fortalecemos estas acciones a través de un correcto posicionamiento web. Paralelamente, 
            presentamos opciones de Formación, para cualificar adecuadamente a los trabajadores, 
            con cursos específicos, SIN COSTE PARA LA EMPRESA O PARA EL TRABAJADOR, realizamos 
            en este sentido la gestión formativa integral y la administrativa necesaria para la 
            posterior bonificación a través de los seguros sociales.
			<p>
            <b>En lo que respecta a la LOPD</b>, realizamos consultorías de protección de datos a nivel <b>básico</b>, <b>medio</b> y <b>alto</b>. 
            Registro de ficheros ante la Agencia Española de Protección de Datos, elaboración del Documento de Seguridad, 
            Implantación en la empresa, Asesoramiento y Mantenimiento anual. Contamos con Licenciados en Derecho e Ingenieros Técnicos Informáticos.
            <p>
            Le invitamos a navegar por nuestro portal, valorando nuestras soluciones en 
            Formación del Capital Humano, de forma transversal y específica para la gestión que desarrolla,
            en Mercado, en Publicidad y Promociones, en Diseño Web, en Proyectos Empresariales
             y Comerciales y en Consultorías en LOPD.
            </p>
            <p>
            Esperamos que este sitio web sea de su utilidad en la búsqueda de información. Si tiene a
            lguna inquietud o sugerencia para que podamos mejorar nuestra propuesta, no dude en contactarnos ya sea vía e-mail o teléfono.            
            </p> 
             <p>
			ESTAMOS A UN CLIC DE SU ALCANCE… </p>       
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