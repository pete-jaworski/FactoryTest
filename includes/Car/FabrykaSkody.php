<?php
namespace PiotrJaworski\FactoryTest\Car\Skoda;

class FabrykaSkody extends \PiotrJaworski\FactoryTest\Car\FabrykaAut
{

     public function produkuj()
     {
         return new \PiotrJaworski\FactoryTest\Car\Skoda\Skoda();
     }
    
    
}
