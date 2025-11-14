<?php
/**
 * index.php
 * 
 * Recorre todos los archivos .xlf dentro de la carpeta "xlf"
 * y elimina cualquier <trans-unit> cuya cadena <source> empiece con '\\'.
 */

$folder = __DIR__ . '/xlf';

if (!is_dir($folder)) {
    echo "La carpeta 'xlf' no existe.\n";
    exit(1);
}

// Obtener todos los archivos .xlf
$files = glob($folder . '/*.xlf');

if (!$files) {
    echo "No se encontraron archivos .xlf en 'xlf'.\n";
    exit(0);
}

foreach ($files as $file) {
    echo "Procesando: " . basename($file) . "...\n";

    $content = file_get_contents($file);

    // Usamos preg_replace_callback para eliminar trans-units con <source> que empieza con \\
    $updatedContent = preg_replace_callback(
        '/<trans-unit\b[^>]*>.*?<source>(.*?)<\/source>.*?<\/trans-unit>/s',
        function ($matches) {
            $source = $matches[1];
            if (str_starts_with($source, '\\\\')) {
                return ''; // eliminamos el trans-unit
            }
            return $matches[0]; // conservamos
        },
        $content
    );

    file_put_contents($file, $updatedContent);
    echo "Archivo limpio: " . basename($file) . "\n";
}

echo "Proceso completado.\n";
