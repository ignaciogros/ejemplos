<?php
if (isset($_GET['file']) && file_exists($_GET['file'])) {
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="C.xlf"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    die("Archivo no encontrado");
}

