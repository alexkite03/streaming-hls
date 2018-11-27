<?php
header('Content-Type: text/html; charset=UTF-8');
$password = "alexkite";
if ($_POST['password'] != $password) { 
?>
<center>
<h2>Inserta la contraseña</h2>
<form name="form" method="post" action="">
<input type="password" name="password"><br>
<input type="submit" value="Acceder"></form>
</center>
<?php 
}else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TV</title>
	<link rel="stylesheet" href="https://www.resultados-futbol.com/media/css/extra.css">
	<link rel="stylesheet" type="text/css" href="https://www.resultados-futbol.com/media/css_less/resultados-futbol/resultados-futbol.css?ch=4826060" media="screen">
	<link rel="stylesheet" type="text/css" href="https://www.resultados-futbol.com/media/css_less/resultados-futbol/secciones/livescore.css?ch=4826060" media="screen">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>

</head>
<body>
	<center>
	<div id="player"></div>
	</center><br>
  <script>
var player = new Clappr.Player({source: "http://212.237.53.243:8080/live/alex/1234/298.m3u8", parentId: "#player"});
</script>
<?php
error_reporting(E_ALL);
include_once('simple_html_dom.php');
$html = file_get_html('https://www.resultados-futbol.com/livescore');

	foreach($html->find('div.listaligas') as $e)
		echo '<div>';
	    echo $e->innertext . '<br>';
	    echo '</div>';

?>	


</body>
</html>
<?php 
} 
?>