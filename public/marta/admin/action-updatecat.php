<?php


$my_database_txt = 'categorie.txt';




/************************
MODIFICARE UN RIGO
*************************/

if(isset($_POST['modifica']) AND isset($_POST['row_update']))
	{
	// creiamo l'array con tutti i righi
	$array_righi = file($my_database_txt);
	// riceviamo i dati e li filtriamo
	$bad_char = array("|");
	$campo0 = str_replace($bad_char, "", $_POST['campo0']);
	$campo1 = str_replace($bad_char, "", $_POST['campo1']);
	$campo2 = str_replace($bad_char, "", $_POST['campo2']);
	$campo3 = str_replace($bad_char, "", $_POST['campo3']);
	$campo3b = str_replace($bad_char, "", $_POST['campo4']);
	$campo4 = str_replace("\n","<br>",$campo3b);

	
	
	
	$campo5 = str_replace($bad_char, "", $_POST['campo5']);
	$campo6 = str_replace($bad_char, "", $_POST['campo6']);
	// ri-scriviamo il rigo (che sostituirà il precedente)
	$array_righi[$_POST['row_update']] = $campo0."|".$campo1."|".$campo2."|".$campo3."|".$campo4."|".$campo5."|".$campo6."\r\n";

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
	}
	
	
	
?>