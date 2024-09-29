<?php


$my_database_txt = 'infoazienda.txt';




/************************
MODIFICARE UN RIGO
*************************/


	// creiamo l'array con tutti i righi
	$array_righi = file($my_database_txt);
	// riceviamo i dati e li filtriamo
	$bad_char = array("|");
	$campo0 = str_replace($bad_char, "", $_POST['campo0']);
	$campo1 = str_replace($bad_char, "", $_POST['campo1']);
	$campo2 = str_replace($bad_char, "", $_POST['campo2']);
	$campo3 = str_replace($bad_char, "", $_POST['campo3']);
	$campo4 = str_replace($bad_char, "", $_POST['campo4']);
	$campo5 = str_replace($bad_char, "", $_POST['campo5']);
	$campo6 = str_replace($bad_char, "", $_POST['campo6']);
	$campo7 = str_replace($bad_char, "", $_POST['campo7']);
	$campo8 = str_replace($bad_char, "", $_POST['campo8']);
	$campo9 = str_replace($bad_char, "", $_POST['campo9']);
	$campo10 = str_replace($bad_char, "", $_POST['campo10']);
	$campo11 = str_replace($bad_char, "", $_POST['campo11']);
	$campo12 = str_replace($bad_char, "", $_POST['campo12']);
	$campo13 = str_replace($bad_char, "", $_POST['campo13']);
	$campo14b = str_replace($bad_char, "", $_POST['campo14']);
	$campo14 = str_replace("\n","<br>",$campo14b);
	$campo15 = str_replace($bad_char, "", $_POST['campo15']);
	$campo16 = str_replace($bad_char, "", $_POST['campo16']);
	$campo17 = str_replace($bad_char, "", $_POST['campo17']);
	$campo18 = str_replace($bad_char, "", $_POST['campo18']);
	

	
	

	// ri-scriviamo il rigo (che sostituirà il precedente)
	$array_righi[0] = $campo0."|".$campo1."|".$campo2."|".$campo3."|".$campo4."|".$campo5."|".$campo6."|".$campo7."|".$campo8."|".$campo9."|".$campo10."|".$campo11."|".$campo12."|".$campo13."|".$campo14."|".$campo15."|".$campo16."|".$campo17."|".$campo18;

	// apriamo il file resettando il contenuto
	$open = fopen($my_database_txt, "w");
	foreach($array_righi as $key => $value){
		// ri-scriviamo tutti i righi
		fwrite($open, $value);
		}
	fclose($open);
	// ritorniamo nella pagina di visualizzazione
	header("location: red.php");
	exit;
	
	
	
	
?>