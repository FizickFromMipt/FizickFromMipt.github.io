<?php
$images = [];
$directory = 'archive/';
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $images[] = $file;
        }
    }
    closedir($handle);
}
echo json_encode($images);
?>
