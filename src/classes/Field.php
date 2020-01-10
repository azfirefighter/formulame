<?php


namespace Sodecl\Formulame\classes;


class Field
{
    public $Field;
    public $Type;
    public $Null;
    public $Key;
    public $Default;
    public $Extra;

    public function parseField()
    {
        return "
    <div class=\"w-1/3\">
        <label for=\"{$this->Field}\">{$this->getName()}</label>
        <input id=\"{$this->Field}\" 
            name=\"{$this->Field}\" 
            type=\"text\" class=\"{$this->getClasses()}\"/>
    </div>" . PHP_EOL;
    }

    private function getClasses()
    {
        return "bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal";
    }

    private function getName(){
        return str_replace('_',' ',$this->Field);
    }

}