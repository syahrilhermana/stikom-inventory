<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 20/08/18
 * Time: 11:36
 */

class Auth
{
    function index() {
        $config = new Config();

        if(isset($_SESSION['user'])) {
            header('Location: '.$config->base_url().'main');
            die();
        } else {
            header('Location: '.$config->base_url().'authentication/login');
            die();
        }
    }

    function login() {
        $data = array(
            'title' => 'Sign In'
        );

        $view = new Template();
        $view->set_template('auth');
        $view->render('auth/login', $data);
    }

    function unlock() {
        //
    }

    function logout() {
        //
    }
}