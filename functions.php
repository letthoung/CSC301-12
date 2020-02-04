<?php 
function jsonToArray(string $file){
	return json_decode(file_get_contents($file),true);
}
?>