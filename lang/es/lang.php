<?php

return [
    'plugin' => [
        'name' => 'Editores Wysiwyg',
        'description' => 'Inyecta tu Editor Wysiwyg favorito al módulo CMS y otros editores de código'
    ],
    'settings' => [
        'label' => 'Editores Wysiwyg',
        'description' => 'Configura las preferencias de Editores Wysiwyg.'
    ],
    'widget' => [
        'label' => 'Wysiwyg',
        'name' => 'Editores Wysiwyg',
        'description' => 'Genera un editor wysiwyg según la elección del usuario.'
    ],
    'form' => [
        'settings' => [
            'select_editor' => 'Seleccionar editor',
            'editor_width' => 'Ancho del editor',
            'editor_height' => 'Altura del editor',
            'toolbar_label' => 'Personalizar botones',
            'toolbar_tinymce' => 'Documentación: http://www.tinymce.com/docs/advanced/editor-control-identifiers/#toolbarcontrols',
            'toolbar_ckeditor' => 'Documentación: http://docs.ckeditor.com/#!/guide/dev_toolbar'
        ],
        'page' => [
            'label' => '¿Usar en CMS - Páginas?',
            'comment' => 'Usar editor Wysiwyg en módulo CMS/Páginas'
        ],
        'content' => [
            'label' => '¿Usar en CMS - Contenido?',
            'comment' => 'Usar editor Wysiwyg en módulo CMS/Contenido'
        ],
        'partial' => [
            'label' => '¿Usar en CMS - Parciales?',
            'comment' => 'Usar editor Wysiwyg en módulo CMS/Parciales'
        ],
        'layout' => [
            'label' => '¿Usar en CMS - Diseños?',
            'comment' => 'Usar editor Wysiwyg en módulo CMS/Diseños'
        ],
        'others' => [
            'label' => '¿Usar en otros?',
            'comment' => 'Reemplazar todas las instancias del editor de código con el editor seleccionado en todos los plugins a excepción de CMS (Páginas, Parciales, Diseños, Contenido)'
        ],
        'spages' => [
            'label' => '¿Usar en Páginas Estáticas de RainLab?',
            'comment' => 'Usar editor Wysiwyg en el plugin Páginas Estáticas de RainLab como editor de páginas'
        ],
        'blog' => [
            'label' => '¿Usar en RainLab Blog?',
            'comment' => 'Usar editor Wysiwyg en el plugin RainLab Blog como editor de entradas'
        ],
        'problog' => [
            'label' => '¿Usar en Radiantweb Problog?',
            'comment' => 'Usar editor Wysiwyg en el plugin Radiantweb Problog como editor de entradas'
        ],
        'proevent' => [
            'label' => '¿Usar en Radiantweb ProEvents?',
            'comment' => 'Usar editor Wysiwyg en el plugin Radiantweb ProEvents como editor de detalle de Evento'
        ],
        'apages' => [
            'label' => '¿Usar en Autumn Pages?',
            'comment' => 'Usar editor Wysiwyg en el plugin Autumn Pages como editor de páginas'
        ],
        'cplus' => [
            'label' => '¿Usar en Indikator Content Plus?',
            'comment' => 'Usar editor Wysiwyg en el plugin Indikator Content Plus como editor de contenido'
        ],
        'news' => [
            'label' => '¿Usar en Indikator News & Newsletter?',
            'comment' => 'Usar editor Wysiwyg en el plugin Indikator News & Newsletter como editor de noticias'
        ],
        'tab' => [
            'settings' => 'Configuración',
            'content' => 'Contenido',
            'section' => 'Plugins'
        ]
    ]
];
