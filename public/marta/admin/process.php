<?php


$my_database_txt = 'prodotti.txt';

$timefile = $today = date("Ymdhms");

$tipo = $_GET['tipo'];
$code = $_GET['code'];
$name = $_GET['name'];
$ore = $_GET['ore'];
$desc = $_GET['desc'];
$pri = $_GET['pri'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = 'fileupload/';
	$extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF' ];
		
        $all_files = count($_FILES['files']['tmp_name']);

        for ($i = 0; $i < $all_files; $i++) {  
		$file_name = $_FILES['files']['name'][$i];
		$file_tmp = $_FILES['files']['tmp_name'][$i];
		$file_type = $_FILES['files']['type'][$i];
		$file_size = $_FILES['files']['size'][$i];
		$tmp = explode('.', $_FILES['files']['name'][$i]);
		$file_ext = strtolower(end($tmp));

		$file = $path . $file_name;
		
		$ricavaestensione = explode('.',$file);
		$nomefile = $ricavaestensione[0];
		$estensione = $ricavaestensione[1];
		$nomefile22 = "f";
        $nuovonomevariabili = ($nomefile."|".$code."|".$name."|".$desc."|".$pri."__.".$estensione);
		$nuovonomevariabili2 = ($nomefile22."|".$code."|".$name."|".$desc."|".$pri."__.".$estensione);		
       
		
		if (!in_array($file_ext, $extensions)) {
			$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
		}

		if ($file_size > 10097152) {
			$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
		}

		if (empty($errors)) {
			move_uploaded_file($file_tmp,'./fileupload/'.$timefile.$file_name);
		}
	}

	if ($errors) print_r($errors);
    }
}



	if(!is_writable($my_database_txt)){
		exit("il file non ha i permessi di scrittura!");
		}
	// riceviamo i dati e li filtriamo
$bad_char = array("|");
	$campo0 = str_replace($bad_char, "", $tipo);
	$campo1 = str_replace($bad_char, "", $code);
	$campo2 = str_replace($bad_char, "", $name);
	$campo3 = str_replace($bad_char, "", $ore);
	$campo3b = str_replace($bad_char, "", $desc);
	$campo4 = str_replace("\n","<br>",$campo3b);
	$campo5 = str_replace($bad_char, "", $pri);

	// apriamo il file
	$open = fopen($my_database_txt, "a+");
	// scriviamo i dati separati dal carattere separatore
	fwrite($open, $campo0."|".$campo1."|".$campo2."|".$campo3."|".$campo4."|".$campo5."|".$timefile.$file_name."\r\n"); 
	// chiudiamo il file  

	fclose($open);
	
	// ritorniamo nella pagina di visualizzazione
    //  header("location: red.php");
	exit;


/*

$ricavaestensione = explode('xyzxyz',$file);
	$nomefile = $ricavaestensione[0];
	$estensione = $ricavaestensione[1];


move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $newfilename);
*/