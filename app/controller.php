<?php 

namespace app;

class controller
{
    public function __construct() {}

	public function view($modulus, $method, $data = [])
	{
		return view::view($modulus, $method, $data);
	}

	public function layout($layout, $modulus, $method, $data = [])
	{      
		return view::layout($layout, $modulus, $method, $data);
	}
}