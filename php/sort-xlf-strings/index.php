<?php

$sourceFile = 'messages.en.xlf';
$files = glob('*.xlf');

function getTransUnitOrder($filePath) {
    $doc = new DOMDocument();
    $doc->load($filePath);
    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("x", "urn:oasis:names:tc:xliff:document:1.2");

    $order = [];
    foreach ($xpath->query('//x:trans-unit') as $unit) {
        $id = $unit->getAttribute('id');
        $order[] = $id;
    }
    return $order;
}

function reorderXlf($filePath, $referenceOrder) {
    $doc = new DOMDocument();
    $doc->preserveWhiteSpace = false;
    $doc->formatOutput = true;
    $doc->load($filePath);

    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("x", "urn:oasis:names:tc:xliff:document:1.2");

    $bodyNode = $xpath->query('//x:body')->item(0);
    if (!$bodyNode) {
        echo "No <body> found in $filePath\n";
        return;
    }

    // Indexar unidades por ID
    $transUnits = [];
    foreach ($xpath->query('.//x:trans-unit', $bodyNode) as $unit) {
        $id = $unit->getAttribute('id');
        $transUnits[$id] = $unit;
    }

    // Eliminar todas las trans-units actuales
    while ($bodyNode->firstChild) {
        $bodyNode->removeChild($bodyNode->firstChild);
    }

    // Añadir en el orden correcto
    foreach ($referenceOrder as $id) {
        if (!isset($transUnits[$id])) continue;

        $unit = $transUnits[$id];
        $imported = $doc->importNode($unit, true);

        // Asegurar <target></target> (no <target/>) aunque esté vacío
        $target = null;
        foreach ($imported->childNodes as $child) {
            if ($child->nodeName === 'target') {
                $target = $child;
                break;
            }
        }

        if (!$target) {
            $target = $doc->createElement('target', '');
            $imported->appendChild($target);
        } elseif ($target->nodeType === XML_ELEMENT_NODE && !$target->hasChildNodes()) {
            $target->nodeValue = ''; // fuerza <target></target>
        }

        $bodyNode->appendChild($imported);
    }

    $doc->save($filePath);
    echo "✅ Reordenado: $filePath<br>";
}

// 1. Obtener orden del archivo fuente
$order = getTransUnitOrder($sourceFile);

// 2. Procesar cada archivo
foreach ($files as $file) {
    if ($file === $sourceFile) continue;
    reorderXlf($file, $order);
}

echo "✅ Todos los archivos fueron reordenados correctamente.<br>";
