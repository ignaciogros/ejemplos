<?php

    // Código del idioma
    $lang = "zxx";

    // Ruta hacia los ficheros estáticos (dentro de eXe será diferente)
    $base = "./assets/";

    // Cadenas de idioma (falta definir el objeto JavaScript que debería ir en un fichero JS independiente)
    $i18n = (object) [
        'skipNavigation' => 'Saltar al contenido',
        'hideShowNav' => 'Ocultar/Mostrar menú',
        'search' => 'Buscar...',
        'previous' => 'Anterior',
        'next' => 'Siguiente',
    ];

    // Clase de BODY según el tipo de exportación
    $bodyClass = "exe-scorm";

    // Título del paquete
    $packageTitle = "Intentando crear estilos para eXeLearning 3.0";

    // PROPIEDADES DEL PAQUETE
    
        // Licencia del paquete
        $license = '
            <div id="packageLicense" class="cc cc-by-sa">
                <p><span>Licensed under the</span> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution Share Alike License 4.0</a></p>
            </div>
        ';

        // Pie de página del paquete introducido por el usuario (to do: falta HEAD)
        $footer = 'Pie de página introducido por el usuario para <a href="https://exelearning.net" target="_blank">eXeLearning</a>';
        
        // Navegación (cadenas vacías si no es sitio web)
        $nav = "";
        $nextNode = '';
        $prevNode = '';
        
        // Enlace "Hecho con eXe" (si la preferencia no se desmarca) en el idioma adecuado
        $exeLink = '<p id="made-with-eXe"><a href="https://exelearning.net/" target="_blank" rel="noopener"><span>Creado con eXeLearning<span> (Ventana nueva)</span></span></a></p>';
        
    // PROPIEDADES DEL NODO
    
        // ID del nodo
        $nodeId = "theNodeId"; // exe-index tiene un comportamiento diferente
        
        // Título del nodo
        $nodeTitle = "Un contenido de ejemplo para generar nuevos estilos";

        // Descripción del nodo (si está vacía, y es la página principal, se usa la descripción del paquete)
        $nodeDescription = "...";
        
        // HEAD content
        
            /*
                
                charset
                
                Título del nodo (diferente en index.html)
                
                Descipción del nodo (solo si existe). Valores:
                    
                    - La del nodo, si está vacía, nada, salvo que sea index.html
                    - index.html de página sola: la del paquete
                    - index.html de otras: la del nodo o la del paquete
                    - Si no hay descripción, no está esa etiqueta META
                    
                ¿Favicon (si el estilo no lo tiene, se usa el de eXe)? Eso implica que en el estilo siempre esté en el mismo sitio.
                
                CSS y JS, cargados en este orden:
                    
                    - CSS de Bootstrap
                    - CSS común (base, que igual debería llamarse common o exelearning)
                    - jQuery
                    - JS de Bootstrap
                    - JS común (common, que igual debería llamarse exelearning)
                    - Los CSS de los iDevices utilizados en el nodo
                    - Los JS de los iDevices utilizados en el nodo
                    
            */
        
            // HTML title
            $_nodeTitle = $packageTitle;
            if ($nodeId != 'exe-index') $_nodeTitle = $nodeTitle . ' | ' . $packageTitle;
            
            // Descripción del nodo / paquete
            $_nodeDescription = '';
                // Si hay contenido:
                $_nodeDescription = '<meta name="description" content="La descripción que corresponda">';
            
            $nodeHead = '
                <meta charset="utf-8">
                <title>' . $_nodeTitle . '</title>
                ' . $_nodeDescription . '
                <link rel="shortcut icon" href="' . $base . 'img/favicon.ico" type="image/x-icon">
                <link rel="stylesheet" href="' . $base . 'css/bootstrap.min.css">
                <link rel="stylesheet" href="' . $base . 'css/base.css">
                <script src="' . $base . 'js/jquery.min.js"></script>
                <script src="' . $base . 'js/bootstrap.bundle.min.js"></script>
                <script src="' . $base . 'js/common.js"></script>
            ';

        // Contenido del nodo (código común para cajas e iDevices)
        /* 
        
            // HTML de las cajas
            function get_box_content(...) {
                $html = '';
                for ($x = 0; $x < númeroIdevicesEnLaCaja; $x++) {
                    $html .= get_idevice_content(...)
                }
                return $html;
            }
            
            // HTML de los iDevices
            function get_idevice_content(...) {
                $html = '...';
                return $html;
            }
        
            $nodeContent = '';
            for ($x = 0; $x < númeroDeCajas; $x++) {
                $nodeContent .= get_box_content(...)
            }
        */

        $nodeContent = '
            <article id="aaa" class="box titled-box">
                <header class="box-head">
                    <div class="box-icon exe-icon" style="background-image: url(' . $base . 'img/icons/icon_info.png)"></div>
                    <h1 class="box-title h4">Vamos a ponerle un título muy largo para ver cóme se comporta en resoluciones bajas</h1>
                    <button class="btn btn-text box-toggler box-toggle-on js-required"><i class="fa fa-chevron-up"></i></button>
                </header>
                <div class="box-content shadow-sm">
                    <div id="bbb" class="idevice_node text" data-idevice-component-type="json" data-idevice-type="text" data-idevice-path="/api/idevice-management/idevices/download/file/resources?resource=/tmp/2025/03/11/20250311101443NBKSVH/tmp/cmorsoc/export/idevices/text/" data-idevice-json-data="{&quot;ideviceId&quot;:&quot;20250321113350457LW8&quot;,&quot;textInfoDurationInput&quot;:&quot;&quot;,&quot;textInfoDurationTextInput&quot;:&quot;Duración:&quot;,&quot;textInfoParticipantsInput&quot;:&quot;&quot;,&quot;textInfoParticipantsTextInput&quot;:&quot;Agrupar:&quot;,&quot;textTextarea&quot;:&quot;&lt;p&gt;bbb&lt;/p&gt;&quot;,&quot;textFeedbackInput&quot;:&quot;Mostrar comentarios&quot;,&quot;textFeedbackTextarea&quot;:&quot;&quot;}" data-idevice-template="&lt;div class=&quot;exe-text-template&quot;&gt;{content}&lt;/div&gt;" data-visibility="true" data-language="es">
                        <div class="exe-text-template">
                            <div class="textIdeviceContent">
                                <div class="exe-text-activity">
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <figure class="exe-figure exe-media position-center license-standard-youtube" style="width: 560px;"><iframe width="560" height="314" src="https://www.youtube.com/embed/CWx8fpQKo6k?rel=1&amp;start=1738" allowfullscreen="allowfullscreen"></iframe>
                                            <figcaption class="figcaption"><a href="https://www.youtube.com/watch?v=CWx8fpQKo6k" target="_blank" class="title" rel="noopener"><em>Un vídeo de YouTube</em></a> <span class="license"><span class="sep">(</span><a href="https://www.youtube.com/static?template=terms" rel="license nofollow noopener" target="_blank">Standard YouTube License</a><span class="sep">)</span></span></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ccc" class="idevice_node text" data-idevice-component-type="json" data-idevice-type="text" data-idevice-path="/api/idevice-management/idevices/download/file/resources?resource=/tmp/2025/03/11/20250311101443NBKSVH/tmp/cmorsoc/export/idevices/text/" data-idevice-json-data="{&quot;ideviceId&quot;:&quot;20250321113400496SF6&quot;,&quot;textInfoDurationInput&quot;:&quot;&quot;,&quot;textInfoDurationTextInput&quot;:&quot;Duración:&quot;,&quot;textInfoParticipantsInput&quot;:&quot;&quot;,&quot;textInfoParticipantsTextInput&quot;:&quot;Agrupar:&quot;,&quot;textTextarea&quot;:&quot;&lt;p&gt;ccc&lt;/p&gt;&quot;,&quot;textFeedbackInput&quot;:&quot;Mostrar comentarios&quot;,&quot;textFeedbackTextarea&quot;:&quot;&quot;}" data-idevice-template="&lt;div class=&quot;exe-text-template&quot;&gt;{content}&lt;/div&gt;" data-visibility="true" data-language="es">
                        <div class="exe-text-template">
                            <div class="textIdeviceContent">
                                <div class="exe-text-activity">
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article id="ddd" class="box untitled-box">
                <header class="box-head">
                    <button class="btn btn-text box-toggler box-toggle-on js-required"><i class="fa fa-chevron-up"></i></button>
                </header>
                <div class="box-content">
                    <div id="eee" class="idevice_node text" data-idevice-component-type="json" data-idevice-type="text" data-idevice-path="/api/idevice-management/idevices/download/file/resources?resource=/tmp/2025/03/11/20250311101443NBKSVH/tmp/cmorsoc/export/idevices/text/" data-idevice-json-data="{&quot;ideviceId&quot;:&quot;20250321113350457LW8&quot;,&quot;textInfoDurationInput&quot;:&quot;&quot;,&quot;textInfoDurationTextInput&quot;:&quot;Duración:&quot;,&quot;textInfoParticipantsInput&quot;:&quot;&quot;,&quot;textInfoParticipantsTextInput&quot;:&quot;Agrupar:&quot;,&quot;textTextarea&quot;:&quot;&lt;p&gt;bbb&lt;/p&gt;&quot;,&quot;textFeedbackInput&quot;:&quot;Mostrar comentarios&quot;,&quot;textFeedbackTextarea&quot;:&quot;&quot;}" data-idevice-template="&lt;div class=&quot;exe-text-template&quot;&gt;{content}&lt;/div&gt;" data-visibility="true" data-language="es">
                        <div class="exe-text-template">
                            <div class="textIdeviceContent">
                                <div class="exe-text-activity">
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <figure class="exe-figure exe-media position-center license-standard-youtube" style="width: 560px;"><iframe width="560" height="314" src="https://www.youtube.com/embed/b3Jqcz7QKno" allowfullscreen="allowfullscreen"></iframe>
                                            <figcaption class="figcaption"><a href="https://www.youtube.com/watch?v=b3Jqcz7QKno" target="_blank" class="title" rel="noopener"><em>Un vídeo de YouTube</em></a> <span class="license"><span class="sep">(</span><a href="https://www.youtube.com/static?template=terms" rel="license nofollow noopener" target="_blank">Standard YouTube License</a><span class="sep">)</span></span></figcaption>
                                        </figure>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <figure class="exe-figure exe-image position-center license-CC-BY-SA" style="width: 560px;"><img src="https://dummyimage.com/560x314/ccc/333" alt="" width="560" height="314" />
                                            <figcaption class="figcaption"><span class="title"><em>Nada más que una imagen de ejemplo</em></span> <span class="license"><span class="sep">(</span><a href="http://creativecommons.org/licenses/" rel="license nofollow noopener" target="_blank" title="Creative Commons BY-SA">CC BY-SA</a><span class="sep">)</span></span></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fff" class="idevice_node text" data-idevice-component-type="json" data-idevice-type="text" data-idevice-path="/api/idevice-management/idevices/download/file/resources?resource=/tmp/2025/03/11/20250311101443NBKSVH/tmp/cmorsoc/export/idevices/text/" data-idevice-json-data="{&quot;ideviceId&quot;:&quot;20250321113400496SF6&quot;,&quot;textInfoDurationInput&quot;:&quot;&quot;,&quot;textInfoDurationTextInput&quot;:&quot;Duración:&quot;,&quot;textInfoParticipantsInput&quot;:&quot;&quot;,&quot;textInfoParticipantsTextInput&quot;:&quot;Agrupar:&quot;,&quot;textTextarea&quot;:&quot;&lt;p&gt;ccc&lt;/p&gt;&quot;,&quot;textFeedbackInput&quot;:&quot;Mostrar comentarios&quot;,&quot;textFeedbackTextarea&quot;:&quot;&quot;}" data-idevice-template="&lt;div class=&quot;exe-text-template&quot;&gt;{content}&lt;/div&gt;" data-visibility="true" data-language="es">
                        <div class="exe-text-template">
                            <div class="textIdeviceContent">
                                <div class="exe-text-activity">
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        ';
    
        // Contador de páginas (vacío si la preferencia no está marcada)
        $nodeCounter = '<p class="page-counter"><span>Página </span><strong>1</strong> de <strong>1</strong></p>';

    // EJEMPLO DE SITIO WEB
    if ( isset($_GET['type']) && $_GET['type'] == 'website' ) {
        
        // Clase de BODY diferente
        $bodyClass = "exe-web-site";
        
        // Sí tiene menú
        $nav = '
            <ul>
                <li><a href="index.html" class="daddy main-node">La ruta del barroco</a></li>
                <li><a href="el_inicio_del_camino.html" class="no-ch">El inicio del camino</a></li>
                <li id="active"><a href="el_siglo_xvii_sangre_y_fuego.html" class="active daddy">El siglo XVII: sangre y fuego</a>
                    <ul>
                    <li><a href="apartado_de_segundo_nivel.html" class="no-ch">Apartado de segundo nivel</a></li>
                    <li><a href="otro_de_segundo_nivel.html" class="daddy">Otro de segundo nivel</a>
                        <ul class="other-section">
                            <li><a href="y_una_pgina_de_tercer_nivel.html" class="no-ch">Y una página de tercer nivel</a></li>
                            <li><a href="segunda_pgina_de_tercer_nivel.html" class="no-ch">Segunda página de tercer nivel</a></li>
                        </ul>
                    </li>
                    <li><a href="tercero_de_segundo_nivel.html" class="no-ch">Tercero de segundo nivel</a></li>
                    </ul>
                </li>
                <li><a href="turismo_barroco.html" class="no-ch">Turismo barroco</a></li>
                <li><a href="influencers_del_barroco.html" class="no-ch">Influencers del barroco</a></li>
                <li><a href="nuestro_museo_virtual.html" class="no-ch">Nuestro museo virtual</a></li>
                <li><a href="recopilamos_y_publicamos.html" class="no-ch">Recopilamos y publicamos</a></li>
                <li><a href="_gua_didctica_.html" class="no-ch">- Guía didáctica -</a></li>
                <li><a href="_crditos_y_descarga_.html" class="no-ch">- Créditos y descarga -</a></li>
                <li><a href="_opina_sobre_el_recurso_.html" class="no-ch">- Opina sobre el recurso -</a></li>
            </ul>
        ';
        
        // Tiene enlaces Anterior/Siguiente
        $nextNode = 'nextPage'; // Vacío o URL
        $prevNode = 'previousPage'; // Vacío o URL
        
    }
    
    // EJEMPLO DE SITIO WEB
    if ( isset($_GET['type']) && $_GET['type'] == 'single-page' ) {
        
        // Clase de BODY diferente
        $bodyClass = "exe-single-page";
        
        // De momento no tiene menú, pero podría tenerlo, con enlaces internos a los nodos
        $nav = '
            <ul>
                <li><a href="index.html" class="daddy main-node">La ruta del barroco</a></li>
                <li><a href="el_inicio_del_camino.html" class="no-ch">El inicio del camino</a></li>
                <li id="active"><a href="el_siglo_xvii_sangre_y_fuego.html" class="active daddy">El siglo XVII: sangre y fuego</a>
                    <ul>
                    <li><a href="apartado_de_segundo_nivel.html" class="no-ch">Apartado de segundo nivel</a></li>
                    <li><a href="otro_de_segundo_nivel.html" class="daddy">Otro de segundo nivel</a>
                        <ul class="other-section">
                            <li><a href="y_una_pgina_de_tercer_nivel.html" class="no-ch">Y una página de tercer nivel</a></li>
                            <li><a href="segunda_pgina_de_tercer_nivel.html" class="no-ch">Segunda página de tercer nivel</a></li>
                        </ul>
                    </li>
                    <li><a href="tercero_de_segundo_nivel.html" class="no-ch">Tercero de segundo nivel</a></li>
                    </ul>
                </li>
                <li><a href="turismo_barroco.html" class="no-ch">Turismo barroco</a></li>
                <li><a href="influencers_del_barroco.html" class="no-ch">Influencers del barroco</a></li>
                <li><a href="nuestro_museo_virtual.html" class="no-ch">Nuestro museo virtual</a></li>
                <li><a href="recopilamos_y_publicamos.html" class="no-ch">Recopilamos y publicamos</a></li>
                <li><a href="_gua_didctica_.html" class="no-ch">- Guía didáctica -</a></li>
                <li><a href="_crditos_y_descarga_.html" class="no-ch">- Créditos y descarga -</a></li>
                <li><a href="_opina_sobre_el_recurso_.html" class="no-ch">- Opina sobre el recurso -</a></li>
            </ul>
        ';
        
    }