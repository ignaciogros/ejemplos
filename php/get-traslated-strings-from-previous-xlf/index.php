<?php

function loadTranslations($filePath) {
    $translations = [];

    $xml = simplexml_load_file($filePath);
    $xml->registerXPathNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');

    foreach ($xml->xpath('//x:trans-unit') as $unit) {
        $source = trim((string)$unit->source);
        $target = trim((string)$unit->target);
        if ($source !== '' && $target !== '') {
            $translations[$source] = $target;
        }
    }

    return $translations;
}

function applyTranslations($sourceFilePath, $translations, $outputFilePath) {
    $xml = simplexml_load_file($sourceFilePath);
    $xml->registerXPathNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');

    foreach ($xml->xpath('//x:trans-unit') as $unit) {
        $sourceText = trim((string)$unit->source);
        $target = $unit->target;

        if (isset($translations[$sourceText])) {
            // Solo sobrescribe si está vacío
            if (trim((string)$target) === '') {
                $unit->target = $translations[$sourceText];
            }
        } else {
            // Si no hay traducción y <target> está vacío o autoclosed, forzar <target></target>
            if (!isset($unit->target)) {
                $unit->addChild('target', '');
            } elseif (trim((string)$target) === '') {
                $domTarget = dom_import_simplexml($unit->target);
                $domTarget->nodeValue = ''; // fuerza <target></target> en lugar de <target/>
            }
        }
    }

    // Guarda el XML con formato
    $dom = dom_import_simplexml($xml)->ownerDocument;
    $dom->formatOutput = true;
    $dom->save($outputFilePath);
}

// Archivos
$translatedFile = 'translated.xlf';
$sourceFile = 'messages.eo.xlf';
$outputFile = 'messages.eo.merged.xlf'; // archivo de salida

$translations = loadTranslations($translatedFile);
applyTranslations($sourceFile, $translations, $outputFile);

echo "Archivo fusionado guardado en $outputFile\n";
