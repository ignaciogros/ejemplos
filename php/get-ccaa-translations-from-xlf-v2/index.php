<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['original'], $_FILES['nuevo'])) {

    function cargarXLF($filePath) {
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file($filePath);
        if (!$xml) {
            die("Error al cargar el archivo XLF: $filePath");
        }
        $xml->registerXPathNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');
        return $xml;
    }

    function extraerTraducciones($xml) {
        $traducciones = [];
        foreach ($xml->xpath('//x:trans-unit') as $unit) {
            $source = trim((string)$unit->source);
            $target = $unit->target;
            $resname = isset($unit['resname']) ? trim((string)$unit['resname']) : null;
            $id = isset($unit['id']) ? trim((string)$unit['id']) : null;

            if ($source) {
                $traducciones['source:'.$source] = $target;
            }
            if ($resname) {
                $traducciones['resname:'.$resname] = $target;
            }
            if ($id) {
                $traducciones['id:'.$id] = $target;
            }
        }
        return $traducciones;
    }

    $originalFile = $_FILES['original']['tmp_name'];
    $nuevoFile = $_FILES['nuevo']['tmp_name'];

    $original = cargarXLF($originalFile);
    $nuevo = cargarXLF($nuevoFile);

    $trads = extraerTraducciones($nuevo);

    foreach ($original->xpath('//x:trans-unit') as $unit) {
        $source = trim((string)$unit->source);
        $resname = isset($unit['resname']) ? trim((string)$unit['resname']) : null;
        $id = isset($unit['id']) ? trim((string)$unit['id']) : null;

        $nuevoTarget = null;
        if (isset($trads['id:'.$id])) {
            $nuevoTarget = $trads['id:'.$id];
        } elseif (isset($trads['source:'.$source])) {
            $nuevoTarget = $trads['source:'.$source];
        } elseif ($resname && isset($trads['resname:'.$resname])) {
            $nuevoTarget = $trads['resname:'.$resname];
        }

        $dom = dom_import_simplexml($unit);
        $doc = $dom->ownerDocument;

        // Eliminar target existente (forma segura, sin warnings)
        if (isset($unit->target)) {
            unset($unit->target[0]);
        }

        // Crear nuevo target
        $targetNode = $doc->createElement('target');
        if ($nuevoTarget !== null) {
            $nuevoStr = (string)$nuevoTarget;
            if (preg_match('/<!\[CDATA\[(.*?)\]\]>/', $nuevoStr, $m)) {
                $targetNode->appendChild($doc->createCDATASection($m[1]));
            } else {
                $targetNode->appendChild($doc->createTextNode($nuevoStr));
            }
        }
        $dom->appendChild($targetNode);
    }

    // Convertir a DOMDocument para indentar
    $domResult = new DOMDocument('1.0', 'utf-8');
    $domResult->preserveWhiteSpace = false;
    $domResult->formatOutput = true;

    $domResult->loadXML($original->asXML());

    // Asegurar <target></target> (no self-closing)
    $xmlString = $domResult->saveXML();
    $xmlString = preg_replace('/<target\s*\/>/', '<target></target>', $xmlString);

    $resultadoPath = tempnam(sys_get_temp_dir(), 'resultado_') . '.xlf';
    file_put_contents($resultadoPath, $xmlString);

    header('Content-Type: application/xml; charset=utf-8');
    header('Content-Disposition: attachment; filename="Resultado.xlf"');
    readfile($resultadoPath);
    unlink($resultadoPath);
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Fusionar archivos XLF</title>
<style>
body { font-family: sans-serif; margin: 2em; background: #f7f7f7; }
form { background: white; padding: 2em; border-radius: 10px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
label { display: block; margin-top: 1em; font-weight: bold; }
button { margin-top: 2em; padding: 0.8em 1.5em; background: #007bff; border: none; color: white; border-radius: 5px; cursor: pointer; }
button:hover { background: #0056b3; }
</style>
</head>
<body>
<h1>Fusionar archivos XLF</h1>
<form method="POST" enctype="multipart/form-data">
    <label>Archivo Original (.xlf):</label>
    <input type="file" name="original" accept=".xlf" required>

    <label>Archivo Nuevas Traducciones (.xlf):</label>
    <input type="file" name="nuevo" accept=".xlf" required>

    <button type="submit">Generar Resultado</button>
</form>
</body>
</html>
