<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 13:41
 */

class Login
{
    public function index()
    {
        $data = array(
            'title' => 'Sign In'
        );

        $view = new Template();
        $view->render('auth/login', $data);
    }
}