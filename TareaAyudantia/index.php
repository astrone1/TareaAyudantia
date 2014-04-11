<!doctype html>
<html>
<head>
   <title> Ingeniería de sw | Inicio</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylo.css">
</head>
<body>
<div id="global">
<header>

<div id="aleatorias">
<?php
//Crear una array con las distintas imagenes
$imagenes[0]='/imagenes/aleatorias/images2.jpg',
$imagenes[1]='/imagenes/aleatorias/images3.jpg'
);

// Elegimos un valor entre 0 y el total de imágenes
$i=rand(0,1); 

// Mostramos la imagen
echo '<img src="'.$imagenes[$i].'">';
?>
</div>
  <nav>
        <ul>
         	<li>
         		<a href ="index.html">Inicio</a>
         	</li>
         	<li>
         		<a href="integrantes.html">Integrantes</a>

         	</li>
         	<li>
         		<a href="contacto.html">Contacto</a>
         	</li>
        </ul>
	</nav>
</header>
<article>
  <section>
     <h2 class "subtitle"> BIENVENIDO</h2>
     
     <p> Esta es una página web creada por estudiantes de Ingeniería civil en computación como primera tarea de ayudantía.</p>

     <p>Visita nuestro <a href='http://github.com/ingenieriasw'>github</a></p>
  </section>
  <aside>
   //logo
  </aside>
</article>
</div>
<div>

</div>
</body>
</html>