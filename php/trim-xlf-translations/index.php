<?php

$folder = __DIR__ . '/xlf'; // Path to the folder containing .xlf files
$files = glob($folder . '/*.xlf');

foreach ($files as $file) {
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->load($file);

    $xpath = new DOMXPath($dom);
    $xpath->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');

    $changed = false;

    foreach ($xpath->query('//x:trans-unit') as $transUnit) {
        $sourceNode = $transUnit->getElementsByTagName('source')->item(0);
        $targetNode = $transUnit->getElementsByTagName('target')->item(0);

        if (!$sourceNode) continue;

        // Create empty <target> if missing
        if (!$targetNode) {
            $targetNode = $dom->createElement('target', '');
            $transUnit->appendChild($targetNode);
            $changed = true;
        }

        // Skip <target> if it contains CDATA
        foreach ($targetNode->childNodes as $child) {
            if ($child->nodeType === XML_CDATA_SECTION_NODE) {
                continue 2; // Skip this trans-unit entirely
            }
        }

        $sourceText = $sourceNode->nodeValue;
        $targetText = $targetNode->nodeValue;

        $sourceEndsWithSpace = preg_match('/\s$/u', $sourceText);
        $targetEndsWithSpace = preg_match('/\s$/u', $targetText);

        if ($sourceEndsWithSpace && !$targetEndsWithSpace) {
            $targetNode->nodeValue = $targetText . ' ';
            $changed = true;
        } elseif (!$sourceEndsWithSpace && $targetEndsWithSpace) {
            $targetNode->nodeValue = rtrim($targetText);
            $changed = true;
        }

        // Ensure <target></target> format for empty strings
        if (trim($targetNode->nodeValue) === '') {
            while ($targetNode->hasChildNodes()) {
                $targetNode->removeChild($targetNode->firstChild);
            }
            $targetNode->appendChild($dom->createTextNode(''));
            $changed = true;
        }
    }

    if ($changed) {
        $dom->save($file);
        echo "Modified file: " . basename($file) . "<br>";
    } else {
        echo "No changes: " . basename($file) . "<br>";
    }
}

echo "<br>Process completed.";
?>
