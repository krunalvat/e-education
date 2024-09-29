<?php
    extract($_REQUEST);
    $file=fopen("categorie.txt","a");

   //  fwrite($file,"name :");		$username = str_replace("\n",'<br>',$username);    $username = str_replace("\r",'<br>',$username);


	// riceviamo i dati e li filtriamo
	$bad_char = array("|");
	$campo0 = str_replace($bad_char, "", $tipo);
	$campo1 = str_replace($bad_char, "", $code);
	$campo2 = str_replace($bad_char, "", $name);
	$campo3 = str_replace($bad_char, "", $ore);
	$campo3b = str_replace($bad_char, "", $desc);
	$campo4 = str_replace("\n","<br>",$campo3b);
	$campo5 = str_replace($bad_char, "", $pri);
	
	
	// scriviamo i dati separati dal carattere separatore
	fwrite($file, $campo0."|".$campo1."|".$campo2."|".$campo3."|".$campo4."|".$campo5."|".$timefile.$file_name."\r\n");	
	fclose($file);
    header("location: red.php");
	
 ?>
