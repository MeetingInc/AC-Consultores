<?php $mi_pagina="contacto"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AC - Análisis y Consultorías</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content=" “Para obtener resultados diferentes, debemos pensar y actuar diferente”. Albert Einstein ... Mejoramos sus ventas, potenciamos su negocio, desarrollamos un proyecto para cada necesidad. Empresas, mercado, publicidad, web, consultorías jurídicas. Somos una empresa dedicada  a fortalecer otras empresas...  AC- "El valor de cambiar"">
<meta name="keywords" content="analisis, consultorias, analisis y consultorias, web, lopd, proyectos, comerciales, formación, formación empresarial, proyectos comerciales, proyectos empresariales, marketing, mercado, publicidad, radio, anuncios, radio surco, loca fm, lanzamientos de productos, campañas, eventos, cuñas, vallas, roll up, folletos, brochures, diseño web, diseño." >
<meta name="author" content="AC Consultores">	

<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.metadata.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.toggleformtext.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/ac.js"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/colorbox.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">	

</head>
<body class="interior">
<?php include_once("analyticstracking.php") ?>
<div class="main">
  <!--Header-->
  <?php include ('inc/header.php') ?>
    <div class="intTitle">
    	<h2>Cont&aacute;ctenos</h2>
        <a class="CtaTopBig" href="desarrollo-proyectos.php">Vea todo lo que podemos hacer por Ud.</a>
    </div>
    <div class="clear"></div>
    <!--Main page content-->
    <div class="resize">
    	<!--cLEFT-->
        <div class="cLeft contact">
        	<h2>Envío correcto</h2>
            <div class="clear"></div>
            <p>
            Su mensaje se ha procesado correctamente.<br />
            Nos comunicaremos con Ud. a la mayor brevedad posible.  Gracias por su tiempo.
            </p>
        </div>
        <!--end left-->
        
        <!--cRIGHT-->
        <div class="cRight">
        	<!--Diferencias competitivas-->
            <?php include ('inc/diferencias.php')?>
            <!--Testimonios-->
            <?php include ('inc/contactenos.php')?>
        	<!--Datos de Twitter-->
            <?php include ('inc/twitter.php')?>
        	<!--Datos de Share-->
            <?php include ('inc/share.php')?>
        </div>
    </div>
    <!--end right-->     
</div>
  <!--Enlarge maps-->
  <div style="display:none">
  	<div id="enlargeMap">
<iframe width="680" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.uy/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=C%2F+Col%C3%B3n+n%C2%BA+4,+Villarrobledo,+Albacete&amp;aq=&amp;sll=-32.533625,-55.748354&amp;sspn=9.017415,19.753418&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+de+Col%C3%B3n,+4,+02600+Villarrobledo,+Albacete,+Castilla-La+Mancha,+Espa%C3%B1a&amp;t=m&amp;z=14&amp;ll=39.267177,-2.595598&amp;output=embed"></iframe>
</div>
  </div>
  <!--end enlarge map--><!--end main-->
<!--footer-->
	<?php include('inc/footer.php') ?>
</body>


</html>

<script type="text/javascript">
//form validation
	var container = $('div.error');
	// validate the form when it is submitted
	var validator = $("#form1").validate({
		errorContainer: container,
		errorLabelContainer: $("ol", container),
		wrapper: 'li',
		meta: "validate"
	});
</script>
	

			