<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>WebDesign Contacto</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">	
	<script src="https://kit.fontawesome.com/a67b84ea49.js" crossorigin="anonymous"></script>


</head>
<?php include("header.php"); 
?>

<section class="Contacto">
	<section>
	<div>
	<h2 class="titulo">Contactanos</h2>
	</div>
</section>
	<div class="formularioContacto">
<form method="POST" name="contacto">
	
	<label style="text-align: left">Nombre y Apellido<br></label>  <input type="text" name="nombre"><br><br>
	<label style="text-align: left">Email<br></label> <input type="email" name="correo"><br><br>
	<label style="text-align: left">Asunto<br></label>  <input type="text" name="asunto"><br><br>
	<label>Mensaje</label> <br> <textarea name="mensaje" rows="10" cols="50"> </textarea> <br><br>
<input type="submit" name="enviar" value="ENVIAR">

</form>
<div class="mapa">


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.0026984980095!2d-58.5128408851971!3d-34.55348706234818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb720397e1ac7%3A0xdc34f5a0a696d90a!2sBenjam%C3%ADn%20Franklin%2067%2C%20B1603BRA%20Villa%20Martelli%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1596484989045!5m2!1ses-419!2sar" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>

<div class="direcciones">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem suscipit nemo ex sunt repellendus, hic quos, enim tempore. Delectus saepe quos non laboriosam laudantium possimus veritatis! Eos, beatae voluptatum! Totam.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa temporibus quaerat, libero animi voluptatem incidunt natus nobis totam ratione vero labore, aut ipsum nihil cupiditate magni officia sequi iure.</p>
</div></section>

<?php include("footer.php"); ?>