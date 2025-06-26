<?php

// Nombre del archivo a analizar en cada carpeta
$nombreArchivo = 'exescorm.php';

// Definir MOODLE_INTERNAL para evitar que los archivos terminen la ejecución
define('MOODLE_INTERNAL', true);

// Función para incluir un archivo y capturar solo las variables $string
function cargar_string_desde($ruta) {
    $string = [];

    // Capturar salida y errores
    ob_start();
    try {
        include $ruta;
    } catch (Throwable $e) {
        ob_end_clean();
        throw new Exception("Error al incluir $ruta: " . $e->getMessage());
    }
    ob_end_clean();

    return $string;
}

// Función para listar subdirectorios de un directorio
function listar_subdirectorios($rutaBase) {
    return array_filter(scandir($rutaBase), function($item) use ($rutaBase) {
        return is_dir($rutaBase . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..']);
    });
}

// Ruta base
$base = __DIR__;
$subdirs = listar_subdirectorios($base);

// Idioma base
$baseLang = 'en';
$archivoBase = "$base/$baseLang/$nombreArchivo";

// Cargar idioma base con manejo de errores
try {
    $stringBase = cargar_string_desde($archivoBase);
} catch (Exception $e) {
    echo "<p><strong>Error:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    exit;
}

if (empty($stringBase)) {
    echo "<p>Error: No se pudo cargar <strong>$archivoBase</strong> o no contiene variables \$string.</p>";
    exit;
}

echo "<h2>$baseLang/$nombreArchivo tiene " . count($stringBase) . " elementos.</h2>";

// Comparar con los demás idiomas
foreach ($subdirs as $dir) {
    $archivo = "$base/$dir/$nombreArchivo";

    if (!file_exists($archivo)) {
        continue;
    }

    echo "<h3>$dir/$nombreArchivo:</h3>";

    try {
        $string = cargar_string_desde($archivo);
    } catch (Exception $e) {
        echo "<p><strong>Error al cargar $archivo:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
        continue;
    }

    echo "<p>Tiene " . count($string) . " elementos.</p>";

    // Comparación de claves
    $faltantes = array_diff_key($stringBase, $string);
    $extras = array_diff_key($string, $stringBase);

    if (!empty($faltantes)) {
        echo "<p>Faltan " . count($faltantes) . " variable(s):</p><ul>";
        foreach ($faltantes as $clave => $_) {
            echo "<li>$clave</li>";
        }
        echo "</ul>";
    }

    if (!empty($extras)) {
        echo "<p>Variables adicionales (" . count($extras) . "):</p><ul>";
        foreach ($extras as $clave => $_) {
            echo "<li>$clave</li>";
        }
        echo "</ul>";
    }

    if (empty($faltantes) && empty($extras)) {
        echo "<p>Tiene exactamente las mismas variables que $baseLang/$nombreArchivo.</p>";
    }
}
?>
