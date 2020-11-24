<?php
/**
 * Created by PhpStorm.
 * User: TeslaNikola2
 * Date: 11/19/2018
 * Time: 1:08 PM
 */

class PrvaKlasa
{
    function prvaMetoda()
    {
        $this->x=5;
        return "ovo je metoda Prve Klase".$this->x;
    }

    function drugaMetoda()
    {
        $this->x++;
        return $this->x;
    }
}