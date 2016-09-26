<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PiotrJaworski\FactoryTest\Flower;

/**
 * Description of Kwiaciarnia
 *
 * @author asus
 */
class Kwiaciarnia
{

    const GER = "Gerber";
    const STO = "Stokrotka";    
    
    public static function makeBouqet($flower)
    {
        switch($flower){
            case Kwiaciarnia::GER : return new \PiotrJaworski\FactoryTest\Flower\Gerber();
            case Kwiaciarnia::STO : return new \PiotrJaworski\FactoryTest\Flower\Stokrotka();
        }
    }
    
    
}
