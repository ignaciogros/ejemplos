<?php

// Inicializar arrays para evitar problemas si los archivos no los definen
$stringA = [];
$stringB = [];

// Incluir los dos archivos (cargar en arrays separados)
include 'A.php';
$stringA = $string; // Copiar $string a $stringA
unset($string);     // Limpiar antes de incluir B.php

include 'B.php';
$stringB = $string; // Copiar $string a $stringB
unset($string);     // Limpiar para seguridad

// Calcular diferencias
$faltanEnA = array_diff_key($stringB, $stringA);
$faltanEnB = array_diff_key($stringA, $stringB);

// Mostrar resultados
echo "<h2>Variables que faltan en A:</h2>";
if (empty($faltanEnA)) {
    echo "<p>Ninguna</p>";
} else {
    echo "<pre>";
    foreach ($faltanEnA as $key => $value) {
        $escapedValue = htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo "\$string['$key'] = '$escapedValue';\n";
    }
    echo "</pre>";
}

echo "<h2>Variables que faltan en B:</h2>";
if (empty($faltanEnB)) {
    echo "<p>Ninguna</p>";
} else {
    echo "<pre>";
    foreach ($faltanEnB as $key => $value) {
        $escapedValue = htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo "\$string['$key'] = '$escapedValue';\n";
    }
    echo "</pre>";
}

?>
