<?php

    require_once('vendor/autoload.php');

    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader);

    // Fichero que contiene las variables
    require_once('vars.php');

    // Paquete
    $package = (object) [
        'title' => $packageTitle,
        'lang' => $lang,
        'bodyClass' => $bodyClass,
        'nav' => $nav,
        'license' => $license,
        'footer' => $footer,
        'exeLink' => $exeLink
    ];

    // Nodo
    $node = (object) [
        'metadata' => $nodeHead,
        'id' => $nodeId,
        'title' => $nodeTitle,
        'content' => $nodeContent,
        'prev' => $prevNode,
        'next' => $nextNode,
        'counter' => $nodeCounter
    ];

    // Render twig
    // Plantilla a usar
    $template = 'scorm';
    if ( isset($_GET['type']) && ( $_GET['type'] == 'website' || $_GET['type'] == 'page' ) ) {
        $template = $_GET['type'];
    }
    echo $twig->render($template . '.twig', [
        'base' => './assets/',
        'i18n' => $i18n,
        'package' => $package,
        'node' => $node
    ]);
