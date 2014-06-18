<?php
	$data = $_POST['data'];
	$file = fopen("./txt/media.csv","w");
	if(fwrite($file,$data)){
		echo "File Created";
	}
	else echo "Unable to create csv file";
	fclose($file);
?>
