<?php
namespace PiotrJaworski\Car\Skoda;

class FabrykaSkody extends \PiotrJaworski\Car\FabrykaAut
{

     public function produkuj()
     {
         return new \PiotrJaworski\Car\Skoda\Skoda();
     }
    
    
}
