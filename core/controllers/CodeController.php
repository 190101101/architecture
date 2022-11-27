<?php 

namespace core\controllers;
use app\controller;
use core\models\Code;

class CodeController extends controller
{
    public $code;
    
    public function __construct()
    {
        $this->code = new Code();
    }

    public function code()
    {
        $this->layout('main', 'code', 'code', []);
    }
}

