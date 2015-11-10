<?php
	require_once 'libreria/JSON_Decoder.php';
	
	//LeerDirectorio($directorio);
	$objetosJSON=JsonDecodifica("ejemploJSON.json");
	
	//var_dump($objetos);
	echo $objetosJSON->name;
	echo "<br />";
	echo $objetosJSON->properties->id->description;
	
	
?>