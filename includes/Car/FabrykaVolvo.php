<?php
namespace PiotrJaworski\Car\Volvo;

class FabrykaVolvo extends \PiotrJaworski\Car\FabrykaAut
{

     public function produkuj()
     {
         return new \PiotrJaworski\Car\Volvo\Volvo();
     }
    
    
}
 