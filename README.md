# formulame
Small php package that creates html forms from database

# Instalation

`composer require sodecl/formulame`

# Usage 
First you need to create your config. For this you can use the example shipped with the library. 

`cp vendor/sodecl/formulame/src/config/config.example.php config.formulame.php`

Then complete the fields inside the config file.

```php
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
```

For now you have to be sure that the `output_folder` exists.

To generate the forms just execute:
`vendor/bin/formulame`

In this early version there is only support for MySQL and Mariadb, both using the same driver `mysql`.


