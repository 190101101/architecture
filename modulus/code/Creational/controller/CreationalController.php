<?php 

namespace modulus\code\Creational\controller;
use modulus\code\Creational\model\CreationalModel;
use core\controller;

class CreationalController extends controller
{
    public $creational;
    
    public function __construct()
    {
        $this->creational = new CreationalModel();
    }

    public function FactoryMethod($type)
    {
        $this->layout('code', 'code', 'Creational/view/FactoryMethod', $type);
    }
    
    public function Singleton($type)
    {
        $this->layout('code', 'code', 'Creational/view/Singleton', $type);
    }
}


