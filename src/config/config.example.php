<?php
return [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'db_name' => 'example',
        'username' => 'root',
        'password' => ''
    ],
    'ignored_tables'=>[
        'users',
    ],
    'ignored_columns'=>[
        'created_at','updated_at'
    ],
    'output_folder'=>''
];