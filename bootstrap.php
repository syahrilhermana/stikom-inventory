<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 10:19
 */


Class Bootstrap
{
    private $callback;
    private $method;
    private $instance = array();

    function __construct() {
        //
    }

    function run() {
        $uri = $_SERVER['PATH_INFO'];
        $segment = explode('/', $uri);
        $instance = array();

        if(count($segment) < 2) {
            // set default controller
            $this->callback = ucfirst('Auth');
            $this->method = 'index';
        } else {
            if(count($segment) >= 2) {
                $this->callback = ucfirst($segment[1]);
                $this->method = 'index';
            }

            if(count($segment) >= 3) {
                $this->method = $segment[2];
            }

            if(count($segment) >= 4) {
                for($i=0; $i<=(count($segment)-3); $i++) {
                    $instance[$i] = $segment[$i+3];
                }
            }
        }

        try{
            // start reflection
            require_once CONTROLLER_PATH.$this->callback.'.php';

            $reflector = new ReflectionMethod($this->callback, $this->method);
            for($i=0; $i<=(count($reflector->getParameters())-1); $i++) {
                $this->instance[$i] = false;
                if($i <= (count($reflector->getParameters())-1))
                    $this->instance[$i] = $instance[$i];
            }

            // run away
            echo call_user_func_array(array($this->callback, $this->method), $this->instance);
        }catch (Exception $e){
            echo $e->getMessage();
        }catch (Error $e){
            echo $e->getMessage();
        }

    }
}


/*
 * ----------------------------------------------------------
 * RETURN THE APPLICATION
 * ----------------------------------------------------------
 *
 * This script return the application instance.
 */
    $app = new Bootstrap();
    $app->run();