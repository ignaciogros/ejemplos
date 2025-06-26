<?php

// Asegurarse de que $string esté definido
$string = [];

// Incluir el archivo A.php para obtener sus variables
include 'A.php';

// Ordenar las claves alfabéticamente sin distinguir mayúsculas/minúsculas
uksort($string, 'strnatcasecmp');

// Construir el contenido de B.php
$output = "<?php\n";
foreach ($string as $key => $value) {
    // Escapar comillas simples para que el PHP generado sea válido
    $escapedValue = str_replace("'", "\\'", $value);
    $output .= "\$string['$key'] = '$escapedValue';\n";
}
$output .= "?>";

// Guardar el archivo ordenado
file_put_contents('B.php', $output);

echo "Archivo B.php generado correctamente.";

?>
