<?php


namespace Sodecl\Formulame\classes;


use PDO;
use Sodecl\Formulame\database\Connection;

class Application
{

    protected $config;
    protected $connection;
    protected $tables;
    protected $forms;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->connection = Connection::make($this->config['database']);
    }

    public function run()
    {
        $this->getTablesFromDatabase();
        $this->parseTables();
        $this->writeForms();
    }

    protected function getTablesFromDatabase()
    {
        if ($this->config['database']['driver'] == 'mysql') {
            $stmt = $this->connection->prepare('show tables');
            $stmt->execute();
            $this->tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
        }
    }

    protected function parseTables()
    {
        foreach ($this->tables as $key => $table) {
            if (!in_array($table, $this->config['ignored_tables'])) {
                $this->forms[$table] = (new Table($table, $this->connection, $this->config))->makeForm();
            }
        }
    }

    protected function writeForms()
    {

        foreach ($this->forms as $form_name => $form_content) {
            file_put_contents($this->config['output_folder'].$form_name.'.html',$form_content);
        }
    }

}