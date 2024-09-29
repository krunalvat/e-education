
<?php

	
$my_database_txt = 'prodotti.txt';	
	
	
	
	// ::::::::::::::::::::::::::::::::
	
	
if(!isset($_GET['row'])){
	header("location: welcome.php");
	exit;
	}
$array_righi = file($my_database_txt);
if(!isset($array_righi[$_GET['row']])){
	exit('errore nella chiave dell\'array');
	}
list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $array_righi[$_GET['row']]);	
	

$catattuale = $campo0;	
?>



<html lang="it">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  
  
<body>
<center>

<br><br>  <br><br>

<h2>Modifica prodotto</h2><br>
	
	<form action="action-update.php" method="post">


 <?php

 $my_database_txt25 = 'categorie.txt'; 
  
if ($key25 == 0) $riga = "0";

$array_righi25 = file($my_database_txt25);
foreach($array_righi25 as $key25 => $capi){
	list($campo0a, $campo1a, $campo2a, $campo3a, $campo4a, $campo5a, $campo6a) = explode("|", $capi);

if ($catattuale === $campo0a) {
$catcorrente = $campo2a;
} 
	} 

 ?>

<label for=""><strong style="color:#4e4d4d">Categoria:</strong></label>
<select id="campo0" name="campo0" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="tipologia">
	<option value="<?php echo htmlentities($campo0, ENT_QUOTES); ?>" selected><?php echo $catcorrente; ?></option>	




 <?php
 
 $attuale = htmlentities($campo0, ENT_QUOTES);
   
 $my_database_txt2 = 'categorie.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi = file($my_database_txt2);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);

if ($attuale === $campo0) {

} else {
 echo (" <option value='$campo0'>$campo2</option>");
} 
	


	} 

 ?>



    </select>


 <?php
 
   
 $my_database_txt2 = 'prodotti.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi = file($my_database_txt2);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $array_righi[$_GET['row']]);

	} 

 ?>



<br>

<div style="visibility:hidden;height:0px">	
<label for=""><strong style="color:#4e4d4d">Codice prod.:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo1" name="campo1" value="<?php echo htmlentities($campo1, ENT_QUOTES); ?>" />
</div>

	
<label for=""><strong style="color:#4e4d4d">Titolo:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo2" name="campo2" value="<?php echo htmlentities($campo2, ENT_QUOTES); ?>" />
<br>

<div style="visibility:hidden;height:0px">
<label for=""><strong style="color:#4e4d4d">Durata ore | Taglia | Colore:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo3" name="campo3" value="<?php echo htmlentities($campo3, ENT_QUOTES); ?>" />
<br>
</div>
	

<label for=""><strong style="color:#4e4d4d">Descrizione:</strong></label>

<?php
	$campo4 = str_replace("<br>","\n", $campo4);
	$campo4 = str_replace("<br/>","\n", $campo4);
?>



	<textarea type="text" style="padding-top: 10px; width:75vw; max-width:500px; border-radius:9px;height:250px;color:black" id="campo4" name="campo4" value="" /><?php echo htmlentities($campo4, ENT_QUOTES); ?></textarea>


	
<br>
	
<label for=""><strong style="color:#4e4d4d">Prezzo in Euro</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo5" name="campo5" value="<?php echo htmlentities($campo5, ENT_QUOTES); ?>" />

	<strong style="font-size:14px">Inserire il prezzo. Esempio: 6,50 </strong> <strong style="font-size:14px; color:red"> <br>*Per fare un blocco informativo (senza prezzi) inserire: 0<br><br></strong><strong style="color:red; font-size:14px">*Solo per prezzi multipli</strong>
	
	<strong style="font-size:14px">inserire </strong> <strong style="color:red; font-size:14px">specifica abbreviata</strong> <strong style="font-size:14px"><strong style="font-size:14px">, </strong><strong style="color:red; font-size:14px">prezzo</strong><strong> <strong style="font-size:14px"> e </strong><strong style="color:red; font-size:14px">trattino</strong>.<br><strong>Esempio (birra): <strong style="color:green">Piccola 4,00 - Media 6,00</strong><br>
<br>



	

<h3>Immagine (facoltativa)</h3>

<?php if ($campo6 <1) {
echo '<div id="old">';
echo '<img src="../../noimage.png" style="height:70px;"><br><br>';	
} else {
echo '<div id="old">';
echo '<img src="fileupload/'.$campo6.'" style="height:70px;"><br><br>';		
}
?>

	
</div>
<div id='preview'></div><br><br>	
	
<br><br><br>		



 
	
	<div style="visibility:hidden">
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo6" name="campo6" value="<?php echo htmlentities($campo6, ENT_QUOTES); ?>" />	
	</div>
	<input type="hidden" name="row_update" value="<?php echo $_GET['row']; ?>" />
	


	
	
	<input type="submit" name="modifica" style="width:75vw; max-width:400px;border-radius:9px;height:50px;color:black" value="SALVA MODIFICHE" />
	
</form>


<a href="welcome.php"><h3 style="color:black"><strong>< ANNULLA</strong><br><br></h3></a>





<!-- UPLOAD -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<style type="text/css">
	#preview img{
		margin: 5px;
	}
	</style>



	
<div style="margin-top:-240px">
	<form method='post' action='' enctype="multipart/form-data">
		<span id="magic"><input type="file" id='files' name="files[]" multiple><br><br></span>
		<span id="magic2"><input style="width:75vw; max-width:200px;border-radius:9px;height:35px;color:black" type="button" id="submitz" value='Carica'></span>
		<h4 style="color:red">Per confermare tutte le modifiche premere qui sotto:</h4>
	</form>
</div>


<?php if ($campo6 <1) {
} else {
	
?>	

<div style="margin-top:-190px; margin-left:-180px">
	<form method='post' action='' enctype="multipart/form-data">
		<strong id="submitx" style="background-color:transparent;">
		<span id="eliminafoto"><i class="fa fa-trash-o" aria-hidden="true" style="color:red;font-size:26px"></i></span><div>
	</form>
</div>

<?php
}
?>



	<script type="text/javascript">
	$(document).ready(function(){

		$('#submitz').click(function(){

			var form_data = new FormData();


            var totalfiles = document.getElementById('files').files.length;
            for (var index = 0; index < totalfiles; index++) {
                form_data.append("files[]", document.getElementById('files').files[index]);
            }


            $.ajax({
                url: 'ajaxfile.php',
               	type: 'post',
               	data: form_data,
               	dataType: 'json',
                contentType: false,
                processData: false,
                success: function (response) {
                   	
                   	for(var index = 0; index < response.length; index++) {
					    var src = response[index];

					    
						$('#old').hide();
					    $('#preview').replaceWith('<img src="'+src+'" height="70px">');
						var ret = src.replace('fileupload/','');
						console.log(ret); 
						$('#campo6').attr('value', ret)
					}
                   	
                }
            });
		});
	});
	</script>
	
	
	<script type="text/javascript">
	$(document).ready(function(){

		$('#submitx').click(function(){
        $('#old').hide();
		$('#preview').replaceWith('<img src="../../noimage.png" height="70px">');
		$('#campo6').attr('value', '')
		$('#eliminafoto').hide();
		$('#magic').hide();
		$('#magic2').hide();
		$('#magic3').show();

		});
	});
	</script>
	


	
<!-- FINE UPLOAD -->




</center>


</body>


<style>
body {
    font-size: 12pt;
	background-color:white;
}
#child {
    width: 800px; height: 120px;
}
#coverup {
    position: relative;
    left: 0; top: -40px;
    width: 200px; height: 40px;
    background: #fff;
}
.center
{
    left: 50%;
	margin-left: -70px;
    position: absolute;
    top: 35%;
}

.center div
{
    margin-left: -50%;
    margin-top: -50%;
    height: 100px;
    width: 100px;
	 text-align: center;
}
label {
    color: #ffffff;
    display: block;
    font-size: 0.8em;
    font-weight: 600;
    letter-spacing: 0.25em;
    margin: 0 0 1em 0;
    text-transform: uppercase;
    text-align: center;
}

form {
    margin: 0 0 2em 0;

}
p {
    margin: 0 0 2em 0;
    width: 240px;
}
input[type="text"], input[type="password"], input[type="email"], input[type="tel"], input[type="search"], input[type="url"], select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    background: rgba(189, 189, 189, 0.45);
    border: none;
    border-radius: 0;
    color: inherit;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
	height: 2em;
}
.center2
{
    left: 25%;
	    right: 25%;
	

    position: absolute;
    top: 44%;
}
.foot
{
position: fixed;
bottom: 0;
height: 30px;
width: 100%;
background-color: #000000;
text-align: right;

}
	</style>
	
	<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900);
html, body, html * {
  font-family: 'Roboto', sans-serif;
}




</style>


</html>