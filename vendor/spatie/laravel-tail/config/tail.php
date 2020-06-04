<?php

return [
    'production' => [

        /*
         * The host that contains your logs.
         */
        'host' => env('TAIL_HOST_PRODUCTION', ''),

        /*
         * The user to be used to SSH to the server.
         */
        'user' => env('TAIL_USER_PRODUCTION', ''),

        /*
         * The path to the directory that contains your logs.
         */
        'log_directory' => env('TAIL_LOG_DIRECTORY_PRODUCTION', ''),

    ],
];
