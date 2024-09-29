<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">



  <title>MenuMio Cpanel</title>
</head>

<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 


  <style id="compiled-css" type="text/css">

.sidebar-kiri {
  position: fixed;
  top: 0;
  left: 0;
  width: 30px;
  height: 100%;
  background-color: #252a32;
  color: #fff;
  overflow: hidden;
  transition: width .3s ease-in-out;
  z-index: 100;
}

.sidebar-kiri:hover {
  width: 200px;
}

.sidebar-kiri:hover .main-nav ul li a {
  opacity: 1;
  left: 0;
  transition-delay: .2s;
}

.sidebar-kiri .main-nav ul li {
  margin-left: -35;
  min-height: 40px;
  max-height: 40px;
  line-height: 3px;
  position: relative;
  transition: all .3s ease-in-out;
}



.sidebar-kiri .main-nav ul li.logo a {
  text-transform: uppercase;
  font-weight: 800;
}

.sidebar-kiri .main-nav ul li.logo span:before {
  color: #1FCFC6;
  font-size: 1.5em;
}
.sidebar-kiri .main-nav ul li.logo + li {

}

.sidebar-kiri .main-nav ul li a {
  display: block;
  padding-left: 50px;
  position: relative;
  left: 15px;
  opacity: 0;
  transition: all .3s ease-in-out;
  transition-delay: 0s;
  cursor: pointer;
  font-weight: 300;
}

.sidebar-kiri .main-nav ul li span {
  position: absolute;
  width: 50px;
  height: 50px;
  top: 0;
  left: -90px;
  text-align: center;
}

/*
.sidebar-kiri .main-nav ul li span:before {
  font-size: 1.25em;
  transition: all .3s ease-in-out;
}
*/

/*
.sidebar-kiri .main-nav ul li:hover {
  background-color: #1b1e24;
}
*/

.sidebar-kiri .main-nav ul li:hover span:before {
  color: #1FCFC6;
}
.content {
  position: relative;
}


    /* EOS */
  </style>
  
  
 
  <script>
$(document).ready(function() {
$("a.chiudi").click(ontop);
   function ontop() {
   // se mobile
   if(window.outerWidth < 600) {
   $(".sidebar-kiri").toggleClass("closemob");
   $(".closemob22").toggleClass("closemob2");
} else{
	$(".sidebar-kiri").toggleClass("close");
   $(".sidebar-kiri").toggleClass("close2");
  $('a')[0].click();
}

 }
 });
  </script>
  

<style>
.closemob { 
background-color: #252a32;
width: 30px!important;
overflow: hidden;
 transition: width .3s ease-in-out;
  z-index: 100;
}
 
.closemob22 { 
position: absolute;  
height: 0px; 
width: 0px;  
overflow: hidden;
}

.closemob2 { 
position: absolute; 
background-color: transparent; 
height: 1000px; 
width: 40px; 
z-index: 99999; 
overflow: hidden;
}



.close { 
background-color: green;
width: 30px!important;
overflow: hidden;
  transition: width .3s ease-in-out;
  z-index: 100;
}
.close2 { 
width: auto;
transition: all .3s ease-in-out;
}
</style>




<a href="#" id="chiudi" class="chiudi"></a>


 <aside class='sidebar-kiri'>
  <div class='main-nav'>
  <a style="position:absolute;top:0px;" href="#." class="chiudi" style="color:white">
  <div class="closemob22"></div>
  
  
  
  
</a>
    <ul>

      <li>
        <a href="#." class="chiudi" style="color:white"><img src="../../qr7.png" style="height:30px"></a>
        <span></span>
      </li>
	  
      <li class='fa fa-picture-o'>
        <a href="#logo" class="chiudi" style="color:white">Logo</a>
        <span></span>
      </li><br>

       <li class='fa fa-camera'>
        <a href="#sfondo" class="chiudi" style="color:white">Sfondo</a>
        <span></span>
      </li><br>
	  
       <li class='fa fa-paint-brush'>
        <a href="#layout" class="chiudi" style="color:white">Layout</a>
        <span></span>
      </li><br>	
	  
	         <li class='fa fa-language'>
        <a href="#lang" class="chiudi" style="color:white">Multilingua</a>
        <span></span>
      </li><br>	

       <li class='fa fa-qrcode'>
        <a href="#qrcode" class="chiudi" style="color:white">Qr-code</a>
        <span></span>
      </li><br>	 

       <li class='fa fa-shopping-cart'>
        <a href="#shop" class="chiudi" style="color:white">Ordini</a>
        <span></span>
      </li><br>	

       <li class='fa fa-file-text-o'>
        <a href="#info" class="chiudi" style="color:white">Info</a>
        <span></span>
      </li><br>	  

       <li class='fa fa-globe'>
        <a href="#social" class="chiudi" style="color:white">Social</a>
        <span></span>
      </li><br>	

       <li class='fa fa-list'>
        <a href="#categorie" class="chiudi" style="color:white">Categorie</a>
        <span></span>
      </li><br>	

       <li class='fa fa-plus-circle'>
        <a href="#aggiungicategorie" class="chiudi" style="color:red">Nuova Categoria</a>
        <span></span>
      </li><br>	

       <li class='fa fa-list'>
        <a href="#prodotti" class="chiudi" style="color:white">Prodotti</a>
        <span></span>
      </li><br>	 

       <li class='fa fa-plus-circle'>
        <a href="#aggiungiprodotti" class="chiudi" style="color:red">Nuovo Prodotto</a>
        <span></span>
      </li><br>	 

       <li class='fa fa-sign-out'>
        <a href="logout.php" class="chiudi" style="color:white">Esci</a>
        <span></span>
      </li><br>

 	  

    </ul>
  </div>
</aside>




<a href="../index.php?preview=adminmodepreview" class="float">
<i class="fa fa-eye my-float"></i>
</a>

<a name="logo"><br>


<!-- :::::::::::::::::::::::::::::: LOGO :::::::::::::::::::::::::: -->
<center>
<br><br>

 <h2><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp; Logo del menù</h2>
 
 <div style='width:75vw; max-width:600px;'>
 
 
<strong style='color:green'>formati disponibili: jpg, jpeg, png, gif e svg</strong><br><br>
<strong style='font-size:14px'>Il Logo </strong><strong style='color:red;font-size:14px'>sostituisce</strong><strong style='font-size:14px'> il "</strong><strong style='color:red;font-size:14px'>Nome dell'attività</strong><strong style='font-size:14px'>" nell'intestazione del menù.<br>
*Per eliminare un Logo utilizzare il bottone <i class='fa fa-trash-o' aria-hidden='true' style='color:red; font-size:22px'></i>, disponibile dopo il suo caricamento.</strong>


</div>
<br><br>


<?php
global $path;    // path to directory has to be global, using it later in html
$dir = "logo/";
$files = scandir($dir, 1);                // read directory backkwards
$picture = ($files[0]);                   // get las picture file name
$path = "./logo/$picture";

if(count($files) == 2) {
echo ('<div style="visibility:hidden; height:0px">');
} else {
echo ('<div><img class="alignnone size-large" alt="Logo del menu" src="'.$path.'" style="width:95vw;max-width:450px" height="auto" /><div style="position:relative; margin-top: -140px; right: 34vw;">');
}
?>

<a href='deletelogo.php' OnClick='return confirm("Confermi Eliminazione logo ?")' style='font-size:22px; color:red' ><i class='fa fa-trash-o' aria-hidden='true' style='color:red'></i></a>



</div>





<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='userFile'><br><br>
<input type='submit' style='background-color:#07b63a;width:75vw; max-width:500px;border-radius:9px;height:50px;color:black' name='upload_btn' value='Carica'>
</form>



<?php

$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "logo.".$ext;
$target = 'logo/'.$newname;


if($ext != "jpg" && $ext != "png" && $ext != "svg" && $ext != "SVG" && $ext != "jpeg"
&& $ext != "gif" && $ext != "JPG" && $ext != "PNG" && $ext != "JPG") {
} else {
$files = glob('logo/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
echo '<meta http-equiv="refresh" content="0;url=red.php">';
}

?>

<br></hr>

<hr>
<!-- :::::::::::::::::::::::::::::: SFONDO MENU :::::::::::::::::::::::::: -->

<br><br>
<a name="sfondo"><br>
 <h2><i class="fa fa-camera" aria-hidden="true"></i>&nbsp; Immagine di sfondo del menù</h2>
 
 <div style='width:75vw; max-width:600px;'>
 
<strong style='color:green'>formati disponibili: jpg, jpeg, png, gif e svg</strong><br><br>
<strong style='font-size:14px'>L'immagine di sfondo </strong><strong style='color:red;font-size:14px'>sostituisce</strong><strong style='font-size:14px'> l'</strong><strong style='color:red;font-size:14px'>immagine del layout</strong><strong style='font-size:14px'> grafico utilizzato.<br>
*Per eliminare l'immagine utilizzare il bottone <i class='fa fa-trash-o' aria-hidden='true' style='color:red; font-size:22px'></i>, disponibile dopo il suo caricamento.</strong>

</div>
<br><br>


<?php
global $path2;    // path to directory has to be global, using it later in html
$dir2 = "background/";
$files2 = scandir($dir2, 1);                // read directory backkwards
$picture2 = ($files2[0]);                   // get las picture file name
$path2 = "./background/$picture2";

if(count($files2) == 2) {
echo ('<div style="visibility:hidden; height:0px">');
} else {
echo ('<div><img class="alignnone size-large" alt="Logo del menu" src="'.$path2.'" style="width:95vw;max-width:450px" height="auto" /><div style="position:relative; margin-top: -140px; right: 34vw;">');
}
?>

<a href='deletebackground.php' OnClick='return confirm("Confermi Eliminazione immagine di sfondo ?")' style='font-size:22px; color:red' ><i class='fa fa-trash-o' aria-hidden='true' style='color:red'></i></a>
</div>

<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='userFile2'><br><br>
<input type='submit' style='background-color:#07b63a;width:75vw; max-width:500px;border-radius:9px;height:50px;color:black' name='upload_btn' value='Carica'>
</form>




<!-- STOP BOTTONE FLOATING -->
<section
  style="display: flex; flex-direction: column; padding-left: 100px; height: auto; position: sticky; top: 0">
</section>




<?php

$info2 = pathinfo($_FILES['userFile2']['name']);
$ext2 = $info2['extension']; // get the extension of the file
$newname2 = "background.".$ext2;
$target2 = 'background/'.$newname2;


if($ext2 != "jpg" && $ext2 != "png" && $ext2 != "svg" && $ext2 != "SVG" && $ext2 != "jpeg"
&& $ext2 != "gif" && $ext2 != "JPG" && $ext2 != "PNG" && $ext2 != "JPG") {
} else {
$files2 = glob('background/*'); //get all file names
foreach($files2 as $file2){
    if(is_file($file2))
    unlink($file2); //delete file
}
move_uploaded_file( $_FILES['userFile2']['tmp_name'], $target2);
echo '<meta http-equiv="refresh" content="0;url=red.php">';
}

?>


<br>
<hr>


<br><br>




<!-- ::::::::::::::::::::::::::::::: info azienda :::::::::::::::::::::::::::: -->

<?php

$my_database_txt = 'infoazienda.txt';	


$array_righi = file($my_database_txt);
if(!isset($array_righi[0])){
	exit('errore nella chiave dell\'array');
	}
list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6, $campo7, $campo8, $campo9, $campo10, $campo11, $campo12, $campo13, $campo14, $campo15, $campo16, $campo17, $campo18) = explode("|", $array_righi[0]);	
		
?>

<form action="action-updateinf.php" method="post">



<?php
 
 $attuale = htmlentities($campo11, ENT_QUOTES);
   
 $my_database_txt29 = '../../layout.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi29 = file($my_database_txt29);
foreach($array_righi29 as $key => $capi){
	list($campo0l, $campo1l, $campo2l, $campo3l, $campo4l, $campo5l, $campo6l) = explode("|", $capi);

if ($attuale === $campo0l) {
$temacorrente = $campo5l;
} else {

} 

	} 

 ?>
 
 
 <a name="layout"><br>
 
  <h2><i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp;Layout e personalizzazioni</h2><br>
 
 <div style='width:75vw; max-width:600px;'><strong style='font-size:14px'>Dopo aver inserito/selezionato uno o più campi in questa sezione premere il bottone </strong> <strong style='font-size:14px; color:#07b63a'>Applica modifiche</strong> <strong style='font-size:14px'><br> per applicare i cambiamenti al menù online.</strong><br>
 </div>
 	<!-- FLOATING BUTTON -->

<section style="width:80vw; display: flex; flex-direction: column; height: 50px; position: sticky; top: 0">

<center>
<br><br>
  <button style='background-color:#07b63a;width:75vw; max-width:500px;border-radius:9px;height:50px;color:black'>
    Applica modifiche
  </button>
  

  </center>
  
  

</section>

<!-- / floating button --> 
 
 
 


 <br><br><br>
 


 
 

 <h3><i class="fa fa-paint-brush" aria-hidden="true"></i> &nbsp; scelta del layout grafico:</h3>


<select id="campo11" name="campo11" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="tipologia">
<option value="<?php echo $attuale; ?>" selected><?php echo $temacorrente; ?> (seleziona)</option>



 <?php
 
$my_database_txt29 = '../../layout.txt'; 
if ($key == 0) $riga = "0";
$array_righi29 = file($my_database_txt29);
foreach($array_righi29 as $key => $capi){
	list($campo0l, $campo1l, $campo2l, $campo3l, $campo4l, $campo5l, $campo6l) = explode("|", $capi);
if ($temacorrente === $campo5l) {
} else {
 echo (" <option value='$campo0l'>$campo5l</option>");
} 
	} 

 ?>

    </select>


<br>


<br>

  <script type="text/javascript">
        var colorCode2;
function colorPickerEventHand(value){
    colorCode2= value;
    $('#campo18').val( colorCode2 );
}

function clickInline() {    
        $('#campo18').val( '' );
		$('#colorpicker2').val( '#919191' );
}
    </script>
	
	
 <h3><i class="fa fa-adjust" aria-hidden="true" style="font-size:25px"></i> &nbsp; Personalizza colore di Sfondo</h3>

        <input onchange="colorPickerEventHand(this.value)" id="colorpicker2" type="color" value="<?php echo htmlentities($campo18, ENT_QUOTES); ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong onclick="clickInline()" > <i class="fa fa-trash-o" aria-hidden="true" style="color:red; font-size:22px"></i></strong> <strong style="font-size:14px;"> per ripristinare colore del Layout<br><br></strong>
<input type="text" readonly placeholder="Colore Sfondo" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo18" name="campo18" value="<?php echo htmlentities($campo18, ENT_QUOTES); ?>" />




    <script type="text/javascript">
        var colorCode;
function colorPickerEventHandler(value){
    colorCode= value;
    $('#campo17').val( colorCode );
}

function clickInline2() {    
        $('#campo17').val( '' );
		$('#color-picker').val( '#919191' );
}
    </script>

 <h3><i class="fa fa-adjust" aria-hidden="true" style="font-size:25px"></i> &nbsp; Personalizza colore Bottoni e Titoli</h3>

        <input onchange="colorPickerEventHandler(this.value)" id="color-picker" type="color" value="<?php echo htmlentities($campo17, ENT_QUOTES); ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong onclick="clickInline2()" > <i class="fa fa-trash-o" aria-hidden="true" style="color:red; font-size:22px"></i></strong> <strong style="font-size:14px;"> per ripristinare colore del Layout<br><br></strong>
<input type="text" readonly placeholder="Colore Bottoni e testo" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo17" name="campo17" value="<?php echo htmlentities($campo17, ENT_QUOTES); ?>" />






<br>
<br>
<hr>
<br>












<a name="lang">	<br>
 <h3><i class="fa fa-language" aria-hidden="true" style="font-size:25px"></i> &nbsp; Attivare multilingua (traduzioni automatiche)?</h3>
 

<select id="campo16" name="campo16" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="mostra qr code?">
<option value="<?php echo htmlentities($campo16, ENT_QUOTES); ?>" selected><?php echo htmlentities($campo16, ENT_QUOTES); ?> (seleziona)</option>	

 <?php
 $multi_lang = htmlentities($campo16, ENT_QUOTES);
 
 if ($multi_lang == "si") {
 echo ("<option value='no'>no</option>");	 
} else {
 echo ("<option value='si'>si</option>");
}

 
 
 ?>

  </select>	
	
	
	
	

	

	
<a name="qrcode"><br>	
 <h3><i class="fa fa-qrcode" aria-hidden="true" style="font-size:25px"></i> &nbsp; mostrare Qr-code? in cima al menù?</h3>


<select id="campo12" name="campo12" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="mostra qr code?">
<option value="<?php echo htmlentities($campo12, ENT_QUOTES); ?>" selected><?php echo htmlentities($campo12, ENT_QUOTES); ?> (seleziona)</option>	

 <?php
 $qr_mode = htmlentities($campo12, ENT_QUOTES);
 
 if ($qr_mode == "si") {
 echo ("<option value='no'>no</option>");	 
} else {
 echo ("<option value='si'>si</option>");
}


if ($campo13 == "sidomicilio") {
	$dicituradomicilio = "Si a domicilio";
 }
 
 if ($campo13 == "siasporto") {
	$dicituradomicilio = "Si da asporto";
 }
 
  if ($campo13 == "sitavoli") {
	$dicituradomicilio = "Si ai tavoli";
 }
 
   if ($campo13 == "no") {
	$dicituradomicilio = "no";
 }
 
 
 ?>

  </select>
  
  
  
 <a name="shop"><br>	
 <h3><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px"></i> &nbsp; accettare Ordini (domicilio, asporto o ai tavoli) ?</h3>


<select id="campo13" name="campo13" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="domicilio?">
<option value="<?php echo htmlentities($campo13, ENT_QUOTES); ?>" selected><?php echo $dicituradomicilio; ?> (seleziona)</option>	

 <?php
 $shopmode = htmlentities($campo13, ENT_QUOTES);
 
 if ($shopmode == "sidomicilio") {
 echo ("<option value='siasporto'>Si da asporto</option>");
   echo ("<option value='sitavoli'>Si ai tavoli</option>");
 echo ("<option value='no'>no</option>");	 
} elseif ($shopmode == "no") {
 echo ("<option value='siasporto'>Si da asporto</option>");
 echo ("<option value='sidomicilio'>Si a domicilio e asporto</option>");
  echo ("<option value='sitavoli'>Si ai tavoli</option>");
} 
elseif ($shopmode == "sitavoli") {
 echo ("<option value='siasporto'>Si da asporto</option>");
 echo ("<option value='sidomicilio'>Si a domicilio e asporto</option>");
 echo ("<option value='no'>no</option>");
}
else {
 echo ("<option value='sidomicilio'>Si a domicilio</option>");
 echo ("<option value='sitavoli'>Si ai tavoli</option>");
 echo ("<option value='no'>no</option>");
} 
 ?>

  </select>

 <br> 
 
<?php
$campo14 = str_replace("<br>","\n", $campo14);
?>
 

<textarea type="text" style="padding-top: 10px; width:75vw; max-width:500px; border-radius:9px;height:250px;color:black" id="campo14" name="campo14" value="" /><?php echo htmlentities($campo14, ENT_QUOTES); ?></textarea>




 <div style='width:75vw; max-width:600px;'>
<strong style='font-size:14px; color:green'>Esempio:</strong>
<strong style='font-size:14px'>
il servizio è attivo da martedì a domenica<br>
Pranzo: 11:00 / 13:00 - Cena: 18:00 / 21.30<br>
*Eventuali ingredienti aggiuntivi saranno richiesti al ritiro<br>
**Il costo aggiuntivo per la consegna è di Euro 1,00</strong>
<br>
</div>

<br>

<input type="text" placeholder="email per ordini" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo4" name="campo4" value="<?php echo htmlentities($campo4, ENT_QUOTES); ?>" />
 <div style='width:75vw; max-width:600px;'>
<strong style='font-size:14px; color:green'>inserisci una email dove ricevere gli Ordini</strong>
<br>
</div>
<br>

<a name="info"><br>
 <h3><i class="fa fa-file-text-o" aria-hidden="true" style="font-size:22"></i> &nbsp; informazioni in fondo al menù</h3>


<!-- <label for=""><strong style="color:#4e4d4d">Campo0:</strong></label> -->
	<input type="text" placeholder="nome dell'attività"  style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo0" name="campo0" value="<?php echo htmlentities($campo0, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="indirizzo completo" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo1" name="campo1" value="<?php echo htmlentities($campo1, ENT_QUOTES); ?>" />
<br>
	

	<input type="text" placeholder="telefono 1" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo2" name="campo2" value="<?php echo htmlentities($campo2, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="telefono 2" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo3" name="campo3" value="<?php echo htmlentities($campo3, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="email" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo15" name="campo15" value="<?php echo htmlentities($campo15, ENT_QUOTES); ?>" />
<br>

	<input type="text" placeholder="sito web (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo5" name="campo5" value="<?php echo htmlentities($campo5, ENT_QUOTES); ?>" />
<br>
<a name="social"><br>
 <h3><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; Social media in fondo al menù</h3>


	<input type="text" placeholder="Facebook (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo6" name="campo6" value="<?php echo htmlentities($campo6, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="Instagram (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo7" name="campo7" value="<?php echo htmlentities($campo7, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="Linkedin (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo8" name="campo8" value="<?php echo htmlentities($campo8, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="Tiktok (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo9" name="campo9" value="<?php echo htmlentities($campo9, ENT_QUOTES); ?>" />
<br>


	<input type="text" placeholder="Youtube (indirizzo completo)" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo10" name="campo10" value="<?php echo htmlentities($campo10, ENT_QUOTES); ?>" />
<br>



  <div style="visibility:hidden; height:20px">

	<input type="submit" name="modifica" style="background-color:#07b63a;width:75vw; max-width:400px;border-radius:9px;height:50px;color:black" value="MODIFICA" />
	
	</div>
	
	
	
</form>







<br>
<hr>

<!-- :::::::::::::::::::::::::::::: CATEGORIE :::::::::::::::::::::::::: -->

<br><br>
<a name="categorie"><br>

<br><br>
 <h2><i class="fa fa-list" aria-hidden="true"></i> &nbsp; Gestione categorie menù</h2>

 
<table class="rwd-table">

  <tr>
    <th>Cat.</th>
    <th>Titolo per bottone</th>
    <th>Titolo esteso</th>

	 
	 <th></th>
	 <th></th>
  </tr>

  

  
  
  
  <?php
   
 $my_database_txt2 = 'categorie.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi = file($my_database_txt2);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);


$riga = ($riga+1);
$status = ($campo0."||");

$productFile = file_get_contents('prodotti.txt', FILE_USE_INCLUDE_PATH);




if (strpos($productFile, $status) !== false) {
 echo ("<tr><td data-th='Cat.'>$campo0</td><td data-th='Tit.'>$campo2</td><td data-th='Tit comp.'>$campo4</td><td><a href='updatecat.php?row=$key' style='font-size:20px; color:#07b63a'><i class='fa fa-pencil' aria-hidden='true''></i></a></td><td></td></tr>");

}
else{
 echo ("<tr><td data-th='Cat.'>$campo0</td><td data-th='Tit.'>$campo2</td><td data-th='Tit comp.'>$campo4</td><td><a href='updatecat.php?row=$key' style='font-size:20px; color:#07b63a'><i class='fa fa-pencil' aria-hidden='true''></i></a></td><td><a href='deletecat.php?delete=$key&file=$campo6' OnClick='return confirm(\"Confermi Eliminazione ?\")' style='font-size:22px; color:red' ><i class='fa fa-trash-o' aria-hidden='true' style='color:red'></i></a></td></tr>");

}

	} 

	if ($riga <1) {
		echo "<strong style='color:red'>$riga Categorie: obbligatoria 1 categoria per inserire prodotti</strong>";
		} else {
				echo "<strong style='color:green'>Categorie presenti: $riga</strong>";
		} 

 
 ?>

 
 </table>
 
 
 
 
 
 
 
 
 <div style='width:75vw; max-width:600px;'><strong style='font-size:14px'>*Puoi eliminare solo le categorie vuote: dopo aver rimosso i prodotti associati a una categoria potrai rimuoverli con il bottone <i class='fa fa-trash-o' aria-hidden='true' style='color:red; font-size:22px'></i>. Utilizza invece <i class='fa fa-pencil' aria-hidden='true'' style='color:#07b63a; font-size:22px'></i> per modificare i contenuti.</strong></div>
 <br>
	
	<!-- categorie -->

	<br>
	<a name="aggiungicategorie"><br>
	  <h2><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Aggiungi categoria <?php echo ($riga+1); ?></h2>
	  
	<form action="config2.php">
	

	<div style="visibility:hidden;height:0px">
	<input id="tipo" name="tipo" value="<?php echo ($riga+1); ?>">
	</div>
	
	
	<div style="visibility:hidden;height:0px">
	<input type="text" id="code" name="code" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="codice"><br>
	<input type="text" id="ore" name="ore" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="Dettagli (Prod.)"><br>
	</div>
	
	<input type="text" id="name" name="name" style="width:75vw; max-width:500px;border-radius:9px;height:50px;color:black" placeholder="titolo per bottone (es. Primi)" required><br>
	
	
	
	<input type="text" id="desc" name="desc" style="width:75vw; max-width:500px;border-radius:9px;height:50px;color:black" placeholder="titolo esteso (es. Primi piatti)" required><br>
	<br>
	
	<div style="visibility:hidden;height:0px">
	<input type="text" id="pri" name="pri" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="prezzo">
    </div>
   

    <input type="submit" style="background-color:#07b63a;width:75vw; max-width:500px;border-radius:9px;height:50px;color:black" value="Inserisci">
	
    </form>
	
	
	</center>
	
  </div>

<br><br>


<hr>
 
 <br><br>
 


	<br>
	<center>
	<a name="prodotti"><br>
	  <h2><i class="fa fa-list" aria-hidden="true"></i> &nbsp;Gestione prodotti</h2>

<!-- ---------------- prodotti ---------------- -->

<?php
$my_database_txt = 'prodotti.txt';

$timefile = $today = date("Ymdhms");

$tipo = $_GET['tipo'];
$code = $_GET['code'];
$name = $_GET['name'];
$ore = $_GET['ore'];
$desc = $_GET['desc'];
$pri = $_GET['pri'];
?>


 <!-- 
 <th class="disableSort">Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Date</th>
				<th>Points</th>
				<th class="disableFilterBy">Controls</th>
 -->



<table class="rwd-table tablemanager">
<thead>
  <tr>
    <th>Cat.</th>
    <th>Titolo</th>
	<th>Img</th>
    <th>Descr.</th>
    <th class="disableSort disableFilterBy">Prezzo</th>
	 
	 <th class="disableSort disableFilterBy"></th>
	 <th class="disableSort disableFilterBy"></th>
  </tr>
</thead>

<style>
.ellipsis {
    max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
</style>

<tbody>

 <?php
if ($key == 0) $riga = ($key+1);

$my_database_txt22 = 'categorie.txt';
$array_righi22 = file($my_database_txt22);
foreach($array_righi22 as $key => $capi){
	list($campo0a, $campo1a, $campo2a, $campo3a, $campo4a, $campo5a, $campo6a) = explode("|", $capi);
	
// crea variabili nome categoria
	${"nomi$key"} = $campo2a;
}

$array_righi = file($my_database_txt);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);
	
	$count = $campo0-1;
	$campo0 = ${"nomi$count"};
	
if ($campo6 >0) {
$immaginetab = ("<td data-th='Img.'><img src='./fileupload/$campo6' style='width:80px'></td>");	
} else {
$immaginetab = ("<td data-th='Img.'><img src='../../noimage.png' style='width:80px'></td>");	
}

 echo ("<tr><td data-th='Cat.'>$campo0</td><td data-th='Tit.'>$campo2</td>$immaginetab<td data-th='Descr.' style='max-width:45vw;' class='ellipsis'>$campo4</td><td data-th='Prezzo'>$campo5</td><td><a href='update.php?row=$key' style='font-size:20px; color:#07b63a'><i class='fa fa-pencil' aria-hidden='true''></i></a></td><td><a href='deletefiles.php?delete=$key&file=$campo6' OnClick='return confirm(\"Confermi Eliminazione ?\")' style='font-size:22px; color:red' ><i class='fa fa-trash-o' aria-hidden='true' style='color:red'></i></a></td></tr>");


	} 

 ?>

</tbody>
 </table>
</center>



 
 <!-- test table -->
 
 <style type="text/css">

		.container { margin: 150px auto; max-width: 960px; }
		a {

			text-decoration: none;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		table, th, td {
		   border: 1px solid #bbb;
		   text-align: left;
		}
		tr:nth-child(even) {
			background-color: #2e353c;
		}
		th {
			background-color: #2e2e2e;
		}
		th,td {
			padding: 5px;
		}
		button {
			cursor: pointer;
		}
		/*Initial style sort*/
		.tablemanager th.sorterHeader {
			cursor: pointer;
		}
		.tablemanager th.sorterHeader:after {
			content: " \f0dc";
			font-family: "FontAwesome";
		}
		/*Style sort desc*/
		.tablemanager th.sortingDesc:after {
			content: " \f0dd";
			font-family: "FontAwesome";
		}
		/*Style sort asc*/
		.tablemanager th.sortingAsc:after {
			content: " \f0de";
			font-family: "FontAwesome";
		}
		/*Style disabled*/
		.tablemanager th.disableSort {

		}
		#for_numrows {
			padding: 10px;
			float: left;
		}
		#for_filter_by {
			padding: 10px;
			float: right;
		}
		#pagesControllers {
			display: block;
			text-align: center;
		}
	</style>

 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script type="text/javascript" src="https://www.jqueryscript.net/demo/pagination-sort-filter-manager/tableManager.js"></script>
	
	<script type="text/javascript">
		// basic usage
		$('.tablemanager').tablemanager({
			firstSort: [[3,0],[2,0],[1,'asc']],
			disable: ["last"],
			appendFilterby: true,
			dateFormat: [[4,"mm-dd-yyyy"]],
			debug: true,
			vocabulary: {
    voc_filter_by: 'Cerca per',
    voc_type_here_filter: 'inserisci testo...',
    voc_show_rows: 'Prodotti per pagina'
  },
			pagination: true,
			showrows: [5,10,20,50,100],
			disableFilterBy: [1]
		});
		// $('.tablemanager').tablemanager();
	</script>
 
 <!-- fine test -->
 
 
  


<br><br>


<div class="box">
  	<center>
	
	
  <a name="aggiungiprodotti"><br>
    <h2><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Aggiungi prodotto</h2>


	
    <form action="config.php">
	

	<input type="text" id="name" name="name" style="width:75vw; max-width:500px;border-radius:9px;height:50px;color:black" placeholder="nome prodotto" required><br>
	



	<select id="tipo" name="tipo" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="tipologia" required>
	<option value="">categoria di appartenenza (seleziona)</option>	


 <?php
   
 $my_database_txt2 = 'categorie.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi = file($my_database_txt2);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);

 echo (" <option value='$campo0'>$campo2</option>");

	} 

 ?>



    </select>
		<strong style="font-size:14px">Se la categoria non esiste ancora devi prima crearla.<br><br></strong>
	<br>

	<div style="visibility:hidden;height:0px">
	<input type="text" id="code" name="code" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="codice"><br>
	<input type="text" id="ore" name="ore" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="durata ore (Corsi) | Dettagli (Prod.)"><br>
	</div>
	

	
	<textarea type="text" id="desc" name="desc" rows="20" style="width:75vw; max-width:500px;padding:10px; height:200px; padding-left:10px; border-radius:9px; color:black; resize: vertical" value="&nbsp;" placeholder="descrizione"></textarea><br>
	
	
	
	<input type="text" id="pri" name="pri" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="prezzo in euro" required>
	
	<div style="visibility:hidden;height:0px">
	<input type="text" id="nomeimg" name="nomeimg" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="nomeimg"> 
	</div>	

	
	<strong style="font-size:14px">Inserire il prezzo. Esempio: 6,50 </strong> <strong style="font-size:14px; color:red"> <br>*Per fare un blocco informativo (senza prezzi) inserire: 0<br><br></strong><strong style="color:red; font-size:14px">*Solo per prezzi multipli</strong>
	
	<strong style="font-size:14px">inserire </strong> <strong style="color:red; font-size:14px">specifica abbreviata</strong> <strong style="font-size:14px"><strong style="font-size:14px">, </strong><strong style="color:red; font-size:14px">prezzo</strong><strong> <strong style="font-size:14px"> e </strong><strong style="color:red; font-size:14px">trattino</strong>.<br><strong>Esempio (birra): <strong style="color:green">Piccola 4,00 - Media 6,00</strong><br>

<h3>Immagine prodotto (facoltativa)</h3>

<br><br><br><br><br><br><br><br><br><br><br>


<div id='preview'></div><br><br><br>



    <input type="submit" style="background-color:#07b63a;width:75vw; max-width:500px;border-radius:9px;height:50px;color:black" value="Aggiungi prodotto">
	
    </form>
	
	
	
	
	
	

<!-- UPLOAD -->





	<style type="text/css">
	#preview img{
		margin: 5px;
	}
	</style>


<div style="margin-top:-260px">
	<form method='post' action='' enctype="multipart/form-data">
		<input type="file" id='files' name="files[]" multiple><br><br>
		<input style="background-color:#07b63a;width:95vw; max-width:200px;border-radius:9px;height:35px;color:black" type="button" id="submitz" value='Carica per utilizzare'>
		<br>Anteprima immagine:
	</form>
</div>

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
						$('#nomeimg').attr('value', ret)
					}
                   	
                }
            });
		});
	});
	</script>
	


	
<!-- FINE UPLOAD -->
	
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br>

  
  
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


/* table */

.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: .5em;
}
.rwd-table td:last-child {
  padding-bottom: .5em;
}
.rwd-table td:before {
  content: attr(data-th) " ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #304050;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46627f;
}
.rwd-table th, .rwd-table td {
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #95a793;
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900);
html, body, html * {
  font-family: 'Roboto', sans-serif;
}



.float {
	z-index: 10;
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 10px;
    right: 2px;
    background-color: #07b63a;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
}


.my-float{
	margin-top:22px;
}

a {
  text-decoration: none;
}

html, body { 
     scroll-behavior: smooth; 
	  overflow-x: hidden;
       height: 98vh;
    }
	
label {
    color: #000000;
}

</style>

</body>
</html>
