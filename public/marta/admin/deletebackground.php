<?php

$files = glob('background/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

echo '<meta http-equiv="refresh" content="0;url=red.php">';

?>

