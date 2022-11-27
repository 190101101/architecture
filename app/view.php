<?php 

namespace app;

class view
{
    public static function view($modulus, $dir, $method, $data = [])
    {
        if(file_exists($file = "../core/views/{$modulus}/{$dir}/{$method}.php")){
            ob_start();
            require_once $file;
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        else{
            echo 'error/type/view'; exit;
        }
    }

	public static function layout($layout, $modulus, $dir, $method, $data = [])
	{
        $data['VIEW'] = $method == NULL ?: 
            view::view($modulus, $dir, $method, (object) $data);
        require_once "../layout/{$layout}.php";
	}
}