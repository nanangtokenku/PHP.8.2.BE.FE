<?php
// Open a file for writing, use 'w' to create a new file or overwrite an existing one
$file = fopen('example.php', 'w');

// Write some text to the file
fwrite($file, 'This is some example text that will be written to the file. :)');

// Close the file
fclose($file);

echo 'File written successfully.';
?>