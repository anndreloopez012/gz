<?php
 
$link = new mysqli("localhost", "root", "", "gz");
 
if($link->connect_error) {
	echo "<b>Fallo al conectar a la BD: </b>" . $link->connect_error . "---" . $link->connect_error;
}
 
return $link;
 
 ?>