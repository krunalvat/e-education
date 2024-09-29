<?php
// Report All PHP Errors
//error_reporting(E_ALL);
// error_reporting(0);

// Session start
session_start();


$mailsito = "85monza@gmail.com";
$codiceiban = "XDAXXXINSERIREXX1";
// Currency symbol, you can change it
$currency = "€";

$msg = "";
$v = "1.7";

$class = 'div_class';

$preview=$_GET['preview'];

?>

<!DOCTYPE html>

<html lang="it">

<?php

$my_azienda_txt = './admin/infoazienda.txt';

// $foldermenu = basename(dirname(__FILE__));
$foldermenu = basename(getcwd());

$qrlink = "www.qr7.it/$foldermenu";

if ($key == 0) $riga = "0";

$array_righi = file($my_azienda_txt);
foreach($array_righi as $key => $capi){
 list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6, $campo7, $campo8, $campo9, $campo10, $campo11, $campo12, $campo13, $campo14, $campo15, $campo16, $campo17, $campo18) = explode("|", $capi);

$titolo = $campo0;
$indirizzo = $campo1;
$telefono = $campo2;
$telefono2 = $campo3;
$email = $campo4;
$sitoweb = $campo5;
$facebook = $campo6;
$instagram = $campo7;
$twitter = $campo8;
$tiktok = $campo9;
$youtube = $campo10;
$layout = $campo11;
$qronoff = $campo12;
$shopattivo = $campo13;
$descrizioneshop = $campo14;
$email2 = $campo15;
$multilang = $campo16;
$varcolore = $campo17;
$varbackground = $campo18;

}

// Layout disponibili
$my_database_txt29 = '../layout.txt'; 
if ($key == 0) $riga = "0";
$array_righi29 = file($my_database_txt29);
foreach($array_righi29 as $key => $capi){
	list($campo0l, $campo1l, $campo2l, $campo3l, $campo4l, $campo5l, $campo6l) = explode("|", $capi);
if ($layout === $campo0l) {
$colore = $campo1l;
$cbackground = $campo2l;
$fontcss = $campo3l;
$font = $campo4l;
$extracode = $campo6l;




 
 
 if ($varcolore != null) {
  $colore = $varcolore;
  $coloreh3 = "color:$colore!important;";
 } else {
 }
 
  if ($varbackground != null) {
  $cbackground = $varbackground;
 } else {
 }

 
 

// hex to rgba
function hex2rgba( $color, $opacity ) {
    list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
    $output = "rgba($r, $g, $b, $opacity)";
    return $output;
}

} else {
} 
	}

 ?>
 

<?php $my_database_txt = './admin/prodotti.txt'; ?>

<head>
<title><?php echo $titolo; ?> menu online</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<?php echo $fontcss ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>


<!-- cart -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script language="Javascript">
	function isNumberKey(evt)
	{
		var charCode=(evt.which)?evt.which:event.keyCode
		if(charCode>31&&(charCode<48||charCode>57))
		return false;return true;
	}
	</script>
<!-- // cart -->



<script>
	var my_string = document.cookie;
	var splitted = my_string.split(';');
	var first_item = splitted.shift();
	var catclass_ok = (first_item.replace(/[^a-zA-Z ]/g, ""));
	var replaced = catclass_ok.replace(/\s+/g, ''); 
</script>


<?php


global $path;    // path to directory has to be global, using it later in html
$dir = "./admin/background/";
$files = scandir($dir, 1);                // read directory backkwards
$picture = ($files[0]);                   // get las picture file name
$path = "./admin/background/$picture";


global $path;    // path to directory has to be global, using it later in html
$dir2 = "../background/$layout/";
$files2 = scandir($dir2, 1);                // read directory backkwards
$picture2 = ($files2[0]);                   // get las picture file name
$path2 = "../background/$layout/$picture2";



if(count($files) == 2) {
// se default
$sfondo = $path2;
$colorehex = hex2rgba($colore, 0.5);
$colorehex2 = hex2rgba($cbackground, 0.5);
} else {
// se upload
$sfondo = $path;
$colorehex = hex2rgba($colore, 0.5);
$colorehex2 = hex2rgba($cbackground, 0.5);
}





?>


<!-- SCRIPT CART -->
	<?php
	// Add item to cart
	if (empty($_POST['item']) || empty($_POST['price']) || empty($_POST['quantity']))
	{ } else {

		# Take values
		$SBCSprice = $_POST['price'];
		$SBCSitem = $_POST['item'];
		$SBCSquantity = $_POST['quantity'];
		$SBCSuniquid = rand();
		$SBCSexist = false;
		$SBCScount = 0;
		
		// If SESSION Generated?
		
		if($_SESSION['SBCScart']!="")
		{
			// Look for item
			foreach($_SESSION['SBCScart'] as $SBCSproduct)
			{
				// Yes we found it
				if($SBCSitem == $SBCSproduct['item']) {
					$SBCSexist = true;
					break;
				}
				$SBCScount++;
			}
		}

		// If we found same item
		
		if($SBCSexist)
		{
			// Update quantity
			$_SESSION['SBCScart'][$SBCScount]['quantity'] += $SBCSquantity;
			// Write down the message and then we open in modal at the bottom
			$msg = "
			<script type=\"text/javascript\">
				$(document).ready(function(){
					$('#myDialogText').text('".$SBCSitem." quantità carrello aggiornata');
					$('#modal-cart').modal('show');
				});
			</script>
			";
			$class = 'div_red';

		} else {
			// If we do not found, insert new
			$SBCSmycartrow = array(
				'item' => $SBCSitem,
				'unitprice' => $SBCSprice,
				'quantity' => $SBCSquantity,
				'id' => $SBCSuniquid
			);

			// If session not exist, create
			if (!isset($_SESSION['SBCScart']))
				$_SESSION['SBCScart'] = array();

			// Add item to cart
			$_SESSION['SBCScart'][] = $SBCSmycartrow;

			// Write down the message and then we open in modal at the bottom
	
	
			$msg = "
			<script type=\"text/javascript\">
				$(document).ready(function(){
					$('#myDialogText').text('".$SBCSitem." aggiunto al carrello');
					$('#modal-cart').modal('show');
					$('.'+replaced).attr('style', 'background-color: $colore !important; color: white');
					$('.'+replaced).trigger('click');
										
				});
			</script>
			";
			

			
			
			$class = 'div_red';
	
		}
	}
	

	// Clear cart
	if(isset($_GET["clear"]))
	{
		session_unset();
		session_destroy();
		
		// Write down the message and then we open in modal at the bottom
		$msg = "
		<script type=\"text/javascript\">
			$(document).ready(function(){
				$('#myDialogText').text('Il tuo carrello è stato svuotato..');
				$('#modal-cart').modal('show');
			});
		</script>
		";
		$class = 'div_green';
	}
	
	
		if(isset($_GET["menu"]))
	{
		session_unset();
		session_destroy();
		// Write down the message and then we open in modal at the bottom

		$class = 'div_green';
	}
	

	// Remove item from cart (Updating quantity to 0)
	$remove = isset($_GET['remove']) ? $_GET['remove'] : '';
	if($remove!="")
	{
		$_SESSION['SBCScart'][$_GET["remove"]]['quantity'] = 0;
	}
	?>
	<!-- // SCRIPT CART -->



<style>

body, html {
	height: 100%;
	background-color:<?php echo $colore ?>;
    <?php echo $font ?>	
	}
	
	.w3-black, .w3-hover-black:hover {
    color: #fff!important;
    background-color: <?php echo $cbackground ?>!important;
}
	
.menu {
	display: none
	}

/* TITOLI */
h1 {
    <?php echo $font ?>	
    font-size: 40px!important;
}

/* SOTTOTITOLI */
h3 {
    <?php echo $font ?>	
    font-size: 18px!important;
	<?php echo $coloreh3 ?>
}

h6 {
    <?php echo $font ?>	
    font-size: 12px!important;
}

p {
    font-size: 16px!important;
}


b, strong {
    font-weight: 400;
    font-size: 16px;
}


.w3-text-green, .w3-hover-text-green:hover {
    color: #838383!important;
}

.bgimg {
  background-repeat: no-repeat;
  background-position: center;
  background-image: linear-gradient(<?php echo $colorehex; ?>, <?php echo $colorehex2; ?>), url("<?php echo $sfondo; ?>");
  min-height: 100%;
}

.noopac {
  opacity:10;
}

.float {
	z-index: 2;
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
		z-index:2;
}

<?php echo $extracode; ?>

</style>
</head>

<?php if($msg != "") { echo $msg; } ?>

<body>

<style>
.preloader {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: <?php echo $cbackground; ?>;  
    z-index:3;
}

.preloader img {
	margin-top:40vh;
     display: block;
	z-index:3;
}
</style>

<script>
$(document).ready(function(){
    setTimeout(function(){$('.preloader').fadeOut()}, 500);
});
</script>

<div class='preloader'>
<center>
   <img src='../../loading.gif' style="width:90px;" alt=''/>
</center>
</div>




<?php if ($preview === "adminmodepreview" ) {
	?>
	
<a href="./admin" class="float">
<i class="fas fa-pencil-alt my-float"></i> 
</a>
	
<?php	
}
?>


<!-- CART -->

<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-item">

    <!--
	<p><br><br>Aggiungi i prodotti e le quantità dal listino, poi completa il tuo ordine qui.<br><strong style="color:#0ee10e">*in caso di incongruenze sarete ricontattati</strong><br><br></p>
	-->
	
  </div>

  <nav class="sidebar-nav">


<!-- CARRELLO -->

<a name="cart">

        <div class="col-xs-12 col-sm-12" id="sidebar" role="navigation">
          <div class="sidebar-nav">
		  
		  <?php
		  	 // if( $shopattivo !== "siasporto" && $shopattivo !== "sidomicilio" ) {

				 if( $shopattivo === "siasporto") {
					 echo "<br><br><h3>Ordine d'Asporto (ritiro in negozio)</h3>";
					 $messaggioinfo = "Orario del ritiro + dettagli (es. preferenze cottura, aggiunta ingredienti..)";
					 $messaggioheader = "*con carrello <i class='glyphicon glyphicon-shopping-cart' style='font-size:24px;'></i> per ordinare da Asporto!";
				 } else if ( $shopattivo === "sidomicilio") {
					 echo "<br><br><h3>Ordine consegna a Domicilio<br>(o Asporto - ritiro in negozio)</h3>";
					 $messaggioinfo = "Indirizzo completo per consegna + dettagli (es. nome citofono, orario di consegna, aggiunta ingredienti..<br><strong style='color:#08ff08; font-size:12px'>per Asporto (ritiro in negozio) scriverlo qui sotto al posto dell'indirizzo</strong>";
				     $messaggioheader = "*con carrello <i class='glyphicon glyphicon-shopping-cart' style='font-size:24px;'></i> per ordinazioni a Domicilio";
				 } else if ( $shopattivo === "sitavoli") {
					 echo "<br><br><h3>Consegna al tavolo</h3>";
					 $messaggioinfo = "Inserisci il numero del tavolo</strong>";
					 $messaggioheader = "*con carrello <i class='glyphicon glyphicon-shopping-cart' style='font-size:24px;'></i> per ordinare al Tavolo";
				 }else {
					 echo "<br><br><br><br><h3></h3>";
					 $messaggioheader = "";
				 }
				 
		 
				 
					 
		  ?>
		  <h5 style="color:#00ff00"><strong style="font-size:13px"><?php echo $descrizioneshop; ?></strong></h5>
		  <br>
		  
			<?php
			// If cart is empty
			if (!isset($_SESSION['SBCScart']) || (count($_SESSION['SBCScart']) == 0)) {
			?>
				<div class="panel panel-default">
				  <div class="panel-heading">
					<h3 class="panel-title" style="color:<?php echo $colore; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Carrello</h3>
				  </div>
				  <div class="panel-body">Carrello vuoto</div>
				</div>
			<?php
			// If cart is not empty
			} else {
			?>
				<div class="panel panel-default">
					<div class="panel-heading" style="margin-bottom:0;">
						<h3 class="panel-title" style="color:<?php echo $colore; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Carrello</h3>
					</div>
					<div class="">
					<table class="table" style="font-size: 20px;">
						<tr class="tableactive"><th>Prodotto</th><th>Cad.</th><th>Qt.</th><th>Tot.</th></tr>
						<?php
						// List cart items
						// We store order detail in HTML
						$OrderDetail = '
						<table border=1 cellpadding=5 cellspacing=5>
							<thead>
								<tr>
									<th>&nbsp;Prodotto&nbsp;</th>
									<th>&nbsp;Prezzo&nbsp;</th>
									<th>&nbsp;Quantità&nbsp;</th>
									<th>&nbsp;(Tot. iva incl.)&nbsp;</th>
								</tr>
							</thead>
							<tbody>';

						// Equal total to 0
						$total = 0;

						// For finding session elements line number
						$linenumber = 0;

						// Run loop for cart array
						foreach($_SESSION['SBCScart'] as $SBCSitem)
						{
							// Don't list items with 0 qty
							if($SBCSitem['quantity']!=0) {

							// For calculating total values with decimals
							$pricedecimal = str_replace(",",".",$SBCSitem['unitprice']);
							$qtydecimal = str_replace(",",".",$SBCSitem['quantity']);

							$pricedecimal = (float)$pricedecimal;
							$qtydecimal = (float)$qtydecimal;
							$qtydecimaltotal = $pricedecimal+$qtydecimal;

							$totaldecimal = $pricedecimal*$qtydecimal;

							// We store order detail in HTML
							$OrderDetail .= "<tr><td>".$SBCSitem['item']."</td><td>".$SBCSitem['unitprice']." ".$currency."</td><td>".$SBCSitem['quantity']."</td><td>".$totaldecimal." ".$currency."</td></tr>";

							// Write cart to screen

							echo
							"
							<tr class='tablerow'>
								<td style='width:50px'><a href=\"?remove=".$linenumber."\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('Sei sicuro?')\"><span class='glyphicon glyphicon-remove'></span></a> ".$SBCSitem['item']."</td>
								<td style='width:50px'>".$SBCSitem['unitprice']." ".$currency."</td>
								<td style='width:50px'>".$SBCSitem['quantity']."</td>
								<td style='width:50px'>".$totaldecimal." ".$currency."</td>
							</tr>
							";

							// Total
							$total += $totaldecimal;

							}
							$linenumber++;
						}

						// We store order detail in HTML
						$OrderDetail .= "<tr><td>Totale</td><td></td><td></td><td>".$total." ".$currency."</td></tr></tbody></table>";
						?>
						
						<td class='tableactive'>
							<td style='width:50px'><a href='?clear' class='btn btn-danger btn-xs' onclick="return confirm('Sei sicuro?')">Rimuovi<br>tutto</a></td>
							<td> <strong>Tot.</strong></td>
							<!-- <td><?php echo $qtydecimaltotal;?></td> -->
							<td><strong><?php echo $total;?> <?php echo $currency;?></strong></br>(Iva incl.)</td>
						</td>
					</table>
					</div>
				</div>
				<!-- // Cart -->

				<!-- Address -->
				<div class="panel panel-default">
				  <div class="panel-heading">
				  
				
					<h3 class="panel-title" style="color:<?php echo $colore; ?>"><span class="glyphicon glyphicon-check"> </span> Conferma Ordine</h3>
					
					
				  </div>
				  <div class="panel-body">
					<form role="form" method="post" action="?pay">
					
					
					<?php
					if ( $shopattivo === "sitavoli") {
					?>
					
					
					  <div class="form-group">
					  
					  <label for="inputEmail1"><strong style="color:#08ff08; font-size:14px">* </strong>Prenotazione a nome di</label>
						
						  <input type="text" name="name" class="form-control" id="inputEmail1" placeholder="Nome" required>
					
					  </div>
					  

					  <div class="form-group" style="visibility:hidden;height:0px">
						
						  <input style="visibility:hidden;height:0px" type="email" id="notrequired" name="email" class="form-control" id="inputEmail2" placeholder="tua@email">
					
					  </div>
					  

					  <div class="form-group" style="visibility:hidden;height:0px">
					
						  <input style="visibility:hidden;height:0px" type="text" name="phone" class="form-control" id="inputEmail3" placeholder="Telefono" onkeypress="return isNumberKey(event)" >
						
					  </div>
					  
					  
					  <?php
					  } else {
					?>
					
					
					  <div class="form-group">
						<label for="inputEmail1"><strong style="color:#08ff08; font-size:14px">* </strong>Prenotazione a nome di</label>
						<div>
						  <input type="text" name="name" class="form-control" id="inputEmail1" placeholder="Nome e Cognome" required>
						</div>
					  </div>
					  

					  <div class="form-group">
						<label for="inputEmail2">Email (facoltativa)<br><strong style="font-size:12px">inseriscila per ricevere copia dell'ordine</strong></label>
						<div>
						  <input type="email" id="notrequired" name="email" class="form-control" id="inputEmail2" placeholder="tua@email">
						</div>
					  </div>
					  

					  <div class="form-group">
						<label for="inputEmail3"><strong style="color:#08ff08; font-size:14px">* </strong>Telefono<br><strong style="color:#08ff08; font-size:12px">inserire accuratamente o in caso di incongruenze non potremo contattarvi</strong></label>
						<div>
						  <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="Telefono" onkeypress="return isNumberKey(event)" required>
						</div>
					  </div>
					  
					
					
					<?php
					   }
					?>
					  
					  
					  
					  <div class="form-group">
						<label for="inputEmail4"><strong style="color:#08ff08; font-size:14px">* </strong><?php echo $messaggioinfo; ?><br>
						</label>
						<div>
						  <textarea class="form-control" name="address" id="inputEmail4" style="height:50px;"></textarea>
						</div>
					  </div>
					  
					  
					  <?php
					  	if( $shopattivo !== "sitavoli") {
						$tipopag = "al ritiro";
						} else {
						$tipopag = "nel locale";
						}
						?>
					  
					
					<div class="form-group">
								<label for="optionsRadios1"><strong style="color:#08ff08; font-size:14px">* </strong>Metodo di Pagamento</label>
						<div style="margin-top: 6px;">
							<select class="form-control selectEleman" name="payment">
							  <option value="Pagamento al ritiro"><?php echo $tipopag; ?></option>
							</select>
						</div>
					  </div>
					  
					  
					  <div class="form-group">
						<div>
						  <button type="submit" class="btn btn-success pull-right">Invia Ordine</button>
						</div>
					  </div>

					<input type="hidden" name="total" value="<?php echo $total;?>">
					<input type="hidden" name="OrderDetail" value="<?php echo htmlentities($OrderDetail);?>">
					
					<br><br><br><br><br><br><br><br>
					
					
					</form>
				  </div>
				</div>


			<?php }  ?>
			

			
          </div>
        </div>

  </nav>
  
 

</div>
<div class="wrap" style="z-index:2">
</div>

<!-- fine CART -->
<style>
.div_class{
    background-color: white;
}
.div_red{
    background-color: #ff3300;
}
.div_green{
    background-color: #5cb85c;
}
</style>


<?php

	if( $shopattivo !== "siasporto" && $shopattivo !== "sidomicilio" && $shopattivo !== "sitavoli" ) {
	} else {
?>
<label for="sidebar-checkbox" class="sidebar-toggle" style="width:100px; position:fixed!important; z-index:2">
<center>
<div class="<?php echo $class; ?>" style="width:100px; border-radius:55px">
<br>
<ul id="category-tabs" style="list-style-type:none;">
<li><i class="glyphicon glyphicon-shopping-cart" style="font-size:21px; top: 7px; right: 35px; color:black"></i></li>

</ul>
 
<br>
</div>
</center>
</label>
<?php
} 
?>





<div id="modal-cart" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p class="text-center" id="myDialogText"></p>
				</div>
			</div>
		</div>
	</div>


<!-- Header with image -->
<header class="bgimg w3-display-container" id="home">

<?php
if ($qronoff == "no") {
	echo ('<div class="w3-display-topright w3-padding" style="visibility:hidden; height:0px!important">');
} else {
	echo ('<div class="w3-display-topright w3-padding">');
}
?>

  <a href="https://<?php echo $qrlink; ?>"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https%3A%2F%2F<?php echo $qrlink; ?>&choe=UTF-8" style="width:25vw;max-width:120px; border-radius: 18px;"/></a>

  </div>
  
  <!-- TOP LEFT -->
  <div class="w3-display-topleft w3-padding">
  <br>



  </div>
  
  
  
  <div class="noopac w3-display-middle w3-center">
  
 <?php
global $path;    // path to directory has to be global, using it later in html
$dir = "./admin/logo/";
$files = scandir($dir, 1);                // read directory backkwards
$picture = ($files[0]);                   // get las picture file name
$path = "./admin/logo/$picture";


// logo o testo

if(count($files) == 2) {
echo ('<h1 style="color:white" translate="no"><br><br>'.$titolo.'<br><br></h1>');
} else {
echo ('<img class="alignnone size-large" alt="Logo del menu" src="'.$path.'" style="width:95vw;max-width:450px" height="auto" />');	
}

?>



<p><a href="#menu" class="w3-button w3-xxlarge w3-black"><strong style="font-size: 35px">Menù</strong></a></p>
<br>
<h4 style="color:white; font-size:26px!important"><? echo $messaggioheader; ?></h4>

<br>


<?php
 if ($multilang == "si") {
	
?>

<div style="width:100vw">

<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('it|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Italian" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="French" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="German" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Portuguese" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Russian" /></a>&nbsp;<a href="#" onclick="doGTranslate('it|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Spanish" /></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/24.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/24a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'it',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

</div>

<?php	
} else {

}
?>








<br><br>


  </div>
</header>





<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">

  <div class="w3-content">
  

<!-- Categorie Tab -->

<div class="w3-row w3-center w3-border w3-border-dark-grey">



<?php

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}


   
$my_database_txt2 = './admin/categorie.txt'; 
  
if ($key == 0) $riga = "0";

$array_righi = file($my_database_txt2);
foreach($array_righi as $key => $capi){
 list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);
 
 $catclass = str_replace(' ', '_', $campo2);
 $catclean = clean($catclass);
 


$riga = ($riga+1);
$status = ($campo0."||");

$productFile = file_get_contents('./admin/prodotti.txt', FILE_USE_INCLUDE_PATH);

if ($key == 0) {
 echo ('
       <a style="color:'.$colore.'" style="colore:$colore" href="javascript:void(0)" onclick="openMenu(event, \''.$campo2.'\');" id="myLink">
        <div class="'.$catclean.' w3-col s4 tablink w3-padding-large w3-hover-red"><strong>'.$campo2.'</strong></div>
      </a>
 ');
}
else {
 echo ('<a style="color:'.$colore.'" href="javascript:void(0)" onclick="openMenu(event, \''.$campo2.'\');">
        <div class="'.$catclean.' w3-col s4 tablink w3-padding-large w3-hover-red"><strong>'.$campo2.'</strong></div>
      </a>');
	} 
}

 ?>
 
    </div>
	
	<!-- fine categorie -->

  <!-- prodotti -->

<?php
 
// per logiche
 
if ($key == 0) $riga = ($key+1);
$my_database_txt22 = './admin/categorie.txt';
$array_righi22 = file($my_database_txt22);
foreach($array_righi22 as $key => $capi){
	list($campo0a, $campo1a, $campo2a, $campo3a, $campo4a, $campo5a, $campo6a) = explode("|", $capi);
// crea variabili nome categoria
	${"nomi$key"} = $campo2a;
	${"nomicompleti$key"} = $campo4a;
}
$ncat = $key;

for ($na = 0; $na <= $ncat; ++$na) {	

echo ('<div id="'.${"nomi$na"}.'" class="w3-container menu w3-padding-32 w3-black">'); 
echo ('<h1 style="color:'.$colore.'">'.${"nomicompleti$na"}.'</h1><br><br><br>');

$array_righi = file($my_database_txt);
foreach($array_righi as $key => $capi){
	list($campo0, $campo1, $campo2, $campo3, $campo4, $campo5, $campo6) = explode("|", $capi);
	$count = $campo0-1;
	$campo00 = ${"nomicompleti$count"};
	if ($na === $count) {
			
	// $prezzodescr  = $campo5;
	$prezzodescr = str_replace(' ', '    ', $campo5);
	
    $pieces = explode("-", $prezzodescr);
	$piece1 = $pieces[0]; $piece2 = $pieces[1]; $piece3 = $pieces[2]; $piece4 = $pieces[3]; $piece5 = $pieces[4];
	$piece6 = $pieces[5]; $piece7 = $pieces[6]; $piece8 = $pieces[7]; $piece9 = $pieces[8]; $piece10 = $pieces[9];
	$piece11 = $pieces[10]; $piece12 = $pieces[11]; $piece13 = $pieces[12]; $piece14 = $pieces[13]; $piece15 = $pieces[14];

	$prezzo1 = rtrim($piece1); $prezzo2 = rtrim($piece2); $prezzo3 = rtrim($piece3); $prezzo4 = rtrim($piece4); $prezzo5 = rtrim($piece5);
	$prezzo6 = rtrim($piece6); $prezzo7 = rtrim($piece7); $prezzo8 = rtrim($piece8); $prezzo9 = rtrim($piece9); $prezzo10 = rtrim($piece10);
	$prezzo11 = rtrim($piece11); $prezzo12 = rtrim($piece12); $prezzo13 = rtrim($piece13); $prezzo14 = rtrim($piece14); $prezzo15 = rtrim($piece15);
	
	$prezzo1a = trim($prezzo1); $prezzo2a = trim($prezzo2); $prezzo3a = trim($prezzo3); $prezzo4a = trim($prezzo4); $prezzo5a = trim($prezzo5); 
	$prezzo6a = trim($prezzo6); $prezzo7a = trim($prezzo7); $prezzo8a = trim($prezzo8); $prezzo9a = trim($prezzo9); $prezzo10a = trim($prezzo10);
	$prezzo11a = trim($prezzo11); $prezzo12a = trim($prezzo12); $prezzo13a = trim($prezzo13); $prezzo14a = trim($prezzo14); $prezzo15a = trim($prezzo15);	
	
	
	$prezzo1ok = substr($prezzo1a, -8); $prezzo1 = preg_replace('([^\d,]+)', '', $prezzo1aa);
	$descri1 = explode($prezzo1ok, $prezzo1a);
	$descri1ok = $descri1[0];

	$prezzo2ok = substr($prezzo2a, -8); $prezzo2 = preg_replace('([^\d,]+)', '', $prezzo2aa);
	$descri2 = explode($prezzo2ok, $prezzo2a);
	$descri2ok = $descri2[0];

	$prezzo3ok = substr($prezzo3a, -8); $prezzo3 = preg_replace('([^\d,]+)', '', $prezzo3aa);
	$descri3 = explode($prezzo3ok, $prezzo3a);
	$descri3ok = $descri3[0];

	$prezzo4ok = substr($prezzo4a, -8); $prezzo4 = preg_replace('([^\d,]+)', '', $prezzo4aa);
	$descri4 = explode($prezzo4ok, $prezzo4a);
	$descri4ok = $descri4[0];

	$prezzo5ok = substr($prezzo5a, -8); $prezzo5 = preg_replace('([^\d,]+)', '', $prezzo5aa);
	$descri5 = explode($prezzo5ok, $prezzo5a);
	$descri5ok = $descri5[0];
	
	$prezzo6ok = substr($prezzo6a, -8); $prezzo6 = preg_replace('([^\d,]+)', '', $prezzo6aa);
	$descri6 = explode($prezzo6ok, $prezzo6a);
	$descri6ok = $descri6[0];
	
	$prezzo7ok = substr($prezzo7a, -8); $prezzo7 = preg_replace('([^\d,]+)', '', $prezzo7aa);
	$descri7 = explode($prezzo7ok, $prezzo7a);
	$descri7ok = $descri7[0];	
	
	$prezzo8ok = substr($prezzo8a, -8); $prezzo8 = preg_replace('([^\d,]+)', '', $prezzo8aa);
	$descri8 = explode($prezzo8ok, $prezzo8a);
	$descri8ok = $descri8[0];
	
	$prezzo9ok = substr($prezzo9a, -8); $prezzo9 = preg_replace('([^\d,]+)', '', $prezzo9aa);
	$descri9 = explode($prezzo9ok, $prezzo9a);
	$descri9ok = $descri9[0];
	
	$prezzo10ok = substr($prezzo10a, -8); $prezzo10 = preg_replace('([^\d,]+)', '', $prezzo10aa);
	$descri10 = explode($prezzo10ok, $prezzo10a);
	$descri10ok = $descri10[0];
	
	$prezzo11ok = substr($prezzo11a, -8); $prezzo11 = preg_replace('([^\d,]+)', '', $prezzo11aa);
	$descri11 = explode($prezzo11ok, $prezzo11a);
	$descri11ok = $descri11[0];	
	
	$prezzo12ok = substr($prezzo12a, -8); $prezzo12 = preg_replace('([^\d,]+)', '', $prezzo12aa);
	$descri12 = explode($prezzo12ok, $prezzo12a);
	$descri12ok = $descri12[0];
	
	$prezzo13ok = substr($prezzo13a, -8); $prezzo13 = preg_replace('([^\d,]+)', '', $prezzo13aa);
	$descri13 = explode($prezzo13ok, $prezzo13a);
	$descri13ok = $descri13[0];
	
	$prezzo14ok = substr($prezzo14a, -8); $prezzo14 = preg_replace('([^\d,]+)', '', $prezzo14aa);
	$descri14 = explode($prezzo14ok, $prezzo14a);
	$descri14ok = $descri14[0];
	

	


if (strpos($prezzo1ok, ',') !== false) {	} else if (strpos($prezzo1ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo1ok); $prezzo1ok = $mod;
} else {$mod = ($prezzo1ok.',00');$prezzo1ok = $mod;}

if (strpos($prezzo2ok, ',') !== false) {	} else if (strpos($prezzo2ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo2ok); $prezzo2ok = $mod;
} else {$mod = ($prezzo2ok.',00');$prezzo2ok = $mod;}

if (strpos($prezzo3ok, ',') !== false) {	} else if (strpos($prezzo3ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo3ok); $prezzo3ok = $mod;
} else {$mod = ($prezzo3ok.',00');$prezzo3ok = $mod;}

if (strpos($prezzo4ok, ',') !== false) {	} else if (strpos($prezzo4ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo4ok); $prezzo4ok = $mod;
} else {$mod = ($prezzo4ok.',00');$prezzo4ok = $mod;}

if (strpos($prezzo5ok, ',') !== false) {	} else if (strpos($prezzo5ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo5ok); $prezzo5ok = $mod;
} else {$mod = ($prezzo5ok.',00');$prezzo5ok = $mod;}

if (strpos($prezzo6ok, ',') !== false) {	} else if (strpos($prezzo6ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo6ok); $prezzo6ok = $mod;
} else {$mod = ($prezzo6ok.',00');$prezzo6ok = $mod;}

if (strpos($prezzo7ok, ',') !== false) {	} else if (strpos($prezzo7ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo7ok); $prezzo7ok = $mod;
} else {$mod = ($prezzo7ok.',00');$prezzo7ok = $mod;}

if (strpos($prezzo8ok, ',') !== false) {	} else if (strpos($prezzo8ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo8ok); $prezzo8ok = $mod;
} else {$mod = ($prezzo8ok.',00');$prezzo8ok = $mod;}

if (strpos($prezzo9ok, ',') !== false) {	} else if (strpos($prezzo9ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo9ok); $prezzo9ok = $mod;
} else {$mod = ($prezzo9ok.',00');$prezzo9ok = $mod;}

if (strpos($prezzo10ok, ',') !== false) {	} else if (strpos($prezzo10ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo10ok); $prezzo10ok = $mod;
} else {$mod = ($prezzo10ok.',00');$prezzo10ok = $mod;}

if (strpos($prezzo11ok, ',') !== false) {	} else if (strpos($prezzo11ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo11ok); $prezzo11ok = $mod;
} else {$mod = ($prezzo11ok.',00');$prezzo11ok = $mod;}

if (strpos($prezzo12ok, ',') !== false) {	} else if (strpos($prezzo12ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo12ok); $prezzo12ok = $mod;
} else {$mod = ($prezzo12ok.',00');$prezzo12ok = $mod;}

if (strpos($prezzo13ok, ',') !== false) {	} else if (strpos($prezzo13ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo13ok); $prezzo13ok = $mod;
} else {$mod = ($prezzo13ok.',00');$prezzo13ok = $mod;}

if (strpos($prezzo14ok, ',') !== false) {	} else if (strpos($prezzo14ok, '.') !== false) {
$mod = str_replace('.', ',', $prezzo14ok); $prezzo14ok = $mod;
} else {$mod = ($prezzo14ok.',00');$prezzo14ok = $mod;}




if ($campo6 >0) {
$immaginetab = ('<span class="w3-right w3-tag"><br><br><hr style="position:absolute; left:0; width:100vw; overflow:hidden"><br><br><img src="./admin/fileupload/'.$campo6.'" style="width:100vw; max-width:280px; border: 20px solid; border-color: transparent"></span><br><br><br><br><br>');	
} else {
$immaginetab = ('');	
}




    // SE SHOP NON ATTIVO

	if( $shopattivo !== "siasporto" && $shopattivo !== "sidomicilio" && $shopattivo !== "sitavoli") {
		
		
				if ($prezzo1ok != 0) {
		
	echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
	  <p class="w3-text-grey">'.$campo4.'
	  <br><br><br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri1ok." € ".$prezzo1ok.'</strong></span>
	  </p>');
	  }
	  
	  else {
		  
	  echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
	  <p class="w3-text-grey">'.$campo4.'
	  <br></p>');
		  
	  }
	  
	  
		
	if ($descri2ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri2ok." € ".$prezzo2ok.'</strong></span>
	  <br>
</p>');
        }
		
		if ($descri3ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri3ok." € ".$prezzo3ok.'</strong></span>
	  <br>
</p>');
        }
		
		if ($descri4ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri4ok." € ".$prezzo4ok.'</strong></span>
	  <br>
</p>');
        }
		
		if ($descri5ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri5ok." € ".$prezzo5ok.'</strong></span>
	  <br>
</p>');
        }
		
		if ($descri6ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri6ok." € ".$prezzo6ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri7ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri7ok." € ".$prezzo7ok.'</strong></span>
	  <br>
</p>');
        }	

		if ($descri8ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri8ok." € ".$prezzo8ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri9ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri9ok." € ".$prezzo9ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri10ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri10ok." € ".$prezzo10ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri11ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri11ok." € ".$prezzo11ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri12ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri12ok." € ".$prezzo12ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri13ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri13ok." € ".$prezzo13ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri14ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri14ok." € ".$prezzo14ok.'</strong></span>
	  <br>
</p>');
        }

		if ($descri15ok != null) {
        echo ('
		<p class="w3-text-grey">
	  <br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri15ok." € ".$prezzo15ok.'</strong></span>
	  <br>
</p>');
        }		
		
		

	    echo ('<br>
        <br><br>');

	} else {

    // SE SHOP ATTIVO
	// SE PREZZO MULTIPLO
	if ($descri1ok != null) {
		
		
		if ($prezzo1ok != 0) {
		
		echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
<p class="w3-text-grey">'.$campo4.'
	  <br><br><br><br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri1ok." € ".$prezzo1ok.'</strong></span>
	  <div style="margin-top: 35px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri1ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo1ok.'" />
						</form></p></div>');
						
		} else {
				echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
<p class="w3-text-grey">'.$campo4.'</p></div>');	
		}			
						
						
		
	// SE PREZZO MULTIPLO 2		
		if ($descri2ok != null) {
		
        if ($prezzo2ok != 0) {		
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri2ok." € ".$prezzo2ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri2ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo2ok.'" />
						</form></p></div>');
        } else {
			
        echo ('<p class="w3-text-grey"></p></div>');			
			
		}
		
		
		}
		
	// SE PREZZO MULTIPLO 3		
		if ($descri3ok != null) {
			
		        if ($prezzo3ok != 0) {	
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri3ok." € ".$prezzo3ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri3ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo3ok.'" />
						</form></p></div>');
        } else {
        echo ('<p class="w3-text-grey"></p></div>');			
			
		}
		
		
		}
		
		
		
		
	// SE PREZZO MULTIPLO 4		
		if ($descri4ok != null) {
			
				        if ($prezzo4ok != 0) {	
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri4ok." € ".$prezzo4ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri4ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo4ok.'" />
						</form></p></div>');
        } else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}

		}	

	// SE PREZZO MULTIPLO 5		
		if ($descri5ok != null) {

		if ($prezzo5ok != 0) {

        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri5ok." € ".$prezzo5ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri5ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo5ok.'" />
						</form></p></div>');
		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}
		
		}
		
		

	// SE PREZZO MULTIPLO 6		
		if ($descri6ok != null) {
			
				if ($prezzo6ok != 0) {

		
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri6ok." € ".$prezzo6ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri6ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo6ok.'" />
						</form></p></div>');
       
		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}

	   }


	// SE PREZZO MULTIPLO 7		
		if ($descri7ok != null) {
						
				if ($prezzo7ok != 0) {
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri7ok." € ".$prezzo7ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri7ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo7ok.'" />
						</form></p></div>');
		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}						
						
						
						
        }
		
		
		
		

	// SE PREZZO MULTIPLO 8		
		if ($descri8ok != null) {
			
			
			
				if ($prezzo8ok != 0) {			
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri8ok." € ".$prezzo8ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri8ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo8ok.'" />
						</form></p></div>');
   		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}	     
		
		
		
		}
		
		
		// SE PREZZO MULTIPLO 9		
		if ($descri9ok != null) {
			
				if ($prezzo9ok != 0) {			
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri9ok." € ".$prezzo9ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri9ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo9ok.'" />
						</form></p></div>');
        
   		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}		
		
		}
		
		
		// SE PREZZO MULTIPLO 10		
		if ($descri10ok != null) {
			
				if ($prezzo10ok != 0) {		
		
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri10ok." € ".$prezzo10ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri10ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo10ok.'" />
						</form></p></div>');
        
   		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}		
		
		}	


		// SE PREZZO MULTIPLO 11		
		if ($descri11ok != null) {
			
				if ($prezzo11ok != 0) {				
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri11ok." € ".$prezzo11ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri11ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo11ok.'" />
						</form></p></div>');
        
   		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}			
		
		}	


		// SE PREZZO MULTIPLO 12		
		if ($descri12ok != null) {
			
				if ($prezzo12ok != 0) {			
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri12ok." € ".$prezzo12ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri12ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo12ok.'" />
						</form></p></div>');
        
   		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}		
		
		}


		// SE PREZZO MULTIPLO 13		
		if ($descri13ok != null) {
			
				if ($prezzo13ok != 0) {				
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri13ok." € ".$prezzo13ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri13ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo13ok.'" />
						</form></p></div>');
           		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}	
		
		
		}	
		
		
		

		// SE PREZZO MULTIPLO 14		
		if ($descri14ok != null) {
			
				if ($prezzo14ok != 0) {			
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri14ok." € ".$prezzo14ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri14ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo14ok.'" />
						</form></p></div>');
        
		           		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}
		
		}
		
		
		

		// SE PREZZO MULTIPLO 15		
		if ($descri15ok != null) {
			
		if ($prezzo15ok != 0) {
			
        echo ('<br><br><br>
		<p class="w3-text-grey">
	  <span class="w3-right w3-tag"><strong style="color:'.$colore.'">'.$descri15ok." € ".$prezzo15ok.'</strong></span>
	  <div style="margin-top: 50px">
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="('.$descri15ok.") ".$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo15ok.'" />
						</form></p></div>');
        
				           		} else {
        echo ('<p class="w3-text-grey"></p></div>');			
		}
		
		}		
		
				
	  	echo ('
	  <br><br>
      <br>');
	} 
	
	// SE PREZZO SINGOLO
	else {
		
		// SE PREZZO ESISTE
		if ($prezzo1ok != 0) {
	echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
	<p class="w3-text-grey">'.$campo4.'
	  <br><br><br><br><span class="w3-right w3-tag"><strong style="color:'.$colore.'">€ '.$prezzo1ok.'</strong></span>
	  <br>
	  <form action="?" method="post">
							<div class = "w3-right w3-tag input-group" style="width:160px;z-index:1">
							<input class="form-control" name="quantity" type="text" onkeypress="return isNumberKey(event)" maxlength="3" value="1">
							<span class = "input-group-btn"><input type="submit" class="btn btn-success" type="button" value="aggiungi"></span>
							</div>
							<input type="hidden" name="item" value="'.$campo2.'" />
							<input type="hidden" name="price" value="'.$prezzo1ok.'" />
						</form></p>
		<br><br>
      <br>');			
		} else {	
	echo ($immaginetab.'<br><br><h3 translate="no">'.$campo2.'</h3>
	<p class="w3-text-grey">'.$campo4.'</p>
		<br><br>
      <br>');				
		}
		
//
	}

	 }
	 }
	 
}
echo "</div>";

}
	
?>

<!-- fine prodotti -->	


  </div>
</div>


<footer class="w3-center w3-black w3-padding-48 w3-xlarge">

<?php

// instagram 
$url = $instagram;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}

if (empty($instagram)) {
} else {
echo ('<a href="'.$url.'"><i class="fab fa-instagram" style="font-size:27px;color:'.$colore.'"></i></a>&nbsp;&nbsp;');	
}

// facebook
$url = $facebook;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}
  
if (empty($facebook)) {
} else {
echo ('<a href="'.$url.'"><i class="fab fa-facebook" style="font-size:27px;color:'.$colore.'"></i></a>&nbsp;&nbsp;');	
}

// twitter 
$url = $twitter;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}
 
if (empty($twitter)) {
} else {
echo ('<a href="'.$url.'"><i class="fab fa-linkedin" style="font-size:27px;color:'.$colore.'"></i></a>&nbsp;&nbsp;');	
}

// tiktok 
$url = $tiktok;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}

if (empty($tiktok)) {
} else {
echo ('<a href="'.$url.'"><i class="fab fa-tiktok" style="font-size:27px;color:'.$colore.'"></i></a>&nbsp;&nbsp;');	
}


//youtube
$url = $youtube;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}

if (empty($youtube)) {
} else {
echo ('<a href="'.$url.'"><i class="fab fa-youtube" style="font-size:27px;color:'.$colore.'"></i></a>&nbsp;&nbsp;');	
}


// nome attività
if (empty($titolo)) {
	$scrivititolo = "";
} else {
$scrivititolo = ('<h3 style="display:inline-block">&copy;</h3> <h3 style="color:'.$colore.';display: inline-block">'.$titolo.'</h3>');	
}	

// telefono
if ((empty($telefono)) && (empty($telefono2))) {
	$scrivitelefono = "";
} elseif (empty($telefono2)) {
$scrivitelefono = ('Tel. &nbsp;<strong style="color:'.$colore.'"><a href="tel:'.$telefono1.'" style="color:'.$colore.'" title="tel" class="w3-hover-text-green">'.$telefono1.'</a></strong><br>');	
} else	{
$scrivitelefono = ('Tel. &nbsp;<strong style="color:'.$colore.'"><a href="tel:'.$telefono.'" style="color:'.$colore.'" title="tel" class="w3-hover-text-green">'.$telefono.'</a></strong>&nbsp;&nbsp;&nbsp;<strong style="color:'.$colore.'"><a href="tel:'.$telefono2.'" style="color:'.$colore.'" title="tel2" class="w3-hover-text-green">'.$telefono2.'</a></strong><br>');	
}

// email
if (empty($email)) {
	$scriviemail = "";
} else {
	$scriviemail = ('email: &nbsp;<strong style="color:'.$colore.'"><a href="mailto:'.$email.'" style="color:'.$colore.'" title="email" class="w3-hover-text-green">'.$email.'</a></strong><br>');
}

// sitoweb
$url = $sitoweb;
$parsed = parse_url($url);
if (empty($parsed['scheme'])) { $url = 'http://' . ltrim($url, '/');}

if (empty($sitoweb)) {
	$scrivisitoweb = "";
} else {
	$scrivisitoweb = ('Sito web: &nbsp;<strong style="color:'.$colore.'"><a href="'.$url.'" style="color:'.$colore.'" title="website" class="w3-hover-text-green">'.$sitoweb.'</a></strong>');
}

 ?>
 


<div translate="no">
  <p style="font-size:13px"><?php echo $scrivititolo; ?><br>
  <?php echo $indirizzo; ?><br><br>

  <?php echo $scrivitelefono; ?>
  <?php echo $scriviemail; ?>  
  <?php echo $scrivisitoweb; ?> <br><br><br>
 </p>
 </div>
 
 <br><br>
 
  <h6>Menu digitale realizzato con <a style="color:<?php echo $colore ?>" href="https://www.qr7.it" translate="no"> QR7</a>
  
  &nbsp;&nbsp;&nbsp;<a href="./admin" style="color:#ffffff; font-size:12px"><i class="fas fa-lock"></i></a>
  </h6>
 
 <br>
</footer>


<button onclick="GoTopFunction()" id="GoTopBtn" title="Go to top"><i style="color:<?php echo $colore; ?>; font-size:35px" class="fas fa-angle-up"></i></button>

<script>
// Tabbed Menu

// $('.'+replaced).attr('style', '');
// $('.'+newcurrent).attr('style', 'background-color: $colore !important; color: white');

function openMenu(evt, menuName) {
  var current = replaced; 
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	 // test
     
  }
    // alert ("current:" + current);
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
  $('.'+replaced).attr('style', '');
  
   var actmenu = (menuName);
  document.cookie = (actmenu);

}
document.getElementById("myLink").click();
</script>









 <?php if(isset($_GET["pay"])) {

			$fragionesociale = $_POST['name'];
			$femail = $_POST['email'];	
			$ftelefono = $_POST['phone'];
			$fdettagli = $_POST['address'];
            $dettagliordine =  $_POST["OrderDetail"];


		session_unset();
		session_destroy();
		
		
			// sendmail
			
			// PHPMAILER TO SEND SMTP


			$mailhtml= "<html>
			<head>
			<title>Riepilogo ordine su $titolo QR7</title>
			</head>
			<body>
			<h4>
			<strong>
			Gentile $fragionesociale,<br>abbiamo ricevuto il tuo ordine.<br>
			In caso di incongruenze (es. impossibilità di consegna o prodotti esauriti) sarai subito ricontattato/a.<br>
			<br><br>Prodotti<br>
			$dettagliordine<br><br>
			Cordiali saluti<br>
			<strong>$titolo</strong><br>
			<br>$telefono  $telefono1<br>
			$sitoweb
			</h4>
			</body>
			</html>";
			
	
			$mailhtml2= "<html>
			<head>
			<title>Nuovo ordine $titolo QR7</title>
			</head>
			<body>
			<h4>
			<strong>
			Gentile cliente $titolo,<br>
			abbiamo ricevuto un nuovo ordine per te da<br>
			$fragionesociale <br>
			Telefono: $ftelefono<br>
			Indirizzo e specifiche:<br>$fdettagli<br><br>Prodotti<br>
			$dettagliordine<br><br>
			Cordiali saluti<br>
			<strong>$titolo</strong><br>
			<br>$telefono  $telefono1<br>
			$sitoweb
			</h4>
			</body>
			</html>";



// mail a cliente

if ($femail === null){ }
else {	
	$to = "$femail";
    $subject = "Copia ordine $titolo QR7";
    $message = "$mailhtml";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: name' . "\r\n";
    mail($to,$subject,$message,$headers);
	}
			
// mail a sito


if ($fdettagli === null){ }
else {	
	$to = "$email";
    $subject = "Nuovo ordine $titoloda QR7";
    $message = "$mailhtml2";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: name' . "\r\n";
    mail($to,$subject,$message,$headers);

  // echo '<script>alert("Ordine recapitato! Apri il carrello per i dettagli")</script>';

   }
   

   
			?>


<style>
.container3{
	width:100vw;
  height: 100vh;
  position: fixed;
  top:0px;
  overflow:scroll;
  background-color:#202020;
  z-index:99999;
}
.inner{
  height: 100%;
  overflow: scroll;
}
.full-height{
  position: absolute;
  left: 0;
  width: 20%;
  top: 0;
  height: 100%;
}
</style>

<div class="container3">
  <div class="inner">
   <center>
			  <br><br><br><div style="font-size:25px; color:#00ff00"><span class="glyphicon glyphicon-shopping-cart" style="color:#00ff00"></span> Ordine inviato!</div>
			  <div style="font-size:25px; color:white">
			  Gentile <strong style="font-size:25px; color:white"><?php echo $fragionesociale; ?></strong>,<br style="font-size:25px; color:white">il tuo ordine è stato recapitato.<br>
			  <br> 
			  Grazie da <strong style="font-size:25px; color:white"><?php echo $titolo ?></strong>

				<br><br>
				<b style="color:white">Dettaglio ordine</b>
				<br><br>
				<?php echo $_POST["OrderDetail"];?>
			  </div>
			  <br>
			  <a href="?menu" style="font-size:25px"><button type="submit" class="btn btn-success pull-center">Torna al menù</button></a>
			  <br><br><br><br>
			  </center>
  </div>
  <div class="full-height"></div>
</div>


		

			
			<?php 
			

			
			}

		?>















</body> 

<script>
window.onscroll = function() {
  scroll()
};

function scroll() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    document.getElementById("GoTopBtn").style.display = "block";
  } else {
    document.getElementById("GoTopBtn").style.display = "none";
  }
}

function GoTopFunction() {
  document.documentElement.scrollTop = 550;
}

</script>


<style>




#GoTopBtn {
    display: none;
    position: fixed;
	bottom: 2px;
    right: 2px;
    z-index: 1;
    border: none;
    outline: none;
  background-color: transparent;
    cursor: pointer;
    padding: 15px;
    border-radius: 55px;
    font-size: 19px;
}



#GoTopBtn:hover {
  background-color: transparent;
}


.w3-red, .w3-hover-red:hover {
    color: #fff!important;
    background-color: <?php echo $colore ?>!important;
}

.w3-dark-grey, .w3-hover-dark-grey:hover, .w3-dark-gray, .w3-hover-dark-gray:hover {
    font-weight: 600;
    color: #fff!important;
    background-color: #c9a469!important;
	border-radius: 0;
}

.w3-xxlarge {
    font-size: 15px!important;
}

.w3-xlarge {
    font-size: 16px!important;
}

.w3-border {
    border: 0px solid #ccc!important;
}

.w3-padding-large {
    padding: 7px 2px!important;
}

</style>






<style>
.wrap {
  position: relative;
  width: 100%;
}

/* Style and "hide" the sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  /* left: -1rem; */
  width: 100vw;
  visibility: hidden;
  overflow-y: auto;

  color: rgba(255,255,255,.6);
  background-color: #202020;
}


/* Sidebar content */
.sidebar a {
  font-weight: normal;
  color: #fff;
}

.sidebar-item p:last-child {
  margin-bottom: 0;
}

/* Sidebar nav */

.sidebar-nav-item {
  display: block;
  padding: .5rem 1rem;
}
.sidebar-nav-item.active,
a.sidebar-nav-item:hover,
a.sidebar-nav-item:focus {
  text-decoration: none;
  background-color: rgba(255,255,255,.1);
  border-color: transparent;
}

.sidebar-checkbox {
  display: none;
}


.sidebar-toggle {
  position: absolute;
  bottom: 14vh;
  right: -36px;
  display: block;
  width: 100vw;
  cursor: pointer;
}

#sidebar-checkbox:checked + .sidebar {
  width: 100vw;
  z-index: 2;
  visibility: visible;
}

#sidebar-checkbox:checked ~ .sidebar,
#sidebar-checkbox:checked ~ .wrap,

/* cart */

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    background-color: #202020;
}
.panel-default>.panel-heading {
    background-color: #1b1b1b;
}
.sidebar a {
    color: #ffffffb5;
	font-weight: 300;
}
.panel-body {
    background-color: #202020;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 300;
}

.form-control {
    background-color: #202020;
    color: white;
    font-weight: 200;
}

.btn-danger {
    color: #fff;
    background-color: #ff3300;
    border-color: #ff3300;
}

.panel {
    background-color: #fff0;
}

.panel-success>.panel-heading {
    color: #00ff08;
    background-color: transparent; 
    border-color: #d6e9c6;
}

.w3-badge, .w3-tag {
    background-color: #a87a7a00;
}

html {
font-size:7em !important;
    }


body {
    color: #000;


p {
    color: red!important;
}

p {
    font-size: 24px!important;
    color: red;
}


.w3-text-grey, .w3-hover-text-grey:hover, .w3-text-gray, .w3-hover-text-gray:hover {
    color: <?php echo $colore; ?>!important;
	}



.w3-black, .w3-hover-black:hover {
    color: <?php echo $colore; ?>!important;
}




</style>


</html>