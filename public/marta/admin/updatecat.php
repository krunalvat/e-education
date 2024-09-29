
<?php

	
$my_database_txt = 'categorie.txt';	
	
	
	
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
		
?>



<html lang="it">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />



  
  
<body>
<center>

<br><br>
<h2>Modifica categoria</h2><br>

	
	<form action="action-updatecat.php" method="post">


 <div style="visibility:hidden;height:0px">	   
	<select id="campo0" name="campo0" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" placeholder="tipologia">
	<option value="<?php echo htmlentities($campo0, ENT_QUOTES); ?>" selected></option>		
    </select>
	</div>



<div style="visibility:hidden;height:0px">	
<label for=""><strong style="color:#4e4d4d">Codice prod.:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo1" name="campo1" value="<?php echo htmlentities($campo1, ENT_QUOTES); ?>" />
</div>

	
<label for=""><strong style="color:#4e4d4d">Titolo breve (es. Primi):</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo2" name="campo2" value="<?php echo htmlentities($campo2, ENT_QUOTES); ?>" />
<br>

<div style="visibility:hidden;height:0px">
<label for=""><strong style="color:#4e4d4d">Durata ore | Taglia | Colore:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo3" name="campo3" value="<?php echo htmlentities($campo3, ENT_QUOTES); ?>" />
<br>
</div>
	

<label for=""><strong style="color:#4e4d4d">Titolo breve (es. Primi piatti):</strong></label>

<?php
	$campo4 = str_replace("<br>","\n", $campo4);
?>



	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo4" name="campo4" value="<?php echo htmlentities($campo4, ENT_QUOTES); ?>" />


	
<br>
<div style="visibility:hidden;height:0px">	
<label for=""><strong style="color:#4e4d4d">Prezzo:</strong></label>
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo5" name="campo5" value="<?php echo htmlentities($campo5, ENT_QUOTES); ?>" />
	</div>



<div style="visibility:hidden;height:0px">
	
<label for=""><strong style="color:#4e4d4d">Immagine:</strong></label>
<div id="old">
<img src="fileupload/<?php echo htmlentities($campo6, ENT_QUOTES); ?>" style="height:70px;"><br><br>	
</div>
<div id='preview'></div><br><br>	
	
<strong style="color:#4e4d4d">CAMBIA IMMAGINE</strong><br><br><br>		

</div>

 
	
	<div style="visibility:hidden">
	<input type="text" style="width:75vw; max-width:500px; border-radius:9px;height:50px;color:black" id="campo6" name="campo6" value="<?php echo htmlentities($campo6, ENT_QUOTES); ?>" />	
	</div>
	<input type="hidden" name="row_update" value="<?php echo $_GET['row']; ?>" /><br>
	


	
	
	<input type="submit" name="modifica" style="width:75vw; max-width:400px;border-radius:9px;height:50px;color:black" value="SALVA MODIFICHE" />
	
</form>


<a href="welcome.php"><h3 style="color:black"><strong>< ANNULLA</strong></h3></a>


<br><br><br><br><br>





<!-- UPLOAD -->



<script type="text/javascript" src='jquery-3.4.1.min.js'></script>

	<style type="text/css">
	#preview img{
		margin: 5px;
	}
	</style>



	<div style="visibility:hidden">
<div style="margin-top:-350px">
	<form method='post' action='' enctype="multipart/form-data">
		<input type="file" id='files' name="files[]" multiple><br><br><br>
		<input style="width:75vw; max-width:200px;border-radius:9px;height:35px;color:black" type="button" id="submitz" value='CARICA IMMAGINE'>
	</form>
</div>

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
						$('#campo6').attr('value', ret)
					}
                   	
                }
            });
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