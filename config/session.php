<?php

return [
//    'timeout' => time() + 60 * 60 * 24 * 30,
    'timeout' => envt('SESSION_LIFETIME', 60 * 60 * 24 * 30),

];