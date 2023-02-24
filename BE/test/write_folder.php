<?php
// Set the name of the directory
$dir_name = 'example_modules';

// Check if the directory already exists
if (!is_dir($dir_name)) {
    // Create a new directory with the name "example_folder" in the current directory
    mkdir($dir_name);
}

// Create a new file inside the "example_folder" directory
$file = fopen($dir_name . '/example_file.php', 'w');

// Write some text to the file
fwrite($file, 'This is some example text that will be written to the file.');

// Close the file
fclose($file);

echo 'Folder and file created successfully.';
?>
