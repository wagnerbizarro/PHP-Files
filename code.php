<?php
$file = "webdictionary.txt";
$data="PHP, JAVA, PYTHON";

# READ
function read($file) {
    $handle = fopen($file, "r") or die("Unable to open file!");
    $content = fread($handle, filesize ($file));
    echo $content;
    fclose($handle);
}

# WRITE
function write($data, $file) {
    $handle = fopen($file, "w") or die("Unable to open file!");
    fwrite($handle, $data);
    fclose($handle);
}

# APPEND
function append($data, $file) {
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}

/*
write($data, $file);
append($data, $file);
read($file);
*/

?>