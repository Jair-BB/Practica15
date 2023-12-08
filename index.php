<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
<h2>Densidad de Urano</h2>
<p>Descripción:</p>
<p>Determina la densidad de Urano si su masa es 14 veces la de la tierra <br>
y su radio es 4 veces el radio de la tierra, siendo la masa de la tierra de 5.97*1024 kg <br>
y su radio 6378 km. (pp 58).
 </p>
</section>
<section class="formulas">
<h2>Fórmula</h2>
D=Mu/Vu <br>
Mu=14*Mtierra <br>
Ru=4*Rtierra <br>
Vu=(4/3)*Pi*Ru*Ru*Ru
</section>
<section class="datos">
<h2>Datos:</h2>
Mtierra= 5.97E24 Kg <br>
Rtierra= 6378 Km
</section>
<section class="calculos">
<h2>Solución</h2>
</section>
<?php
     function calcula_densidad_urano(){
      $PI=3.141592;
      $masa=14*5.97E24;
      $radio=4*6378e3;
      $volumen=(4/3)*$PI*$radio*$radio*$radio;
      $densidad=$masa/$volumen;
      return $densidad;
      }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad_urano(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
