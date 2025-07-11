<?php

function loadXliffSources(string $file): array
{
    if (!file_exists($file)) {
        throw new Exception("File not found: $file");
    }

    $xml = simplexml_load_file($file);

    if ($xml === false) {
        throw new Exception("Failed to parse XML from $file");
    }

    // Necesario para namespaces
    $ns = $xml->getNamespaces(true);
    $body = $xml->children($ns[''])->file->body;

    $sources = [];

    foreach ($body->children($ns['']) as $transUnit) {
        $sourceText = (string)$transUnit->source;
        if (!empty($sourceText)) {
            $sources[] = $sourceText;
        }
    }

    return $sources;
}

// Archivos a comparar
$fileA = 'A.xlf';
$fileB = 'B.xlf';

try {
    $sourcesA = loadXliffSources($fileA);
    $sourcesB = loadXliffSources($fileB);

    $setA = array_unique($sourcesA);
    $setB = array_unique($sourcesB);

    // Diferencias
    $onlyInA = array_diff($setA, $setB);
    $onlyInB = array_diff($setB, $setA);

    echo "<h2>Comparación de archivos XLF</h2>";

    echo "<p><strong>$fileA:</strong> " . count($setA) . " cadenas</p>";
    echo "<p><strong>$fileB:</strong> " . count($setB) . " cadenas</p>";

    echo "<h3>Cadenas solo en <code>$fileA</code> (" . count($onlyInA) . "):</h3>";
    if ($onlyInA) {
        echo "<ul>";
        foreach ($onlyInA as $text) {
            echo "<li>" . htmlspecialchars($text) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Ninguna.</p>";
    }

    echo "<h3>Cadenas solo en <code>$fileB</code> (" . count($onlyInB) . "):</h3>";
    if ($onlyInB) {
        echo "<ul>";
        foreach ($onlyInB as $text) {
            echo "<li>" . htmlspecialchars($text) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Ninguna.</p>";
    }

} catch (Exception $e) {
    echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
