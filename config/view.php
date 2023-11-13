<?php

return [
//    'path_view' => 'resources/views',
//    'path_cache' => 'storage/framework/views',

    'path_view' => envt('PATH_VIEW', 'resources/views'),
    'path_cache' => envt('PATH_CACHE', 'storage/framework/views'),


    'directive' => [
        \App\View\Directive::class,
    ]
];
