<?php 

namespace core\controllers;
use app\controller;
use core\models\Creational;

class CreationalController extends controller
{
    public $creational;
    
    public function __construct()
    {
        $this->creational = new Creational();
    }

    public function FactoryMethod($type)
    {
        $this->layout('main', 'creational', 'FactoryMethod/'.$type);
    }
}


