<?php 

namespace app;

class controller
{
    public function __construct() {}

	public function view($modulus, $dir, $method, $data = [])
	{
		return view::view($modulus, $dir, $method, $data);
	}

	public function layout($layout, $modulus, $dir, $method, $data = [])
	{      
		return view::layout($layout, $modulus, $dir, $method, $data);
	}
}