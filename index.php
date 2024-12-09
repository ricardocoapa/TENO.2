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
  <h2>Problema: Analisis energetico de Producción de agua caliente, colector solar</h2>
  <p>Descripción: En junio el consumo de gas natural para la producción de agua caliente fue registrado
  diariamente. Un promedio de 18,3 Nm³ de gas son usados.</p>
  <p> <br>
a)  ¿Cuánto mayor es el
consumo que el mínimo necesario (calculado en 3-3, ej.. 1.360 l/d)?<br>
<br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Q=mcp(T1-T2)<br>
</section>
<section class="datos">
<h2>Datos:</h2>
   Q=Energia 
   t=m=masa del gas= 1360 Kg. <br>
   S=cp= capacidad calorifica del agua
   T1-T2=delta T del agua /de 10 a 50
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)El análisis energético de Producción de agua caliente, colector solar es:<br>
    Q=1360 kg x 4,2 kJ/kg K x (50°-10°)K = 228 MJ <br>
    228 MJ / 33,8 MJ/Nm³ = 6,76 Nm³ gas</p>
</section>
<?php
     function calcula_energia(){
        $masa=1360;
        $cp= 4.2;
        $deltaT= 50-10;
        $conversion= 33.8;
        
        $energia= $masa * $cp * $deltaT;
        $energia_MJ = $energia / 1000;

        $gas_Nm3 = $energia_MJ / $conversion;
        return $gas_Nm3;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: Energia = ".calcula_energia(). " Nm³ de gas</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2033
    </footer>
   </section>
</body>
</html>
