<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 18/08/18
 * Time: 10:01
 */

class Main
{
    function __construct() {
        //
    }

    function index() {
        $data = array(
            'title' => 'Main'
        );

        $view = new Template();
        $view->render('users/index', $data);
    }
}