<?php

$sourceFile = 'messages.en.xlf';
$files = glob('*.xlf');

/**
 * Load the ordering of trans-unit IDs from the source file.
 */
function getTransUnitOrder(string $filePath): array {
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

/**
 * Create a backup copy of a file with .bak extension.
 */
function createBackup(string $filePath): string {
    $backupPath = $filePath . '.bak';
    copy($filePath, $backupPath);
    return $backupPath;
}

/**
 * Reorder trans-units in a file based on the reference order.
 */
function reorderXlf(string $filePath, array $referenceOrder): void {
    $doc = new DOMDocument();
    $doc->preserveWhiteSpace = false;
    $doc->formatOutput = true;
    $doc->load($filePath);

    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("x", "urn:oasis:names:tc:xliff:document:1.2");

    $bodyNode = $xpath->query('//x:body')->item(0);
    if (!$bodyNode) {
        echo "⚠️ No <body> found in $filePath\n";
        return;
    }

    // Index existing trans-units by ID
    $transUnits = [];
    foreach ($xpath->query('.//x:trans-unit', $bodyNode) as $unit) {
        $id = $unit->getAttribute('id');
        $transUnits[$id] = $unit;
    }

    // Clear current body
    while ($bodyNode->firstChild) {
        $bodyNode->removeChild($bodyNode->firstChild);
    }

    // Re-add units in reference order
    foreach ($referenceOrder as $id) {
        if (!isset($transUnits[$id])) continue;

        $unit = $transUnits[$id];
        $imported = $doc->importNode($unit, true);

        // Ensure <target></target> exists and is not self-closing
        $hasTarget = false;
        foreach ($imported->childNodes as $child) {
            if ($child->nodeName === 'target') {
                $hasTarget = true;
                if (!$child->hasChildNodes()) {
                    $child->nodeValue = ''; // enforce <target></target>
                }
            }
        }

        if (!$hasTarget) {
            $targetNode = $doc->createElement('target', '');
            $imported->appendChild($targetNode);
        }

        $bodyNode->appendChild($imported);
    }

    $doc->save($filePath);
}

/**
 * Extract a mapping of trans-unit ID => translation string (target text).
 */
function extractTranslations(string $filePath): array {
    $doc = new DOMDocument();
    $doc->load($filePath);
    $xpath = new DOMXPath($doc);
    $xpath->registerNamespace("x", "urn:oasis:names:tc:xliff:document:1.2");

    $translations = [];
    foreach ($xpath->query('//x:trans-unit') as $unit) {
        $id = $unit->getAttribute('id');
        $target = $xpath->query('x:target', $unit)->item(0);
        $translations[$id] = $target ? $target->textContent : '';
    }
    return $translations;
}

/**
 * Compare translations from two files. Returns true if identical.
 */
function translationsAreIdentical(string $file1, string $file2): bool {
    $t1 = extractTranslations($file1);
    $t2 = extractTranslations($file2);
    ksort($t1);
    ksort($t2);
    return $t1 === $t2;
}

// Load source ordering
$referenceOrder = getTransUnitOrder($sourceFile);

// Process each file
foreach ($files as $file) {
    if ($file === $sourceFile) continue;

    echo "🔄 Processing: $file\n";
    $backup = createBackup($file);
    reorderXlf($file, $referenceOrder);

    if (translationsAreIdentical($file, $backup)) {
        unlink($backup);
        echo "✅ $file reordered and backup removed (no changes in translations).\n";
    } else {
        echo "⚠️ $file reordered, but differences found. Backup kept: $backup\n";
    }
}

echo "🎉 All files processed.\n";
