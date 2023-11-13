<?php

return [
    'driver' => envt('DRIVER_DB', 'mysql'),
    'host' => envt('DB_HOST', 'database'),
    'port' => envt('DB_PORT', 3306),
    'database' => envt('DB_DATABASE', 'lemp'),
    'username' => envt('DB_USERNAME', 'lemp'),
    'password' => envt('DB_PASSWORD', 'lemp'),
    'charset' => envt('CHARSET_DB', 'utf8'),
];