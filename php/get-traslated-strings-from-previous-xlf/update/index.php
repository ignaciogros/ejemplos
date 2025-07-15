<?php

function loadDom($filePath) {
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->load($filePath);
    return $dom;
}

function getTransUnitsFromDom(DOMDocument $dom) {
    $xpath = new DOMXPath($dom);
    $xpath->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');
    return $xpath->query('//x:trans-unit');
}

function normalize($text) {
    return trim(preg_replace('/\s+/u', ' ', html_entity_decode($text)));
}

$newDir = __DIR__ . '/new-translations';
$currentDir = __DIR__ . '/current-translations';
$totalTranslations = 0;
$translationsList = [];

foreach (glob("$newDir/*.xlf") as $newFilePath) {
    $fileName = basename($newFilePath);
    $currentFilePath = "$currentDir/$fileName";

    if (!file_exists($currentFilePath)) {
        continue;
    }

    // Backup antes de modificar
    $backupPath = "$currentFilePath.bak";
    if (!copy($currentFilePath, $backupPath)) {
        echo "⚠️ Error al crear backup de $fileName<br>";
        continue;
    }

    $newDom = loadDom($newFilePath);
    $currentDom = loadDom($currentFilePath);

    $newUnits = getTransUnitsFromDom($newDom);
    $currentUnits = getTransUnitsFromDom($currentDom);

    foreach ($newUnits as $newUnit) {
        $resname = normalize($newUnit->getAttribute('resname'));
        $sourceNode = $newUnit->getElementsByTagName('source')->item(0);
        $targetNode = $newUnit->getElementsByTagName('target')->item(0);
        $sourceText = normalize($sourceNode ? $sourceNode->nodeValue : '');
        $newTargetText = $targetNode ? $targetNode->nodeValue : '';

        if ($newTargetText === '') continue;

        foreach ($currentUnits as $currentUnit) {
            $currentResname = normalize($currentUnit->getAttribute('resname'));
            $currentSourceNode = $currentUnit->getElementsByTagName('source')->item(0);
            $currentTargetNode = $currentUnit->getElementsByTagName('target')->item(0);
            $currentSourceText = normalize($currentSourceNode ? $currentSourceNode->nodeValue : '');

            $match = false;
            if ($resname !== '' && $currentResname === $resname) {
                $match = true;
            } elseif ($sourceText !== '' && $currentSourceText === $sourceText) {
                $match = true;
            }

            if ($match && $currentTargetNode) {
                // Reemplazar el texto del target (con o sin CDATA)
                while ($currentTargetNode->firstChild) {
                    $currentTargetNode->removeChild($currentTargetNode->firstChild);
                }

                // CDATA si el nuevo target contiene caracteres especiales
                if (preg_match('/[<>&]/', $newTargetText)) {
                    $currentTargetNode->appendChild($currentDom->createCDATASection($newTargetText));
                } else {
                    $currentTargetNode->appendChild($currentDom->createTextNode($newTargetText));
                }

                $translationsList[] = "[$fileName] '{$resname}' → '$newTargetText'";
                $totalTranslations++;
                break;
            }
        }
    }

    // Guardar fichero actualizado
    $currentDom->save($currentFilePath);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Traducciones actualizadas</title>
</head>
<body>
    <h1>Traducciones actualizadas: <?= $totalTranslations ?></h1>
    <ul>
        <?php foreach ($translationsList as $translation): ?>
            <li><?= htmlspecialchars($translation) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
