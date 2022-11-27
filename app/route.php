<?php 

namespace app;

class route
{
    protected $now_path;
    protected $now_method;
    protected static $routes = [];
    protected $data = [];

    public function __construct()
    {
        $this->now_path = $_SERVER['REQUEST_URI'];
        $this->now_method = $_SERVER['REQUEST_METHOD'];
        $this->run();
    }

    public static function get($link, $path)
    {        
        self::$routes[] = ['GET', $link, $path];
    }

    public static function post($link, $path)
    {
        self::$routes[] = ['POST', $link, $path];
    }

    public function run()
    {
        foreach (self::$routes as $routes)
        {

            list($method, $link, $path) = $routes;
            $method_check = $this->now_method == $method;
            $path_check = preg_match("@^{$link}$@", $this->now_path, $params);

            if($method_check && $path_check)
            {
                $uri = explode('/', $path);
                array_shift($uri);
                list($active_modul, $active_method) = $uri;

                if($this->now_path == '/')
                {                                    
                    $module     = 'code';
                    $controller = 'codeController';
                    $method     = 'code';
                }
                else
                {
                    $module     = $active_modul;
                    $controller = $active_modul.'Controller';
                    $method     = $active_method;
                }

                if(file_exists($file = "../core/controllers/{$controller}.php"))
                {
                    if(class_exists('core\\controllers\\'.$controller))
                    {
                        $call_class = "core\\controllers\\{$controller}";
                        $class = new $call_class;

                        if(method_exists($class, $method))
                        {
                            array_shift($params);
                            return call_user_func_array([$class, $method], array_values($params));
                        }
                        else
                        {
                            echo 'error/type/method'; exit;
                        }
                    }
                    else
                    {
                        echo 'error/type/class'; exit;
                    }
                }
                else
                {
                    echo 'error/type/controller'; exit;
                }
            }
        }
        echo '404'; exit;
    }
}

