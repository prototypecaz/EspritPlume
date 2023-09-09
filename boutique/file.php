<?php

$name = (string) './output.txt';

// Create and open
$file = fopen($name, 'w+'); // w+ === write + create
// Write
fwrite($file, "Line 1\n");
fwrite($file, "Line 2\n");
fwrite($file, "Line 3\n");
// Close
fclose($file);

// Open
$file = fopen($name, 'a'); // a === append
// Write
fwrite($file, "Line 4\n");
fwrite($file, "Line 5\n");
fwrite($file, "Line 6\n");
// Close
fclose($file);

// Open
$file = fopen($name, 'r'); // r === read
// tant que c'est different de la fin du fichier
while(!feof($file)) {
    $line = fgets($file);
    echo $line;
}
fclose($file);

// Remove
unlink($name);

?>