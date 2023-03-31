<?php 

$scandir = scandir(dirname(dirname(__FILE__))."\\view\\".__FUNCTION__);
array_shift($scandir);
array_shift($scandir);
dd($scandir);
