<?php


namespace App\Custom;


class Uchazec
{
    private ?Zivotopis $zivotopis;

    public function __construct()
    {
        $this->zivotopis = new Zivotopis();
    }

    public function getResume()
    {
        return $this->zivotopis;
    }

}
