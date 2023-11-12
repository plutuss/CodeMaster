<?php


use Framework\Config\Config;

return [
    'url' => Config::get('app.url') .'/storage/',
    'path' => APP_DIR . "/storage/",
    'dir' => '',
];