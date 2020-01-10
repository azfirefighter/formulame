<?php


namespace Sodecl\Formulame\database;


class Connection
{
    /**
     * @param array $config
     * @return \PDO
     * @throws \Exception
     */
    public static function make(array $config)
    {
        try {
            $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['db_name']};utf8mb4";
            return new \PDO($dsn, $config['username'], $config['password']);
        }catch (\Exception $exception){
            throw $exception;
        }
    }

}