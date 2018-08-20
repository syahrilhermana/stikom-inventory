<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 10:19
 */


Class Bootstrap
{
    private $path;
    private $class;
    private $method;
    private $args = array();

    function __construct() {
        $this->path = 'system/controllers'.DIRECTORY_SEPARATOR;
    }

    function run() {
        $uri = $_SERVER['PATH_INFO'];
        $segment = explode('/', $uri);
        $options = array();

        if(count($segment) < 2) {
            // error
        } else {
            if(count($segment) >= 2) {
                $this->class = ucfirst($segment[1]);
                $this->method = 'index';
            }

            if(count($segment) >= 3) {
                $this->method = $segment[2];
            }

            if(count($segment) >= 4) {
                for($i=0; $i<=(count($segment)-4); $i++) {
                    $options[$i] = $segment[$i+4];
                }
            }
        }

        // start reflection
        require_once $this->path.$this->class.'.php';
        $reflection = new ReflectionMethod($this->class, $this->method);
        for($i=0; $i<=(count($reflection->getParameters())-1); $i++) {
            $this->args[$i] = false;
            if($i <= (count($reflection->getParameters())-1))
                $this->args[$i] = $options[$i];
        }

        // run away
        echo call_user_func_array(array($this->class, $this->method), $this->args);
    }
}

$app = new Bootstrap();
$app->run();