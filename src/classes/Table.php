<?php


namespace Sodecl\Formulame\classes;


use PDO;

class Table
{

    protected $connection;
    protected $name;
    protected $config;

    /**
     * Table constructor.
     * @param $name
     * @param PDO $connection
     * @param $config
     */
    public function __construct($name, \PDO $connection,$config)
    {
        $this->name = $name;
        $this->connection = $connection;
        $this->config = $config;
    }

    /**
     *
     */
    public function makeForm()
    {
        $stmt = $this->connection->prepare("describe {$this->name}");
        $stmt->execute();
        $fields = $stmt->fetchAll(PDO::FETCH_CLASS,Field::class);

        $form = "<form method=\"POST\" action=\"\">".PHP_EOL;

        foreach ($fields as $field){
            if (!in_array($field->Field,$this->config['ignored_columns']))
            $form .= $field->parseField();
        }
        $form.= "</form>".PHP_EOL;
        return $form;
    }
}