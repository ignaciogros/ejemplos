<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileA']) && isset($_FILES['fileB'])) {
        $fileAPath = $_FILES['fileA']['tmp_name'];
        $fileBPath = $_FILES['fileB']['tmp_name'];
        $fileCName = 'C.xlf';
        $fileCPath = sys_get_temp_dir() . '/' . $fileCName;

        // Cargar A.xlf
        $xmlA = new DOMDocument();
        $xmlA->preserveWhiteSpace = false;
        $xmlA->formatOutput = true;
        if (!$xmlA->load($fileAPath)) {
            die("Error al cargar el archivo A.xlf");
        }

        // Cargar B.xlf
        $xmlB = new DOMDocument();
        $xmlB->preserveWhiteSpace = false;
        if (!$xmlB->load($fileBPath)) {
            die("Error al cargar el archivo B.xlf");
        }

        // Crear mapa de traducciones de B (resname => contenido de <target>)
        $translationsB = [];
        $xpathB = new DOMXPath($xmlB);
        $xpathB->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');
        foreach ($xpathB->query('//x:trans-unit') as $unit) {
            $resname = $unit->getAttribute('resname');
            $targetNode = $unit->getElementsByTagName('target')->item(0);
            if ($targetNode) {
                $translationsB[$resname] = $targetNode->C14N();
            }
        }

        // Reemplazar solo el contenido de <target> de A con las traducciones de B
        $xpathA = new DOMXPath($xmlA);
        $xpathA->registerNamespace('x', 'urn:oasis:names:tc:xliff:document:1.2');
        foreach ($xpathA->query('//x:trans-unit') as $unit) {
            $resname = $unit->getAttribute('resname');
            if (isset($translationsB[$resname])) {
                $targetNodeA = $unit->getElementsByTagName('target')->item(0);
                if ($targetNodeA) {
                    // Limpiar contenido actual
                    while ($targetNodeA->firstChild) {
                        $targetNodeA->removeChild($targetNodeA->firstChild);
                    }

                    // Cargar el <target> de B en DOM temporal
                    $tmpDom = new DOMDocument();
                    $tmpDom->loadXML($translationsB[$resname]);
                    $targetNodeB = $tmpDom->getElementsByTagName('target')->item(0);

                    // Copiar todos los hijos de <target> de B al <target> de A
                    foreach ($targetNodeB->childNodes as $child) {
                        $imported = $xmlA->importNode($child, true);
                        $targetNodeA->appendChild($imported);
                    }
                }
            }
        }

        // Guardar C.xlf en carpeta temporal
        $xmlA->save($fileCPath);

        echo "<p>Fichero C.xlf generado correctamente.</p>";
        echo "<p><a href='download.php?file=" . urlencode($fileCPath) . "' target='_blank'>Descargar C.xlf</a></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Generar C.xlf</title>
</head>
<body>
<h2>Generar C.xlf combinando traducciones</h2>
<p>Los ficheros se deben llamar así: A, B...</p>
<form method="post" enctype="multipart/form-data">
    <label>A.xlf (original: el XLF de eXe): <input type="file" name="fileA" required></label><br><br>
    <label>B.xlf (traducciones modernas: el XLF enviado por los colaboradores): <input type="file" name="fileB" required></label><br><br>
    <button type="submit">Generar C.xlf (el resultado, que tiene todas las nuevas traducciones de B)</button>
</form>
</body>
</html>
