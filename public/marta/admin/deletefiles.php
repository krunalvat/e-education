<html>
<body>
<?php
$my_database_txt = 'prodotti.txt';

/*************************
ELIMINARE UN RIGO
**************************/
if(isset($_GET['delete']))
	{
	// creiamo l'array con tutti i righi
	$array_righi = file($my_database_txt);
	// eliminiamo dall'array il rigo
	unset($array_righi[$_GET['delete']]);
	// apriamo il file resettando il contenuto
	$open = fopen($my_database_txt, "w");
	foreach($array_righi as $key => $value){
		// ri-scriviamo tutti i righi (rimanenti)
		fwrite($open, $value);
		}
	fclose($open);
	// ritorniamo nella pagina di visualizzazione
	// header("location: welcome.php");
	
	echo '<meta http-equiv="refresh" content="0;url=red.php">';
	exit;
	}

?>


<center>
<br><br><br>

<h3 style="color:black"> Prodotto rimosso</h3>

<br><br>

<button style="height:40px; min-width:150px;" onclick="goBack()">TORNA AL CPANEL</button>

</center>

<script>
function goBack() {
  window.history.go(-1);
}
</script>


</body>
</html>