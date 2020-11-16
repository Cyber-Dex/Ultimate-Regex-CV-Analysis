<?php


namespace App\Custom;


use PHPUnit\Exception;

class Zivotopis
{
    private $zivotopis;

    public function __construct()
    {
        try {
            $this->zivotopis = fopen("cv/test.txt", "r");
        } catch (Exception $exception)
        {
            echo $exception;
        }
    }

    public function findFirstName() : string
    {
        if(preg_match("/Křestní jméno: /", $this->readFile(), $array) )
        {
            print_r($array);
        }
        else echo 'Not found';

        return '';
    }

    public function findLastName() : string
    {

    }

    /*public function getKeywords(array $arrayOfKeywords) : string
    {
        foreach($arrayOfKeywords as $keyword)
        {
            $this->findKeyword($keyword);
        }
    }*/

    private function readFile()
    {
        return fread($this->zivotopis, filesize("cv/test.txt"));
    }

    public function write()
    {
        print_r($this->readFile());
    }

}
