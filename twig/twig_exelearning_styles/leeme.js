var variables = {
    
    // {{ base }}
    // Ruta al directorio de los ficheros (no es igual dentro de eXe)
    'base' : './',
    
    // {{ i18n.miCadena }}
    // Objeto con cadenas necesarias en el idioma del contenido
    'i18n' : {
        'example' : 'Ejemplo',
        'test' : 'Prueba'
    },
    
    // Datos del elp
    'package' : {
        
        // {{ package.title }}
        // Título del contenido
        'title' : 'Lo que sea',

        // {{ package.lang }}
        // Idioma del contenido
        'lang' : 'es',
        
        // {{ package.bodyClass }}
        // Clase de BODY (según el tipo de exportación y según preferencias)
        // Ejemplo: exe-web-site exe-search-bar exe-atools (sitio web con buscador y barra de accesibilidad)
        'bodyClass' : 'exe-web-site',
        
        // {{ package.nav|raw }}
        // HTML de la navegación (vacío si no es sitio web)
        // Habrá que revisar ese HTML para que sea como el de eXe 2.9
        // A futuro se podría incluir en página sola con enlaces a los nodos
        // Se podría usar sin "raw"?
        'nav' : '<ul>...</ul>',
        
        // {{ package.license|raw }}
        // HTML de la licencia
        // Se podría usar sin "raw"?
        'license' : '...',
        
        // {{ package.footer|raw }}
        // HTML introducido por el usuario
        // Se podría usar sin "raw"?
        'footer' : '...'
        
        // {{ package.exeLink|raw }}
        // HTML del enlace "Hecho con eXe" (en el idioma adecuado)
        // Se podría prescindir de esa variable y que se pinte automáticamente antes de </body>
        // Se podría usar sin "raw"?
        'exeLink' : '...'

    },
    
    // Datos del nodo (o página)
    node : {

        // {{ node.id }}
        // ID del nodo
        'id' : 'elIdDelNodo',
        
        // {{ node.title }}
        // Título del nodo
        'title' : 'El título del nodo',
        
        // {{ node.metadata|raw }}
        // Contenido completo de HEAD para ese nodo
        // Se podría usar sin "raw"?
        // Incluye:
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
                
            Ejemplo:
            
                <meta charset="utf-8">
                <title>Un contenido de ejemplo para generar nuevos estilos | Intentando crear estilos para eXeLearning 3.0</title>
                <meta name="description" content="La descripción que corresponda">
                <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
                <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
                <link rel="stylesheet" href="./assets/css/base.css">
                <script src="./assets/js/jquery.min.js"></script>
                <script src="./assets/js/bootstrap.bundle.min.js"></script>
                <script src="./assets/js/common.js"></script>
        */
        // Atención, porque las rutas no son iguales al exportar
        'metadata' : '...',
        
        // {{ node.content|raw }}
        // HTML del nodo (cajas, con o sin bordes/título/icono, con iDevices)
        // Se podría usar sin "raw"?
        // Hay que iterar por get_box_html y get_idevice_html (u otras funciones similares)
        'content' : '...',
        
        // {{ node.prev }}
        // URL del nodo anterior, o cadena vacía
        'prev' : '',
        
        // {{ node.next }}
        // URL del nodo siguiente, o cadena vacía
        'next' : '',
        
        // {{ node.counter|raw }}
        // HTML del contador (Página 1 de X)
        // Se podría usar sin "raw"?
        'counter' : '...'

    }
}