<?php

$dir = __DIR__ . '/xlf'; // Directory containing .xlf files
$referenceFile = $dir . '/messages.en.xlf'; // Reference file (must not be modified)

// Load the reference file
$refDom = new DOMDocument();
$refDom->load($referenceFile);
$refXPath = new DOMXPath($refDom);
$refXPath->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');

// Collect valid keys from resname or source text
$validKeys = [];

foreach ($refXPath->query('//x:trans-unit') as $unit) {
    $resname = $unit->getAttribute('resname');
    if ($resname !== '') {
        $validKeys[$resname] = true;
    } else {
        $sourceNode = $unit->getElementsByTagName('source')->item(0);
        if ($sourceNode) {
            $key = trim($sourceNode->nodeValue);
            if ($key !== '') {
                $validKeys[$key] = true;
            }
        }
    }
}

// Process other .xlf files in the directory
$files = glob($dir . '/*.xlf');

foreach ($files as $file) {
    if (basename($file) === 'messages.en.xlf') continue;

    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->load($file);

    $xpath = new DOMXPath($dom);
    $xpath->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');

    $changed = false;

    foreach ($xpath->query('//x:trans-unit') as $unit) {
        $keep = false;
        $resname = $unit->getAttribute('resname');
        $sourceNode = $unit->getElementsByTagName('source')->item(0);
        $sourceText = $sourceNode ? trim($sourceNode->nodeValue) : '';

        if ($resname !== '' && isset($validKeys[$resname])) {
            $keep = true;
        } elseif ($sourceText !== '' && isset($validKeys[$sourceText])) {
            $keep = true;
        }

        if (!$keep) {
            $unit->parentNode->removeChild($unit);
            $changed = true;
        } else {
            // Normalize empty <target/> to <target></target>
            $targetNode = $unit->getElementsByTagName('target')->item(0);
            if ($targetNode && !$targetNode->hasChildNodes()) {
                $targetNode->nodeValue = '';
                $changed = true;
            }
        }
    }

    if ($changed) {
        $dom->save($file);
        echo "Cleaned file: " . basename($file) . "<br>";
    } else {
        echo "No changes: " . basename($file) . "<br>";
    }
}

echo "<br>Cleanup process completed.";
?>
