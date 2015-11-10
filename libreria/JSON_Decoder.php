<?php
	function JsonDecodifica($fichero) {
		$d=fopen($fichero,"r");
		$datos=fread($d, filesize($fichero));
		fclose($d);
		return json_decode($datos);
	}
?>