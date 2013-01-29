  <div class="header">
    <div class="block_header">
      <h1><a href="index.php">AC Análisis y Consultoría - El valor de Cambiar</a></h1>
      <blockquote>
      	<p>“Para obtener resultados diferentes, debemos 
		pensar y actuar diferente”.<span>Albert Einstein</span></p>
      </blockquote>
      <!--
      <div class="cursos">
      	<h3>Acceso a cursos</h3>
        <form>
        	<input type="text" title="Usuario" />
            <input type="password" title="Contraseña" />
            <input class="send" type="submit" value="" />       
        </form>      
      </div>
      -->
      <div class="menu">
        <ul>
          <li><a  <?php if ($mi_pagina=="home") echo 'class="active"'; ?> href="index.php">Home</a></li>
          <li><a  <?php if ($mi_pagina=="quienes-somos") echo 'class="active"'; ?> href="quienesSomos.php">Quienes Somos</a></li>
          <li class="products"><a  <?php if ($mi_pagina=="productos") echo 'class="active"'; ?> href="javascript:;">Productos</a></li>
          <li><a  <?php if ($mi_pagina=="formacion") echo 'class="active"'; ?> href="formacion.php">Formación</a></li>
          <li><a  <?php if ($mi_pagina=="consultoria") echo 'class="active"'; ?> href="consultoriaLOPD.php">Consultoría LOPD</a></li>
          <li><a  <?php if ($mi_pagina=="contacto") echo 'class="active"'; ?> href="contacto.php">Contáctenos</a></li>
        </ul>
        <ul class="dropdown">
            <li><a href="desarrollo-proyectos.php">Desarrollo de Proyectos (PMI)</a></li>
            <li>|</li>
            <li><a href="comunicacion-empresarial.php">Comunicaci&oacute;n Empresarial</a></li>
            <li>|</li>
            <li><a href="activos-en-internet.php">Activos en Internet</a></li>
            <li>|</li>
            <li><a href="otros-servicios.php">Otros Servicios</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>